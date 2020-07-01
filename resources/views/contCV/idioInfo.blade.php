<h1>Conocimientos.</h1>

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
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'idioInfo.store'))!!}
	
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
		<td>

			<select name="clasificacion" class="custom-select form-control border-secondary" id="inputGroupSelect04">
				<option selected>Seleccionar opción</option>
				@foreach ($clas_ii as $ci)
				<option value="{{$ci->id_clas_conocimientos}}">{{$ci->clasificacion}}</option>
				@endforeach
			</select>

		</td>
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
		<td>* Campos Obligatorios</td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!} {!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
	<tr>
		<td>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clas_idioInfo">
				Agregar clasificación
			</button>
			@include('contCV.clas_idioInfo')
		</td>
	</tr>
</table>
<br><br>
@if(count($idioInfo) ==! 0)
	@include('contCV.list_idioInfo')
@endif
