<?php

 // sacar todos los usuarios registrados recientemente
 $stetament = $conexion->prepare(
    "SELECT id_messege, COUNT(id_messege) AS countNoti FROM messege WHERE `view` = 'No' AND id_receptor = $id"
);

$stetament->execute(array());
while ($result = $stetament->fetch()) {   
    // cantidad de Productos publicados
    $noti = $result['countNoti'];
    $noti = (int)$noti;
}