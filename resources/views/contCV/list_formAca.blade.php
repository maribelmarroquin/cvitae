<h3>DATOS REGISTRADOS</h3>
<table class="table">
  	<thead class="thead-dark">	
		<tr>
			<th scope="col">Nivel académico:</th>
			<th scope="col">Especialidad:</th>
			<th scope="col">Instituto:</th>
			<th scope="col">Año de iniciación:</th>
			<th scope="col">Año de finalización:</th>
			<th scope="col">Documento obtenido:</th>
			<th scope="col">Imagen de Documento Obtenido:</th>
			<th scope="col">Mostrar en PDF:</th>
			<th scope="col" colspan="2">Acciones:</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($formAca as $fa)
	<tr>
		<td>{{ $fa->nivel }}</td>
		<td>{{ $fa->especialidad }}</td>
		<td>{{ $fa->instituto }}</td>
		<td>{{ $fa->ano_ini }}</td>
		<td>{{ $fa->ano_fin }}</td>
		<td>{{ $fa->doc }}</td>
		<td><img class="id_img" src="{{asset("storage/$name_user/docs/$fa->ruta_doc")}}"></td>
		<td>{{ $fa->principal }}</td>
		<td><a class="btn btn-primary" href="javascript:window.open('formAca/{{$fa->id_form_aca}}','Editar Datos Académicos','width=670,height=550,left=50,top=50,toolbar=yes');void 0">Editar</a></td>
		<td>		
			{!!Form::open(['route'=> ['formAca.destroy',$fa->id_form_aca],'method'=>'DELETE'])!!}{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}</td>
	</tr>
	@endforeach
	</tbody>
</table>
