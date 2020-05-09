<div class="card text-center" style="width: 93.5%">
  <div class="card-header" style="background-color: #134A78; color: #ffffff;">
    <h4>CONOCIMIENTOS EN INFORMÁTICA E IDIOMAS</h4>
  </div>
  <div class="card-body">
    <p class="card-text">
    	<table class="table">	
	<thead class="thead-dark">
		<tr>
			<th scope="col" align="center" style="width: 40%;">Idioma o Conocimiento Informático:</th>
			<th scope="col" align="center">Nivel:</th>
	</thead>
	<tbody>
	@foreach ($idioInfo as $ii)
		<tr>
			<td align="right">{{ $ii->idi_info }}</td>
			<!-- <td>{{ $ii->nivel }}</td> -->
			<td>
				<div class="progress">
  					<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:{{ $ii->nivel }}">{{ $ii->nivel }}</div>
				</div>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
    </p>
  </div>
</div>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px; margin-left:36%" onclick="openTab(event, 'form_exaca')"> < </button>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px;" onclick="openTab(event, 'exp_prof')"> > </button>