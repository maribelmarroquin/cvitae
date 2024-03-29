<!-- Modal -->
<div class="modal fade" id="idi_inModal{{ $ii->id_idinfo }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Editar conocimiento en {{ $ii->idi_info }}.
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table>
                    <form method="POST" action="{{ route('idioInfo.update', $ii->id_idinfo) }}">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th>
                                <label for="idi_info">*Conocimiento:</label>
                            </th>
                            <td>
                                <input type="text" name="idi_info" class="form-control border-secondary" required maxlength="100" value="{{ $ii->idi_info }}">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="nivel">*Nivel:</label>
                            </th>
                            <td>
                                <div class="input-group">
                                    <input type="number" name="nivel" class="form-control border-secondary" max="100" min="1" required value="{{ substr($ii->nivel, 0, -1) }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="clasificacion">*Clasificación:</label>
                            </th>
                            <td>
                                <select name="clasificacion" class="custom-select form-control border-secondary">
                                    <option selected value="{{ $ii->id_clas_conocimientos }}">{{ $ii->clasificacion }}</option>
                                    @foreach ($clas_ii as $ci)
                                    <option value="{{ $ci->id_clas_conocimientos }}">{{ $ci->clasificacion }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal">¿Mostrar en PDF?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal" class="form-control border-secondary" value="yes" @if ($ii->principal === "OK") checked @endif >
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal_vista">¿Mostrar en consulta web?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal_vista" class="form-control border-secondary" value="yes" @if ($ii->principal_vista === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <td>* Campos Obligatorios</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="/principal?tab=idi_in" class="btn btn-secondary">Cancelar Edición</a></td>
                            <td>
                                <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>

