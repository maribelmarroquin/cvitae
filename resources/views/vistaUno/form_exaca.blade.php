<h1>Formación Extra-académica</h1>
<div class="tarjetas_fe">

<!-- ------------------------------------------------------------------------------------------ -->
<div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="tarjeta_fe carousel-item active" data-interval="5000">
      <h3>CURSOS</h3>
    </div>
    @if (count($curso_fe) === 0)
      {{-----------------------------------------------------}}
      <div class="tarjeta_fe carousel-item" data-interval="5000">
        <p>
          <h5 class="sin_reg">Sin registros por el momento.</h5>
        </p>
      </div>
      {{-----------------------------------------------------}}
    @else
      @foreach ($curso_fe as $c_fe)
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h5>{{ $c_fe->desc }}</h5>
            Ofrecido por: <b>{{ $c_fe->instituto }}</b><br>
            Duración: <b>{{ $c_fe->duración }}</b><br>
            Documento obtenido: <b>{{ $c_fe->doc_ex }}</b><br>
          </p>
          @if (!empty($c_fe->ruta_docex))
            <a href="{{Storage::url("$name_user/docs/$c_fe->ruta_docex")}}" target="_blank"><b>Evidencia</b></a>
          @endif
          <div class="conteo_fe">{{$loop->iteration}}/{{count($curso_fe)}}</div>
        </div>
      @endforeach
    @endif
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
    <div class="tarjeta_fe carousel-item active" data-interval="5000">
      <h3>TALLERES</h3>
    </div>
    @if (count($taller_fe) === 0)
      {{-----------------------------------------------------}}
      <div class="tarjeta_fe carousel-item" data-interval="5000">
        <p>
          <h5 class="sin_reg">Sin registros por el momento.</h5>
        </p>
      </div>
      {{-----------------------------------------------------}}
    @else
      @foreach ($taller_fe as $t_fe)
        
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h6>{{ $t_fe->desc }}</h6>
            Ofrecido por: <i>{{ $t_fe->instituto }}</i><br>
            Duración: <i>{{ $t_fe->duración }}</i><br>
            Documento obtenido: <i>{{ $t_fe->doc_ex }}</i><br>
          </p>
          @if (!empty($t_fe->ruta_docex))
            <a href="{{Storage::url("$name_user/docs/$t_fe->ruta_docex")}}" target="_blank"><b>Evidencia</b></a>
          @endif
          <div class="conteo_fe">{{$loop->iteration}}/{{count($taller_fe)}}</div>
        </div>
      
      @endforeach
    @endif
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
    <div class="tarjeta_fe carousel-item active" data-interval="5000">
      <h3>CONFERENCIAS</h3>
    </div>
    @if (count($conferencias_fe) === 0)
      {{-----------------------------------------------------}}
      <div class="tarjeta_fe carousel-item" data-interval="5000">
        <p>
          <h5 class="sin_reg">Sin registros por el momento.</h5>
        </p>
      </div>
      {{-----------------------------------------------------}}
    @else
      @foreach ($conferencias_fe as $co_fe)
        
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h6>{{ $co_fe->desc }}</h6>
            Ofrecido por: <i>{{ $co_fe->instituto }}</i><br>
            Duración: <i>{{ $co_fe->duración }}</i><br>
            Documento obtenido: <i>{{ $co_fe->doc_ex }}</i><br>
          </p>
          @if (!empty($co_fe->ruta_docex))
            <a href="{{Storage::url("$name_user/docs/$co_fe->ruta_docex")}}" target="_blank"><b>Evidencia</b></a>
          @endif
          <div class="conteo_fe">{{$loop->iteration}}/{{count($conferencias_fe)}}</div>
        </div>
        
      @endforeach
    @endif
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
    <div class="tarjeta_fe carousel-item active" data-interval="5000">
      <h3>SEMINARIOS</h3>
    </div>
    @if (count($seminario_fe) === 0)
      {{-----------------------------------------------------}}
      <div class="tarjeta_fe carousel-item" data-interval="5000">
        <p>
          <h5 class="sin_reg">Sin registros por el momento.</h5>
        </p>
      </div>
      {{-----------------------------------------------------}}
    @else
      @foreach ($seminario_fe as $s_fe)
        
        <div class="tarjeta_fe carousel-item" data-interval="10000">
          <div class="tarjetafe_icon"></div>
          <p>
            <h6>{{ $s_fe->desc }}</h6>
            Ofrecido por: <i>{{ $s_fe->instituto }}</i><br>
            Duración: <i>{{ $s_fe->duración }}</i><br>
            Documento obtenido: <i>{{ $s_fe->doc_ex }}</i><br>
          </p>
          @if (!empty($s_fe->ruta_docex))
            <a href="{{Storage::url("$name_user/docs/$s_fe->ruta_docex")}}" target="_blank"><b>Evidencia</b></a>
          @endif
          <div class="conteo_fe">{{$loop->iteration}}/{{count($seminario_fe)}}</div>
        </div>
        
      @endforeach
    @endif
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