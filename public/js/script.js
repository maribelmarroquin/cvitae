function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    
}

// Get the element with id="defaultOpen" and click on it

function menuResponsive() {
    var x = document.getElementById("myTab");
    if (x.className === "tab") {
        x.className += " responsive";
    } else {
        x.className = "tab";
    }
}