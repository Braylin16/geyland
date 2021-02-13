<?php

error_reporting(0);
$errors = '';

if(isset($_POST['submit'])){

    $nick = $_POST['nick'];
    $description = $_POST['description'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $orientation = $_POST['orientation'];

    // Limpiar los datos
    $nick = htmlspecialchars($nick);
    $nick = trim($nick);
    $nick = filter_var($nick, FILTER_SANITIZE_STRING);

    $description = htmlspecialchars($description);
    $description = trim($description);
    $description = filter_var($description, FILTER_SANITIZE_STRING);

    $month = htmlspecialchars($month);
    $month = trim($month);
    $month = filter_var($month, FILTER_SANITIZE_STRING);

    $orientation = htmlspecialchars($orientation);
    $orientation = trim($orientation);
    $orientation = filter_var($orientation, FILTER_SANITIZE_STRING);

    // Asegurarnos que el dia y año de nacimiento sea numerico
    $dayNU = is_numeric($day);
    $yearNU = is_numeric($year);

    if($dayNU != true){
        $errors = '* Hubo un error en tu d&iacute;a de nacimiento <br />';
    }

    if($yearNU != true){
        $errors .= '* Hubo un error en tu a&ntilde;o de nacimiento <br />';
    }

    // Restringir numero de carateres en el nick y description
    $nickLen = strlen($nick);
    $descLen = strlen($description);

    if($nickLen >= 36){
        $errors .= '* Has superado el limite de 35 carateres para tu apodo <br />';
    }

    if($descLen >= 601){
        $errors .= '* Has superado el limite de 600 carateres para la descripci&oacute;n <br />';
    }

    // Una vez pasado este punto, entonces actualizamos
    if($errors == ''){
        $statement = $conexion->prepare("UPDATE users SET nick = '$nick', description = '$description', day = '$day', month = '$month', year = '$year', orientation = '$orientation' WHERE email = '$email'"
        );
        $statement->execute(array(
            ':nick' => $nick,
            ':description' => $description,
            ':day' => $day,
            ':month' => $month,
            ':year' => $year,
            ':orientation' => $orientation
        ));

        header("Location: ../photo-profile");
    }

}