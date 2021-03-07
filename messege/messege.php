<?php session_start();

error_reporting(0);

require_once('../connection/connection.php');
$email = $_SESSION['email'];
require_once('../user/user.php');

// Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

// Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

// Colocar el view por defecto a "no"
$view = 'No';

$errors = '';
$maxSize = 2097152; // 2 MB

if(isset($_POST['receptor']) || isset($_POST['messege']) || isset($_FILES['photo'])){

    $messege = $_POST['messege'];
    $photo = $_FILES['photo'];
    $receptor = $_POST['receptor'];

    $receptor = (int)$receptor;

    // Si no existe no foto ni mensaje, error
    if(empty($messege) AND empty($photo)){
        $errors = 'Ha ocurrido un error en tu mensaje';
        echo 'Ha ocurrido un error en tu mensaje';
    }

    // Limpiar mensaje de injercion de datos
    $messege = htmlspecialchars($messege);
    $messege = trim($messege);
    $messege = filter_var($messege, FILTER_SANITIZE_STRING);

    // Obtenemos el nombre y la extension de la img
    $photoName = $photo['name'];

    // Obtenemos el tipo de la img
    $photoType = $photo['type'];

    // Asegurarnos que la imagen contenga un formato de img
    if($photoType == "image/jpg" || $photoType == "image/png" || $photoType == "image/jpeg" || $photoType == "image/git" || $photoType == "image/gif" || $photoType == ""){

        // Verificar el peso de la imagen
        if($photo['size'] >= $maxSize) {
            $errors .= 'La imagen pesa mucho, por favor solo 2MB';
            echo 'La imagen pesa mucho, por favor solo 2MB';
        }

        if(!is_dir('../messege-photo')){
            mkdir('../messege-photo', 0777);
        }

        // Movemos la img a la carpeta photo
        move_uploaded_file($photo['tmp_name'], '../messege-photo/'.$photoName);

    }else {
        $errors .= "Lo siento, no aceptamos esta extension $photoName";
        echo "Lo siento, no aceptamos esta extension $photoName";
    }

     // Si no hay errores, enviamos el mensaje a la Base de datos
     if($errors == ''){
        $statement = $conexion->prepare('INSERT INTO messege (id_messege, id_emisor, id_receptor, messege, photo_messege, ip_messege, browser_messege, create_at_messege, view) VALUES(
            null, :id, :receptor, :messege, :photoName, :ip, :browser, NOW(), :view)'
        );
        $statement->execute(array(
            ':id' => $id,
            ':messege' => $messege,
            ':photoName' => $photoName,
            ':receptor' => $receptor,
            ':ip' => $ip,
            ':browser' => $browser,
            ':view' => $view
        ));
    }

}