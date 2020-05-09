<h1>Contacto</h1>
<div class="form_email">
<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'emailcv.store'))!!}
	<tr>
		<th>{!!Form::label('e_name', 'Nombre:')!!}</th>
		<td>{!!Form::text('e_name', null,  array('class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('e_email', 'Usuario:')!!}</th>
		<td>{!!Form::email('e_email', null,  array('class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('e_mensaje', 'Mensaje:')!!}</th>
		<td>{!!Form::textarea('e_mensaje', null, array('class'=>'form-control '))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!!Form::submit('Enviar mensaje', array('class'=> 'b_email', 'required'))!!}</td>
	</tr>
	{!!Form::close()!!}
</table>
</div>