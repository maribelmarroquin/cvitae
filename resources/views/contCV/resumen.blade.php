<h1>Resumen Profesional.</h1>

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
		'route'=>'principal.store'))!!}
	<tr>
		<th>{!!Form::label('titulo', '*Título:')!!}</th>
		<td>{!!Form::text('titulo', null, array('class'=>'form-control border-secondary', 'required', 'maxlength'=>'80'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('resumen', '*Resumen:')!!}</th>
		<td>{!!Form::textarea('resumen', null, array('class'=>'form-control border-secondary', 'required', 'maxlength'=>'600'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', '¿Mostrar en PDF?')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
		<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr><td colspan="2">* Campos Obligatorios</td></tr>
	<tr>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
		<td>{!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>

<br><br>

@if(count($resumen) ==! 0)
	@include('contCV.list_resumen')
@endif