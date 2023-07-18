<div class="modal fade" id="obj_profModal{{ $op->id_obj }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @foreach ($objProf as $ope)
            @endforeach
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Editar objetivo "{{ $ope->objetivo }}".
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <table>
                    <form method="POST" action="{{ route('objetivo.update', $ope->id_obj) }}">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th>
                                <label for="objetivo">*Objetivo:</label>
                            </th>
                            <td>
                                <input type="text" name="objetivo" class="form-control border-secondary rounded-pill" maxlength="100" required value="{{ $ope->objetivo }}">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="des_obj">*Descripción:</label>
                            </th>
                            <td>
                                <textarea name="des_obj" class="form-control border-secondary rounded" rows="4" maxlength="600" required>{{ $ope->des_obj }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal">¿Mostrar en PDF?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal" class="form-control border-secondary rounded" @if ($ope->principal) checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal_vista">¿Mostrar en consulta web?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal_vista" class="form-control border-secondary rounded" @if ($ope->principal_vista) checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">* Datos obligatorios.</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>

            <div class="modal-footer">
                <a href="/principal?tab=obj_prof" class="btn btn-secondary">Cancelar Edición</a>
            </div>
        </div>
    </div>
</div>

{{--

@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')

@foreach ($objProfE as $ope)
@endforeach
<h3 align="center">Editar objetivo "{{ $ope->objetivo }}"</h3>
<table>
    <form method="POST" action="{{ route('objetivo.update', $ope->id_obj) }}">
        @csrf
        @method('PUT')
        <tr>
            <th>
                <label for="objetivo">*Objetivo:</label>
            </th>
            <td>
                <input type="text" name="objetivo" class="form-control border-secondary rounded-pill" maxlength="100" required value="{{ $ope->objetivo }}">
            </td>
        </tr>
        <tr>
            <th>
                <label for="des_obj">*Descripción:</label>
            </th>
            <td>
                <textarea name="des_obj" class="form-control border-secondary rounded" rows="4" maxlength="600" required>{{ $ope->des_obj }}</textarea>
            </td>
        </tr>
        <tr>
            <th>
                <label for="principal">¿Mostrar en PDF?</label>
            </th>
            <td>
                <input type="checkbox" name="principal" class="form-control border-secondary rounded" @if ($ope->principal) checked @endif>
            </td>
        </tr>
        <tr>
            <th>
                <label for="principal_vista">¿Mostrar en consulta web?</label>
            </th>
            <td>
                <input type="checkbox" name="principal_vista" class="form-control border-secondary rounded" @if ($ope->principal_vista) checked @endif>
            </td>
        </tr>
        <tr>
            <td colspan="2">* Datos obligatorios.</td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
            </td>
        </tr>
    </form>
</table>
@endsection

--}}
