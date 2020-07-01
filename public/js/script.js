function menuResponsive() {
    var x = document.getElementById("v-pills-tab");
    if (x.className === "tab nav flex-column nav-pills") {
        x.className += " responsive";
    } else {
        x.className = "tab nav flex-column nav-pills";
    }
}

function carg(elemento) {
    var input = document.getElementById('ano_fin1');
    var d = elemento.value;
    
    if(d == "fin"){
        input.disabled = false;
    }else{
        input.disabled = true;
    }
}

function carglab(elemento) {
    var input = document.getElementById('fin_lab1');
    var d = elemento.value;
    
    if(d == "fin"){
        input.disabled = false;
    }else{
        input.disabled = true;
    }
}

function showContent(check) {
    element = document.getElementById("especialidad_content");
    if (check.checked == true) {
        element.style.display='auto';
    }
    else {
        element.style.display='none';
    }
}