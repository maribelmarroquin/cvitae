<h1>Objetivo Profesional.</h1>

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
 
<form method="POST" action="{{ route('objetivo.store') }}">
    @csrf
    <table>
        <tr>
            <th><label for="objetivo">*Objetivo:</label></th>
            <td><input type="text" name="objetivo" class="form-control border-secondary rounded-pill" maxlength="100"></td>
        </tr>
        <tr>
            <th><label for="des_obj">*Descripción:</label></th>
            <td><textarea name="des_obj" rows="4" cols="50" class="form-control border-secondary rounded" required maxlength="600"></textarea></td>
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
            <td>* Datos obligatorios.</td>
            <td><input type="submit" value="Guardar" class="btn" style="background:#006699; color:#ffffff;"> <input type="reset" value="Limpiar" class="btn btn-secondary"></td>
        </tr>
    </table>
</form>
<br><br>
 
@if(!$objProf->isEmpty())
    @include('contCV.list_objProf')
@endif
