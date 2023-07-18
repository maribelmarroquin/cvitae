<h4>Nuevo Registro</h4>

@if($errors->any())
	<div class="errors alert alert-danger alert-dismissible">
		<h5>Valide lo siguiente:</h5>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<form method="POST" action="{{ route('store') }}">
    @csrf
    <table>
        <tr>
            <th><label for="usuario" class="label_ini">Usuario:</label></th>
            <td><input type="text" name="usuario" placeholder="FacilCV" class="campo" required></td>
        </tr>
        <tr>
            <th><label for="email" class="label_ini">Correo electrónico:</label></th>
            <td><input type="email" name="email" placeholder="ejemplo@facilcv.com" class="campo" required></td>
        </tr>
        <tr>
            <th><label for="psw" class="label_ini">Contraseña:</label></th>
            <td><input type="password" name="psw" class="campo" required></td>
        </tr>
        <tr>
            <th><label for="pswtwo" class="label_ini">Reingresa la contraseña:</label></th>
            <td><input type="password" name="pswtwo" class="campo" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Registrar" class="btn_submit"></td>
        </tr>
    </table>
</form>
