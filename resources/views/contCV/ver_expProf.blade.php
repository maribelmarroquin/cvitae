<div class="modal fade  bd-example-modal-lg" id="ver_exp_profModal{{$ep->id_exprof}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">
          Experiencia profesional como "{{ $ep->cargo }}"
            </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <table class="table">	
                    <tr>
                        <th class="table-dark" style="width: 20%;">Cargo:</th>
                        <td>{{ $ep->cargo }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Empresa:</th>
                        <td>{{ $ep->empresa }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Funciones:</th>
                        <td>{{ $ep->funciones }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Jefe:</th>
                        <td>{{ $ep->jefe }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Teléfono:</th>
                        <td>{{ $ep->telefono }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Fecha de inicio de labores:</th>
                        <td>{{ $ep->inicio_lab }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Fecha de finalización de labores:</th>
                        <td>{{ $ep->fin_lab }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Motivos de finalización:</th>
                        <td>{{ $ep->motivos }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Logros:</th>
                        <td>{{ $ep->logros }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Mostrar en PDF:</th>
                        <td>{{ $ep->principal }}</td>
                    </tr>
                    <tr>
                        <th class="table-dark">Mostrar en consulta web:</th>
                        <td>{{ $ep->principal_vista }}</td>
                    </tr>
                    
                </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


