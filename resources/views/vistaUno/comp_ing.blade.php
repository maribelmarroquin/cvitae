<h1>Conocimientos Informáticos e Idiomas</h1>
<div class="columnas">
	<table class="tabla">	
	<thead class="encabezado">
		<tr>
			<th scope="col" align="center" style="width: 40%;">Idioma o Conocimiento Informático:</th>
			<th scope="col" align="center">Nivel:</th>
		</tr>
	</thead>
	<tbody>
	@foreach ($idioInfo as $ii)
		<tr class="fila">
			<td align="right">{{ $ii->idi_info }}</td>
			<!-- <td>{{ $ii->nivel }}</td> -->
			<td>
				<div class="metrica">
  					<div class="metrica_total" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:{{ $ii->nivel }}">{{ $ii->nivel }}</div>
				</div>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
</div>