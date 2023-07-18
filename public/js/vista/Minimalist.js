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