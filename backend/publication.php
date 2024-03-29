<?php session_start();

error_reporting(0);

require_once('../connection/connection.php');
$email = $_SESSION['email'];
require_once('../user/user.php');

 // Obtener direccion ip del cliente
$ip = $_SERVER['REMOTE_ADDR'];

 // Obtener el navegador del visitante
$browser = $_SERVER['HTTP_USER_AGENT'];

$errors = '';
$maxSize = 2097152; // 2 MB

if(isset($_POST['public']) || isset($_FILES['img'])){

    $post = $_POST['public'];
    $photo = $_FILES['img'];

    if(empty($post) and empty($photo)){
        $errors = 'Intenta publicar algo';
        echo 'Intenta publicar algo';
    }

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

        if(!is_dir('../photo')){
            mkdir('../photo', 0777);
        }

        // Movemos la img a la carpeta photo
        move_uploaded_file($photo['tmp_name'], '../photo/'.$photoName);

    }else {
        $errors .= "Lo siento, no aceptamos esta extension $photoName";
        echo "Lo siento, no aceptamos esta extension $photoName";
    }

   // Limpiar
    $post = htmlspecialchars($post);
    $post = trim($post);
    $post = filter_var($post, FILTER_SANITIZE_STRING);

   // Si no hay errores, guardamos la pub en la BD
    if($errors == ''){
        $statement = $conexion->prepare('INSERT INTO publication (id_pub, id_user_pub, messeger_pub, photo_pub, ip_pub, browser_pub, create_at_pub) VALUES(
            null, :id, :post, :photoName, :ip, :browser, NOW())'
        );
        $statement->execute(array(
            ':id' => $id,
            ':post' => $post,
            ':photoName' => $photoName,
            ':ip' => $ip,
            ':browser' => $browser
        ));

    }
}