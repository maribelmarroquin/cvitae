<div class="modal fade" id="obj_profModal{{$op->id_obj}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  	<div class="modal-content">

			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">
					Editar objetivo "{{ $op->objetivo }}".
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
			
				<table>
					{!! Form::model($op, ['route' => ['objetivo.update', $op->id_obj], 'method' => 'PUT']) !!}
					<tr>
						<th>{!!Form::label('objetivo', '*Objetivo:')!!}</th>
						<td>{!!Form::text('objetivo', null, array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'100'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('des_obj', '*Descripción:')!!}</th>
						<td>{!!Form::textarea('des_obj', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'600'))!!}</td>
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
						<td colspan="2">* Datos obligatorios.</td>
						<td></td>
					</tr>
					
				</table>	

			</div>

			<div class="modal-footer">
				<a href="/principal?tab=obj_prof" class="btn btn-secondary">Cancelar Edición</a>
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


@foreach ($objProfE as $ope)

@endforeach
<h3 align="center">Editar objetivo "{{ $ope->objetivo }}"</h3>
<table>
	{!! Form::model($ope, ['route' => ['objetivo.update', $ope->id_obj], 'method' => 'PUT']) !!}
	<tr>
		<th>{!!Form::label('objetivo', '*Dato de interés:')!!}</th>
		<td>{!!Form::text('objetivo', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'100'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('des_obj', '*Descripción:')!!}</th>
		<td>{!!Form::textarea('des_obj', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'600'))!!}</td>
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
		<td colspan="2">* Datos obligatorios.</td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
@endsection
--}}