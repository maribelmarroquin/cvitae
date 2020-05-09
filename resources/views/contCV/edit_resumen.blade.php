@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')


@foreach ($resumen as $res)

@endforeach

<h3 align="center">Editar resumen "{{ $res->titulo }}"</h3>
<table>
	{!! Form::model($res, ['route' => ['principal.update', $res->id_resumen], 'method' => 'PUT']) !!}
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
		<td></td>
		<td>{!! Form::submit('Guardar Cambios', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>

@endsection