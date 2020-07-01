<h3>¿Quién ha consultado su CV?</h3>
<table class="table">	
	<thead class="thead-dark">
		<tr>
			<th scope="col" align="center">Empresa:</th>
			<th scope="col" align="center">Usuario:</th>
			<th scope="col" align="center">Cantidad de consultas:</th>
			<th scope="col" align="center">Acciones:</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($consulta as $con)
		<tr>
			<td>{{ $con->empresa }}</td>
			<td>{{ $con->user_cons }}</td>
			<td>{{ $con->cont }}</td>
			<td>		
				{!!Form::open(['route'=> ['consulta.destroy',$con->id_consulta],'method'=>'DELETE'])!!}{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}
			</td>
		</tr>
	@endforeach
	<tr>
		<td colspan="4" >{{ $consulta->appends(['tab'=>'consulta'])->links() }}</td>
	</tr>
	</tbody>
</table>