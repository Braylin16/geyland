<?php
 // Sacar los usuarios con los que he tenido una conversacion
 $stetament = $conexion->prepare(
    "SELECT `id_user`, id_emisor, name, surname, photo_profile,
    create_at_messege, messege
    FROM (
      SELECT id_user,
        MAX(id_messege) id_messege
        FROM (
          SELECT id_receptor id_user,
            id_messege
            FROM messege
            WHERE id_emisor = $id
          UNION
          SELECT id_emisor id_user,
            id_messege
            FROM messege
            WHERE id_receptor = $id
        ) c1 GROUP BY 1  
    ) c2 JOIN messege USING(id_messege)
    JOIN users USING(id_user)
    ORDER BY id_messege DESC"
);

$stetament->execute(array());
$result = $stetament->fetchAll();