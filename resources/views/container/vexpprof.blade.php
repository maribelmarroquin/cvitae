<h1>EXPERIENCIA PROFESIONAL</h1>
@foreach ($expProf as $ep)

<table>
	<tr><td>{{ $ep->empresa }}</td></tr>
	<tr><td>{{ $ep->cargo }}</td></tr>
	<tr><td>{{ $ep->funciones }}</td></tr>
	<tr><td>{{ $ep->jefe }}</td></tr>
	<tr><td>{{ $ep->telefono }}</td></tr>
	<tr><td>{{ $ep->inicio_lab }}</td></tr>
	<tr><td>{{ $ep->fin_lab }}</td></tr>
	<tr><td>{{ $ep->motivos }}</td></tr>
	<tr><td>{{ $ep->logros }}</td></tr>
</table>

@endforeach
