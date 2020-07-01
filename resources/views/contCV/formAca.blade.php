<h1>Formación Académica.</h1>

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
		'route'=>'formAca.store',
		'files'=>true))!!}
	
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
		<td>{!!Form::month('ano_ini', "{{ \Carbon\Carbon::createFromDate()->format('Y-m')}}", array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ano_fin', '*Año de finalización:')!!}</th>
		<td>
			<br>
			{!! Form::select('status', ['cursando' => 'Cursando Actualmente.', 'fin' => 'Insertar año de finalización.'], null, ['class' => 'form-control border-secondary rounded-pill', 'onchange'=>'carg(this);']) !!}
			{!!Form::month('ano_fin', "{{ \Carbon\Carbon::createFromDate()->format('Y-m')}}", array('class'=>'form-control border-secondary rounded-pill', 'id' => 'ano_fin1', 'required', 'disabled', 'maxlength'=>'50'))!!}  
			<br>
		</td>
	</tr>
	<tr>
		<th>{!!Form::label('doc', '*Documento obtenido:')!!}</th>
		<td>{!!Form::text('doc', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ruta_doc', 'Imagen de Documento Obtenido:')!!}</th>
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
		<td>* Campos Obligatorios</td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!} {!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
<br><br>
@if(count($formAca) ==! 0)
	@include('contCV.list_formAca')
@endif
