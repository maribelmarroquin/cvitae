<h1>OBJETIVO PROFESIONAL</h1>
@foreach ($objProf as $op)

<table>
	<tr><td>{{ $op->objetivo }}</td></tr>
	<tr><td>{{ $op->des_obj }}</td></tr>
</table>

@endforeach