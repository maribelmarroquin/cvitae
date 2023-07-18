<h3>¿Quién ha consultado su CV?</h3>
@include('contCV.opciones_generales')
<table class="table">	
	<thead class="thead-dark">
		<tr>
			<th scope="col" align="center">
				<div class="form-check form-check-inline">
					<label class="form-check-label" for="inlineCheckbox1">#</label>
					<input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" onchange="seleccionarGrupo('grupoConsulta[]')">
				</div>
			</th>
			<th scope="col" align="center">Empresa:</th>
			<th scope="col" align="center">Usuario:</th>
			<th scope="col" align="center">Cantidad de consultas:</th>
			<th scope="col" align="center">Acciones:</th>
		</tr>
	</thead>
	<tbody>
	<form id="form_consCV" method="POST" action="{{ route('consulta.deleteAll') }}">
	@csrf
	@foreach ($consulta as $con)
		<tr>
			<td>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="checkbox" id="checkboxNoLabel selected" value="{{ $con->id_consulta }}" name="grupoConsulta[]">
					<label class="form-check-label" for="inlineCheckbox1">#{{ $con->id_consulta }}</label>
				</div>
			</td>
			<td>{{ $con->empresa }}</td>
			<td>{{ $con->user_cons }}</td>
			<td>{{ $con->cont }}</td>
			<td>		
				
				<a href="consulta/deleteOne/{{$con->id_consulta}}" class="btn btn-danger" title="Eliminar">Eliminar</a>
			
			</td>
		</tr>
	@endforeach
	</form>
		
	
	<tr>
		<td colspan="4">{{ $consulta->appends(['tab' => 'consulta'])->links() }}</td>
	</tr>
	</tbody>
</table>
