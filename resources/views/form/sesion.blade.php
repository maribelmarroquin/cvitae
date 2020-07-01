<h1>INICIO DE SESIÓN</h1>

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'login.store'))!!}
	<tr>
		<th>{!!Form::label('email', 'Correo electrónico:')!!}</th>
		<td>{!!Form::email('email', null,  array('placeholder'=>'ejemplo@facilcv.com', 'class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('password', 'Contraseña:')!!}</th>
		<td>{!!Form::password('password', array('class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!!Form::submit('Iniciar Sesión', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;'))!!}</td>
	</tr>
	{!!Form::close()!!}
	<tr>
		<td></td>
		<td><a href="password/reset">Olvidé mi password.</a></td>
	</tr>
</table>