@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')


@foreach ($formAcaE as $fae)

@endforeach
<h3 align="center">Editar datos académicos nivel {{ $fae->nivel }}</h3>
<table>
	{!! Form::model($fae, ['route' => ['formAca.update', $fae->id_form_aca], 'method' => 'PUT', 'files' => true]) !!}
	
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
		<th>{!!Form::label('ruta_doc', 'Imagen de Documento:')!!}</th>
		<td>{!!Form::file('ruta_doc', array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true)!!}</td>
	</tr>
	<tr>
		<th>Imagen de Actual del Documento:</th>
		<td><img class="id_img" src="{{asset("storage/$name_user/docs/$fae->ruta_doc")}}"></td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
@endsection