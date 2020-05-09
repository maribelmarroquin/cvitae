@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')


@foreach ($objProfE as $ope)

@endforeach
<h3 align="center">Editar objetivo "{{ $ope->objetivo }}"</h3>
<table>
	{!! Form::model($ope, ['route' => ['objetivo.update', $ope->id_obj], 'method' => 'PUT']) !!}
	<tr>
		<th>{!!Form::label('objetivo', 'Dato de interés:')!!}</th>
		<td>{!!Form::text('objetivo', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('des_obj', 'Descripción:')!!}</th>
		<td>{!!Form::textarea('des_obj', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
@endsection