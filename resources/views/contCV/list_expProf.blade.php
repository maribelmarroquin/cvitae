<h3>Datos Registrados de Experiencia Profesional:</h3>

<div class="table-responsive-md">
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Orden:</th>
				<th class="table-dark">Cargo:</th>
				<th class="table-dark">Empresa:</th>
				<th class="table-dark">Fecha de inicio de labores:</th>
				<th class="table-dark">Fecha de finalización de labores:</th>
				<th class="table-dark">Mostrar en PDF:</th>
				<th class="table-dark">Mostrar en consulta web:</th>
				<th class="table-dark">Acciones:</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($expProf as $ep)
			<tr>
				<td>
					{{ $ep->order_ep}} <br>
				<a href="expProf/subir/{{$ep->id_exprof}}" title="Subir"><img src="{{asset("/open-iconic/png/arrow-circle-top-2x.png")}}"></a>
					<a href="expProf/bajar/{{$ep->id_exprof}}" title="Bajar"><img src="{{asset("/open-iconic/png/arrow-circle-bottom-2x.png")}}"></a>
				</td>
				<td>{{ $ep->cargo }}
					<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ver_exp_profModal{{$ep->id_exprof}}">
						Ver completo
					</button>
					@include('contCV.ver_expProf')
				</td>
				<td>{{ $ep->empresa }}</td>
				<td>{{ $ep->inicio_lab }}</td>
				<td>{{ $ep->fin_lab }}</td>
				<td>{{ $ep->principal }}</td>
				<td>{{ $ep->principal_vista }}</td>
				<td>
			
					<button type="button" class="btn" style='background:#006699; color:#ffffff;' data-toggle="modal" data-target="#exp_profModal{{$ep->id_exprof}}">
						Editar
					</button>
					@include('contCV.edit_expProf')
		
				
					{!!Form::open(['route'=> ['expProf.destroy',$ep->id_exprof],'method'=>'DELETE'])!!}{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}
		
				</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="12">{{ $expProf->appends(['tab'=> 'exp_prof'])->links() }}</td>
			</tr>
		</tbody>
	</table>
</div>
