<h1>Formación Extra-Académica.</h1>

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
	<form method="POST" action="{{ route('formExAca.store') }}" enctype="multipart/form-data">
		@csrf
	
		<tr>
			<th><label for="curso">*Curso, Taller o Seminario:</label></th>
			<td>
				<select name="curso" id="curso" class="form-control border-secondary rounded-pill" required maxlength="50">
					@foreach($opciones as $key => $value)
						<option value="{{ $key }}">{{ $value }}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<th><label for="desc">*Descripción:</label></th>
			<td>
				<textarea name="desc" id="desc" rows="4" class="form-control border-secondary rounded" required maxlength="200"></textarea>
			</td>
		</tr>
		<tr>
			<th><label for="instituto">*Instituto:</label></th>
			<td>
				<input type="text" name="instituto" id="instituto" class="form-control border-secondary rounded-pill" required maxlength="50">
			</td>
		</tr>
		<tr>
			<th><label for="duración">*Duración:</label></th>
			<td>
				<input type="text" name="duración" id="duración" class="form-control border-secondary rounded-pill" required maxlength="50">
			</td>
		</tr>
		<tr>
			<th><label for="doc_ex">*Documento Obtenido:</label></th>
			<td>
				<input type="text" name="doc_ex" id="doc_ex" class="form-control border-secondary rounded-pill" required maxlength="50">
			</td>
		</tr>
		<tr>
			<th><label for="ruta_docex">Imagen de Documento Obtenido:</label></th>
			<td>
				<input type="file" name="ruta_docex" id="ruta_docex" class="form-control border-secondary rounded-pill" maxlength="255">
			</td>
		</tr>
		<tr>
			<th><label for="principal">¿Mostrar en PDF?</label></th>
			<td>
				<input type="checkbox" name="principal" id="principal" value="yes" checked class="form-control border-secondary rounded" maxlength="3">
			</td>
		</tr>
		<tr>
			<th><label for="principal_vista">¿Mostrar en consulta web?</label></th>
			<td>
				<input type="checkbox" name="principal_vista" id="principal_vista" value="yes" checked class="form-control border-secondary rounded" maxlength="3">
			</td>
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

@if(count($formExAca) !== 0)
	@include('contCV.list_formExAca')
@endif
