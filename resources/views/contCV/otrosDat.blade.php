<h1>Otros Datos de Interés.</h1>

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
		'route'=>'otros.store',
		'files'=>true))!!}
	
	<tr>
		<th>{!!Form::label('dato', '*Dato de interés:')!!}</th>
		<td>{!!Form::text('dato', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'100'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('des_dato', '*Descripción:')!!}</th>
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
		<td>* Campos Obligatorios</td>
		<td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!} {!! Form::reset('Limpiar', array('class'=> 'btn btn-secondary')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>
<br><br>
 
@if(count($otros) ==! 0)
	@include('contCV.list_otrosDat')
@endif
