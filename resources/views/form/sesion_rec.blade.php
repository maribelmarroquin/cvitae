<h1>CONSULTAR CV</h1>

<form method="POST" action="{{ route('consulta.store') }}">
    @csrf
    <table>
        <tr>
            <th><label for="user_cons">Usuario:</label></th>
            <td><input type="text" name="user_cons" class="form-control" required></td>
        </tr>
        <tr>
            <th><label for="password">Clave:</label></th>
            <td><input type="password" name="password" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Ingresar" class="btn" style="background:#006699; color:#ffffff;" required></td>
        </tr>
    </table>
</form>
