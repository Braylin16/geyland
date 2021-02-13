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
                <br>
                <img src="img-profile/<?=$post['photo_profile']?>" alt="<?php echo $post['name'].' '.$post['surname'] ?>" class="col s2 m2 xl2 img-adaptable circle" height="50">
                <span class="flow-text pink-text"><?php echo $post['name'].' '.$post['surname'] ?></span>
                <span class="right">
                    <i class="material-icons left">more_vert</i> 
                </span><br>
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
            <div class="card-content">
            
            <?php if($post['messeger_pub'] != false) : ?>
                <p><?php echo $post['messeger_pub'] ?></p><br>

                <div class="divider"></div><br>
            <?php endif ?>

            <!-- Reacciones -->
            <div class="row">

                <!-- Like -->
                <div class="col s6">
                    <a href="" class="black-text">
                        <i class="material-icons left small">favorite_border</i>
                        <span class="flow-text black-text">10</span>
                    </a>
                </div>

                <!-- Comments -->
                <div class="col s6">
                    <span id="click-comment" class="black-text right">
                        <i class="material-icons left small">comment</i>
                        <span class="flow-text black-text">2</span>
                    </span>
                </div>
            </div>


            <!-- Area de texto para escribir un comentario -->
            <div id="view-comment" class="hide row">
            <div class="divider"></div>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                        <i class="material-icons prefix">comment</i>
                        <textarea id="comment" class="materialize-textarea"></textarea>
                        <label for="comment">Escribe un comentario...</label>
                        </div>

                        <button class="btn waves-effect btn-color right" type="submit" name="action">Comentar
                            <i class="material-icons left">send</i>
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<?php endforeach ?>