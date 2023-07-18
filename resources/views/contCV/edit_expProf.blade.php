<div class="modal fade bd-example-modal-lg" id="exp_profModal{{$ep->id_exprof}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Editar experiencia profesional "{{ $ep->cargo }}".
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('expProf.update', $ep->id_exprof) }}">
                    @csrf
                    @method('PUT')

                    <table>
                        <tr>
                            <th>
                                <label for="cargo">*Cargo:</label>
                            </th>
                            <td>
                                <input type="text" name="cargo" value="{{ $ep->cargo }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="empresa">*Empresa:</label>
                            </th>
                            <td>
                                <input type="text" name="empresa" value="{{ $ep->empresa }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="funciones">*Funciones desarrolladas:</label>
                            </th>
                            <td>
                                <textarea name="funciones" class="form-control border-secondary rounded" required maxlength="500" rows="4">{{ $ep->funciones }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="herramientas">Herramientas utilizadas:</label>
                            </th>
                            <td>
                                <textarea name="herramientas" class="form-control border-secondary rounded" maxlength="500" rows="4">{{ $ep->herramientas }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="jefe">*Nombre de Jefe inmediato:</label>
                            </th>
                            <td>
                                <input type="text" name="jefe" value="{{ $ep->jefe }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="telefono">Teléfono:</label>
                            </th>
                            <td>
                                <input type="text" name="telefono" value="{{ $ep->telefono }}" class="form-control border-secondary rounded-pill" maxlength="13">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="inicio_lab">*Fecha de inicio de labores:</label>
                            </th>
                            <td>
                                <input type="month" name="inicio_lab" value="{{ $ep->inicio_lab }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="status_fin">*Estatus de Formación Académica:</label>
                            </th>
                            <td>
                                <select name="status_fin" class="form-control border-secondary rounded-pill" required>
                                    <option value="laborando" {{ $ep->status_fin == 'laborando' ? 'selected' : '' }}>Laborando Actualmente.</option>
                                    <option value="fin" {{ $ep->status_fin == 'fin' ? 'selected' : '' }}>Insertar fecha de finalización.</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="fin_lab">Fecha de finalización de labores:</label>
                            </th>
                            <td>
                                <input type="month" name="fin_lab" value="{{ $ep->fin_lab }}" class="form-control border-secondary rounded-pill" maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="motivos">*Motivos de finalización:</label>
                            </th>
                            <td>
                                <input type="text" name="motivos" value="{{ $ep->motivos }}" class="form-control border-secondary rounded-pill" required maxlength="50">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="logros">*Logros:</label>
                            </th>
                            <td>
                                <textarea name="logros" class="form-control border-secondary rounded" required maxlength="500" rows="4">{{ $ep->logros }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal">Mostrar en PDF:</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal" value="yes" class="form-control border-secondary rounded" value="yes" @if ($ep->principal === "OK") checked @endif >
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal_vista">¿Mostrar en consulta web?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal_vista" value="yes" class="form-control border-secondary rounded" value="yes" @if ($ep->principal_vista === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">* Campos Obligatorios</td>
                        </tr>
                    </table>

                    <div class="modal-footer">
                        <a href="/principal?tab=exp_prof" class="btn btn-secondary">Cancelar Edición</a>
                        <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
