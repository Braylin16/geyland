<?php
// Conexion a la base de datos
try{
  $conexion = new PDO('mysql:host=localhost;dbname=geyland', 'root', '');
}catch(PDOExeption $e){
  echo "Lo sentimos, ha ocurrido un error nuestros ingenieros trabajan para solucionarlo: " . $e->getMessage();
  die();
}

// Formatear fecha
function fecha($fecha){
    $times = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo',
            'Abril','Mayo','Junio','Julio','Agosto',
            'Septiembre','Octubre','Noviembre','Diciembre'];

    $dia = date('d', $times);
    $mes = date('m', $times) - 1;
    $anio = date('Y', $times);

    $fecha = "$dia de " . $meses[$mes] . " del $anio";
    return $fecha;

}

 // sacar todas las publicaciones
 $stetament = $conexion->prepare(
    "SELECT users.id_user, users.name, users.surname, users.photo_profile, publication.id_pub, publication.id_user_pub, publication.messeger_pub, publication.photo_pub, publication.create_at_pub FROM publication INNER JOIN users WHERE users.id_user = publication.id_user_pub ORDER BY publication.id_pub DESC LIMIT 10"
);

$stetament->execute(array());
$result = $stetament->fetchAll();

?>
<?php foreach($result as $post) : ?>
<?php $fecha = $post['create_at_pub'] ?>
<!-- Card de publicacion -->
<div id="publication" class="row">
    <div class="col s12 m7 xl6">
        <div class="card">

            <div>
               
                <a href="profile?user=<?=$post['id_user']?>">

                    <!-- Foto de perfil -->
                    <br>
                    <?php if($post['photo_profile'] != false) : ?>
                        <img src="img-profile/<?=$post['photo_profile']?>" alt="<?php echo $post['name'].' '.$post['surname'] ?>" class="col s2 m2 l2 xl2 img-adaptable circle" height="50">
                    <?php else : ?>
                        <img src="images/user.png" alt="<?php echo $post['name'].' '.$post['surname'] ?>" class="col s2 m2 l2 xl2 img-adaptable circle" height="50">
                    <?php endif ?>

                    <span class="flow-text pink-text"><?php echo $post['name'].' '.$post['surname'] ?></span><br>

                    <!-- <a href="conversation?user=">
                        <span class="right">
                            <i class="material-icons left small pink-text">near_me</i> 
                        </span><br>
                    </a> -->

                    <small class="grey-text">
                        Publicado el <?=fecha($post['create_at_pub'])?>
                    </small>
                </a>

                <?php if($post['messeger_pub'] != false) : ?>
                    <div class="col s12">
                        <p><?php echo $post['messeger_pub'] ?></p>
                    </div>
                <?php endif ?>

            </div>

                <div class="card-image">
                
                    <?php if($post['photo_pub'] != false): ?>
                        <img src="./photo/<?php echo $post['photo_pub'] ?>" alt="Publicaci&oacute;n de <?php echo $post['name'].' '.$post['surname'] ?>" />
                        <span class="card-title"><?php echo $post['name'].' '.$post['surname'] ?></span>
                    <?php endif ?>

                    <?php if($post['photo_pub'] == false): ?>
                    <!-- Mas espacios para las publicaciones -->
                        <br>
                    <?php endif ?>

                </div>
            <div class="card-content">

        </div>
    </div>
</div>
<?php endforeach ?>