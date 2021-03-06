<?php

require_once('./connection/connection.php');

$user = $_COOKIE['user'];
$key = $_COOKIE['PH_DRgmeTSG'];

if(isset($user)){

    // sentencia para saber si lo que introduce el usuario es correcto
    $sentencia = $conexion->prepare("SELECT * FROM users WHERE email = '$user' AND password = '$key'");

    $sentencia->execute(array(
        ':user' => $user,
        ':key' => $key
    ));

    $resultado = $sentencia->fetch();

    if($resultado == true){

        $_SESSION['email'] = $user;
    }

}