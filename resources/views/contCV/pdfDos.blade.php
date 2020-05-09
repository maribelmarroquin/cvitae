<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/pdfUno.css">
</head>
<body>
@if (count($resumen) ==! 0 || count($datosP) ==! 0 || count($formAca) ==! 0 || count($idioInfo) ==! 0 || count($formExAca) ==! 0 || count($expProf) ==! 0 || count($otros) ==! 0 )

@if(count($resumen) ==! 0 && count($datosP) ==! 0)

@foreach ($datosP as $dp)

@endforeach
@foreach ($resumen as $r)

@endforeach
  <header>
    <h2 class="txt_header">{{ $r->titulo }}</h2>
    <h3 class="txt_header">{{ $dp->nombre }}</h3>
    <h4 class="txt_header" style="font-style: italic;">{{ $dp->profesion }}</h4>
  </header>

  @if($dp->ruta ==! "")
  <img class="img_id" src="id/{{ $dp->ruta }}">
  @else
  <h5 class="sin_foto">Ingrese una fotografía en el sistema.</h5>
  @endif

<div class="datos">
<ul>
	<h5 class="txt_datos"><li>Feha de nacimiento: <b>{{ $dp->fecha_nac }}</b></li></h5>
	<h5 class="txt_datos"><li>Teléfono: <b>{{ $dp->telefono }}</b></li></h5>
	<h5 class="txt_datos"><li>E-mail: <b>{{ $dp->email_u }}</b></li></h5>
	<h5 class="txt_datos"><li>Sitio web: <b>{{ $dp->sitio }}</b></li></h5>
</ul>
</div>
<div class="resumen">
	<p>
		{{ $r->resumen }}
	</p>
</div>

@else
<header>
	<h5 class="txt header">No ha registrado sus datos personales y su resumen profesional.</h5>
</header>
@endif
<div class="grid1">
	
<!--------------------------------------Formación ACADÉMICA-------------------------------------------->
@if(count($formAca) ==! 0)
<div class="form_aca">
	<h4 align="center">FORMACIÓN ACADÉMICA</h4>
	@foreach (array_reverse($formAca) as $fa)
		<div class="fa">
			<p>{{ $fa->nivel }}<br>
			@if (!empty($fa->especialidad))
			<strong>{{ $fa->especialidad }}</strong><br>
			@endif
			{{ $fa->instituto }}<br>
			{{ $fa->ano_ini }} - {{ $fa->ano_fin }}<br>
			{{ $fa->doc }}</p>
		</div>
		@endforeach
</div>

@else
	<h5 class="form_aca">Falta por registrar su información académica.</h5>
@endif

<!--------------------------------------Experiencia Profesional-------------------------------------------->
@if(count($expProf) ==! 0)
<div class="exp_prof">
	<h4>EXPERIENCIA PROFESIONAL</h4>
	<ul class="lis_ep">
	@foreach (array_reverse($expProf) as $ep)
		<li><div class="ep">
		{{ $ep->empresa }}<br>
			<strong>{{ $ep->cargo }}:</strong> <span class="fun">{{ $ep->funciones }}</span><br>
			{{ $ep->inicio_lab }} - {{ $ep->fin_lab }}<br>
			<strong>Logros:</strong> <span class="fun">{{ $ep->logros }}</span>
		</div></li>
		@endforeach
	</ul>
</div>
@else
	<h5 class="exp_prof">Falta por registrar su experiencia profesional.</h5>
@endif
</div>
<!--------------------------------------Formación EXRA-ACADÉMICA-------------------------------------------->
<div class="grid2">
@if(count($formExAca) ==! 0)
<div class="form_exaca">
	<h4>FORMACIÓN EXTRA-ACADÉMICA</h4>
	@foreach (array_reverse($formExAca) as $fea)
		<div class="fe">
			<p>{{ $fea->curso }}<br>
			<strong>{{ $fea->desc }}</strong><br>
			{{ $fea->instituto }}<br>
			{{ $fea->duración }}<br>
			{{ $fea->doc_ex }}</p>
		</div>
		@endforeach
</div>
@else
	
@endif

<div class="idio_otro">
<!--------------------------------------Conocimientos-------------------------------------------->

@if(count($idioInfo) ==! 0)
<div class="idio_info">
	<h4>IDIOMAS Y CONOCIMIENTOS INFORMÁTICOS</h4>
	@foreach ($idioInfo as $ii)
		<div class="ii">
			<strong>{{ $ii->idi_info }}:</strong><br>
			<div style="background_color: #9FC9DA;border_radius:5px;">
				<div style="padding_left:10px;border_radius:5px;background_color:#134A78;color: #ffffff; width:{{ $ii->nivel }};">{{ $ii->nivel }}</div>
			</div>
		</div>
		@endforeach
</div>
@else
	
@endif
<!--------------------------------------Otros datos-------------------------------------------->
@if(count($otros) ==! 0)
<div class="otros">
	<h4>DATOS ADICIONALES</h4>
	<ul class="lis_o">
		@foreach (array_reverse($otros) as $o)
		<li><div class="o">
			{{ $o->dato }}: <strong>{{ $o->des_dato }}</strong>
			</div>
		</li>
		@endforeach
	</ul>
</div>
@else
	
@endif

</div>
</div>
<!--------------------------------------footer-------------------------------------------->

<footer></footer>
@else

<h1>No cuenta con la información mínima requerida para generar su CV en formato PDF.</h1>
@endif

</body>
</html>