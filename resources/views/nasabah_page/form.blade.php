<tr>
		<td>No rekening</td>
		<td>{!!Form::text('no_rekening',null,['class'=>'form-controll'])!!}</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td> {!!Form::text('nama_lengkap',null,['class'=>'form-controll'])!!}</td>
	</tr>
	
	<tr>
		<td>Alamat</td>
		<td>{!!Form::textarea('alamat',null,['class'=>'form-controll'])!!}</td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>{!!Form::file('foto',null,['class'=>'form-controll'])!!}</td>
	</tr>