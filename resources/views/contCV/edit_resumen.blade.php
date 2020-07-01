<div class="modal fade" data-backdrop="static" data-keyboard="false" id="resumenModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
	  <div class="modal-content">
		@foreach ($resumen as $res)

		@endforeach
		<div class="modal-header">
		  	<h5 class="modal-title" id="exampleModalLongTitle">
				<h3>Editar Resumen: "{{ $res->titulo }}"</h3>
			</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		
		<div class="modal-body">

			@if(count($errors) > 0)
			<div class="errors alert alert-danger alert-dismissible" role="alert">
				<h5>Valide lo siguiente:</h5>
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
			</div>
		@endif
		
		<table>
			{!! Form::model($res, ['route' => ['principal.update', $res->id_resumen], 'method' => 'PUT']) !!}
			<tr>
				<th>{!!Form::label('titulo', '*Título:')!!}</th>
				<td>{!!Form::text('titulo', null, array('class'=>'form-control border-secondary rounded-pill', 'maxlength'=>'80', 'required'))!!}</td>
			</tr>
			<tr>
				<th>{!!Form::label('resumen', '*Resumen:')!!}</th>
				<td>{!!Form::textarea('resumen', null, array('class'=>'form-control border-secondary rounded', 'maxlength'=>'600', 'required'))!!}</td>
			</tr>
			<tr>
				<th>{!!Form::label('principal', '¿Mostrar en PDF?')!!}</th>
				<td>{!!Form::checkbox('principal', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
			</tr>
			<tr>
				<th>{!!Form::label('principal_vista', '¿Mostrar en consulta web?')!!}</th>
				<td>{!!Form::checkbox('principal_vista', 'yes', true, array('class'=>'form-control border-secondary rounded'))!!}</td>
			</tr>
			<tr><td colspan="2">* Campos Obligatorios</td></tr>
		</table>

		</div>
		
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		  {!! Form::submit('Guardar Cambios', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}
		</div>
		{!!Form::close()!!}
	  </div>
	</div>
  </div>

{{--

@extends('templates/edit')

@section('titulo', 'Bienvenid@')

@section('contenido')


@foreach ($resumen as $res)

@endforeach

<h3 align="center">Editar resumen "{{ $res->titulo }}"</h3>

@if(count($errors) > 0)
	<div class="errors alert alert-danger alert-dismissible" role="alert">
		<h5>Valide lo siguiente:</h5>
		<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
	</div>
@endif

<table>
	{!! Form::model($res, ['route' => ['principal.update', $res->id_resumen], 'method' => 'PUT']) !!}
	<tr>
		<th>{!!Form::label('titulo', 'Título:')!!}</th>
		<td>{!!Form::text('titulo', null, array('class'=>'form-control border-secondary rounded-pill'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('resumen', 'Resumen:')!!}</th>
		<td>{!!Form::textarea('resumen', null, array('class'=>'form-control border-secondary rounded'))!!}</td>
	</tr>
	<tr>
		<th>{!!Form::label('principal', 'Mostrar en PDF:')!!}</th>
		<td>{!!Form::checkbox('principal', 'yes', true)!!}</td>
	</tr>
	<tr>
		<td></td>
		<td>{!! Form::submit('Guardar Cambios', array('class'=> 'btn', 'style' => 'background:#006699; color:#ffffff;')) !!}</td>
	</tr>
	{!!Form::close()!!}
</table>

@endsection

--}}