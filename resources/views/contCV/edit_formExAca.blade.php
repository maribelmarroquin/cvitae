@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')


@foreach ($formExAcaE as $feae)

@endforeach
<h3 align="center">Editar datos académicos del curso {{ $feae->curso }}</h3>
<table>
	{!! Form::model($feae, ['route' => ['formExAca.update', $feae->id_form_exaca], 'method' => 'PUT', 'files' => true]) !!}
	
	<tr>
		<th>{!!Form::label('curso', 'Curso, Taller o Seminario:')!!}</th>
		<td>{!! Form::select('curso', ['Curso'=>'Curso', 'Conferencias'=>'Conferencias', 'Taller'=>'Taller', 'Seminario'=>'Seminario'], null, ['class' => 'form-control border-secondary rounded-pill']) !!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('desc', 'Descripción:')!!}</th>
		<td>{!!Form::textarea('desc', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('instituto', 'Instituto:')!!}</th>
		<td>{!!Form::text('instituto', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('duración', 'Duración:')!!}</th>
		<td>{!!Form::text('duración', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('doc_ex', 'Documento Obtenido:')!!}</th>
		<td>{!!Form::text('doc_ex', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>Imagen de Documento Obtenido:</th>
		<td>{!!Form::file('ruta_docex', array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true)!!}</td>
	</tr>
	<tr>
		<th>Imagen de Actual del Documento:</th>
		<td><img class="id_img" src="{{asset("storage/$name_user/docs/$feae->ruta_docex")}}"></td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
 
@endsection
