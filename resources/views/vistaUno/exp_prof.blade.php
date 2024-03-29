<div class="tarjetas_ep">
<div id="carouselExampleControls" class="carousel tarjeta_ep slide" data-ride="carousel">
	<div class="contenido_ep carousel-inner">
	    <div class="carousel-item titulo_ep active" data-interval="5000">
			<div class="tarjetaep_p">
				<h1>Experiencia Profesional</h1>
			</div>
	    </div>
	      @foreach ($expProf as $ep)
	    <div class="carousel-item ci" data-interval="10000">
	    	<div class="tarjetaep_icon"></div>
			<div class="tarjetaep_p">
				<h4 align="center">{{ $ep->empresa }}</h4>
				<h6>Cargo: <b>{{ $ep->cargo }}</b></h6>
				<h6>Funciones: <br><b>{{ $ep->funciones }}</b></h6>
				@if(!empty($ep->herramientas))
					<h6>Herramientas utilizadas: <b>{{ $ep->herramientas }}</b></h6>
				@endif
				@if(!empty($ep->jefe))
					<h6>Cargo: <b>{{ $ep->jefe }}</b></h6>
				@endif
				@if(!empty($ep->telefono))
					<h6>No. de teléfono: <b>{{ $ep->telefono }}</b></h6>
				@endif
				<h6>Duración: <b>{{ \Carbon\Carbon::createFromDate($ep->inicio_lab)->locale('es')->format('m-Y')}} @if(!empty($ep->fin_lab))a {{ \Carbon\Carbon::createFromDate($ep->fin_lab)->locale('es')->format('m-Y')}}@else, hasta la fecha. @endif</b></h6>
				<h6>Motivos de separación: <b>{{ $ep->motivos }}</b></h6>
				<h6>Logros: <br><b>{{ $ep->logros }}</b></h6>
			</div>
			<div class="conteo_ep">{{$loop->iteration}}/{{count($expProf)}}</div>
		</div>
			@endforeach
	</div>
	<a class="carousel-control-prev ep_prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
  	</a>
  	<a class="carousel-control-next ep_next" href="#carouselExampleControls" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  	</a>
</div>
</div>