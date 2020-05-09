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
  <div class="tab" id="myTab">
    <a class="menu" > Consulta de CV </a>
  </div>

  <div id="consulta" class="tabcontent" style="height: 800px;">
    <h3 class="instruccion1">Podrá visualizar el CV completo, utilizando las credenciales de acceso que se encuentra en el PDF que le fué enviado como parte del proceso de postulación para la vacante que su empresa ha ofertado.</h3>
    <h5 class="instruccion2">Como medida de seguridad, el código sólo le permitirá consultar en cuatro ocasiones el CV del postulante.</h5>
    @include('form.sesion_rec')
  </div>

</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection