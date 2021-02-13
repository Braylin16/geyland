<?php session_start();
require_once('../connection/connection.php');
require_once('../functions/functions.php');
$email = $_SESSION['email'];
require_once('../user/user.php');
logout();

$errors = '';
$maxSize = 2097152; // 2 MB

if(isset($_POST['submit'])){

    $photo = $_FILES['photo'];

    // Verificar que nos llegue la imagen
    if(empty($photo)){
        $errors = 'Selecciona una imagen';
    }

    $photoName = $photo['name'];
    $photoType = $photo['type'];

     // Asegurarnos que la imagen contenga un formato de img
     if($photoType == "image/jpg" || $photoType == "image/png" || $photoType == "image/jpeg" || $photoType == "image/git" || $photoType == "image/gif" || $photoType == ""){

        // Verificar el peso de la imagen
        if($photo['size'] >= $maxSize) {
            $errors .= 'La imagen pesa mucho, por favor solo 2MB';
        }

        if(!is_dir('../img-profile')){
            mkdir('../img-profile', 0777);
        }

        // Movemos la img a la carpeta photo
        move_uploaded_file($photo['tmp_name'], '../img-profile/'.$photoName);

    }else {
        $errors .= "Lo siento, no aceptamos esta extension: $photoName";
    }

    // No hay problemas y pasa por nuestro filtro, dejalo registrar el producto
    if($errors == ''){
        $statement = $conexion->prepare("UPDATE users SET photo_profile = '$photoName' WHERE id_user = $id_user"
        );
        $statement->execute(array(
            ':photoName' => $photoName,
            ':id_user' => $id_user

        ));

        header("Location: ../profile?user=$id");
    }else{
        header("Location: ../photo-profile?error=$errors");
    }

}