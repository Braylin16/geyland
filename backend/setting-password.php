<?php

$errors = '';
$success = '';

if(isset($_POST['submit'])){

    $actual = $_POST['actual'];
    $nueva = $_POST['nueva'];
    $repit = $_POST['repit'];

    // Verificar que no llegue vacia
    if(empty($actual)){
        $errors = '* Cual es tu contrase&ntilde;a actual ? <br />';
    }

    if(empty($nueva)){
        $errors .= '* Elige una nueva contrase&ntilde;a <br />';
    }

    if(empty($repit)){
        $errors .= '* Tienes que repetir la contrase&ntilde;a <br />';
    }

    // Verificar que las pass nueva y repit sean las misma
    if($nueva != $repit){
        $errors .= '* La contrase&ntilde;a no coincide <br />';
    }

    // Limpiar los datos
    $actual = htmlspecialchars($actual);
    $actual = trim($actual);
    $actual = filter_var($actual, FILTER_SANITIZE_STRING);

    $nueva = htmlspecialchars($nueva);
    $nueva = trim($nueva);
    $nueva = filter_var($nueva, FILTER_SANITIZE_STRING);

    $repit = htmlspecialchars($repit);
    $repit = trim($repit);
    $repit = filter_var($repit, FILTER_SANITIZE_STRING);

    // Encriptar las contraseñas
    $actual = hash('sha512', $actual);
    $nueva = hash('sha512', $nueva);
    $repit = hash('sha512', $repit);

    // Sacar dela base de datos las password para ver si coicide con la que ha escrito el usuario
    $stmt = $conexion->query("SELECT password FROM users WHERE email = '$email'");
    $stmt->execute(['email' => $email]);
    while ($row = $stmt->fetch()) {
        $pass = $row['password'];
    }

    // Verificar que la contraseña que a introducido es la misma que existe en la base de datos
    if($pass != $actual){
        $errors .= '* La contraseña actual que has introducido no coiciden <br/>';
   }

   // Si la contraseña actual es la misma nueva, lanzamos un error
   if($pass == $nueva){
        $errors .= '* Coloca una contrase&ntilde;a diferente a la actual <br />';
   }

   // Si todo esta correcto y ha logrado pasar el filtro, actualiza los datos
   if($errors == ''){
    $statement = $conexion->prepare("UPDATE users SET password = '$nueva' WHERE email = '$email'"
    );
    $statement->execute(array(
        ':nueva' => $nueva
    ));

    $success = 'Tu contrase&ntilde;a ha sido modificada correctamente';

    }

}