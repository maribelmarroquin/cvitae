<h1>Conocimientos</h1>
<div class="columnas">
	<table class="tabla">	
		<thead class="encabezado">
			<tr>
				<th scope="col" align="center" style="width: 40%;"></th>
				<th scope="col" align="center"></th>
			</tr>
		</thead>
		<tbody>
		@foreach ($clas_ii as $ci)
			<tr><th class="clasificacion" colspan="2">{{$ci->clasificacion}}</th></tr>
			@foreach ($idioInfo as $ii)
				@if ($ci->clasificacion == $ii->clasificacion)
				<tr class="fila">
					<td align="right">{{ $ii->idi_info }}</td>
					<!-- <td>{{ $ii->nivel }}</td> -->
					<td>
						<div class="metrica" id="metrica">
							<div class="metrica_total" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:{{ $ii->nivel }}">{{ $ii->nivel }}</div>
						</div>
					</td>
				</tr>
				@endif
			@endforeach
		
		@endforeach
		</tbody>
	</table>
</div>