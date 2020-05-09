<h1>Experiencia Profesional</h1>
 
<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'expProf.store'))!!}
	
	<tr>
		<th>{!!Form::label('cargo', 'Cargo:')!!}</th>
		<td>{!!Form::text('cargo', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('empresa', 'Empresa:')!!}</th>
		<td>{!!Form::text('empresa', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('funciones', 'Funciones desarrolladas:')!!}</th>
		<td>{!!Form::textarea('funciones', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('jefe', 'Nombre de Jefe inmediato:')!!}</th>
		<td>{!!Form::text('jefe', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('telefono', 'Teléfono:')!!}</th>
		<td>{!!Form::text('telefono', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('inicio_lab', 'Fecha de inicio de labores:')!!}</th>
		<td>{!!Form::text('inicio_lab', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('fin_lab', 'Fecha de finalización de labores:')!!}</th>
		<td>{!!Form::text('fin_lab', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	
	<tr>
		<th>{!!Form::label('motivos', 'Motivos de finalización:')!!}</th>
		<td>{!!Form::text('motivos', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('logros', 'Logros:')!!}</th>
		<td>{!!Form::textarea('logros', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true)!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!} {!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
 
@if(count($formAca) ==! 0)
	@include('contCV.list_expProf')
@endif
