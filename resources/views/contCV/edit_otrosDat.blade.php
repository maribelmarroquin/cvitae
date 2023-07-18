<div class="modal fade" id="otr_datModal{{ $o->id_otros }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Editar datos de interés "{{ $o->dato }}".
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <table>
                    <form method="POST" action="{{ route('otros.update', $o->id_otros) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th>
                                <label for="dato">Dato de interés:</label>
                            </th>
                            <td>
                                <input type="text" name="dato" class="form-control border-secondary rounded-pill" required maxlength="100" value="{{ $o->dato }}">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="des_dato">Descripción:</label>
                            </th>
                            <td>
                                <textarea name="des_dato" class="form-control border-secondary rounded" required maxlength="255" rows="4">{{ $o->des_dato }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="ruta_dato">Imagen del dato:</label>
                            </th>
                            <td>
                                <input type="file" name="ruta_dato" class="form-control border-secondary rounded-pill" maxlength="255">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal">¿Mostrar en PDF?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal" class="form-control border-secondary rounded" maxlength="3" value="yes" @if ($o->principal === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal_vista">¿Mostrar en consulta web?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal_vista" class="form-control border-secondary rounded" maxlength="3" value="yes" @if ($o->principal_vista === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <th>Imagen de Actual del Documento:</th>
                            @if($o->ruta_dato === null)
                            <td style="color:red;">Sin imagen registrada</td>
                            @else
                            <td>
                                <img class="id_img" src="{{ asset("storage/$name_user/docs/$o->ruta_dato") }}">
                                <a class="btn btn-danger" href="otros/{{ $o->id_otros }}/edit">Eliminar Imagen</a>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            <td colspan="2">* Campos Obligatorios</td>
                        </tr>
                        <tr>
                            <td><a href="/principal?tab=otr_dat" class="btn btn-secondary">Cancelar Edición</a></td>
                            <td><button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button></td>
                        </tr>
                    </form>
                </table>

            </div>

        </div>
    </div>
</div>

