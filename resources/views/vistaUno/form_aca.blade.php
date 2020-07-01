<h1>Formación Académica</h1>
<div class="tarjetas">
	@foreach ($formAca as $fa)
	<div class="tarjeta">
		<div class="tarjeta_icon">
			<img src="open-iconic/png/book-6x.png">		
		</div>
		<p>
			<h5>{{ $fa->nivel }}</h5>
			{{ $fa->especialidad }}
			<h5>{{ $fa->instituto }}</h5>
			{{ $fa->ano_ini }} - {{ $fa->ano_fin }}<br>
			<b>{{ $fa->doc }}</b><br>
		</p>
			@if (!empty($fa->ruta_doc))
			<button type="button" class="btn_evidencia" data-toggle="modal" data-target="#fa_evidencia{{$fa->order_fa}}">
				Evidencia
			</button>
			@include('vistaUno.evidencia_form_aca')
			@endif
	</div>
	
	@endforeach
</div>