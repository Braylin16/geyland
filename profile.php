<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require('url/url.php');
logout();

if(isset($_GET['user'])){

    $user = $_GET['user'];
    $user = (int)$user;

}else{
    header("Location: $url");
}

// Sacar todos los datos cuando el user sea el propietario del perfil
$stmt = $conexion->query("SELECT * FROM users WHERE id_user = $user");
$stmt->execute(['email' => $email]);
while ($row = $stmt->fetch()) {
    $id_user = $row['id_user'];
    $name = $row['name'];
    $surname = $row['surname'];
    $nick = $row['nick'];
    $email = $row['email'];
    $description = $row['description'];
    $foto_profile = $row['photo_profile'];
    $photo_cover = $row['photo_cover'];
    $orientation = $row['orientation'];
    $roll = $row['roll'];
    $day = $row['day'];
    $month = $row['month'];
    $year = $row['year'];
    $create_at = $row['create_at_user'];

    $id_user = (int)$id_user;

    // Obtener edad

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$name.' '.$surname?> | Geyland</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
</head>
<body class="grey lighten-5">

    <!-- Header -->
    <?php require_once('frontend/header.php') ?>
    <!-- Content -->
    <main class="section">
        <?php require_once('menu/menu.php') ?>
        
        <!-- Content -->
        <section class="container z-depth-1 white">
            <article class="row col s12 section">

                <div class="row">
                    <div class="col s12">

                        <div class="header">

                            <!-- Photo Cover -->
                            <img src="img-cover/<?=$photo_cover?>" alt="Foto de portada" class="materialboxed cover-pic" height="300" />

                            <a href="#option" role="button" class="btn-floating modal-trigger halfway-fab waves-effect waves-light red"><i class="material-icons">photo_camera</i>
                            </a>

                            <!-- Photo Profile -->
                            <img src="img-profile/<?=$foto_profile?>" alt="<?=$name.' '.$surname?>" class="center-align img-responsive circle profile-pic" height="190">

                        </div>
                        
                        <!-- Dropdaw and name -->
                        <div class="row">
                            <div class="col s6 m8 xl9 right">
                                <span class="flow-text pink-text"><?=$name.' '.$surname?></span><br>
                                <span>(<?=$nick?>)</span>
                            </div>
                        </div>

                         <!-- Boton enviar mensaje -->
                         <div class="col s6 m4 xl3 right">
                            <a class="waves-effect btn-color btn">
                                <i class="material-icons left">send</i>
                                Enviar mensaje
                            </a>
                        </div><br>

                        <!-- country -->
                        <div class="col s12">
                            <p class="pink-text">
                                <i class="purple-text material-icons left">flag</i>
                                Republica Dominicana &#8226; <?=$year?> a&ntilde;os
                            </p>
                        </div>

                        <!-- Descripcion -->
                        <div class="col s12 m6 xl6">
                            <p><?=$description?></p>
                        </div>

                    </div>
                </div>

            </article>
        </section>

        <section class="container">
            <article class="row section">

                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s12"><a class="active black-text center" href="#test1">Publicaciones</a></li>
                        </ul>
                    </div>

                    <?php require_once('backend/profile-publications.php') ?>
                    <?php foreach($result as $post) : ?>
                       <!-- Card de publicacion -->
                       <div id="test1" class="col s12">
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
                                           Publicado el <?=form_fecha($post['create_at_pub'])?>
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

                <?php require_once('modal/option-profile.php') ?>

            </article>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>

    <!-- Script Jquery -->
    <script src="jquery/tabs.js"></script>
    <script src="js/comment.js"></script>

</body>
</html>