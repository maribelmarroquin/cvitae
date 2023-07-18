<h1>Experiencia Profesional.</h1>

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
	<form method="POST" action="{{ route('expProf.store') }}">
		@csrf
	
		<tr>
			<th><label for="cargo">*Cargo:</label></th>
			<td><input type="text" name="cargo" id="cargo" class="form-control border-secondary rounded-pill" required maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="empresa">*Empresa:</label></th>
			<td><input type="text" name="empresa" id="empresa" class="form-control border-secondary rounded-pill" required maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="funciones">*Funciones desarrolladas:</label></th>
			<td><textarea name="funciones" id="funciones" rows="4" class="form-control border-secondary rounded" required maxlength="500"></textarea></td>
		</tr>
		<tr>
			<th><label for="herramientas">Herramientas utilizadas:</label></th>
			<td><textarea name="herramientas" id="herramientas" rows="4" class="form-control border-secondary rounded" maxlength="500"></textarea></td>
		</tr>
		<tr>
			<th><label for="jefe">*Nombre de Jefe inmediato:</label></th>
			<td><input type="text" name="jefe" id="jefe" class="form-control border-secondary rounded-pill" required maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="telefono">Teléfono:</label></th>
			<td><input type="text" name="telefono" id="telefono" class="form-control border-secondary rounded-pill" maxlength="13"></td>
		</tr>
		<tr>
			<th><label for="inicio_lab">*Fecha de inicio de labores:</label></th>
			<td><input type="month" name="inicio_lab" id="inicio_lab" class="form-control border-secondary rounded-pill" required></td>
		</tr>
		<tr>
			<th><label for="fin_lab">*Fecha de finalización de labores:</label></th>
			<td>
				<br>
				<select name="status_fin" id="status_fin" class="form-control border-secondary rounded-pill" onchange="carglab(this);" required>
					<option value="laborando">Laborando Actualmente.</option>
					<option value="fin">Insertar fecha de finalización.</option>
				</select>
				<input type="month" name="fin_lab" id="fin_lab" class="form-control border-secondary rounded-pill" disabled>
				<br>
			</td>
		</tr>
		<tr>
			<th><label for="motivos">*Motivos de finalización:</label></th>
			<td><input type="text" name="motivos" id="motivos" class="form-control border-secondary rounded-pill" required maxlength="50"></td>
		</tr>
		<tr>
			<th><label for="logros">*Logros:</label></th>
			<td><textarea name="logros" id="logros" rows="4" class="form-control border-secondary rounded" required maxlength="500"></textarea></td>
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
 
@if(count($expProf) !== 0)
	@include('contCV.list_expProf')
@endif
