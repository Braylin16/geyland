<?php

 // Sacar todos los mensajes no leidos
 $stetament = $conexion->prepare(
    "SELECT id_messege, COUNT(id_messege) AS countNoti FROM messege WHERE `view` = 'No' AND id_receptor = $id"
);

$stetament->execute(array());
while ($result = $stetament->fetch()) {   
    // cantidad de mensajes no leidos
    $noti = $result['countNoti'];
    $noti = (int)$noti;
}