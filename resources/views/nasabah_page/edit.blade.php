@extends('template')

@section('content')
{{Html::ul($errors->all(),['class'=>'alert alert-danger'])}}
<table class="table table-bordered">
	{!!Form::model($nasabah,array('url'=>'nasabah/'.$nasabah->id,'method'=>'patch'))!!}
	@include('nasabah_page.form')
	<tr>
		<td>{!!Form::submit('Update',['class'=>'btn btn-danger'])!!}
			{!!link_to('nasabah','Kembali',['class'=>'btn btn-danger'])!!}
		</td>
		

	</tr>
{!!Form::close()!!}
</table>

@stop