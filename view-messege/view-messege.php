<?php

$view = 'Si';

// Actualizar y colocarla como leido
if(isset($view)){
    $statement = $conexion->prepare("UPDATE messege SET view = '$view' WHERE id_receptor = $id"
    );
    $statement->execute(array(
        ':view' => $view
    ));
}