@extends('vistaUno/template_vistaUno')

@section('titulo', 'Bienvenid@')

@section('contenido')
<a id="ir-arriba" href="#up" title="Ir arriba"><img class="ir-arriba" src="{{ asset('img/up.png') }}" /></a>

<div class='session' id="session">
  Usuario logueado: <b>{!! Auth::user('consulta_cv')->user_cons !!}</b><br>
  <a class="logout" href="logoutCons" >Cerrar Sesión</a>
</div>
<div class='session_button' id="session_button">
	<a title="Cerrar Sesión" class="logout" href="logoutCons" ><img src="elegance/power-standby_blanco-3x.png" ></a>
</div>

	@foreach ($datosP as $dp)

	@endforeach

	<div class="titulo" id="titulo">
		@include('vistaUno.titulo')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="resumen">
		@include('vistaUno.resumen')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="datos" id="datos">
		@include('vistaUno.datos')
	</div>
<!-- ---------------------------------------------------- -->
	<div class="form_aca" id="form_aca">
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
	<div class="comp_ing" id="comp_ing">
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
	<div class="footer_small">
		Desarrolla tu <a href="/">Curriculum Vitae</a> | Contacto: <a href="mailto:cvitae@solinfori.com">cvitae@solinfori.com</a>
	</div>
@endsection