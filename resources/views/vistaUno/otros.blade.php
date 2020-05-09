<h1>Otros Datos de Interés</h1>
<ul>
@foreach ($otros as $o)

<li>{{ $o->dato }}: <b>{{ $o->des_dato }}</b></li>
	@if (!empty($o->ruta_dato))
		<a href="{{ asset('id/'.$fa->$o->ruta_dato)}}" target="_blank"><b>Evidencia</b></a>
	@endif


@endforeach
</ul>