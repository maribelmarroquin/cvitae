<h3>Resúmenes Registrados:</h3>

<div class="table-responsive-md">
<table class="table">	
	@foreach ($resumen as $re)
	<tr>
		<th class="table-dark">Título:</th>
		<td>{{ $re->titulo }}</td>
	</tr>
	<tr>
		<th class="table-dark">Resumen:</th>
		<td>{{ $re->resumen }}</td>
	</tr>
	<tr>
		<th class="table-dark">Acciones:</th>
		<td>
			{{--<a class="btn btn-primary" href="javascript:window.open('principal/{{$re->id_resumen}}','Editar Conocimientos informáticos e idiomas.','width=628,height=550,left=50,top=50,toolbar=yes');void 0">Editar</a>--}}
			<button type="button" class="btn" style='background:#006699; color:#ffffff;' data-toggle="modal" data-target="#resumenModal">
				Editar
			</button>
			
			{!!Form::open(['route'=> ['principal.destroy',$re->id_resumen],'method'=>'DELETE'])!!}{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}{!!Form::close()!!}
		</td>
	</tr>
	<tr>
		<th class="table-dark">En PDF:</th>
		<td>{{$re->principal}}</td>
	</tr>
	<tr>
		<th class="table-dark">En consulta web:</th>
		<td>{{$re->principal_vista}}</td>
	</tr>
	@endforeach
	<tr>
		<td colspan="2" >{{ $resumen->appends(['tab'=>'resumen'])->links() }}</td>
	</tr>
</table>
@include('contCV.edit_resumen')
</div>
