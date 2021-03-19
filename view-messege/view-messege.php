<?php

$view = 'Si';
$view = htmlspecialchars($view);
$view = trim($view);
$view = filter_var($view, FILTER_SANITIZE_STRING);
$view = (string)$view;

// Actualizar y colocarla como leido
if(isset($view)){
    $statement = $conexion->prepare("UPDATE messege SET view = '$view' WHERE id_receptor = $id AND id_emisor = $receptor"
    );
    $statement->execute(array(
        ':view' => $view
    ));
}