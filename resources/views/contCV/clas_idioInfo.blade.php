<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="clas_idioInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">
          Añadir Clasificación de conocimientos
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <table>
          <form method="POST" action="{{ route('idioInfo.storeClas') }}">
            @csrf
            <tr>
              <th>
                <label for="clasificacion">*Clasificación:</label>
              </th>
              <td>
                <input type="text" name="clasificacion" class="form-control border-secondary" required maxlength="60">
              </td>
            </tr>
            <tr>
              <td>* Campos Obligatorios</td>
              <td>
                <button type="submit" class="btn" style="background:#006699; color:#ffffff;">Guardar</button>
              </td>
            </tr>
          </form>
        </table>

        {{-- ----------------------------------------------------------------------------------------------------------------------------------------- --}}

        <div class="table-responsive-md">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" align="center">ID:</th>
                <th scope="col" align="center">Clasificación:</th>
                <th scope="col" colspan="2" align="center">Acciones:</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($clas_ii as $cii)
              <tr>
                <td>{{ $cii->id_clas_conocimientos }}</td>
                <td>{{ $cii->clasificacion }}</td>
                <td>
                  <form method="POST" action="{{ route('idioInfo.destroyClas', $cii->id_clas_conocimientos) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
