<h1>REGISTRO DE NUEVO USUARIO</h1>

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'store'))!!}
	<tr>
		<th>{!!Form::label('usuario', 'Usuario:')!!}</th>
		<td>{!!Form::text('usuario', null, array('placeholder'=>'FacilCV', 'class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('email', 'Correo electrónico:')!!}</th>
		<td>{!!Form::email('email', null, array('placeholder'=>'ejemplo@facilcv.com', 'class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('psw', 'Contraseña:')!!}</th>
		<td>{!!Form::password('psw', array('class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('pswtwo', 'Reingresa la contraseña:')!!}</th>
		<td>{!!Form::password('pswtwo', array('class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!!Form::submit('Registrar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;'))!!}</td>
	</tr>
	{!!Form::close()!!}
</table>