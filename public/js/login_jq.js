
$(document).ready(function(){
    $(".cv").hover(function(){
        $(".article").css("animation", "colgando 2s ease-out");
    }, function(){
        $(".article").css("animation", "");
    });
});

