<h4>Nuevo Registro</h4>

@if(count($errors) > 0)
	<div class="errors alert alert-danger alert-dismissible">
		<h5>Valide lo siguiente:</h5>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'store'))!!}
	<tr>
		<th>{!!Form::label('usuario', 'Usuario:', array('class' => 'label_ini'))!!}</th>
		<td>{!!Form::text('usuario', null, array('placeholder'=>'FacilCV', 'class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('email', 'Correo electrónico:', array('class' => 'label_ini'))!!}</th>
		<td>{!!Form::email('email', null, array('placeholder'=>'ejemplo@facilcv.com', 'class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('psw', 'Contraseña:', array('class' => 'label_ini'))!!}</th>
		<td>{!!Form::password('psw', array('class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('pswtwo', 'Reingresa la contraseña:', array('class' => 'label_ini'))!!}</th>
		<td>{!!Form::password('pswtwo', array('class' => 'campo', 'required'))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!!Form::submit('Registrar', array('class'=> 'btn_submit'))!!}</td>
	</tr>
	{!!Form::close()!!}
</table>