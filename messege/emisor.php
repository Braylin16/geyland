<?php
// Obtener datos del otro participante en la conversación
$consUsuario = "SELECT name, surname, photo_profile FROM users WHERE id_user = $receptor";
$prepUser = $conexion->prepare($consUsuario);
$prepUser->execute([$_GET['user']]);
// Esto ayuda para verificar que el usuario realmente existe
if($prepUser->rowCount() == 0) {
        // No se encontró el usuario, se debe mostrar error y terminar
        die('No existe el usuario seleccionado');
}
// Crear un arreglo con ambos usuarios, con su ID como índice:
$usuarios = [
    $post['id_user'] => [
        'name' => $post['name'],
        'surname' => $post['surname'],
        'photo_profile' => $post['photo_profile'],
    ],
    $_GET['user'] => $prepUser->fetch(PDO::FETCH_ASSOC)
];

$consulta = "SELECT messege, photo_messege, create_at_messege, id_emisor, id_receptor
    FROM messege
    WHERE (id_emisor = ? AND id_receptor = ?) OR (id_emisor = ? AND id_receptor = ?)";

// Ejecutar consulta:
$prep = $conexion->prepare($consulta);
// Ejecutar enviando parámetros
$prep->execute([$id, $receptor, $receptor, $id]);
$mensajes = $prep->fetchAll(PDO::FETCH_ASSOC);