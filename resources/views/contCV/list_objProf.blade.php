<h3>Datos Registrados de "Objetivo Profesional":</h3>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Objetivo:</th>
            <th scope="col">Descripción:</th>
            <th scope="col">Mostrar en PDF:</th>
            <th scope="col">Mostrar en consulta web:</th>
            <th scope="col" colspan="2">Acciones:</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($objProf as $op)
            <tr>
                <td>{{ $op->objetivo }}</td>
                <td>{{ $op->des_obj }}</td>
                <td>{{ $op->principal }}</td>
                <td>{{ $op->principal_vista }}</td>
                <td>
                    <button type="button" class="btn" style="background:#006699; color:#ffffff;" data-toggle="modal" data-target="#obj_profModal{{ $op->id_obj }}">
                        Editar
                    </button>
                    @include('contCV.edit_objProf')
                </td>
                <td>
                    <form action="{{ route('objetivo.destroy', $op->id_obj) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
