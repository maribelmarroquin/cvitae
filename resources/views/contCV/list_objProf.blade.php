<h3>Datos Registrados de "Objetivo Profesional":</h3>
<table class="table">	
	<thead class="thead-dark">
	<tr>
		<th scope="col">Objetivo:</th>
		<th scope="col">Descripción:</th>
		<th scope="col">Mostrar en PDF:</th>
		<th scope="col">Mostrar en consulta web:</th>
		<th scope="col" colspan="2">Acciones:</th>
	</tr>
	@foreach ($objProf as $op)
	<tr>
		<td>{{ $op->objetivo }}</td>
		<td>{{ $op->des_obj }}</td>
		<td>{{ $op->principal }}</td>
		<td>{{ $op->principal_vista }}</td>
		<td>
			<button type="button" class="btn" style='background:#006699; color:#ffffff;' data-toggle="modal" data-target="#obj_profModal{{$op->id_obj}}">
				Editar
			</button>
			@include('contCV.edit_objProf')
			{{--<a class="btn btn-primary" href="javascript:window.open('objetivo/{{$op->id_obj}}','Editar Objetivo.','width=628,height=550,left=50,top=50,toolbar=yes');void 0">Editar</a>--}}
		</td>

		{!!Form::open(['route'=> ['objetivo.destroy',$op->id_obj],'method'=>'DELETE'])!!}
		<td>{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}</td>
		{!!Form::close()!!}
	</tr>
	@endforeach
</table>