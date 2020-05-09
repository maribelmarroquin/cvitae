
<div class="card text-center" style="width: 93.5%">
  <div class="card-header" style="background-color: #134A78; color: #ffffff;">
    <h4>Formación Académica</h4>
  </div>
  <div class="card-body">
    <div class="icon_v">
      <img src="../open-iconic/png/book-8x.png"/>
    </div>
    <p class="card-text">
    	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nivel Académico</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Instituto</th>
      <th scope="col">Duración</th>
      <th scope="col">Documentos obtenidos</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($formAca as $fa)
    <tr>
		<td>{{ $fa->nivel }}</td>
		<td>{{ $fa->especialidad }}</td>
		<td>{{ $fa->instituto }}</td>
		<td>{{ $fa->ano_ini }} - {{ $fa->ano_fin }}</td>
		<td>{{ $fa->doc }}</td>
		@if (!empty($fa->ruta_doc))
		<td><img class="id_img_v" src="{{ asset('id/'.$fa->ruta_doc)}}"></td>
		@endif
	</tr>
	@endforeach
  </tbody>
</table>
    </p>
  </div>
</div>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px; margin-left:36%" onclick="openTab(event, 'dat_pers')"> < </button>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px;" onclick="openTab(event, 'form_exaca')"> > </button>
