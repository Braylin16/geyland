<?php

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$success = '';
$errors = '';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $msg = $_POST['messege'];

    // Verificar que llegan los datos
    if(empty($name) OR empty($surname) OR empty($email) OR empty($msg)){
        $errors = 'No puedes dejar compos vacios';
    }

    // Limpiar los datos que nos llegan
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $surname = htmlspecialchars($surname);
    $surname = trim($surname);
    $surname = filter_var($surname, FILTER_SANITIZE_STRING);

    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    $msg = htmlspecialchars($msg);
    $msg = trim($msg);
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);

    // Si todo esta bien, entonces insertame los datos en la base de datos
    if($errors == ''){
        $statement = $conexion->prepare('INSERT INTO contact (id_contact, name, surname, email, message, ip_contact, browser_contact, create_at_contact) VALUES(
            null, :name, :surname, :email, :msg, :ip, :browser, NOW())'
        );
        $statement->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':email' => $email,
            ':msg' => $msg,
            ':ip' => $ip,
            ':browser' => $browser
        ));

        $success = 'Tu mensage se ha enviado con éxito, pronto nos pondremos en contacto contigo';
    }

}