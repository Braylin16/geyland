<?php

$errors = '';
$success = '';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $nick = $_POST['nick'];
    $description = $_POST['description'];

    // Que los nombres no nos lleguen vacios
    if(empty($name)){
        $errors = 'Has dejado tu nombre vacio <br />';
    }

    if(empty($surname)){
        $errors .= 'No has colocado tu apellido <br />';
    }

    // Limpiar datos
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);

    $surname = htmlspecialchars($surname);
    $surname = trim($surname);
    $surname = filter_var($surname, FILTER_SANITIZE_STRING);

    $nick = htmlspecialchars($nick);
    $nick = trim($nick);
    $nick = filter_var($nick, FILTER_SANITIZE_STRING);

    $description = htmlspecialchars($description);
    $description = trim($description);
    $description = filter_var($description, FILTER_SANITIZE_STRING);

    // Comprobar que el nombre, apellido, nick y desc tenga un limite de digitos
    $nameLen = strlen($name);
    $surnameLen = strlen($surname);
    $nickLen = strlen($nick);
    $descLen = strlen($description);

    if($nameLen <= 2){
        $errors .= '* El nombre debe tener al menos 3 carateres <br/>';
    }

    if($surnameLen <= 2){
        $errors .= '* El apellido debe tener al menos 3 carateres <br/>';
    }

    // Comprobar que el nombre y apellido no contengan mas de 30 carateres
    if($nameLen >= 30){
        $errors .= '* El nombre no debe tener mas de 30 carateres <br/>';
    }

    if($surnameLen >= 30){
        $errors .= '* El apellido no debe tener mas de 30 carateres <br/>';
    }

    if($nickLen >= 36){
        $errors .= '* Has superado el limite de 35 carateres para tu apodo <br />';
    }

    if($descLen >= 601){
        $errors .= '* Has superado el limite de 600 carateres para la descripci&oacute;n <br />';
    }

    // Una vez pasado este punto, entonces actualizamos
    if($errors == ''){
        $statement = $conexion->prepare("UPDATE users SET name = '$name', surname = '$surname', nick = '$nick', description = '$description' WHERE id_user = '$id'"
        );
        $statement->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':nick' => $nick,
            ':description' => $description,
            ':id' => $id
        ));

        $success = 'Datos actualizados correctamente';
    }

}