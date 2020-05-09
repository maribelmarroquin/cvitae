<h1>CONSULTAR CV</h1>

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'consulta.store'))!!}
	<tr>
		<th>{!!Form::label('user_cons', 'Usuario:')!!}</th>
		<td>{!!Form::text('user_cons', null,  array('class' => 'form-control', 'required'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('password', 'Clave:')!!}</th>
		<td>{!!Form::password('password', array('class' => 'form-control'))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!!Form::submit('Ingresar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;', 'required'))!!}</td>
	</tr>
	{!!Form::close()!!}
</table>