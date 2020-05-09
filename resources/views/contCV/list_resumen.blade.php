<h3>DATOS REGISTRADOS</h3>
@foreach ($resumen as $re)
<div class="table-responsive-md">
<table class="table">	
	<tr>
		<th class="table-dark">Título:</th>
		<td>{{ $re->titulo }}</td>
	</tr>
	<tr>
		<th class="table-dark">Resumen:</th>
		<td>{{ $re->resumen }}</td>
	</tr>
	<tr>
		<th class="table-dark">Acciones:</th>
		<td><a class="btn btn-primary" href="javascript:window.open('principal/{{$re->id_resumen}}','Editar Conocimientos informáticos e idiomas.','width=628,height=550,left=50,top=50,toolbar=yes');void 0">Editar</a>{!!Form::open(['route'=> ['principal.destroy',$re->id_resumen],'method'=>'DELETE'])!!}{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}
		</td>
	</tr>
	<tr>
		<th class="table-dark">En PDF:</th>
		<td>{{$re->principal}}</td>
	</tr>
</table>
</div>
@endforeach