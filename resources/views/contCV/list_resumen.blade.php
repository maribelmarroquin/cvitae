<h3>Resúmenes Registrados:</h3>

<div class="table-responsive-md">
    <table class="table">
        @foreach ($resumen as $re)
            <tr>
                <th class="table-dark">Título:</th>
                <td>{{ $re->titulo }}</td>
            </tr>
            <tr>
                <th class="table-dark">Resumen:</th>
                <td>{{ $re->resumen }}</td>
            </tr>
            <tr>
                <th class="table-dark">Acciones:</th>
                <td>
                    <button type="button" class="btn" style="background:#006699; color:#ffffff;" data-toggle="modal" data-target="#resumenModal">
                        Editar
                    </button>
                    <form action="{{ route('principal.destroy', $re->id_resumen) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            <tr>
                <th class="table-dark">En PDF:</th>
                <td>{{ $re->principal }}</td>
            </tr>
            <tr>
                <th class="table-dark">En consulta web:</th>
                <td>{{ $re->principal_vista }}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="2">{{ $resumen->appends(['tab' => 'resumen'])->links() }}</td>
        </tr>
    </table>
    @include('contCV.edit_resumen')
</div>
