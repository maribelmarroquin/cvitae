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
  <div class="tab" id="myTab">
    <a class="menu" >Menú</a>
    {{--<div class="tabs">--}}
      <button href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="menuResponsive()">&#9776;</button>
      <button class="tablinks" onclick="openTab(event, 'registro')" id="defaultOpen">Registro de nuevo usuario</button>
      <button class="tablinks" onclick="openTab(event, 'inicio')">Inicio de sesión</button>
    {{--</div>--}}
    
  </div>

  <div id="registro" class="tabcontent" style="height: 800px;">
    @include('form.registro')
  </div>

  <div id="inicio" class="tabcontent" style="height: 800px;">
    @include('form.sesion')
  </div>

</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection