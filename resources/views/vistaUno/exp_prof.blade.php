<div class="tarjetas_ep">
<div id="carouselExampleControls" class="tarjeta_ep carousel slide" data-ride="carousel">
	<div class="contenido_ep carousel-inner">
	    <div class="titulo_ep carousel-item active" data-interval="200">
	    	<h1>Experiencia Profesional</h1>
	    </div>
	      @foreach ($expProf as $ep)
	    <div class="carousel-item" data-interval="10000">
	    	<div class="tarjetaep_icon"></div>
			<div class="tarjetaep_p">
				<h4 align="center">{{ $ep->empresa }}</h4>
				<h6>Cargo: <b>{{ $ep->cargo }}</b></h6>
				<h6>Funciones: <br><b>{{ $ep->funciones }}</b></h6>
				@if(!empty($ep->jefe))
					<h6>Cargo: <b>{{ $ep->jefe }}</b></h6>
				@endif
				@if(!empty($ep->telefono))
					<h6>No. de teléfono: <b>{{ $ep->telefono }}</b></h6>
				@endif
				<h6>Duración: <b>{{ $ep->inicio_lab }} a {{ $ep->fin_lab }}</b></h6>
				<h6>Motivos de separación: <b>{{ $ep->motivos }}</b></h6>
				<h6>Logros: <br><b>{{ $ep->logros }}</b></h6>
			</div>
		</div>
			@endforeach
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>
</div>