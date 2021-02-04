<?php

// Si no ha iniciado sesion, sacalo de la home
function logout(){
    if(!isset($_SESSION['email'])){
        header('Location: /geyland');
    }
}

// No puedes ver esta pagina si iniciaste sesion
function notLogout(){
    if(isset($_SESSION['email'])){
        header('Location: /geyland/home');
    }
}

// Formatear fecha
function form_fecha($fecha){
    $times = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo',
            'Abril','Mayo','Junio','Julio','Agosto',
            'Septiembre','Octubre','Noviembre','Diciembre'];

    $dia = date('d', $times);
    $mes = date('m', $times) - 1;
    $anio = date('Y', $times);

    $fecha = "$dia de " . $meses[$mes] . " del $anio";
    return $fecha;

}

function getBrowserName($browser)
{
    if (strpos($browser, 'Opera') || strpos($browser, 'OPR/')) return 'Opera Mini';
    elseif (strpos($browser, 'Edge')) return 'Microsoft Edge';
    elseif (strpos($browser, 'Chrome')) return 'Google Chrome';
    elseif (strpos($browser, 'Safari')) return 'Safari';
    elseif (strpos($browser, 'Firefox')) return 'Mozilla Firefox';
    elseif (strpos($browser, 'MSIE') || strpos($browser, 'Trident/7')) return 'Internet Explorer';
   
    return 'Desconocido';
}