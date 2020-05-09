<h1>Formación Extra-académica</h1>
<div class="tarjetas_fe">
<!-- ------------------------------------------------------------------------------------------ -->
<div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
      <h3>CURSOS</h3>
    </div>
    @foreach ($formExAca as $fe)
      @if($fe->curso === 'Curso')
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h6>{{ $fe->desc }}</h6>
            Ofrecido por: <i>{{ $fe->instituto }}</i><br>
            Duración: <i>{{ $fe->duración }}</i><br>
            Documento obtenido: <i>{{ $fe->doc_ex }}</i><br>
          </p>
          @if (!empty($fe->ruta_docex))
            <a href="{{ asset('id/'.$fe->ruta_docex)}}" target="_blank"><b>Evidencia</b></a>
          @endif
        </div>
      @endif
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ------------------------------------------------------------------------------------------ -->

<div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
      <h3>TALLERES</h3>
    </div>
    @foreach ($formExAca as $fe)
      @if($fe->curso === 'Taller')
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h6>{{ $fe->desc }}</h6>
            Ofrecido por: <i>{{ $fe->instituto }}</i><br>
            Duración: <i>{{ $fe->duración }}</i><br>
            Documento obtenido: <i>{{ $fe->doc_ex }}</i><br>
          </p>
          @if (!empty($fe->ruta_docex))
            <a href="{{ asset('id/'.$fe->ruta_docex)}}" target="_blank"><b>Evidencia</b></a>
          @endif
        </div>
      @endif
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ------------------------------------------------------------------------------------------ -->

<div id="carouselExampleInterval3" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
      <h3>CONFERENCIAS</h3>
    </div>
    @foreach ($formExAca as $fe)
      @if($fe->curso === 'Conferencias')
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h6>{{ $fe->desc }}</h6>
            Ofrecido por: <i>{{ $fe->instituto }}</i><br>
            Duración: <i>{{ $fe->duración }}</i><br>
            Documento obtenido: <i>{{ $fe->doc_ex }}</i><br>
          </p>
          @if (!empty($fe->ruta_docex))
            <a href="{{ asset('id/'.$fe->ruta_docex)}}" target="_blank"><b>Evidencia</b></a>
          @endif
        </div>
      @endif
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ------------------------------------------------------------------------------------------ -->

<div id="carouselExampleInterval4" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="2000">
      <h3>SEMINARIOS</h3>
    </div>
    @foreach ($formExAca as $fe)
      @if($fe->curso === 'Seminario')
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h6>{{ $fe->desc }}</h6>
            Ofrecido por: <i>{{ $fe->instituto }}</i><br>
            Duración: <i>{{ $fe->duración }}</i><br>
            Documento obtenido: <i>{{ $fe->doc_ex }}</i><br>
          </p>
          @if (!empty($fe->ruta_docex))
            <a href="{{ asset('id/'.$fe->ruta_docex)}}" target="_blank"><b>Evidencia</b></a>
          @endif
        </div>
      @endif
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ------------------------------------------------------------------------------------------ -->
</div>