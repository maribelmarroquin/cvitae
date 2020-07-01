@extends('templates/template')

@section('titulo', 'Bienvenid@')

@section('contenido')

<div class="titulo_cv">
  <h1>Bienvenid@</h1>
  <h3>Si no sabes como realizar tu Curriculum Vitae, éste es tu sitio.</h3>
  <h5>Éste sistema te ayudará a gestionar y actualizar tu curriculum de manera gratuita.</h5>
</div>
<div class="crop1">
  
</div>

<div class="article">

  <div class="tab nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="menu" >Menú</a>
    <a href="javascript:void(0);" class="icon" onclick="menuResponsive()">&#9776;</a>
    <a class="tablinks  active" id="v-pills-inicio-tab" data-toggle="pill" href="#inicio" role="tab" aria-controls="v-pills-inicio" aria-selected="true">Inicio de sesión</a>
    <a class="tablinks" id="v-pills-registro-tab" data-toggle="pill" href="#registro" role="tab" aria-controls="v-pills-registro" aria-selected="false">Registro de nuevo usuario</a>
  </div>

  <div class="tab-content" id="v-pills-tabContent">

    <div class="tabcontent tab-pane fade show active" id="inicio" role="tabpanel" aria-labelledby="v-pills-inicio-tab">
      @include('messages.message-correct')
      @include('messages.message-error')
      @include('form.sesion')
    </div>

    <div class="tabcontent tab-pane fade" id="registro" role="tabpanel" aria-labelledby="v-pills-registro-tab">
      @include('messages.message-correct')
      @include('messages.message-error')
      @include('form.registro')
    </div>

  </div>

</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection