<h1>Formación Extra-Académica.</h1>

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
		'route'=>'formExAca.store',
		'files'=>true))!!}
	
	<tr>
		<th>{!!Form::label('curso', '*Curso, Taller o Seminario:')!!}</th>
		{{-- <td>{!! Form::select('curso', ['Curso'=>'Curso', 'Conferencias'=>'Conferencias', 'Taller'=>'Taller', 'Seminario'=>'Seminario'], null, ['class' => 'form-control border-secondary rounded-pill']) !!}</td> --}}
		<td>{!! Form::select('curso', $opciones, null, ['class' => 'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50']) !!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('desc', '*Descripción:')!!}</th>
		<td>{!!Form::textarea('desc', null, array('size' => '50x4', 'class'=>'form-control border-secondary rounded', 'required', 'maxlength'=>'200'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('instituto', '*Instituto:')!!}</th>
		<td>{!!Form::text('instituto', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('duración', '*Duración:')!!}</th>
		<td>{!!Form::text('duración', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('doc_ex', '*Documento Obtenido:')!!}</th>
		<td>{!!Form::text('doc_ex', null, array('class'=>'form-control border-secondary rounded-pill', 'required', 'maxlength'=>'50'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('ruta_docex', 'Imagen de Documento Obtenido:')!!}</th>
		<td>{!!Form::file('ruta_docex', array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'255'))!!}</td>
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

@if(count($formExAca) ==! 0)
	@include('contCV.list_formExAca')
@endif
