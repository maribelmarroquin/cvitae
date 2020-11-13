<h4>Inicio de Sesión</h4>

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'login.store'))!!}
	<tr>
		<th>{!!Form::label('email', 'Correo electrónico:', array('class' => 'label_ini'))!!}</th>
		<td>{!!Form::email('email', null,  array('placeholder'=>'ejemplo@solinfori.com', 'class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('password', 'Contraseña:', array('class' => 'label_ini'))!!}</th>
		<td>{!!Form::password('password', array('class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!!Form::submit('Iniciar Sesión', array('class'=> 'btn_submit'))!!}</td>
	</tr>
	{!!Form::close()!!}
	<tr>
		<td></td>
		<td><a class="olvide" href="password/reset">¡Olvidé mi password!</a></td>
	</tr>
</table>

{{--
<h4>Inicio de Sesión</h4>

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'login.store'))!!}
	<tr>
		<td>{!!Form::email('email', null,  array('placeholder'=>'Correo Electrónico:', 'class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<td>{!!Form::password('password', array('placeholder'=>'Contraseña:','class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<td>{!!Form::submit('Iniciar Sesión', array('class'=> 'btn_submit'))!!}</td>
	</tr>
	{!!Form::close()!!}
	<tr>
		<td><a href="password/reset">Olvidé mi password.</a></td>
	</tr>
</table>
--}}