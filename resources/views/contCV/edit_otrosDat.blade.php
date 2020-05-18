@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')


@foreach ($otrosE as $oe)

@endforeach
<h3 align="center">Editar datos de interés "{{ $oe->dato }}"</h3>
<table>
	{!! Form::model($oe, ['route' => ['otros.update', $oe->id_otros], 'method' => 'PUT']) !!}
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
		<th>Imagen de Actual:</th>
		<td><img class="id_img" src="{{asset("storage/$name_user/docs/$oe->ruta_dato")}}"></td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
@endsection