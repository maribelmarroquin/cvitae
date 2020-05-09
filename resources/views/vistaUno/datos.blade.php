<ul>
	<li><img src="open-iconic/png/calendar-3x.png"> {{ $dp->fecha_nac }} años</li>
	<li><img src="open-iconic/png/map-marker-3x.png"> {{ $dp->lugar_nac }}</li>
	<li><img src="open-iconic/png/person-3x.png"> {{ $dp->edo_civil }}</li>
	<li><img src="open-iconic/png/map-marker-3x.png"> {{ $dp->direccion }}</li>
	<li><img src="open-iconic/png/phone-3x.png"> {{ $dp->telefono }}</li>
	<li><img src="open-iconic/png/envelope-closed-3x.png"> <a href="mailto:{{ $dp->email_u }}" style="text-decoration: none;">{{ $dp->email_u }}</a></li>
	<li><img src="open-iconic/png/globe-3x.png"> <a href="{{ $dp->sitio }}" style="text-decoration: none;">{{ $dp->sitio }}</a></li>
</ul>