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

// URL en los mensajes
function messegeURL($text){
    $text = html_entity_decode($text);
    $text = "".$text;
    $text = preg_replace('/(https{0,1}:\/\/[\w\-\.\/#?&=]*)/','<a href="$1" target="_blank">$1</a>',$text);
    return $text;
}

// Sacar todos los datos de la persona que ha iniciado sesion
$stmt = $conexion->query("SELECT name, surname, photo_profile, nick, description FROM users WHERE id_user = $receptor");
$stmt->execute([$_GET['user']]);
while ($row = $stmt->fetch()) {
    $name = $row['name'];
    $surname = $row['surname'];
    $photo_profile = $row['photo_profile'];
    $nick = $row['nick'];
    $description = $row['description'];

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

$consulta = "SELECT messege, photo_messege, create_at_messege, view, id_emisor, id_receptor
    FROM messege
    WHERE (id_emisor = ? AND id_receptor = ?) OR (id_emisor = ? AND id_receptor = ?) LIMIT 100";

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
                <?php echo messegeURL($mensaje['messege']); ?>
                
                <?php if($mensaje['photo_messege'] == true) : ?>
                    <img src="messege-photo/<?php echo $mensaje['photo_messege']; ?>" width="300" alt="Una foto">
                <?php endif ?>

                <?php if($mensaje['view'] == 'Si' AND $mensaje['id_emisor'] == $id) : ?>
                <!-- Leido -->
                <i class="material-icons blue-text" title="Le&iacute;do">
                    done_all
                </i>
                <?php elseif($mensaje['id_emisor'] == $id AND $mensaje['view'] == 'No') : ?>
                    <i class="material-icons grey-text" title="Mensaje enviado">
                        check
                    </i>
                <?php endif ?>
                
            </span>
        </div>
    <?php endforeach; ?>

</div>