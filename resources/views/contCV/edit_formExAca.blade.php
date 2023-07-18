<!-- Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="form_exacaModal{{$fe->id_form_exaca}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Editar datos de {{ $fe->curso }} {{ $fe->desc }}.
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="{{ route('formExAca.update', $fe->id_form_exaca) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <table>
                        <tr>
                            <th>
                                <label for="curso">*Curso, Taller o Seminario:</label>
                            </th>
                            <td>
                                <select name="curso" class="form-control border-secondary rounded-pill" required maxlength="50">
                                    <option value="Curso" {{ $fe->curso == 'Curso' ? 'selected' : '' }}>Curso</option>
                                    <option value="Conferencias" {{ $fe->curso == 'Conferencias' ? 'selected' : '' }}>Conferencias</option>
                                    <option value="Taller" {{ $fe->curso == 'Taller' ? 'selected' : '' }}>Taller</option>
                                    <option value="Seminario" {{ $fe->curso == 'Seminario' ? 'selected' : '' }}>Seminario</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="desc">*Descripción:</label>
                            </th>
                            <td>
                                <textarea name="desc" rows="4" class="form-control border-secondary rounded" required maxlength="200">{{ $fe->desc }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="instituto">*Instituto:</label>
                            </th>
                            <td>
                                <input type="text" name="instituto" value="{{ $fe->instituto }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="duración">*Duración:</label>
                            </th>
                            <td>
                                <input type="text" name="duración" value="{{ $fe->duración }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="doc_ex">*Documento Obtenido:</label>
                            </th>
                            <td>
                                <input type="text" name="doc_ex" value="{{ $fe->doc_ex }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>Imagen Actual del Documento:</th>
                            @if($fe->ruta_docex === null)
                            <td style="color:red;">Sin imagen registrada</td>
                            @else
                            <td>
                                <img class="id_img" src="{{asset("storage/$name_user/docs/$fe->ruta_docex")}}">
                                <a class="btn btn-danger" href="formExAca/{{$fe->id_form_exaca}}/edit">Eliminar Imagen</a>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            <th>Imagen de Documento Obtenido:</th>
                            <td>
                                <input type="file" name="ruta_docex" class="form-control border-secondary rounded-pill" maxlength="255">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal">Mostrar en PDF:</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal" value="yes" class="form-control border-secondary rounded" maxlength="3" {{ $fe->principal == 'yes' ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal_vista">¿Mostrar en consulta web?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal_vista" value="yes" class="form-control border-secondary rounded" maxlength="3" {{ $fe->principal_vista == 'yes' ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">* Campos Obligatorios</td>
                        </tr>
                    </table>

                    <div class="modal-footer">
                        <a href="/principal?tab=form_exaca" class="btn btn-secondary">Cancelar Edición</a>
                        <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

