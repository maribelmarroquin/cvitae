@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')


@foreach ($idioInfoE as $iie)

@endforeach
<h3 align="center">Editar datos académicos nivel {{ $iie->idi_info }}</h3>
<table>
	{!! Form::model($iie, ['route' => ['idioInfo.update', $iie->id_idinfo], 'method' => 'PUT']) !!}
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
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
@endsection