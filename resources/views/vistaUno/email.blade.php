<h1>Contacto</h1>
<div class="form_email">
	<table>
		{!!Form::open(array(
			'method'=>'POST',
			'route'=>'emailcv.store'))!!}
		<tr>
			<th>{!!Form::label('e_name', 'Nombre del contacto:')!!}</th>
		</tr>
		<tr>
			<td>{!!Form::text('e_name', null,  array('class' => 'form-control', 'required', 'maxlength'=>'100'))!!}</td>
		</tr>
		<tr>
			<th>{!!Form::label('e_email', 'Correo electrónico:')!!}</th>
		</tr>
		<tr>
			<td>{!!Form::email('e_email', null,  array('class' => 'form-control', 'required', 'maxlength'=>'100'))!!}</td>
		</tr>
		<tr>
			<th>{!!Form::label('e_mensaje', 'Mensaje:')!!}</th>
		</tr>
		<tr>
			
			<td>{!!Form::textarea('e_mensaje', null, array('class'=>'form-control '))!!}</td>
		</tr>
		<tr>
			
			<td>{!!Form::submit('Enviar mensaje', array('class'=> 'b_email', 'required', 'maxlength'=>'1000'))!!}</td>
		</tr>
		{!!Form::close()!!}
	</table>
</div>