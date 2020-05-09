<h3>DATOS REGISTRADOS</h3>

<table class="table">
  	<thead class="thead-dark">	
	<tr>
		<th scope="col">Curso, Taller o Seminario:</th>
		<th scope="col">Descripción:</th>
		<th scope="col">Instituto:</th>
		<th scope="col">Duración:</th>
		<th scope="col">Documento Obtenido:</th>
		<th scope="col">Imagen de Documento Obtenido:</th>
		<th scope="col">Mostrar en PDF:</th>
		<th scope="col" colspan="2">Acciones:</th>
	</tr>
	</thead>
	<tbody>
	@foreach ($formExAca as $fe)
	<tr>
		<td>{{ $fe->curso }}</td>
		<td>{{ $fe->desc }}</td>
		<td>{{ $fe->instituto }}</td>
		<td>{{ $fe->duración }}</td>
		<td>{{ $fe->doc_ex }}</td>
		@if ($fe->ruta_docex === null)
		<td style="color:red;">Sin imagen registrada</td>
		@else
		<td><img class="id_img" src="{{asset("storage/docs/$fe->ruta_docex")}}"></td>
		@endif
		
		<td>{{ $fe->principal }}</td>
		<td><a class="btn btn-primary" href="javascript:window.open('formExAca/{{$fe->id_form_exaca}}','Editar Datos Académicos','width=700,height=700,left=50,top=50,toolbar=yes');void 0">Editar</a></td>

		{!!Form::open(['route'=> ['formExAca.destroy',$fe->id_form_exaca],'method'=>'DELETE'])!!}
		<td>{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}</td>
		{!!Form::close()!!}
	</tr>
	@endforeach
	</tbody>
</table>
