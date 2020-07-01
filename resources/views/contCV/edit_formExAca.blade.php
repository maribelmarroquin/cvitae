  <!-- Modal -->
  <div class="modal fade" data-backdrop="static" data-keyboard="false" id="form_exacaModal{{$fe->id_form_exaca}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLongTitle">
			Editar datos de {{ $fe->curso }} {{ $fe->desc }}.
		  </h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  
			<table>
				{!! Form::model($fe, ['route' => ['formExAca.update', $fe->id_form_exaca], 'method' => 'PUT', 'files' => true]) !!}
				
				<tr>
					<th>{!!Form::label('curso', '*Curso, Taller o Seminario:')!!}</th>
					<td>{!! Form::select('curso', ['Curso'=>'Curso', 'Conferencias'=>'Conferencias', 'Taller'=>'Taller', 'Seminario'=>'Seminario'], null, ['class' => 'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50']) !!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('desc', '*Descripción:')!!}</th>
					<td>{!!Form::textarea('desc', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'200'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('instituto', '*Instituto:')!!}</th>
					<td>{!!Form::text('instituto', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('duración', '*Duración:')!!}</th>
					<td>{!!Form::text('duración', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('doc_ex', '*Documento Obtenido:')!!}</th>
					<td>{!!Form::text('doc_ex', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>Imagen Actual del Documento:</th>
					@if($fe->ruta_docex === null)
					<td style="color:red;">Sin imagen registrada</td>
					@else
					<td>
						<img class="id_img" src="{{asset("storage/$name_user/docs/$fe->ruta_docex")}}">
						<a class="btn btn-danger" href="formExAca/{{$fe->id_form_exaca}}/edit">Eliminar Imagen</a>
					</td>
					@endif
				</tr>
				<tr>
					<th>Imagen de Documento Obtenido:</th>
					<td>{!!Form::file('ruta_docex', array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'255'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
					<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary rounded', 'maxlength'=>'3'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
					<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary rounded', 'maxlength'=>'3'))!!}</td>
				</tr>
				<tr><td colspan="2">* Campos Obligatorios</td></tr>				
			</table>

		</div>
		<div class="modal-footer">
			<a href="/principal?tab=form_exaca" class="btn btn-secondary">Cancelar Edición</a>
		  {!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}
		</div>
		{!!Form::close()!!}
	  </div>
	</div>
  </div>

{{--
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
--}}