<h4>Inicio de Sesión</h4>

<form method="POST" action="{{ route('login.store') }}">
    @csrf
    <table>
        <tr>
            <th><label for="email" class="label_ini">Correo electrónico:</label></th>
            <td><input type="email" name="email" placeholder="ejemplo@solinfori.com" class="campo" required></td>
        </tr>
        <tr>
            <th><label for="password" class="label_ini">Contraseña:</label></th>
            <td><input type="password" name="password" class="campo" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Iniciar Sesión" class="btn_submit"></td>
        </tr>
    </table>
</form>
<tr>
    <td></td>
    <td><a class="olvide" href="{{ url('password/reset') }}">¡Olvidé mi password!</a></td>
</tr>
