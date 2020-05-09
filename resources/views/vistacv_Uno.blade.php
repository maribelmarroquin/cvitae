@extends('vistaUno/template_vistaUno')

@section('titulo', 'Bienvenid@')

@section('contenido')

<div class='session'>
  Usuario logueado: <b>{!! Auth::user('consulta_cv')->user_cons !!}</b>
  <a href="logoutCons" style="text-decoration: none;">Cerrar Sesión</a>
</div>

	@foreach ($datosP as $dp)

	@endforeach

	<div class="titulo">
		@include('vistaUno.titulo')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="resumen">
		@include('vistaUno.resumen')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="datos">
		@include('vistaUno.datos')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="form_aca">
		@include('vistaUno.form_aca')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="form_exaca">
		@include('vistaUno.form_exaca')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="exp_prof">
		@include('vistaUno.exp_prof')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="comp_ing">
		@include('vistaUno.comp_ing')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="oo">
		<div class="otros">
			@include('vistaUno.otros')
		</div>
<!-- ---------------------------------------------------- -->
		<div class="objetivo">
			@include('vistaUno.objetivo')
		</div>
	</div>
<!-- ---------------------------------------------------- -->
	<div class="email">
		@include('vistaUno.email')
	</div>
<!-- ---------------------------------------------------- -->
@endsection