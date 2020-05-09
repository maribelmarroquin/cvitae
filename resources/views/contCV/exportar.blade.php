<h1>Exportar Curriculum Vitae</h1>

<h5>En este apartado podrá imprimir un resumen de lo más escencial de su CV en formato pdf para su fácil manejo.
</h5>



<table class="table">
	<tr>
		<th>Generar PDF sin password</th><th colspan="3">Generar PDF con password</th>
	</tr>
	
	<tr>
		<td><a href="pdfUno" target="_blank" class="btn btn-outline-secondary" role="button">Generar PDF diseño 1</a></td>
	{!!Form::open(array(
		'method'=>'POST',
		'route'=>'pdfUno.store',
		'target'=>'_blank'))!!}
		<th>{!!Form::label('pass', 'Contraseña de consulta:')!!}</th>
		<td>{!!Form::text('pass', null, array('class'=>'form-control border-secondary rounded-pill', 'required'))!!}</td>
		<td>{!! Form::submit('Generar PDF con password', array('class'=> 'btn btn-outline-secondary')) !!}</td>
	{!!Form::close()!!}
	</tr>
	<tr>
		<td><a href="construccion" class="btn btn-outline-secondary" role="button">Generar PDF diseño 2</a></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td><a href="construccion" class="btn btn-outline-secondary" role="button">Generar PDF diseño 3</a></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>

