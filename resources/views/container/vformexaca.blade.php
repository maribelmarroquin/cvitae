
<div class="card text-center" style="width: 93.5%">
  <div class="card-header" style="background-color: #134A78; color: #ffffff;">
    <h4>Formación Extra-académica</h4>
  </div>
  <div class="card-body">
  	<div class="icon_v">
      <img src="../open-iconic/png/clipboard-8x.png"/>
    </div>
  	
    <p class="card-text">
    	@foreach ($formExAca as $fe)
    	<table class="table">
			<tr><td colspan="2" class="table-dark" style="font-weight: bold;">{{ $fe->curso }}</td></tr>
			<tr><td style="width: 30%; font-weight: bold;" class="table-dark">Descripción: </td><td align="left">{{ $fe->desc }}</td></tr>
			<tr><td class="table-dark" style="font-weight: bold;">Ofrecido por: </td><td align="left">{{ $fe->instituto }}</td></tr>
			<tr><td class="table-dark" style="font-weight: bold;">Duración: </td><td align="left">{{ $fe->duración }}</td></tr>
			<tr><td class="table-dark" style="font-weight: bold;">Documento obtenido: </td><td align="left">{{ $fe->doc_ex }}</td></tr>
			@if (!empty($fe->ruta_docex))
			<tr><td class="table-dark" style="font-weight: bold;">Evidencia:</td><td><img class="id_img_v" src="{{ asset('id/'.$fe->ruta_docex)}}"></td></tr>
			@endif
		</table>
		@endforeach
    </p>
  </div>
</div>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px; margin-left:36%" onclick="openTab(event, 'form_aca')"> < </button>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px;" onclick="openTab(event, 'idi_in')"> > </button>