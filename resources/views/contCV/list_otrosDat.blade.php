<h3>Datos Registrados de "Otros Datos de Interés":</h3>

<div class="table-responsive-md">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Dato:</th>
                <th scope="col">Descripción:</th>
                <th scope="col">Imagen:</th>
                <th scope="col">Mostrar en PDF:</th>
                <th scope="col">Mostrar en consulta web:</th>
                <th scope="col" colspan="2">Acciones:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($otros as $o)
                <tr>
                    <td>{{ $o->dato }}</td>
                    <td>{{ $o->des_dato }}</td>
                    @if ($o->ruta_dato === null)
                        <td style="color:red;">Sin imagen registrada</td>
                    @else
                        <td><img class="id_img" src="{{ asset("storage/$name_user/docs/$o->ruta_dato") }}"></td>
                    @endif
                    <td>{{ $o->principal }}</td>
                    <td>{{ $o->principal_vista }}</td>
                    <td>
                        <button type="button" class="btn" style="background:#006699; color:#ffffff;" data-toggle="modal" data-target="#otr_datModal{{ $o->id_otros }}">
                            Editar
                        </button>
                        @include('contCV.edit_otrosDat')
                    </td>
                    <td>
                        <form action="{{ route('otros.destroy', $o->id_otros) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="6">{{ $otros->appends(['tab' => 'otr_dat'])->links() }}</td>
            </tr>
        </tbody>
    </table>
</div>
