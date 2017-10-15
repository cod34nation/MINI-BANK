@extends('template')
@section('content')

<div class="col-sm-6">
	<table class="table table-bordered table-hover">
	<tr>
		<td width="120">Nama</td>
		<td>{{$nasabah->nama_lengkap}}</td>
		<td rowspan="3"><img src="{{asset('foto/'.$nasabah->foto)}}" alt="" width="200"></td>
	</tr>
	<tr>
		<td>No Rekening</td>
		<td>{{$nasabah->no_rekening}}</td>

	</tr>
	<tr>
		<td>Alamat</td>
		<td>{{$nasabah->alamat}}</td>
	</tr>
</table>
</div>

<div class="col-sm-6">
	{{Form::open(array('url'=>'nasabah/transaksi'))}}
	{{Form::hidden('nasabah_id',$nasabah->id)}}
	<table class="table-bordered">
		
	<th colspan="2">Form Transaksi</th>
	<tr><td width="130">Jumlah</td><td>{{Form::text('jumlah',null,['class'=>'form-control','placeholder'=>'Jumalah Tabungan'])}}</td></tr>
	<tr>
		<td>Jenis Transaksi</td><td>{{Form::select('jenis_transaksi',array('debet'=>'DEBET','kredit'=>'KREDIT'),'',['class'=>'form-control'])}}</td>
	</tr>
	<tr>
		<td>{{Form::submit('Simpan Transaksi',['class'=>'btn btn-info btn-sm'])}}</td>
	</tr>


	</table>
	{{Form::close()}}

</div>

<div class="col-sm-12">
<table class="table-bordered">
	
	<tr>
<th>Jenis Transaksi</th>
<th>Jumlah</th>
<th>Operator</th>
</tr>
<tr>
	<td></td>
</tr>
{{link_to('/nasabah','kembali',['class'=>'btn btn-info'])}}

</table>

	
</div>


@stop


