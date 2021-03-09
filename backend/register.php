<?php

$roll = 'User';

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$errors = '';
$success = '';

if(isset($_POST['register'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Asegurarnos de que las variables no esten vacias
    if(empty($name)){
        $errors .= '* Cual es tu nombre ? <br />';
    }

    if(empty($surname)){
        $errors .= '* Indicanos tu apellido <br />';
    }

    if(empty($email)){
        $errors .= '* Tienes que colocar un Correo electr&oacute;nico <br />';
    }

    if(empty($pass)){
        $errors .= '* Coloca una Contrase&ntilde;a para que tu cuenta sea segura <br />';
    }

    // Limpar los datos de injecciones de codigo
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $surname = htmlspecialchars($surname);
    $surname = trim($surname);
    $surname = filter_var($surname, FILTER_SANITIZE_STRING);

    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);

    $pass = htmlspecialchars($pass);
    $pass = trim($pass);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    // Comprobamos que el correo electronico sea correcto
    if($email != true){
        $errors .= '* El email no es correcto <br />';
    }

    // Convertir a mayuscula la primera letra
    $name = ucwords($name);
    $surname = ucwords($surname);

    // Comprobar que el nombre y apellido tenga al menos 2 digitos
    $nameLen = strlen($name);
    $surnameLen = strlen($surname);

    if($nameLen <= 2){
        $errors .= '* El nombre debe tener al menos 3 carateres <br/>';
    }

    if($surnameLen <= 2){
        $errors .= '* El apellido debe tener al menos 3 carateres <br/>';
    }

    // Validar que el nombre solo contenga letras de a-z y de la A-Z
    if(!preg_match("/[a-zA-Z ]+/", $name)){
        $errors .= '* Cual es tu nombre verdadero ? <br/>';
    }

    if(!preg_match("/[a-zA-Z ]+/", $surname)){
        $errors .= '* Cual es tu apellido verdadero ? <br/>';
    }

    // Comprobar que el nombre y apellido no contengan mas de 30 carateres
    if($nameLen >= 30){
        $errors .= '* El nombre no debe tener mas de 30 carateres <br/>';
    }

    if($surnameLen >= 30){
        $errors .= '* El apellido no debe tener mas de 30 carateres <br/>';
    }

    // Validar el numero de carateres para la pass
    $passLen = strlen($pass);
    if($passLen < 6){
        $errors .= '* La contrase&ntilde;a debe tener mas de 6 carateres <br />';
    }

    if($passLen > 30){
        $errors .= '* La contrase&ntilde;a no debe tener mas de 30 carateres <br />';
    }

    // Cifrar la pass
    $pass = hash('sha512', $pass);

     // Validar que el usuario no exista en la base de datos
     $sentencia = $conexion->prepare("SELECT * FROM users WHERE email = :email");

     $sentencia->execute(array(
         ':email' => $email
     ));
 
     $result = $sentencia->fetch();
 
     // Comprobar que el email no sea repetido
     if($result != false){
         $errors .= '* Este correo electrónico ya existe, prueba otro <br />';
     }

     // Si no hay errores, registramos al usuario
     if($errors == ''){
        $statement = $conexion->prepare('INSERT INTO users (id_user, name, surname, nick, email, password, description, photo_profile, photo_cover, day, month, year, orientation, ip_user, browser_user, roll, create_at_user) VALUES(
            null, :name, :surname, null, :email, :pass, null, null, null, null, null, null, null, :ip, :browser, :roll, NOW())'
        );
        $statement->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':email' => $email,
            ':pass' => $pass,
            ':roll' => $roll,
            ':ip' => $ip,
            ':browser' => $browser
        ));

        // Guardar el email y la pass en una Cookie
        setcookie("user", "$email", time() + 31536000);
        setcookie("PH_DRgmeTSG", "$pass", time() + 31536000);
        
        $_SESSION['email'] = $email;

        header('Location: complete');
    }

}