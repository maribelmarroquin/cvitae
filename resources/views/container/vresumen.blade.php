
<div class="card text-center" style="width: 93.5%">
  <div class="card-header" style="background-color: #134A78; color: #ffffff;">
    Resumen
  </div>
  <div class="card-body" style="color: #134A78;">
  	<div class="icon_v">
  		<img src="../open-iconic/png/document-8x.png"/>
  	</div>
    @foreach ($resumen as $res)
	
	<h1>{{ $res->titulo }}</h1>

<table class="tablasv" style="font-size: 18px;">
	<tr><td>{{ $res->resumen }}</td></tr>
</table>

@endforeach
  </div>
</div>
<button type="button" class="btn btn-outline-secondary" style="width: 150px; margin-top: 50px; font-size: 60px; padding: 10px; margin-left:42%" onclick="openTab(event, 'dat_pers')"> > </button>