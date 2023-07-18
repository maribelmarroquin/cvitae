<h1>Formación Académica.</h1>

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
	<form method="POST" action="{{ route('formAca.store') }}" enctype="multipart/form-data">
		@csrf
	
		<tr>
			<th><label for="nivel">*Nivel académico:</label></th>
			<td><input type="text" name="nivel" id="nivel" class="form-control border-secondary rounded-pill" required maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="especialidad">Especialidad:</label></th>
			<td><input type="text" name="especialidad" id="especialidad" class="form-control border-secondary rounded-pill" maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="instituto">*Instituto:</label></th>
			<td><input type="text" name="instituto" id="instituto" class="form-control border-secondary rounded-pill" required maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="ano_ini">*Año de iniciación:</label></th>
			<td><input type="month" name="ano_ini" id="ano_ini" class="form-control border-secondary rounded-pill" required></td>
		</tr>
		<tr>
			<th><label for="ano_fin">*Año de finalización:</label></th>
			<td>
				<br>
				<select name="status" id="status" class="form-control border-secondary rounded-pill" onchange="carg(this);">
					<option value="cursando">Cursando Actualmente.</option>
					<option value="fin">Insertar año de finalización.</option>
				</select>
				<input type="month" name="ano_fin" id="ano_fin" class="form-control border-secondary rounded-pill" disabled>
				<br>
			</td>
		</tr>
		<tr>
			<th><label for="doc">*Documento obtenido:</label></th>
			<td><input type="text" name="doc" id="doc" class="form-control border-secondary rounded-pill" required maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="ruta_doc">Imagen de Documento Obtenido:</label></th>
			<td><input type="file" name="ruta_doc" id="ruta_doc" class="form-control border-secondary rounded-pill"></td>
		</tr>
		<tr>
			<th><label for="principal">¿Mostrar en PDF?</label></th>
			<td><input type="checkbox" name="principal" id="principal" value="yes" checked class="form-control border-secondary rounded" maxlength="3"></td>
		</tr>
		<tr>
			<th><label for="principal_vista">¿Mostrar en consulta web?</label></th>
			<td><input type="checkbox" name="principal_vista" id="principal_vista" value="yes" checked class="form-control border-secondary rounded" maxlength="3"></td>
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
@if(count($formAca) !== 0)
	@include('contCV.list_formAca')
@endif
