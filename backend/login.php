<?php

$errorLogin = '';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['pass'];

    // Limpiar los datos que nos llegan
    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    $password = htmlspecialchars($password);
    $password = trim($password);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $password = hash('sha512', $password);

    // sentencia para saber si lo que introduce el usuario es correcto
    $sentencia = $conexion->prepare("SELECT * FROM users WHERE email = :email AND password = :password");

    $sentencia->execute(array(
        ':email' => $email,
        ':password' => $password
    ));

    $resultado = $sentencia->fetch();

    // Si el correo y la contraseña coiciden
    if($resultado == true){

        // Guardar el email y la pass en una Cookie
        setcookie("user", "$email", time() + 31536000);
        setcookie("PH_DRgmeTSG", "$password", time() + 31536000);
        
        $_SESSION['email'] = $email;

        header("Location: $url");

    } else {
        $errorLogin .= 'Has escrito mal el correo electrónico o la contraseña';
    }
}