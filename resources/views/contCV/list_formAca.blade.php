<h3>Datos Registrados de Formación Académica:</h3>

<div class="table-responsive-md">
<table class="table">
  	<thead class="thead-dark">	
		<tr>
			<th scope="col">Orden:</th>
			<th scope="col">Nivel académico:</th>
			<th scope="col">Especialidad:</th>
			<th scope="col">Instituto:</th>
			<th scope="col">Año de iniciación:</th>
			<th scope="col">Año de finalización:</th>
			<th scope="col">Documento obtenido:</th>
			<th scope="col">Imagen de Documento Obtenido:</th>
			<th scope="col">Mostrar en PDF:</th>
			<th scope="col">Mostrar en consulta web:</th>
			<th scope="col" colspan="2">Acciones:</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($formAca as $fa)
	<tr>
		<td>
			{{ $fa->order_fa}} <br>
		<a href="formAca/subir/{{$fa->id_form_aca}}" title="Subir"><img src="{{asset("/open-iconic/png/arrow-circle-top-2x.png")}}"></a>
			<a href="formAca/bajar/{{$fa->id_form_aca}}" title="Bajar"><img src="{{asset("/open-iconic/png/arrow-circle-bottom-2x.png")}}"></a>
		</td>
		<td>{{ $fa->nivel }}</td>
		<td>{{ $fa->especialidad }}</td>
		<td>{{ $fa->instituto }}</td>
		<td>{{ $fa->ano_ini }}</td>
		<td>
			@if(empty($fa->ano_fin))
				Cursando actualmente
				
			@else
			{{ $fa->ano_fin }}
			@endif
		</td>
		<td>{{ $fa->doc }}</td>
		@if($fa->ruta_doc === null)
		<td style="color:red;">Sin imagen registrada</td>
		@else
		<td><img class="id_img" src="{{Storage::url("$name_user/docs/$fa->ruta_doc")}}"></td>
		@endif
		<td>{{ $fa->principal }}</td>
		<td>{{ $fa->principal_vista }}</td>
		<td>
		<button type="button" class="btn" style='background:#006699; color:#ffffff;' data-toggle="modal" data-target="#form_acaModal{{$fa->id_form_aca}}">
				Editar
		</button>
		@include('contCV.edit_formAca')
		</td>
		<td>		
			{!!Form::open(['route'=> ['formAca.destroy',$fa->id_form_aca],'method'=>'DELETE'])!!}{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}</td>
	</tr>
	@endforeach
	<tr>
		<td colspan="12">{{ $formAca->appends(['tab'=> 'form_aca'])->links() }}</td>
	</tr>
	</tbody>
</table>

</div>