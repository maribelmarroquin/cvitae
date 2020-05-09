<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/pdfUno.css">
</head>
<body>
<!--------------------------------------If de validación de datos vacíos-------------------------------------------->

@if(count($resumen) ==! 0 && count($datosP) ==! 0)

@foreach ($datosP as $dp)

@endforeach
@foreach ($resumen as $r)

@endforeach
  <header>
    <h2 class="txt_header">{{ $r->titulo }}</h2>
    <h3 class="txt_header">{{ $dp->nombre }}</h3>
  </header>

  @if($dp->ruta ==! "")
  <img class="img_id" src="id/{{ $dp->ruta }}">
  @else
  <h5 class="sin_foto">Ingrese una fotografía en el sistema.</h5>
  @endif

<!--------------------------------------datos Personales-------------------------------------------->

<div class="datos">
	<p class="domicilio">Domicilio: <b>{{ $dp->direccion }}</b></p>
	<p class="txt_datos">
		Edad: <b>{{ $dp->fecha_nac }} años</b> <img src="open-iconic/png/eye.png"> Teléfono/celular: <b>{{ $dp->telefono }}</b><br> E-mail: <b>{{ $dp->email_u }}</b> <img src="open-iconic/png/eye.png"> Sitio web: <b>{{ $dp->sitio }}</b></p>
		<div class="border_bottom"> </div>
</div>

<!--------------------------------------Resumen-------------------------------------------->
<div class="resumen">
	<h4 align="center">EXTRACTO PROFESIONAL</h4>
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
		<div class="form_dur">{{ $fa->ano_ini }} - {{ $fa->ano_fin }}</div>
		<div class="fa">
			{{ $fa->nivel }}<br>
			@if (!empty($fa->especialidad))
			<strong><div class="especialidad">{{ $fa->especialidad }}</div></strong>
			@endif
			{{ $fa->instituto }}<br>
			<div class="doc_form">{{ $fa->doc }}</div>
		</div>
		@endforeach
</div>

@else
	<h5 class="form_aca">Falta por registrar su información académica.</h5>
@endif

<!--------------------------------------Experiencia Profesional-------------------------------------------->
@if(count($expProf) ==! 0)
<div class="exp_prof">
	<h4 align="center">EXPERIENCIA LABORAL</h4>
	@foreach (array_reverse($expProf) as $ep)
		<div class="ep">
			<div class="duracion">{{ $ep->inicio_lab }} - {{ $ep->fin_lab }}</div>
		<div class="empresa">Puesto de <strong>{{ $ep->cargo }}</strong> en <b>{{ $ep->empresa }}</b></div>
			 <span class="fun">{{ $ep->funciones }}</span><br>
			<div class="logros"><strong>Logros:</strong> <span class="fun">{{ $ep->logros }}</span></div>
		</div>
		@endforeach
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
			<p>{{ $fea->curso }}:</p>
			<div class="fe_des"><strong>{{ $fea->desc }}</strong></div>
			<p>{{ $fea->instituto }}<br>
			<b>{{ $fea->duración }}</b><br>
			{{ $fea->doc_ex }}</p>
		</div>
		<div class="fe_div"> </div>
		@endforeach
</div>
@else
	
@endif

<div class="idio_otro">
<!--------------------------------------Conocimientos-------------------------------------------->

@if(count($idioInfo) ==! 0)
<div class="idio_info">
	<h4>CONOCIMIENTOS</h4>
	@foreach ($idioInfo as $ii)
		<div class="ii">
			{{ $ii->idi_info }}:<br>
			<div style="background_color: #90AFC5; border-radius: 7px;">
				<div style="padding:2px 2px 2px 10px; border-radius: 7px; background_color:#336B87; color: #ffffff; width:{{ $ii->nivel }};">{{ $ii->nivel }}</div>
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
<!----------------------------------------ELSE del if de validación de datos vacíos------------------------------->

</body>
</html>