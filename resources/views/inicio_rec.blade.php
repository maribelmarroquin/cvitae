@extends('templates/template')

@section('titulo', 'Bienvenid@')

@section('contenido')

<div class="titulo_cv">
  <br>
  <h1>Bienvenid@s reclutadores.</h1>
  <br>
  <br>

</div>

<div class="crop2">
  
</div>

<div class="article">
  <div class="tab nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="tablinks  active" id="v-pills-inicio-tab" data-toggle="pill" href="#inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="true">Inicio de sesión</a>
  </div>

  <div class="tab-content" id="v-pills-tabContent">

    <div class="tabcontent tab-pane fade show active" id="inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
      <h5 class="instruccion1">Podrá visualizar el CV completo, utilizando las credenciales de acceso que se encuentra en el PDF que le fué enviado como parte del proceso de postulación para la vacante que su empresa ha ofertado.</h5>
      <h6 class="instruccion2">Como medida de seguridad, el código sólo le permitirá consultar en cuatro ocasiones el CV del postulante.</h6>
      @include('form.sesion_rec')
    </div>

  </div>


</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection