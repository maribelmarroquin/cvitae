<h1>Experiencia Profesional.</h1>

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
		'route'=>'expProf.store'))!!}
	
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
		<td>{!!Form::month('inicio_lab', "{{ \Carbon\Carbon::createFromDate()->format('Y-m')}}", array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('fin_lab', '*Fecha de finalización de labores:')!!}</th>
		<td>
			<br>
			{!! Form::select('status_fin', ['laborando' => 'Laborando Actualmente.', 'fin' => 'Insertar fecha de finalización.'], null, ['class' => 'form-control border-secondary rounded-pill', 'onchange'=>'carglab(this);', 'required']) !!}
			{!!Form::month('fin_lab', "{{ \Carbon\Carbon::createFromDate()->format('Y-m')}}", array('class'=>'form-control border-secondary rounded-pill', 'id' => 'fin_lab1', 'required', 'disabled', 'maxlength'=>'50'))!!}  
			<br>
		</td>
	</tr>
	{{--
	<tr>
		<th>{!!Form::label('fin_lab', 'Fecha de finalización de labores:')!!}</th>
		<td>{!!Form::text('fin_lab', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	--}}
	<tr>
		<th>{!!Form::label('motivos', '*Motivos de finalización:')!!}</th>
		<td>{!!Form::text('motivos', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('logros', '*Logros:')!!}</th>
		<td>{!!Form::textarea('logros', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'500'))!!}</td>
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
		<td>* Campos Obligatorios</td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!} {!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
<br><br>
 
@if(count($formAca) ==! 0)
	@include('contCV.list_expProf')
@endif
