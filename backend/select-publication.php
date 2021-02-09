<?php

 // sacar todo lo que coicida con la busqueda
 $stetament = $conexion->prepare(
    "SELECT users.id_user, users.name, users.surname, users.photo_profile, publication.id_pub, publication.id_user_pub, publication.messeger_pub, publication.photo_pub, publication.create_at_pub FROM publication INNER JOIN users WHERE users.id_user = publication.id_user_pub"
);

$stetament->execute(array());
$result = $stetament->fetchAll();