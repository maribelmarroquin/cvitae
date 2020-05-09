@extends('templates/template')

@section('titulo', 'Bienvenid@')

@section('contenido')

<a href="#up" title="Ir arriba"><img class="ir-arriba" src="{{ asset('img/up.png') }}" /></a>

<div class='session'>
  Usuario logueado: {!! Auth::user('consulta_cv')->user_cons !!}
  <a href="logoutCons">Cerrar Sesión</a>
</div>

@foreach ($datosP as $dp)

@endforeach

<div class="titulo_cv">
  <h1>{{ $dp->profesion }}</h1>
  <h3>{{ $dp->nombre }}</h3>
</div>

<div class="article">
  <div class="tab" id="myTab">
    <a class="menu" >Menú</a>
    <button class="tablinks" onclick="openTab(event, 'resumen')" id="defaultOpen">Resumen Profesional</button>
    <button class="tablinks" onclick="openTab(event, 'dat_pers')">Datos Personales</button>
    <button class="tablinks" onclick="openTab(event, 'form_aca')">Formación Académica</button>
    <button class="tablinks" onclick="openTab(event, 'form_exaca')">Formación Extra-académica</button>
    <button class="tablinks" onclick="openTab(event, 'idi_in')">Idiomas e Informática</button>
    <button class="tablinks" onclick="openTab(event, 'exp_prof')">Experiencia Profesional</button>
    <button class="tablinks" onclick="openTab(event, 'otr_dat')">Otros Datos de Interés</button>
    <button class="tablinks" onclick="openTab(event, 'obj_prof')">Objetivo Profesional</button>
    <button class="tablinks" onclick="openTab(event, 'despedida')">Despedida</button>
    <button href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="menuResponsive()">&#9776;</button>
  </div>

  <div id="resumen" class="tabcontent">
    @include('container.vresumen')
  </div>

  <div id="dat_pers" class="tabcontent">
    @include('container.vdatosp')
  </div>

  <div id="form_aca" class="tabcontent">
    @include('container.vformaca')
  </div>

  <div id="form_exaca" class="tabcontent">
    @include('container.vformexaca')
  </div>

  <div id="idi_in" class="tabcontent">
    @include('container.vidiinf')
  </div>

  <div id="exp_prof" class="tabcontent">
    @include('container.vexpprof')
  </div>

  <div id="otr_dat" class="tabcontent">
    @include('container.votros')
  </div>

  <div id="obj_prof" class="tabcontent">
    @include('container.vobjprof')
  </div>

  <div id="despedida" class="tabcontent">
    @include('container.despedida')
  </div>
</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection