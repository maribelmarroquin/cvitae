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
                {!!Form::open(array(
                    'method'=>'POST',
                    'route'=>'idioInfo.storeClas'))!!}
                
                <tr>
                    <th>{!!Form::label('clasificacion', '*Clasificación:')!!}</th>
                    <td>{!!Form::text('clasificacion', null, array('class'=>'form-control border-secondary', 'required', 'maxlength'=>'60'))!!}</td>
                </tr>
                <tr>
                    <td>* Campos Obligatorios</td>
                    <td>{!! Form::submit('Guardar', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
                </tr>
                {!!Form::close()!!}

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
                      {!!Form::open(['route'=> ['idioInfo.destroyClas',$cii->id_clas_conocimientos],'method'=>'DELETE'])!!}
                      {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                      {!!Form::close()!!}
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