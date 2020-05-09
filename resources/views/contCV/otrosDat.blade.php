<h1>OTROS DATOS DE INTERÉS</h1>
 
<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'otros.store',
		'files'=>true))!!}
	
	<tr>
		<th>{!!Form::label('dato', 'Dato de interés:')!!}</th>
		<td>{!!Form::text('dato', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('des_dato', 'Descripción:')!!}</th>
		<td>{!!Form::textarea('des_dato', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ruta_dato', 'Imagen del dato:')!!}</th>
		<td>{!!Form::file('ruta_dato', array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
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
 
@if(count($otros) ==! 0)
	@include('contCV.list_otrosDat')
@endif
