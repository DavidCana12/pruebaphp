// JavaScript Document

// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {

        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatos() {

    //div donde se mostrará lo resultados
    divResultado = document.getElementById('resultado');
    //recogemos los valores de los inputs
    nom = document.programador.nombre.value;
    ape = document.programador.apellido.value;
    ced = document.programador.cedula.value;
    corr = document.programador.correo.value;
    leng = document.programador.lenguaje.value;

    //instanciamos el objetoAjax
    ajax = objetoAjax();

    //uso del medotod POST
    //archivo que realizará la operacion
    //registro.php
    ajax.open("POST", "registrar.php", true);
    //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
    ajax.onreadystatechange = function () {
        //la función responseText tiene todos los datos pedidos al servidor
        if (ajax.readyState == 4) {
            //mostrar resultados en esta capa
            divResultado.innerHTML = ajax.responseText
            //llamar a funcion para limpiar los inputs
            LimpiarCampos();
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    //enviando los valores a registro.php para que inserte los datos
    ajax.send("nombre=" + nom + "&apellido=" + ape + "&cedula=" + ced + "&correo=" + corr + "&lenguaje=" + leng)
}

//función para limpiar los campos
function LimpiarCampos() {

    document.programador.nombre.value = "";
    document.programador.apellido.value = "";
    document.programador.cedula.value = "";
    document.programador.correo.value = "";
    document.programador.lenguaje.value = "";
    document.programador.nombre.focus();
}