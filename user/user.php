<?php

// Sacar todos los datos de la persona que ha iniciado sesion
$stmt = $conexion->query("SELECT * FROM users WHERE email = '$email'");
$stmt->execute(['email' => $email]);
while ($row = $stmt->fetch()) {
    $id_user = $row['id_user'];
    $name = $row['name'];
    $surname = $row['surname'];
    $nick = $row['nick'];
    $email = $row['email'];
    $description = $row['description'];
    $foto_profile = $row['photo_profile'];
    $photo_cover = $row['photo_cover'];
    $orientation = $row['orientation'];
    $roll = $row['roll'];
    $day = $row['day'];
    $month = $row['month'];
    $year = $row['year'];
    $create_at = $row['create_at_user'];

    $id_user = (int)$id_user;
}