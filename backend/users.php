<?php

 // sacar todos los usuarios registrados recientemente
 $stetament = $conexion->prepare(
    "SELECT id_user, name, surname, photo_profile FROM users ORDER BY id_user DESC"
);

$stetament->execute(array());
$result = $stetament->fetchAll();