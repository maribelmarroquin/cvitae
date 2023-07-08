
<html>
<head>

  <link rel="stylesheet" type="text/css" href={{$design}}>
  <?php setlocale(LC_TIME, "Spanish") ?>
</head>
<body>
<!--------------------------------------If de validación de datos vacíos-------------------------------------------->

@if(count($resumen) ==! 0 && count($datosP) ==! 0)

@foreach ($datosP as $dp)

@endforeach
@foreach ($resumen as $r)

@endforeach
<div class="principal">
  <header>
    <h2 class="txt_header">{{ $r->titulo }}</h2>
    <h3 class="txt_header">{{ $dp->nombre }}</h3>
  </header>

  @if($dp->ruta ==! "")
  <img src="{{asset("storage/$name_user/id/$dp->ruta")}}" class="img_id" />
  {{--<img class="img_id" src="id/{{ $dp->ruta }}">--}}
  @else
  <h5 class="sin_foto">Ingrese una fotografía en el sistema.</h5>
  @endif

<!--------------------------------------datos Personales-------------------------------------------->

<div class="datos">
	<p class="domicilio">Domicilio: <br><b>{{ $dp->direccion }}</b></p>
	<p class="txt_datos">
		<span class="edad"><img src="open-iconic/png/eye.png"></span> Edad: <br><b>{{ \Carbon\Carbon::parse($dp->fecha_nac)->age }} años</b> <br><br>
		<span class="telefono"><img src="open-iconic/png/eye.png"></span> Teléfono/celular: <br> <b>{{ $dp->telefono }}</b>  <br><br>
		<span class="email"><img src="open-iconic/png/eye.png"></span> E-mail: <br><b>{{ $dp->email_u }}</b> <br><br>

@if($dp->sitio ==! "")
		<span class="sitio"><img id="pin" src="open-iconic/png/eye.png"></span> Sitio web: <br><b>{{ $dp->sitio }}<br></b>
@endif
	</p>
	<div class="border_bottom"> </div>
</div>

<!--------------------------------------Resumen-------------------------------------------->
<div class="resumen">
	<h4>Extracto Profesional</h4>
	<p>
		{{ $r->resumen }}
	</p>
</div>
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
	<h4>Formación Académica</h4>
	@foreach ($formAca as $fa)
	<div class="form">

		<div class="form_dur">{{ strftime("%B de %Y", strtotime($fa->ano_ini)) }} a
            @if(!empty($fa->ano_fin))
                {{ strftime("%B de %Y", strtotime($fa->ano_fin)) }}</div>
            @else
                Cursando Actualmente</div>
            @endif
		<div class="fa">
			{{ $fa->nivel }}<br>
			@if (!empty($fa->especialidad))
			<strong><div class="especialidad">{{ $fa->especialidad }}</div></strong>
			@endif
			{{ $fa->instituto }}<br>
			<div class="doc_form">{{ $fa->doc }}</div>
		</div>
	</div>
	@endforeach
</div>

@else
	<h5 class="form_aca">Faltaregistrar su información académica.</h5>
@endif

<!--------------------------------------Experiencia Profesional-------------------------------------------->
@if(count($expProf) ==! 0)
<div class="exp_prof">
	<h4>Experiencia Laboral</h4>
	@foreach ($expProf as $ep)
	<div class="experiencia">
		<div class="ep">

			<div class="duracion"><span class="icon_empleo"></span>{{ strftime("%B de %Y", strtotime($ep->inicio_lab)) }}
                @if(!empty($ep->fin_lab))
                    a {{ strftime("%B de %Y", strtotime($ep->fin_lab)) }}</div>
                @else
                   - Laborando Actualmente</div>
                @endif
			<div class="empresa"><span class="auxiliar">Puesto de</span><strong>{{ $ep->cargo }}</strong><span class="auxiliar">en: </span><br><i>{{ $ep->empresa }}</i></div>
		</div>
		<div class="funciones">
			<span class="fun"><span class="label_funciones">Funciones: </span>{{ $ep->funciones }}</span><br>
			@if ($ep->herramientas != null || $ep->herramientas!= '' || !empty($ep->herramientas))
				<div class="herramientas"><span class="label_funciones">Herramientas utilizadas: </span>{{ $ep->herramientas }}</div>
			@endif
			<div class="logros"><strong>Logros:</strong> <span class="fun">{{ $ep->logros }}</span></div>
		</div>
	</div>
	@endforeach
</div>
@else
	<h5 class="exp_prof">Falta por registrar su experiencia profesional.</h5>
@endif
</div>

<div class="grid2">
<!--------------------------------------Conocimientos-------------------------------------------->

@if(count($idioInfo) ==! 0)
<div class="idio_info">
	<h4>Conocimientos</h4>
	@foreach ($idioInfo as $ii)
		<div class="ii">
			{{ $ii->idi_info }}:<br>
			<div class="ii_bar">
				<div class="ii_percent" style="width:{{ $ii->nivel }};">{{ $ii->nivel }}</div>
			</div>
		</div>
		@endforeach
</div>
@else

@endif

<div class="form_otro">
	<!--------------------------------------Formación EXRA-ACADÉMICA-------------------------------------------->
	@if(count($formExAca) ==! 0)
	<div class="form_exaca">
		<h4>Formación Extra-académica</h4>
		@foreach ($formExAca as $fea)
			<div class="fe">
				<p>{{ $fea->curso }}:</p>
				<div class="fe_des"><b>{{ $fea->desc }}</b></div>
				<p>{{ $fea->instituto }}<br>
				<b>{{ $fea->duración }}</b><br>
				{{ $fea->doc_ex }}</p>
			</div>
			<div class="fe_div"> </div>
			@endforeach
	</div>
	@else

	@endif

	<!--------------------------------------Otros datos-------------------------------------------->
	@if(count($otros) ==! 0)
	<div class="otros">
		<h4>Datos Adicionales</h4>
		<ul class="lis_o">
			@foreach ($otros as $o)
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

<!--------------------------------------Objetivo Profesional-------------------------------------------->
@if(count($objProf) ==! 0)
<div class="obj_prof">
	<h4>Objetivo Profesional</h4>
	<div class="txt_obj_prof">
		@foreach($objProf as $op)
		@if ($op->objetivo ==! null)
		<div class="objetivo">{{$op->objetivo}}</div>
		@endif
		<div class="des_obj">{{$op->des_obj}}</div>
		@endforeach
	</div>
</div>
@else

@endif

</div>
<!--------------------------------------footer-------------------------------------------->

<footer></footer>
<!----------------------------------------ELSE del if de validación de datos vacíos------------------------------->

</body>
</html>
