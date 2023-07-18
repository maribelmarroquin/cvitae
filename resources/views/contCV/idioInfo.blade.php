<h1>Conocimientos.</h1>

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
	<form method="POST" action="{{ route('idioInfo.store') }}">
		@csrf
	
		<tr>
			<th><label for="idi_info">*Conocimiento:</label></th>
			<td><input type="text" name="idi_info" class="form-control border-secondary" required maxlength="100"></td>
		</tr>
		<tr>
			<th><label for="nivel">*Nivel:</label></th>
			<td>
				<div class="input-group">	
					<input type="number" name="nivel" class="form-control border-secondary" required max="100" min="1" aria-describedby="inputGroupPrepend2" id="validationDefaultNivel">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroupPrepend2">%</span>
					</div>
				</div>
			</td>
		</tr>
		<tr>
			<th><label for="clasificacion">*Clasificación:</label></th>
			<td>
				<select name="clasificacion" class="custom-select form-control border-secondary" id="inputGroupSelect04">
					<option selected>Seleccionar opción</option>
					@foreach ($clas_ii as $ci)
						<option value="{{$ci->id_clas_conocimientos}}">{{$ci->clasificacion}}</option>
					@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<th><label for="principal">¿Mostrar en PDF?</label></th>
			<td><input type="checkbox" name="principal" value="yes" class="form-control border-secondary" maxlength="3" checked></td>
		</tr>
		<tr>
			<th><label for="principal_vista">¿Mostrar en consulta web?</label></th>
			<td><input type="checkbox" name="principal_vista" value="yes" class="form-control border-secondary" maxlength="3" checked></td>
		</tr>
		<tr>
			<td>* Campos Obligatorios</td>
			<td><button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button> <button type="reset" class="btn btn-secondary">Limpiar</button></td>
		</tr>
	</form>
	<tr>
		<td>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clas_idioInfo">
				Agregar clasificación
			</button>
			@include('contCV.clas_idioInfo')
		</td>
	</tr>
</table>
<br><br>
@if(count($idioInfo) != 0)
	@include('contCV.list_idioInfo')
@endif
