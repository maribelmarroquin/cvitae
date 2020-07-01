<h1>Objetivo Profesional.</h1>

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
		'route'=>'objetivo.store'))!!}
	
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
		<td>* Datos obligatorios.</td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}{!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
<br><br>
 
@if(count($objProf) ==! 0)
	@include('contCV.list_objProf')
@endif
