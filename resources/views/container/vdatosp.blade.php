
<div class="card text-center" style="width: 93.5%">
  <div class="card-header" style="background-color: #134A78; color: #ffffff;">
    <h4>Datos Personales</h4>
  </div>
  <div class="card-body">
    <p class="card-text" style="font-size: 19px;">
    <img class="id_img_v" src="{{ asset('id/'.$dp->ruta)}}"><br>
	Mi nombre es <span style="color: #134A78; font-weight: bold;">{{ $dp->nombre }}.</span> <br>
	Estudié la carrera <span style="color: #134A78; font-weight: bold;">{{ $dp->profesion }}.</span><br>
	Nací el día <span style="color: #134A78; font-weight: bold;">{{ $dp->fecha_nac }}</span>, en la cuidad de <span style="color: #134A78; font-weight: bold;">{{ $dp->lugar_nac }}.</span><br>
	Actualmente soy <span style="color: #134A78; font-weight: bold;">{{ $dp->edo_civil }}.</span><br>
	Me encuentro recidiendo en <span style="color: #134A78; font-weight: bold;">{{ $dp->direccion }}.</span> <br>
	Puedes contactarme al teléfono <span style="color: #134A78; font-weight: bold;">{{ $dp->telefono }}</span>, o al correo <span style="color: #134A78; font-weight: bold;"><a href="mailto:{{ $dp->email_u }}">{{ $dp->email_u }}</a></span><br>
	@if (!empty($dp->sitio))
		Mi sitio web es <span style="color: #134A78; font-weight: bold;"><a href="{{ $dp->sitio }}">{{ $dp->sitio }}</a></span><br>
	@endif
    </p>
  </div>
</div>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px; margin-left:36%" onclick="openTab(event, 'resumen')"> < </button>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px;" onclick="openTab(event, 'form_aca')"> > </button>