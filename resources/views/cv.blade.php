@extends('templates/template')

@section('titulo', 'Bienvenid@')

@section('contenido')

<a href="#up" title="Ir arriba"><img class="ir-arriba" src="{{ asset('img/up.png') }}" /></a>

<div class='session'>
  Usuario logueado: {!! Auth::user()->name !!} | {!! Auth::user()->email !!}
  <a href="logout">Cerrar Sesión</a>
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
    <button class="tablinks" onclick="openTab(event, 'exportar')">Exportar Resumen de Curriculum</button>
    <button class="tablinks" onclick="openTab(event, 'consulta')">¿Quien ha consultado?</button>
    <button href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="menuResponsive()">&#9776;</button>
  </div>

  <div id="resumen" class="tabcontent">
    @include('contCV.resumen')
  </div>

  <div id="dat_pers" class="tabcontent">
    @include('contCV.datosPers')
  </div>

  <div id="form_aca" class="tabcontent">
    @include('contCV.formAca')
  </div>

  <div id="form_exaca" class="tabcontent">
    @include('contCV.formExAca')
  </div>

  <div id="idi_in" class="tabcontent">
    @include('contCV.idioInfo')
  </div>

  <div id="exp_prof" class="tabcontent">
    @include('contCV.expProf')
  </div>

  <div id="otr_dat" class="tabcontent">
    @include('contCV.otrosDat')
  </div>

  <div id="obj_prof" class="tabcontent">
    @include('contCV.objProf')
  </div>

  <div id="exportar" class="tabcontent">
    @include('contCV.exportar')
  </div>
  <div id="consulta" class="tabcontent">
    @include('contCV.consulta')
  </div>
</div>

<script>
  document.getElementById("defaultOpen").click();
</script>

@endsection
