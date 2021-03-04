<?php session_start();

// Conexion a la base de datos
try{
    $conexion = new PDO('mysql:host=localhost;dbname=geyland', 'root', '');
  }catch(PDOExeption $e){
    echo "Lo sentimos, ha ocurrido un error nuestros ingenieros trabajan para solucionarlo: " . $e->getMessage();
    die();
  }

$email = $_SESSION['email'];
$receptor = $_SESSION['receptor'];

// Sacar todos los datos de la persona que ha iniciado sesion
$stmt = $conexion->query("SELECT id_user FROM users WHERE email = '$email'");
$stmt->execute(['email' => $email]);
while ($row = $stmt->fetch()) {
    $id = $row['id_user'];

    $id = (int)$id;
}

$_GET['user'] = $receptor;

// Sacar todos los datos de la persona que ha iniciado sesion
$stmt = $conexion->query("SELECT name, surname, photo_profile FROM users WHERE id_user = $receptor");
$stmt->execute([$_GET['user']]);
while ($row = $stmt->fetch()) {
    $name = $row['name'];
    $surname = $row['surname'];
    $photo_profile = $row['photo_profile'];

}


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
    $receptor => [
        'name' => $name,
        'surname' => $surname,
        'photo_profile' => $photo_profile,
    ],
    $receptor => $prepUser->fetch(PDO::FETCH_ASSOC)
];

$consulta = "SELECT messege, photo_messege, create_at_messege, id_emisor, id_receptor
    FROM messege
    WHERE (id_emisor = ? AND id_receptor = ?) OR (id_emisor = ? AND id_receptor = ?)";

// Ejecutar consulta:
$prep = $conexion->prepare($consulta);
// Ejecutar enviando parámetros
$prep->execute([$id, $receptor, $receptor, $id]);
$mensajes = $prep->fetchAll(PDO::FETCH_ASSOC);


?>

<div id="sala">
            
        <?php
        // Incluye el archivo para obtener todos los mensajes
        foreach($mensajes as $mensaje) :
            if($mensaje['id_emisor'] == $receptor) {
                // Este mensaje fue enviado por el otro usuario
                $clase = 'black-text emisor left grey lighten-4';
            } else {
                // Este mensaje fue enviado por el usuario en sesión
                $clase = 'white-text right pink receptor';
            }
            // Obtener datos del emisor
            $usuario = $usuarios[$receptor];
        ?>

        <!-- Mensajes que me han enviado | Receptor -->
        <div class="col s12 messege-row">

            <!-- Para que la img no se repitan -->
            <?php if($mensaje['id_emisor'] == $receptor) : ?>
                
                <!-- Si tiene foto de perfil -->
                <?php if($usuario['photo_profile'] != false) : ?>
                    <img src="img-profile/<?php echo $usuario['photo_profile']; ?>" alt="<?php echo $usuario['name']; ?>" class="col s2 m2 xl1 img-adaptable circle" height="50">
                <?php else : ?>
                    <img src="images/user.png" alt="<?=$usuario['name']?>" class="col s2 m2 xl1 img-adaptable circle" height="50">
                <?php endif ?>

            <?php endif ?>

            <span class="<?php echo $clase; ?>" title="<?php echo $mensaje['create_at_messege']; ?>">
                <?php echo $mensaje['messege']; ?>
                
                <?php if($mensaje['photo_messege'] == true) : ?>
                    <img src="messege-photo/<?php echo $mensaje['photo_messege']; ?>" alt="Una foto">
                <?php endif ?>
                
            </span>
        </div>
    <?php endforeach; ?>
</div>