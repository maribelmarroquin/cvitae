<h1>Resumen Profesional.</h1>

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

<form method="POST" action="{{ route('principal.store') }}">
    @csrf
    <table>
        <tr>
            <th><label for="titulo">*Título:</label></th>
            <td><input type="text" name="titulo" class="form-control border-secondary" required maxlength="80"></td>
        </tr>
        <tr>
            <th><label for="resumen">*Resumen:</label></th>
            <td><textarea name="resumen" class="form-control border-secondary" required maxlength="600"></textarea></td>
        </tr>
        <tr>
            <th><label for="principal">¿Mostrar en PDF?</label></th>
            <td><input type="checkbox" name="principal" value="yes" checked class="form-control border-secondary rounded"></td>
        </tr>
        <tr>
            <th><label for="principal_vista">¿Mostrar en consulta web?</label></th>
            <td><input type="checkbox" name="principal_vista" value="yes" checked class="form-control border-secondary rounded"></td>
        </tr>
        <tr><td colspan="2">* Campos Obligatorios</td></tr>
        <tr>
            <td><input type="submit" value="Guardar" class="btn" style="background:#006699; color:#ffffff;"></td>
            <td><input type="reset" value="Limpiar" class="btn btn-secondary"></td>
        </tr>
    </table>
</form>

<br><br>

@if(!$resumen->isEmpty())
    @include('contCV.list_resumen')
@endif
