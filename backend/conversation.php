<?php
 // Sacar el usuario de la convesacion por get
 $stetament = $conexion->prepare(
    "SELECT id_user, name, surname, photo_profile FROM users WHERE id_user = $receptor"
);

$stetament->execute(array());
$result = $stetament->fetchAll();