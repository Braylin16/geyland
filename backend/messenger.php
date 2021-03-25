<?php
 // Sacar los usuarios con los que he tenido una conversacion
 $stetament = $conexion->prepare(
  "SELECT t.*
  , if( t.ultimo_id_messege_rec > t.ultimo_id_messege_env
      , umr.create_at_messege
      , ume.create_at_messege
      ) create_at_messege
  , if( t.ultimo_id_messege_rec > t.ultimo_id_messege_env
      , umr.messege
      , ume.messege
      ) messege
  , if( t.ultimo_id_messege_rec > t.ultimo_id_messege_env
      , umr.view
      , ume.view
      ) view
FROM ( SELECT u.id_user
           , m.id_emisor
           , u.name
           , u.surname
           , u.photo_profile
           , count( if( m.view = 'No', 1, null) ) countMessege
           , max(m.id_messege) ultimo_id_messege_rec
           , ( SELECT max(id_messege)
                 FROM messege
                 WHERE id_emisor = $id
                   AND id_receptor = m.id_emisor
             ) ultimo_id_messege_env
        FROM messege m
          INNER JOIN users u
            ON u.id_user = m.id_emisor
        WHERE m.id_receptor = $id
        GROUP BY m.id_emisor
    ) t
LEFT JOIN messege umr
  ON umr.id_messege = t.ultimo_id_messege_rec
LEFT JOIN messege ume
  ON ume.id_messege = t.ultimo_id_messege_env
  ORDER BY greatest(ultimo_id_messege_rec,ultimo_id_messege_env) DESC"
);

$stetament->execute(array());
$result = $stetament->fetchAll();