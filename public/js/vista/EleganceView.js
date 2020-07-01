/**
 * 
 *    Evento para efectos de carga de la página de vista.
 * 
 */
$(window).on('load', function(){
  $('#carga').delay(2000).fadeOut('slow');
  $("html, body").animate({
    scrollTop: 0
  }, 1000);
});

/**
 * 
 *    Evento para efectos de scroll del Título.
 * 
 */
$(window).scroll(function(){
  if($("#titulo").offset().top > 50){  
    $("#session_button").css({'transition-duration':'2s, 2s'}).addClass("session_button_small");
    $("#session").css({'transition-duration':'2s, 2s'}).addClass("session_small");
    $('#cv').css({'transition-duration':'2s, 2s'}).removeClass('cv_turn');
    $("#cv").css({'transition-duration':'2s, 2s'}).addClass("cv_small");
    $("#prof").css({'transition-duration':'2s, 2s'}).addClass("prof_small");
    $("#nombre").css({'transition-duration':'2s, 2s'}).addClass("nombre_small");
  }
  else{
    $("#session_button").css({'transition-duration':'2s, 2s'}).removeClass("session_button_small");
    $("#session").css({'transition-duration':'2s, 2s'}).removeClass("session_small");
    $("#cv").css({'transition-duration':'2s, 2s'}).removeClass("cv_small");
    $("#cv").css({'transition-duration':'2s, 2s'}).removeClass("cv_turn");
    $("#prof").css({'transition-duration':'2s, 2s'}).removeClass("prof_small");
    $("#nombre").css({'transition-duration':'2s, 2s'}).removeClass("nombre_small");
  }
});

/**
 * 
 *    Evento para efectos de Ícono de la pagina.
 * 
 */
$(document).ready(function() {
  function intervalo(){	
    function changeColor() {
        if ($('#cv').hasClass('cv_small') && !$('#cv').hasClass('cv_turn')) {
            $('#cv').css({'transition-duration':'2s, 2s'}).removeClass('cv_small');
            $('#cv').css({'transition-duration':'2s, 2s'}).addClass('cv_turn');
        }
        else if(!$('#cv').hasClass('cv_small') && $('#cv').hasClass('cv_turn')){
          $('#cv').css({'transition-duration':'2s, 2s'}).removeClass('cv_turn');
          $('#cv').css({'transition-duration':'2s, 2s'}).addClass('cv_small');
        }
    }
    setInterval(changeColor, 2000);
  }
  setInterval(intervalo, 10000);
});

/**
 * 
 *    Evento para efectos de scroll de Datos Personales.
 * 
 */
$(window).scroll(function(){
  var posicion = $("#datos").get(0).getBoundingClientRect().top;
  var pantalla = $(window).innerHeight() / 3;
    if(posicion < pantalla){
      $('.datos_img > img').css('animation', 'datos_img_mover 2s ease-out');
      $('.datos_img').css('animation', 'datos_img_brillar 2s ease-out');
    }
    else{
      $('.datos_img > img').css('animation', '');
      $('.datos_img').css('animation', '');
    }
});

/**
 * 
 *    Evento para efectos de scroll de Formación académica.
 * 
 */
$(window).scroll(function(){
  var posicion = $("#form_aca").get(0).getBoundingClientRect().top;
  var pantalla = $(window).innerHeight() / 3;
    if(posicion < pantalla){
      /*$('.tarjeta_icon > img').css('animation', 'tarjeta_icon_mover 2s ease-out');*/
      $('.form_aca > h1').css('animation', 'titulo_mover 2s ease-out');
    }
    else{
      /*$('.tarjeta_icon > img').css('animation', '');*/
      $('.form_aca > h1').css('animation', '');
    }
});

/**
 * 
 *    Evento para efectos de scroll de Conocimientos.
 * 
 */
$(window).scroll(function(){
  var posicion = $("#comp_ing").get(0).getBoundingClientRect().top;
  var pantalla = $(window).innerHeight() / 3;
    if(posicion < pantalla){
      $('.fila').css('animation', 'fila_mover 2s ease-out');
    }
    else{
      $('.fila').css('animation', '');
    }
});

/**
 * 
 *    Evento para efectos de hover de barra de Conocimientos.
 * 
 */
$(document).ready(function(){
	$(".metrica").hover(function(){
    $(".metrica_total").css("animation", "metrica_total_mover 2s ease-out");
  }, function(){
    $(".metrica_total").css("animation", "");
  });
});