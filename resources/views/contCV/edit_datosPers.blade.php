@foreach ($datosP as $dp)

@endforeach

<table>
    <form method="POST" action="{{ route('datPer.update', $dp->id_datos_per) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <tr>
            <th>
                <label for="img">Foto de Identidad Registrada:</label>
            </th>
            <td align="center"><img src="{{ url("storage/$name_user/id/$dp->ruta") }}" class="id_img" /></td>
        </tr>
        <tr>
            <td></td>
            <td align="center">{{ $dp->ruta }}</td>
        </tr>
        <tr>
            <th>
                <label for="ruta">*Foto ID:</label>
            </th>
            <td>
                <input type="file" name="ruta" class="form-control border-secondary rounded-pill" maxlength="255">
            </td>
        </tr>
        <tr>
            <th>
                <label for="nombre">*Nombre:</label>
            </th>
            <td>
                <input type="text" name="nombre" value="{{ $dp->nombre }}" class="form-control border-secondary rounded-pill" required maxlength="100">
            </td>
        </tr>
        <tr>
            <th>
                <label for="profesion">*Profesión:</label>
            </th>
            <td>
                <input type="text" name="profesion" value="{{ $dp->profesion }}" class="form-control border-secondary rounded-pill" required maxlength="100">
            </td>
        </tr>
        <tr>
            <th>
                <label for="fecha_nac">*Fecha de Nacimiento:</label>
            </th>
            <td>
                <input type="date" name="fecha_nac" value="{{ $dp->fecha_nac }}" class="form-control border-secondary rounded-pill" required maxlength="50">
            </td>
        </tr>
        <tr>
            <th>
                <label for="lugar_nac">*Lugar de Nacimiento:</label>
            </th>
            <td>
                <input type="text" name="lugar_nac" value="{{ $dp->lugar_nac }}" class="form-control border-secondary rounded-pill" required maxlength="50">
            </td>
        </tr>
        <tr>
            <th>
                <label for="edo_civil">*Estado Civil:</label>
            </th>
            <td>
                <input type="text" name="edo_civil" value="{{ $dp->edo_civil }}" class="form-control border-secondary rounded-pill" required maxlength="50">
            </td>
        </tr>
        <tr>
            <th>
                <label for="direccion">*Domicilio:</label>
            </th>
            <td>
                <input type="text" name="direccion" value="{{ $dp->direccion }}" class="form-control border-secondary rounded-pill" required maxlength="100">
            </td>
        </tr>
        <tr>
            <th>
                <label for="telefono">*Teléfono:</label>
            </th>
            <td>
                <input type="text" name="telefono" value="{{ $dp->telefono }}" class="form-control border-secondary rounded-pill" required maxlength="13">
            </td>
        </tr>
        <tr>
            <th>
                <label for="email_u">*Email:</label>
            </th>
            <td>
                <input type="text" name="email_u" value="{{ $dp->email_u }}" class="form-control border-secondary rounded-pill" required maxlength="50">
            </td>
        </tr>
        <tr>
            <th>
                <label for="sitio">Sitio Web:</label>
            </th>
            <td>
                <input type="text" name="sitio" value="{{ $dp->sitio }}" class="form-control border-secondary rounded-pill" maxlength="100">
            </td>
            <td>
                <input type="hidden" name="fk_user_dp" value="{{ Auth::user()->id }}">
            </td>
        </tr>
        <tr>
            <td>* Datos Obligatorios</td>
            <td>
                <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar Cambios</button>
                <a href="/principal?tab=dat_pers" class="btn btn-secondary">Cancelar Edición</a>
            </td>
        </tr>
    </form>
</table>
