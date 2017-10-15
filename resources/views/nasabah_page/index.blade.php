@extends('template')

@section('content')

{{link_to('nasabah/create','Tambah Data',['class'=>'btn btn-danger'])}}
<hr>	
{{Form::open(array('url'=>'nasabah/search'))}}
{{Form::text('keyword','',['class'=>'form-control', 'placeholder'=>'Masukkan alamat nasabah'])}}
{{Form::submit('Cari',['class'=>'btn btn-danger btn-sm'])}}
{{Form::close()}}
<hr>
<table class="table table-hover">
	<th>No</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>No Rekening</th>
	<th>Action</th>
    @php
    	{{$no=1;}}
    @endphp

	@foreach($nasabahs as $n)
	
	
		<tr>
			<td>{{$no++}}</td>
			<td>{{$n->nama_lengkap}}</td>
			<td>{{$n->alamat}}</td>
			<td>{{$n->no_rekening}}</td>
			<td>{{link_to('nasabah/'.$n->id.'/edit','Edit',['class'=>'btn btn-warning'])}}

				{{link_to('nasabah/'.$n->id,'Detail',['class'=>'btn btn-info'])}}


				{{Form::open(array('method'=>'delete','url'=> 'nasabah/'.$n->id))}}
				{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
				{{Form::hidden('delete','Delete')}}
			</td>
		</tr>


	@endforeach

</table>
{!! $nasabahs->render() !!}
@stop