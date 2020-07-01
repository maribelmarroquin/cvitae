@extends('templates/template')

@section('titulo', 'Bienvenid@')

@section('contenido')

<a href="#up" title="Ir arriba"><img class="ir-arriba" src="{{ asset('img/up.png') }}" /></a>

<div class='session'>
  Usuario logueado: {!! Auth::user()->name !!} | {!! Auth::user()->email !!}
  <a href="logout">Cerrar Sesión</a>
</div>

<div class="article">

  @if (isset($_GET["tab"]))
    <script>
      //redirect to specific tab
      $(document).ready(function () {
        $('#v-pills-tab a[href="#{{ $_GET['tab'] }}"]').tab('show')
      });
    </script>
  @else
    <script>
      
      //redirect to specific tab
      $(document).ready(function () {
        $('#v-pills-tab a[href="#{{ old('tab') }}"]').tab('show')
      });
    </script>
  @endif

      <div class="tab nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="menu" >Menú</a>
        <a href="javascript:void(0);" class="icon" onclick="menuResponsive()">&#9776;</a>
        <a class="tablinks active" id="v-pills-resumen-tab" data-toggle="pill" href="#resumen" role="tab" aria-controls="v-pills-resumen" aria-selected="true">Resumen Profesional</a>
        <a class="tablinks" id="v-pills-dat_pers-tab" data-toggle="pill" href="#dat_pers" role="tab" aria-controls="v-pills-dat_pers" aria-selected="false">Datos Personales</a>
        <a class="tablinks" id="v-pills-form_aca-tab" data-toggle="pill" href="#form_aca" role="tab" aria-controls="v-pills-form_aca" aria-selected="false">Formación Académica</a>
        <a class="tablinks" id="v-pills-form_exaca-tab" data-toggle="pill" href="#form_exaca" role="tab" aria-controls="v-pills-form_exaca" aria-selected="false">Formación Extra-académica</a>
        <a class="tablinks" id="v-pills-idi_in-tab" data-toggle="pill" href="#idi_in" role="tab" aria-controls="v-pills-idi_in" aria-selected="false">Conocimientos</a>
        <a class="tablinks" id="v-pills-exp_prof-tab" data-toggle="pill" href="#exp_prof" role="tab" aria-controls="v-pills-exp_prof" aria-selected="false">Experiencia Profesional</a>
        <a class="tablinks" id="v-pills-otr_dat-tab" data-toggle="pill" href="#otr_dat" role="tab" aria-controls="v-pills-otr_dat" aria-selected="false">Otros Datos de Interés</a>
        <a class="tablinks" id="v-pills-obj_prof-tab" data-toggle="pill" href="#obj_prof" role="tab" aria-controls="v-pills-obj_prof" aria-selected="false">Objetivo Profesional</a>
        <a class="tablinks" id="v-pills-exportar-tab" data-toggle="pill" href="#exportar" role="tab" aria-controls="v-pills-exportar" aria-selected="false">Configurar y Exportar CV</a>
        <a class="tablinks" id="v-pills-consulta-tab" data-toggle="pill" href="#consulta" role="tab" aria-controls="v-pills-consulta" aria-selected="false">¿Quien ha consultado?</a>
      </div>
    
      <div class="tab-content" id="v-pills-tabContent">

        <div class="tabcontent tab-pane fade show active" id="resumen" role="tabpanel" aria-labelledby="v-pills-resumen-tab">
          @include('contCV.resumen')
        </div>

        <div class="tabcontent tab-pane fade" id="dat_pers" role="tabpanel" aria-labelledby="v-pills-dat_pers-tab">
          @include('contCV.datosPers')
        </div>

        <div class="tabcontent tab-pane fade" id="form_aca" role="tabpanel" aria-labelledby="v-pills-form_aca-tab">
          @include('contCV.formAca')
        </div>

        <div class="tabcontent tab-pane fade" id="form_exaca" role="tabpanel" aria-labelledby="v-pills-form_exaca-tab">
          @include('contCV.formExAca')
        </div>

        <div class="tabcontent tab-pane fade" id="idi_in" role="tabpanel" aria-labelledby="v-pills-idi_in-tab">
          @include('contCV.idioInfo')
        </div>

        <div class="tabcontent tab-pane fade" id="exp_prof" role="tabpanel" aria-labelledby="v-pills-exp_prof-tab">
          @include('contCV.expProf')
        </div>

        <div class="tabcontent tab-pane fade" id="otr_dat" role="tabpanel" aria-labelledby="v-pills-otr_dat-tab">
          @include('contCV.otrosDat')
        </div>

        <div class="tabcontent tab-pane fade" id="obj_prof" role="tabpanel" aria-labelledby="v-pills-obj_prof-tab">
          @include('contCV.objProf')
        </div>

        <div class="tabcontent tab-pane fade" id="exportar" role="tabpanel" aria-labelledby="v-pills-exportar-tab">
          @include('contCV.exportar')
        </div>

        <div class="tabcontent tab-pane fade" id="consulta" role="tabpanel" aria-labelledby="v-pills-consulta-tab">
          @include('contCV.consulta')
        </div>

      </div>
    
</div>
@endsection
