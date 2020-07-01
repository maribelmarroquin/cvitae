<div class="modal fade" data-backdrop="static" data-keyboard="false" id="form_acaModal{{$fa->id_form_aca}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">

		<div class="modal-header">
		  	<h5 class="modal-title" id="exampleModalLongTitle">
				<h3>Editar datos académicos nivel "{{ $fa->nivel }}".</h3>
			</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">

			@if(count($errors) > 0)
			<div class="errors alert alert-danger alert-dismissible" role="alert">
				<h5>Valide lo siguiente:</h5>
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
			</div>
			@endif
		  
			<table>
				{!! Form::model($fa, ['route' => ['formAca.update', $fa->id_form_aca], 'method' => 'PUT', 'files' => true]) !!}
				
				<tr>
					<th>{!!Form::label('nivel', '*Nivel académico:')!!}</th>
					<td>{!!Form::text('nivel', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('especialidad', 'Especialidad:')!!}</th>
					<td>{!!Form::text('especialidad', null, array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('instituto', '*Instituto:')!!}</th>
					<td>{!!Form::text('instituto', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('ano_ini', '*Año de iniciación:')!!}</th>
					<td>{!!Form::month('ano_ini', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('status', '*Estatus de Formación Académica:')!!}</th>
					<td>
						{!! Form::select('status', ['cursando' => 'Cursando Actualmente.', 'fin' => 'Completado.'], null, ['class' => 'form-control border-secondary rounded-pill', 'required']) !!}
					</td>
				</tr>
				<tr>
					<th>{!!Form::label('ano_fin', 'Año de finalización:')!!}</th>
					<td>{!!Form::month('ano_fin', null, array('class'=>'form-control border-secondary rounded-pill', 'id' => 'ano_fin1', 'maxlength'=>'50'))!!}</td>  
				</tr>
				<tr>
					<th>{!!Form::label('doc', '*Documento obtenido:')!!}</th>
					<td>{!!Form::text('doc', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('ruta_doc', 'Imagen de Documento:')!!}</th>
					<td>{!!Form::file('ruta_doc', array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'255'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('principal', '¿Mostrar en PDF?')!!}</th>
					<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary rounded', 'maxlength'=>'3'))!!}</td>
				</tr>
				<tr>
					<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
					<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary rounded', 'maxlength'=>'3'))!!}</td>
				</tr>
				<tr>
					<th>Imagen de Actual del Documento:</th>
					@if($fa->ruta_doc === null)
					<td style="color:red;">Sin imagen registrada</td>
					@else
					<td>
						<img class="id_img" src="{{asset("storage/$name_user/docs/$fa->ruta_doc")}}">
						<a class="btn btn-danger" href="formAca/{{$fa->id_form_aca}}/edit">Eliminar Imagen</a>
					</td>
					@endif
				</tr>
				<tr><td colspan="2">* Campos Obligatorios</td></tr>
				
			</table>


		</div>
		<div class="modal-footer">
			<a href="/principal?tab=form_aca" class="btn btn-secondary">Cancelar Edición</a>
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
		<th>{!!Form::label('principal', '¿Mostrar en PDF?')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
		<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
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
--}}