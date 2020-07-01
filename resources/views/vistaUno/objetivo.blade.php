<div class="header_op">
	<h1>Objetivo Profesional</h1>
</div>
<div class="body_op">
@foreach ($objProf as $op)
<table>
	@if ($op->objetivo !== null)
	<tr><td><h5>{{ $op->objetivo }}</h5></td></tr>
	@endif
	<tr><td>{{ $op->des_obj }}</td></tr>
</table>
@endforeach
</div>