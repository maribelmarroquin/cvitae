<h3>Datos Registrados de Formación Extra-Académica:</h3>

<div class="table-responsive-md">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Curso, Taller o Seminario:</th>
                <th scope="col">Descripción:</th>
                <th scope="col">Instituto:</th>
                <th scope="col">Duración:</th>
                <th scope="col">Documento Obtenido:</th>
                <th scope="col">Imagen de Documento Obtenido:</th>
                <th scope="col">Mostrar en PDF:</th>
                <th scope="col">Mostrar en consulta web:</th>
                <th scope="col" colspan="2">Acciones:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formExAca as $fe)
                <tr>
                    <td>{{ $fe->curso }}</td>
                    <td>{{ $fe->desc }}</td>
                    <td>{{ $fe->instituto }}</td>
                    <td>{{ $fe->duración }}</td>
                    <td>{{ $fe->doc_ex }}</td>
                    @if ($fe->ruta_docex === null)
                        <td style="color:red;">Sin imagen registrada</td>
                    @else
                        <td><img class="id_img" src="{{ Storage::url("$name_user/docs/$fe->ruta_docex") }}"></td>
                    @endif
                    <td>{{ $fe->principal }}</td>
                    <td>{{ $fe->principal_vista }}</td>
                    <td>
                        <button type="button" class="btn" style="background:#006699; color:#ffffff;" data-toggle="modal" data-target="#form_exacaModal{{ $fe->id_form_exaca }}">
                            Editar
                        </button>
                        @include('contCV.edit_formExAca')
                    </td>
                    <td>
                        <form action="{{ route('formExAca.destroy', $fe->id_form_exaca) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="10">{{ $formExAca->appends(['tab' => 'form_exaca'])->links() }}</td>
            </tr>
        </tbody>
    </table>
</div>
