<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exp_profModal{{$ep->id_exprof}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
	  	<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">
					Editar experiencia profesional "{{ $ep->cargo }}".
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<table>
					{!! Form::model($ep, ['route' => ['expProf.update', $ep->id_exprof], 'method' => 'PUT']) !!}
					<tr>
						<th>{!!Form::label('cargo', '*Cargo:')!!}</th>
						<td>{!!Form::text('cargo', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('empresa', '*Empresa:')!!}</th>
						<td>{!!Form::text('empresa', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('funciones', '*Funciones desarrolladas:')!!}</th>
						<td>{!!Form::textarea('funciones', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'500'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('jefe', '*Nombre de Jefe inmediato:')!!}</th>
						<td>{!!Form::text('jefe', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('telefono', 'Teléfono:')!!}</th>
						<td>{!!Form::text('telefono', null, array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'13'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('inicio_lab', '*Fecha de inicio de labores:')!!}</th>
						<td>{!!Form::month('inicio_lab', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('status_fin', '*Estatus de Formación Académica:')!!}</th>
						<td>
							{!! Form::select('status_fin', ['laborando' => 'Laborando Actualmente.', 'fin' => 'Insertar fecha de finalización.'], null, ['class' => 'form-control border-secondary rounded-pill', 'required']) !!}
						</td>
					</tr>
					<tr>
						<th>{!!Form::label('fin_lab', 'Fecha de finalización de labores:')!!}</th>
						<td>{!!Form::month('fin_lab', null, array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'50'))!!}</td>
					</tr>
					
					<tr>
						<th>{!!Form::label('motivos', '*Motivos de finalización:')!!}</th>
						<td>{!!Form::text('motivos', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('logros', '*Logros:')!!}</th>
						<td>{!!Form::textarea('logros', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'500'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
						<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
						<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
					</tr>
					<tr>
						<td colspan=2>* Campos Obligatorios</td>
					</tr>
					
				</table>

			</div>
			<div class="modal-footer">
				<a href="/principal?tab=exp_prof" class="btn btn-secondary">Cancelar Edición</a>
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


@foreach ($expProfE as $epe)

@endforeach
<h3 align="center">Editar experiencia profesional "{{ $epe->cargo }}".</h3>
<table>
	{!! Form::model($epe, ['route' => ['expProf.update', $epe->id_exprof], 'method' => 'PUT']) !!}
	<tr>
		<th>{!!Form::label('cargo', '*Cargo:')!!}</th>
		<td>{!!Form::text('cargo', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('empresa', '*Empresa:')!!}</th>
		<td>{!!Form::text('empresa', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('funciones', '*Funciones desarrolladas:')!!}</th>
		<td>{!!Form::textarea('funciones', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'500'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('jefe', '*Nombre de Jefe inmediato:')!!}</th>
		<td>{!!Form::text('jefe', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('telefono', 'Teléfono:')!!}</th>
		<td>{!!Form::text('telefono', null, array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'13'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('inicio_lab', '*Fecha de inicio de labores:')!!}</th>
		<td>{!!Form::text('inicio_lab', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('status_fin', '*Estatus de Formación Académica:')!!}</th>
		<td>
			{!! Form::select('status_fin', ['laborando' => 'Laborando Actualmente.', 'fin' => 'Insertar fecha de finalización.'], null, ['class' => 'form-control border-secondary rounded-pill', 'required']) !!}
		</td>
	</tr>
	<tr>
		<th>{!!Form::label('fin_lab', 'Fecha de finalización de labores:')!!}</th>
		<td>{!!Form::text('fin_lab', null, array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'50'))!!}</td>
	</tr>
	
	<tr>
		<th>{!!Form::label('motivos', '*Motivos de finalización:')!!}</th>
		<td>{!!Form::text('motivos', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('logros', '*Logros:')!!}</th>
		<td>{!!Form::textarea('logros', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'500'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
		<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
@endsection
--}}