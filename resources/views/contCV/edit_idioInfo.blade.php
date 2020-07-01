<!-- Modal -->
<div class="modal fade" id="idi_inModal{{$ii->id_idinfo}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  	<div class="modal-content">
			<div class="modal-header">
		  		<h5 class="modal-title" id="exampleModalLongTitle">
					Editar conocimiento en {{ $ii->idi_info }}.
				</h5>
		  		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		  
				<table>
					{!! Form::model($ii, ['route' => ['idioInfo.update', $ii->id_idinfo], 'method' => 'PUT']) !!}
					<tr>
						<th>{!!Form::label('idi_info', '*Conocimiento:')!!}</th>
						<td>{!!Form::text('idi_info', null, array('class'=>'form-control border-secondary', 'required', 'maxlength'=>'100'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('nivel', '*Nivel:', array('for'=>"validationDefaultNivel"))!!}</th>
						<td>
							<div class="input-group">	
								{!!Form::number('nivel', substr($ii->nivel, 0, -1), array('class'=>'form-control border-secondary ', 'required', 'max'=>'100', 'min'=>'1', 'aria-describedby'=>"inputGroupPrepend2", 'id'=>"validationDefaultNivel"))!!}
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend2">%</span>
								</div>
							</div>
						</td>
					</tr>
					<th>{!!Form::label('clasificacion', '*Clasificación:')!!}</th>
					<td>

						<select name="clasificacion" class="custom-select form-control border-secondary" id="inputGroupSelect04">
							<option selected>{{$ii->clasificacion}}</option>
							@foreach ($clas_ii as $ci)
							<option value="{{$ci->id_clas_conocimientos}}">{{$ci->clasificacion}}</option>
							@endforeach
						</select>
			
					</td>
					<tr>
						<th>{!!Form::label('principal', '¿Mostrar en PDF?')!!}</th>
						<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary', 'maxlength'=>'3'))!!}</td>
					</tr>
					<tr>
						<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
						<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary', 'maxlength'=>'3'))!!}</td>
					</tr>
					<tr>
						<td>* Campos Obligatorios</td>
						<td></td>
					</tr>
					
				</table>

			</div>
			<div class="modal-footer">
				<a href="/principal?tab=idi_in" class="btn btn-secondary">Cancelar Edición</a>
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


@foreach ($idioInfoE as $iie)

@endforeach
<h3>Editar conocimiento en {{ $iie->idi_info }}.</h3>
<table>
	{!! Form::model($iie, ['route' => ['idioInfo.update', $iie->id_idinfo], 'method' => 'PUT']) !!}
	<tr>
		<th>{!!Form::label('idi_info', '*Conocimiento:')!!}</th>
		<td>{!!Form::text('idi_info', null, array('class'=>'form-control border-secondary', 'required', 'maxlength'=>'100'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('nivel', '*Nivel:', array('for'=>"validationDefaultNivel"))!!}</th>
		<td>
			<div class="input-group">	
				{!!Form::number('nivel', null, array('class'=>'form-control border-secondary ', 'required', 'max'=>'100', 'min'=>'1', 'aria-describedby'=>"inputGroupPrepend2", 'id'=>"validationDefaultNivel"))!!}
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupPrepend2">%</span>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<th>{!!Form::label('clasificacion', '*Clasificación:')!!}</th>
		<td>{!!Form::text('clasificacion', null, array('class'=>'form-control border-secondary', 'required', 'maxlength'=>'10'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', '¿Mostrar en PDF?')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary', 'maxlength'=>'3'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
		<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary', 'maxlength'=>'3'))!!}</td>
	</tr>
	<tr>
		<<td>* Campos Obligatorios</td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
@endsection
--}}