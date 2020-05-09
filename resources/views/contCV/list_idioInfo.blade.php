<h3>DATOS REGISTRADOS</h3>
<table class="table">	
	<thead class="thead-dark">
		<tr>
			<th scope="col" align="center">Idioma o Conocimiento Informático:</th>
			<th scope="col" align="center">Nivel:</th>
			<th scope="col" align="center">Clasificación:</th>
			<th scope="col" align="center">Mostrar en PDF:</th>
			<th scope="col" colspan="2" align="center">Acciones:</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($idioInfo as $ii)
		<tr>
			<td>{{ $ii->idi_info }}</td>
			<!-- <td>{{ $ii->nivel }}</td> -->
			<td>
				<div class="progress">
  					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:{{ $ii->nivel }}">{{ $ii->nivel }}</div>
				</div>
			</td>
			<td>{{ $ii->clasificacion }}</td>
			<td>{{ $ii->principal }}</td>
			<td><a class="btn btn-primary" href="javascript:window.open('idioInfo/{{$ii->id_idinfo}}','Editar Conocimientos informáticos e idiomas.','width=670,height=550,left=50,top=50,toolbar=yes');void 0">Editar</a></td>
			<td>
			{!!Form::open(['route'=> ['idioInfo.destroy',$ii->id_idinfo],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
			{!!Form::close()!!}
			</td>
		</tr>
	@endforeach
	</tbody>
</table>