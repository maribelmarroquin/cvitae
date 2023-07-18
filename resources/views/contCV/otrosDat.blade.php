<h1>Otros Datos de Interés.</h1>

@if($errors->any())
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
	<form method="POST" action="{{ route('otros.store') }}" enctype="multipart/form-data">
		@csrf
	
		<tr>
			<th><label for="dato">*Dato de interés:</label></th>
			<td><input type="text" name="dato" class="form-control border-secondary rounded-pill" required maxlength="100"></td>
		</tr>
		<tr>
			<th><label for="des_dato">*Descripción:</label></th>
			<td><textarea name="des_dato" rows="4" class="form-control border-secondary rounded" required maxlength="255"></textarea></td>
		</tr>
		<tr>
			<th><label for="ruta_dato">Imagen del dato:</label></th>
			<td><input type="file" name="ruta_dato" class="form-control border-secondary rounded-pill" maxlength="255"></td>
		</tr>
		<tr>
			<th><label for="principal">¿Mostrar en PDF?</label></th>
			<td><input type="checkbox" name="principal" value="yes" checked class="form-control border-secondary rounded" maxlength="3"></td>
		</tr>
		<tr>
			<th><label for="principal_vista">¿Mostrar en consulta web?</label></th>
			<td><input type="checkbox" name="principal_vista" value="yes" checked class="form-control border-secondary rounded" maxlength="3"></td>
		</tr>
		<tr>
			<td>* Campos Obligatorios</td>
			<td>
				<button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
				<button type="reset" class="btn btn-secondary">Limpiar</button>
			</td>
		</tr>
	</form>
</table>
<br><br>
 
@if(count($otros) !== 0)
	@include('contCV.list_otrosDat')
@endif
