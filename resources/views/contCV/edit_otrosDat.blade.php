<div class="modal fade" id="otr_datModal{{$o->id_otros}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  	<div class="modal-content">
			
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">
					Editar datos de interés "{{ $o->dato }}".
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
			
				<table>
					{!! Form::model($o, ['route' => ['otros.update', $o->id_otros], 'method' => 'PUT', 'files' => true]) !!}
					<tr>
						<th>{!!Form::label('dato', 'Dato de interés:')!!}</th>
						<td>{!!Form::text('dato', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'100'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('des_dato', 'Descripción:')!!}</th>
						<td>{!!Form::textarea('des_dato', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'255'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('ruta_dato', 'Imagen del dato:')!!}</th>
						<td>{!!Form::file('ruta_dato', array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'255'))!!}</td>
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
						@if($o->ruta_dato === null)
						<td style="color:red;">Sin imagen registrada</td>
						@else
						<td>
							<img class="id_img" src="{{asset("storage/$name_user/docs/$o->ruta_dato")}}">
							<a class="btn btn-danger" href="otros/{{$o->id_otros}}/edit">Eliminar Imagen</a>
						</td>
						@endif
					</tr>
					<tr><td colspan="2">* Campos Obligatorios</td></tr>
					
				</table>

			</div>
			
			<div class="modal-footer">
				<a href="/principal?tab=otr_dat" class="btn btn-secondary">Cancelar Edición</a>
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


@foreach ($otrosE as $oe)

@endforeach
<h3 align="center">Editar datos de interés "{{ $oe->dato }}"</h3>
<table>
	{!! Form::model($oe, ['route' => ['otros.update', $oe->id_otros], 'method' => 'PUT', 'files' => true]) !!}
	<tr>
		<th>{!!Form::label('dato', 'Dato de interés:')!!}</th>
		<td>{!!Form::text('dato', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'100'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('des_dato', 'Descripción:')!!}</th>
		<td>{!!Form::textarea('des_dato', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'255'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ruta_dato', 'Imagen del dato:')!!}</th>
		<td>{!!Form::file('ruta_dato', array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'255'))!!}</td>
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
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	
	{!!Form::close()!!}
</table>
@endsection
--}}