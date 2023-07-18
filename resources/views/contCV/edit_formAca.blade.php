<div class="modal fade" data-backdrop="static" data-keyboard="false" id="form_acaModal{{$fa->id_form_aca}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    <h3>Editar datos académicos nivel "{{ $fa->nivel }}".</h3>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                @if($errors->any())
                <div class="errors alert alert-danger alert-dismissible" role="alert">
                    <h5>Valide lo siguiente:</h5>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <form method="POST" action="{{ route('formAca.update', $fa->id_form_aca) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <table>
                        <tr>
                            <th>
                                <label for="nivel">*Nivel académico:</label>
                            </th>
                            <td>
                                <input type="text" name="nivel" value="{{ $fa->nivel }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="especialidad">Especialidad:</label>
                            </th>
                            <td>
                                <input type="text" name="especialidad" value="{{ $fa->especialidad }}" class="form-control border-secondary rounded-pill" maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="instituto">*Instituto:</label>
                            </th>
                            <td>
                                <input type="text" name="instituto" value="{{ $fa->instituto }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="ano_ini">*Año de iniciación:</label>
                            </th>
                            <td>
                                <input type="month" name="ano_ini" value="{{ $fa->ano_ini }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="status">*Estatus de Formación Académica:</label>
                            </th>
                            <td>
                                <select name="status" class="form-control border-secondary rounded-pill" required>
                                    <option value="cursando" {{ $fa->status == 'cursando' ? 'selected' : '' }}>Cursando Actualmente.</option>
                                    <option value="fin" {{ $fa->status == 'fin' ? 'selected' : '' }}>Completado.</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="ano_fin">Año de finalización:</label>
                            </th>
                            <td>
                                <input type="month" name="ano_fin" value="{{ $fa->ano_fin }}" class="form-control border-secondary rounded-pill" id="ano_fin1" maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="doc">*Documento obtenido:</label>
                            </th>
                            <td>
                                <input type="text" name="doc" value="{{ $fa->doc }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="ruta_doc">Imagen de Documento:</label>
                            </th>
                            <td>
                                <input type="file" name="ruta_doc" class="form-control border-secondary rounded-pill" maxlength="255">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal">¿Mostrar en PDF?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal" value="yes" class="form-control border-secondary rounded" maxlength="3" value="yes" @if ($fa->principal === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal_vista">¿Mostrar en consulta web?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal_vista" value="yes" class="form-control border-secondary rounded" maxlength="3" value="yes" @if ($fa->principal_vista === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <th>Imagen de Actual del Documento:</th>
                            @if($fa->ruta_doc === null)
                            <td style="color:red;">Sin imagen registrada</td>
                            @else
                            <td>
                                <img class="id_img" src="{{asset("storage/$name_user/docs/$fa->ruta_doc")}}">
                                <a class="btn btn-danger" href="formAca/{{$fa->id_form_aca}}/edit">Eliminar Imagen</a>
                            </td>
                            @endif
                        </tr>
                        <tr>
                            <td colspan="2">* Campos Obligatorios</td>
                        </tr>
                    </table>

                    <div class="modal-footer">
                        <a href="/principal?tab=form_aca" class="btn btn-secondary">Cancelar Edición</a>
                        <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
