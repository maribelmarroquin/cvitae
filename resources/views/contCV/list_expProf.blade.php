<h3>DATOS REGISTRADOS</h3>
@foreach ($expProf as $ep)
<div class="table-responsive-md">
<table class="table">	
	<tr>
		<th class="table-dark" style="width: 20%;">Cargo:</th>
		<td>{{ $ep->cargo }}</td>
	</tr>
	<tr>
		<th class="table-dark">Empresa:</th>
		<td>{{ $ep->empresa }}</td>
	</tr>
	<tr>
		<th class="table-dark">Funciones:</th>
		<td>{{ $ep->funciones }}</td>
	</tr>
	<tr>
		<th class="table-dark">Jefe:</th>
		<td>{{ $ep->jefe }}</td>
	</tr>
	<tr>
		<th class="table-dark">Teléfono:</th>
		<td>{{ $ep->telefono }}</td>
	</tr>
	<tr>
		<th class="table-dark">Fecha de inicio de labores:</th>
		<td>{{ $ep->inicio_lab }}</td>
	</tr>
	<tr>
		<th class="table-dark">Fecha de finalización de labores:</th>
		<td>{{ $ep->fin_lab }}</td>
	</tr>
	<tr>
		<th class="table-dark">Motivos de finalización:</th>
		<td>{{ $ep->motivos }}</td>
	</tr>
	<tr>
		<th class="table-dark">Logros:</th>
		<td>{{ $ep->logros }}</td>
	</tr>
	<tr>
		<th class="table-dark">Mostrar en PDF:</th>
		<td>{{ $ep->principal }}</td>
	</tr>
	<tr>
		<th class="table-dark">Acciones:</th>
		<td><a class="btn btn-primary" href="javascript:window.open('expProf/{{$ep->id_exprof}}','Editar Conocimientos informáticos e idiomas.','width=628,height=550,left=50,top=50,toolbar=yes');void 0">Editar</a>{!!Form::open(['route'=> ['expProf.destroy',$ep->id_exprof],'method'=>'DELETE'])!!}{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}
		</td>
	</tr>
</table>
</div>
@endforeach