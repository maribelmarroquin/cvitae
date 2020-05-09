<h1>FORMACIÓN ACADÉMICA</h1>
 
<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'formAca.store',
		'files'=>true))!!}
	
	<tr>
		<th>{!!Form::label('nivel', 'Nivel académico:')!!}</th>
		<td>{!!Form::text('nivel', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('especialidad', 'Especialidad:')!!}</th>
		<td>{!!Form::text('especialidad', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('instituto', 'Instituto:')!!}</th>
		<td>{!!Form::text('instituto', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ano_ini', 'Año de iniciación:')!!}</th>
		<td>{!!Form::text('ano_ini', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ano_fin', 'Año de finalización:')!!}</th>
		<td>{!!Form::text('ano_fin', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('doc', 'Documento obtenido:')!!}</th>
		<td>{!!Form::text('doc', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ruta_doc', 'Imagen de Documento Obtenido:')!!}</th>
		<td>{!!Form::file('ruta_doc', array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
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
	@include('contCV.list_formAca')
@endif
