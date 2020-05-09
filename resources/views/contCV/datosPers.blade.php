<h1>DATOS PERSONALES</h1>

@if(count($datosP) ==! 0)
	@include('contCV.edit_datosPers')
@else

<table>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'datPer.store',
		'files'=>true))!!}
	<tr>
		<th>{!!Form::label('ruta', 'Foto ID:')!!}</th>
		<td>{!!Form::file('ruta', array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('nombre', 'Nombre:')!!}</th>
		<td>{!!Form::text('nombre', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('profesion', 'Profesión:')!!}</th>
		<td>{!!Form::text('profesion', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('fecha_nac', 'Edad:')!!}</th>
		<td>{!!Form::number('fecha_nac', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
		<td> años.</td>
	</tr>
	<tr>
		<th>{!!Form::label('lugar_nac', 'Lugar de Nacimiento:')!!}</th>
		<td>{!!Form::text('lugar_nac', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('edo_civil', 'Estado Civil:')!!}</th>
		<td>{!!Form::text('edo_civil', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('direccion', 'Dirección:')!!}</th>
		<td>{!!Form::text('direccion', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('telefono', 'Teléfono:')!!}</th>
		<td>{!!Form::text('telefono', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('email_u', 'Email:')!!}</th>
		<td>{!!Form::text('email_u', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('sitio', 'Sitio Web:')!!}</th>
		<td>{!!Form::text('sitio', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
		<td>{!! Form::hidden('fk_user_dp', Auth::user()->id ) !!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}
			{!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>

@endif