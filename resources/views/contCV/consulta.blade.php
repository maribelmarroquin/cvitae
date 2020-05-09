<h3>¿Quién ha consultado su CV?</h3>
<table class="table">	
	<thead class="thead-dark">
		<tr>
			<th scope="col" align="center">Empresa:</th>
			<th scope="col" align="center">Usuario:</th>
			<th scope="col" align="center">Cantidad de consultas:</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($consulta as $con)
		<tr>
			<td> </td>
			<td>{{ $con->user_cons }}</td>
			<td>{{ $con->cont }}</td>
			
		</tr>
	@endforeach
	</tbody>
</table>