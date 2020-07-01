<ul>
	<li data-title="Edad:">
		<div class="datos_img" id="datos_img">
			<img src="open-iconic/png/calendar-3x.png">
		</div> 
		<div class="datos_txt">
			{{ \Carbon\Carbon::parse($dp->fecha_nac)->age }} años
		</div>
	</li>
	<li data-title="Lugar de nacimiento:">
		<div class="datos_img" id="datos_img">
			<img src="open-iconic/png/map-marker-3x.png">
		</div> 
		<div class="datos_txt">
			{{ $dp->lugar_nac }}
		</div>
	</li>
	<li data-title="Estado civil:">
		<div class="datos_img" id="datos_img">
			<img src="open-iconic/png/person-3x.png">
		</div> 
		<div class="datos_txt">
			{{ $dp->edo_civil }}
		</div>
	</li>
	<li data-title="Domicilio:">
		<div class="datos_img" id="datos_img">
			<img src="open-iconic/png/home-3x.png">
		</div> 
		<div class="datos_txt">
			{{ $dp->direccion }}
		</div>
	</li>
	<li data-title="No. teléfono:">
		<div class="datos_img" id="datos_img">
			<img src="open-iconic/png/phone-3x.png">
		</div> 
		<div class="datos_txt">
			{{ $dp->telefono }}
		</div>
	</li>
	<li data-title="Correo electrónico:">
		
		<div class="datos_img" id="datos_img">
			<img src="open-iconic/png/envelope-closed-3x.png">
		</div> 
		<div class="datos_txt">
			<a href="mailto:{{ $dp->email_u }}" style="text-decoration: none;">
				{{ $dp->email_u }}
			</a>
		</div>
	</li>
	<li data-title="Sitio Web:">
		<div class="datos_img" id="datos_img">
			<img src="open-iconic/png/globe-3x.png">
		</div> 
		<div class="datos_txt">
			<a target="__blank" href="{{ $dp->sitio }}" style="text-decoration: none;">{{ $dp->sitio }}</a>
		</div>
	</li>
</ul>