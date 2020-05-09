<h1>RESUMEN PROFESIONAL</h1>

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'principal.store'))!!}
	<tr>
		<th>{!!Form::label('titulo', 'Título:')!!}</th>
		<td>{!!Form::text('titulo', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('resumen', 'Resumen:')!!}</th>
		<td>{!!Form::textarea('resumen', null, array('class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true)!!}</td>
	</tr>
	<tr>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
		<td>{!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>

@if(count($resumen) ==! 0)
	@include('contCV.list_resumen')
@endif