<div class="header_op">
	<h1>Objetivo Profesional</h1>
</div>
<div class="body_op">
@foreach ($objProf as $op)
<table>
	<tr><td>{{ $op->objetivo }}</td></tr>
	<tr><td>{{ $op->des_obj }}</td></tr>
</table>
@endforeach
</div>