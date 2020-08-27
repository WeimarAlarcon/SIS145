function cargar(pagina) {
    var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
    ajax.open("get", pagina, true); //a quien llamara
    ajax.onreadystatechange = function() { // funcion de respuesta
        if (ajax.readyState == 4) {
            document.getElementById("Descripcion").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
    ajax.send(); //llamar a la pagina
}

function enlaces(pagina) {
    var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
    ajax.open("get", pagina, true); //a quien llamara
    ajax.onreadystatechange = function() { // funcion de respuesta
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
    ajax.send(); //llamar a la pagina
}

function selection(){
    //alert("entro");
    var ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
    var radio = document.getElementsByName("carrera");
    //alert(radio[0].checked);
    //alert(radio[1].checked);

    if (radio[0].checked){
        pagina="sistemas.html";
    }
    else if(radio[1].checked){
        pagina="ciencias.html";
    }
    ajax.open("get", pagina, true); //a quien llamara
    ajax.onreadystatechange = function() { // funcion de respuesta
        if (ajax.readyState == 4) {
            document.getElementById("Descripcion").innerHTML = ajax.responseText;
        }
    }
    //ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8"); //cabecera
    ajax.send(); //llamar a la pagina
}

//var answer_mode = 0;
function clear1() {
    document.forms["tecla"].txtPassword.value = "";
}
function clear() {
    clear1();
}
function number(ch) {
    //if (answer_mode) {
    //clear1();
    //answer_mode = 0;
    //}
    document.forms["tecla"].txtPassword.value += ch;
    var hoja=ch
}