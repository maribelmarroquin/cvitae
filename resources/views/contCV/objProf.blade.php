<h1>EXPERIENCIA PROFESIONAL</h1>
 
<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'objetivo.store'))!!}
	
	<tr>
		<th>{!!Form::label('objetivo', 'Dato de interés:')!!}</th>
		<td>{!!Form::text('objetivo', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('des_obj', 'Descripción:')!!}</th>
		<td>{!!Form::textarea('des_obj', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<td>{!! Form::hidden('fk_user_op', Auth::user()->id ) !!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}{!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
 
@if(count($objProf) ==! 0)
	@include('contCV.list_objProf')
@endif
