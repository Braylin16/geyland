<?php

$empty = '';

 // Extraer de la base de datos todo lo que coincida con la busqueda 
 $stetament = $conexion->prepare(
    "SELECT id_user, name, surname, photo_profile, nick, description FROM users WHERE name LIKE '%$search%' OR surname LIKE '%$search%' OR nick LIKE '%$search%' OR email LIKE '%$search%'"
);

$stetament->execute(array());
$result = $stetament->fetchAll();