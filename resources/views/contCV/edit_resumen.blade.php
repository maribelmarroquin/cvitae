<div class="modal fade" data-backdrop="static" data-keyboard="false" id="resumenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            @foreach ($resumen as $res)
            @endforeach
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    <h3>Editar Resumen: "{{ $res->titulo }}"</h3>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                @if(count($errors) > 0)
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

                <table>
                    <form method="POST" action="{{ route('principal.update', $res->id_resumen) }}">
                        @csrf
                        @method('PUT')
                        <tr>
                            <th>
                                <label for="titulo">*Título:</label>
                            </th>
                            <td>
                                <input type="text" name="titulo" class="form-control border-secondary rounded-pill" maxlength="80" required value="{{ $res->titulo }}">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="resumen">*Resumen:</label>
                            </th>
                            <td>
                                <textarea name="resumen" class="form-control border-secondary rounded" maxlength="600" required>{{ $res->resumen }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal">¿Mostrar en PDF?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal" class="form-control border-secondary rounded" value="yes" @if ($res->principal === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="principal_vista">¿Mostrar en consulta web?</label>
                            </th>
                            <td>
                                <input type="checkbox" name="principal_vista" class="form-control border-secondary rounded" value="yes" @if ($res->principal_vista === "OK") checked @endif>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">* Campos Obligatorios</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar Cambios</button>
                            </td>
                        </tr>
                    </form>
                </table>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

{{--

@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')

@foreach ($resumen as $res)
@endforeach

<h3 align="center">Editar resumen "{{ $res->titulo }}"</h3>

@if(count($errors) > 0)
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

<table>
    <form method="POST" action="{{ route('principal.update', $res->id_resumen) }}">
        @csrf
        @method('PUT')
        <tr>
            <th>
                <label for="titulo">Título:</label>
            </th>
            <td>
                <input type="text" name="titulo" class="form-control border-secondary rounded-pill" value="{{ $res->titulo }}">
            </td>
        </tr>
        <tr>
            <th>
                <label for="resumen">Resumen:</label>
            </th>
            <td>
                <textarea name="resumen" class="form-control border-secondary rounded">{{ $res->resumen }}</textarea>
            </td>
        </tr>
        <tr>
            <th>
                <label for="principal">Mostrar en PDF:</label>
            </th>
            <td>
                <input type="checkbox" name="principal" @if ($res->principal) checked @endif>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar Cambios</button>
            </td>
        </tr>
    </form>
</table>

@endsection

--}}

