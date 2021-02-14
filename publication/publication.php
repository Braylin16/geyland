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
    "SELECT users.id_user, users.name, users.surname, users.photo_profile, publication.id_pub, publication.id_user_pub, publication.messeger_pub, publication.photo_pub, publication.create_at_pub FROM publication INNER JOIN users WHERE users.id_user = publication.id_user_pub ORDER BY publication.id_pub DESC LIMIT 7"
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

                    <br>
                    <img src="img-profile/<?=$post['photo_profile']?>" alt="<?php echo $post['name'].' '.$post['surname'] ?>" class="col s2 m2 xl2 img-adaptable circle" height="50">
                    <span class="flow-text pink-text"><?php echo $post['name'].' '.$post['surname'] ?></span>
                    <a href="#">
                        <span class="right">
                            <i class="material-icons left small pink-text">near_me</i> 
                        </span><br>
                    </a>
                    <small class="grey-text">
                        Publicado el <?=fecha($post['create_at_pub'])?>
                    </small><br><br>
            </div>
                    
                    <div class="card-image">
                        <?php if($post['photo_pub'] != false): ?>
                            <img src="./photo/<?php echo $post['photo_pub'] ?>" alt="Publicaci&oacute;n de <?php echo $post['name'].' '.$post['surname'] ?>" />
                            <span class="card-title"><?php echo $post['name'].' '.$post['surname'] ?></span>
                        <?php endif ?>

                    </div>
                </a>
            <div class="card-content">
            
            <?php if($post['messeger_pub'] != false) : ?>
                <p><?php echo $post['messeger_pub'] ?></p><br>
            <?php endif ?>

        </div>
    </div>
</div>
<?php endforeach ?>