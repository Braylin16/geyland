<?php

 // sacar todos los usuarios registrados recientemente
 $stetament = $conexion->prepare(
    "SELECT 
    users.id_user,
    users.name,
    users.surname,
    users.photo_profile,
    publication.id_pub,
    publication.id_user_pub,
    publication.messeger_pub,
    publication.photo_pub,
    publication.create_at_pub 
  FROM
    publication 
    INNER JOIN users ON users.id_user = publication.id_user_pub 
  WHERE publication.id_user_pub = $user
  ORDER BY publication.id_pub DESC 
  LIMIT 10 "
);

$stetament->execute(array());
$result = $stetament->fetchAll();