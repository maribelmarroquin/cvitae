<h3>Datos Registrados de "Otros Datos de Interés":</h3>

<div class="table-responsive-md">
<table class="table">
	<thead class="thead-dark">
	<tr>
		<th scope="col">Dato:</th>
		<th scope="col">Descripción:</th>
		<th scope="col">Imagen:</th>
		<th scope="col">Mostrar en PDF:</th>
		<th scope="col">Mostrar en consulta web:</th>
		<th scope="col" colspan="2">Acciones:</th>
	</tr>
</thead>
<body>
	@foreach ($otros as $o)
	<tr>
		<td>{{ $o->dato }}</td>
		<td>{{ $o->des_dato }}</td>
	@if ($o->ruta_dato === null)
		<td style="color:red;">Sin imagen registrada</td>
	@else
		<td><img class="id_img" src="{{asset("storage/$name_user/docs/$o->ruta_dato")}}"></td>
	@endif
		
		<td>{{ $o->principal }}</td>
		<td>{{ $o->principal_vista }}</td>
		<td>
			<button type="button" class="btn" style='background:#006699; color:#ffffff;' data-toggle="modal" data-target="#otr_datModal{{$o->id_otros}}">
				Editar
			</button>
			@include('contCV.edit_otrosDat')
			{{--<a class="btn btn-primary" href="javascript:window.open('otros/{{$o->id_otros}}','Editar Dato de Interés.','width=628,height=550,left=50,top=50,toolbar=yes');void 0">Editar</a>--}}
		</td>

		{!!Form::open(['route'=> ['otros.destroy',$o->id_otros],'method'=>'DELETE'])!!}
		<td>{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}</td>
		{!!Form::close()!!}
	</tr>
	@endforeach
	<tr>
		<td colspan="6">{{ $otros->appends(['tab'=>'otr_dat'])->links() }}</td>
	</tr>
	</body>
</table>
</div>