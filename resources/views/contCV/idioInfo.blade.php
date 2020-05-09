<h1>IDIOMAS E INFORMÁTICA</h1>
 
<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'idioInfo.store'))!!}
	
	<tr>
		<th>{!!Form::label('idi_info', 'Conocimiento Informático o Idioma:')!!}</th>
		<td>{!!Form::text('idi_info', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('nivel', 'Nivel:')!!}</th>
		<td>{!!Form::text('nivel', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('clasificacion', 'Clasificación:')!!}</th>
		<td>{!!Form::text('clasificacion', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
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

@if(count($idioInfo) ==! 0)
	@include('contCV.list_idioInfo')
@endif
