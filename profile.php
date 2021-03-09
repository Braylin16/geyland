<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require('url/url.php');
require_once('remember/remember.php');
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
    $create_at_user = $row['create_at_user'];

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
                            <?php if($photo_cover != false) : ?>
                                <img src="img-cover/<?=$photo_cover?>" alt="Foto de portada" class="materialboxed cover-pic" height="300" />
                            <?php else : ?>
                                <img src="images/cover.jpg" alt="Foto de portada" class="materialboxed cover-pic" height="300" />
                            <?php endif ?>

                            <?php if($id === $id_user) : ?>
                                <a href="#option" role="button" class="btn-floating modal-trigger halfway-fab waves-effect waves-light red"><i class="material-icons">photo_camera</i>
                                </a>
                            <?php endif ?>

                            <!-- Photo Profile -->
                            <?php if($foto_profile != false) : ?>
                                <img src="img-profile/<?=$foto_profile?>" alt="<?=$name.' '.$surname?>" class="center-align img-responsive circle profile-pic" height="190">
                            <?php else : ?>
                                <img src="images/user.png" alt="<?=$name.' '.$surname?>" class="center-align img-responsive circle profile-pic" height="190">
                            <?php endif ?>

                        </div>
                        
                        <!-- Dropdaw and name -->
                        <div class="row">
                            <div class="col s6 m8 xl9 right">
                                <span class="flow-text pink-text"><?=$name.' '.$surname?></span><br>
                                <?php if($nick != false) : ?>
                                    <span>(<?=$nick?>)</span>
                                <?php endif ?>
                            </div>
                        </div>

                         <!-- Boton enviar mensaje -->
                         <?php if($id_user != $id) : ?>
                            <div class="col s6 m4 xl3 right">
                                <a href="conversation?user=<?=$id_user?>" class="waves-effect btn-color btn">
                                    <i class="material-icons left">send</i>
                                    Enviar mensaje
                                </a>
                            </div><br>
                        <?php endif ?>

                        <?php if($id_user == $id) : ?>
                            <br>
                        <?php endif ?>

                        <!-- country -->
                        <div class="col s12">
                            <p class="pink-text">
                                <i class="purple-text material-icons left">flag</i>
                                Republica Dominicana &#8226; <?php if($year != false and $day != false and $month != false) { echo $day.' de '.ucwords($month).' de '.$year; } ?>
                            </p>

                            <p class="pink-text">
                                <i class="purple-text material-icons left">account_box</i>
                                Se uni&oacute; el: <?=form_fecha($create_at_user)?>
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
                    <li class="tab col s12"><a class="active" href="#pub">Publicaciones</a></li>
                </ul>
                </div>

                <div id="pub" class="col s12">
                
                    <!-- Publicaciones -->
                    <div class="hide-on-small-only col s3 publication-div"></div>
                    <div class="col s12 m7 xl6">
                    <?php require_once('backend/profile-publication.php') ?>
                    <?php foreach($result as $post) : ?>
                        <div class="card">

                            <div>

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
                                    Publicado el <?=form_fecha($post['create_at_pub'])?>
                                </small>

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
                    <?php endforeach ?>
                
                </div>
            </div>


            <?php require_once('modal/option-profile.php') ?>

            </article>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>

    <!-- Script Jquery -->
    <script src="jquery/tabs.js"></script>

</body>
</html>