<h1>OTROS DATOS DE INTERÉS</h1>
@foreach ($otros as $o)

<table>
	<tr><td>{{ $o->dato }}</td></tr>
	<tr><td>{{ $o->des_dato }}</td></tr>
	<tr><td><img class="id_img_v" src="{{ asset('id/'.$o->ruta_dato)}}"></td></tr>
</table>

@endforeach