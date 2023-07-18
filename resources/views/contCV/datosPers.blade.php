<h1>Datos Personales.</h1>

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

@if(count($datosP) !== 0)
	@include('contCV.edit_datosPers')
@else
	<table>
		<form method="POST" action="{{ route('datPer.store') }}" enctype="multipart/form-data">
			@csrf

			<tr>
				<th>
					<label for="ruta">*Foto ID:</label>
				</th>
				<td>
					<input type="file" name="ruta" class="form-control border-secondary rounded-pill" required maxlength="255">
				</td>
			</tr>
			<tr>
				<th>
					<label for="nombre">*Nombre:</label>
				</th>
				<td>
					<input type="text" name="nombre" class="form-control border-secondary rounded-pill" required maxlength="100">
				</td>
			</tr>
			<tr>
				<th>
					<label for="profesion">*Profesión:</label>
				</th>
				<td>
					<input type="text" name="profesion" class="form-control border-secondary rounded-pill" required maxlength="100">
				</td>
			</tr>
			<tr>
				<th>
					<label for="fecha_nac">*Fecha de Nacimiento:</label>
				</th>
				<td>
					<input type="date" name="fecha_nac" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control border-secondary rounded-pill" required maxlength="50">
				</td>
			</tr>
			<tr>
				<th>
					<label for="lugar_nac">*Lugar de Nacimiento:</label>
				</th>
				<td>
					<input type="text" name="lugar_nac" class="form-control border-secondary rounded-pill" required maxlength="50">
				</td>
			</tr>
			<tr>
				<th>
					<label for="edo_civil">*Estado Civil:</label>
				</th>
				<td>
					<input type="text" name="edo_civil" class="form-control border-secondary rounded-pill" required maxlength="50">
				</td>
			</tr>
			<tr>
				<th>
					<label for="direccion">*Domicilio:</label>
				</th>
				<td>
					<input type="text" name="direccion" class="form-control border-secondary rounded-pill" required maxlength="100">
				</td>
			</tr>
			<tr>
				<th>
					<label for="telefono">*Teléfono:</label>
				</th>
				<td>
					<input type="text" name="telefono" class="form-control border-secondary rounded-pill" required maxlength="13">
				</td>
			</tr>
			<tr>
				<th>
					<label for="email_u">*Email:</label>
				</th>
				<td>
					<input type="text" name="email_u" class="form-control border-secondary rounded-pill" required maxlength="50">
				</td>
			</tr>
			<tr>
				<th>
					<label for="sitio">Sitio Web:</label>
				</th>
				<td>
					<input type="text" name="sitio" class="form-control border-secondary rounded-pill" maxlength="100">
				</td>
				<td>
					<input type="hidden" name="fk_user_dp" value="{{ Auth::user()->id }}">
				</td>
			</tr>
			<tr>
				<td>* Datos Obligatorios</td>
				<td>
					<button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
					<button type="reset" class="btn btn-secondary">Limpiar</button>
				</td>
			</tr>
		</form>
	</table>
@endif
