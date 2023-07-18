<h3>Datos Registrados de "Conocimientos":</h3>

<div class="table-responsive-md">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col" align="center">Conocimiento:</th>
                <th scope="col" align="center">Nivel:</th>
                <th scope="col" align="center">Clasificación:</th>
                <th scope="col" align="center">Mostrar en PDF:</th>
                <th scope="col" align="center">Mostrar en consulta web:</th>
                <th scope="col" colspan="2" align="center">Acciones:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($idioInfo as $ii)
                <tr>
                    <td>{{ $ii->idi_info }}</td>
                    <td>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="{{ $ii->nivel }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $ii->nivel }}%">{{ $ii->nivel }}</div>
                        </div>
                    </td>
                    <td>{{ $ii->clasificacion }}</td>
                    <td>{{ $ii->principal }}</td>
                    <td>{{ $ii->principal_vista }}</td>
                    <td>
                        <button type="button" class="btn" style="background:#006699; color:#ffffff;" data-toggle="modal" data-target="#idi_inModal{{ $ii->id_idinfo }}">
                            Editar
                        </button>
                        @include('contCV.edit_idioInfo')
                    </td>
                    <td>
                        <form action="{{ route('idioInfo.destroy', $ii->id_idinfo) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="7">{{ $idioInfo->appends(['tab' => 'idi_in'])->links() }}</td>
            </tr>
        </tbody>
    </table>
</div>
