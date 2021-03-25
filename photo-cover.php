<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require_once('url/url.php');
require_once('./backend/notification.php');
logout();

// Por si nos llega error
if(isset($_GET['error'])){

    $error = $_GET['error'];

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($noti)){echo "($noti)";} ?> Coloca una foto de portada | Geyland</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
</head>
<body class="grey lighten-5">

    <!-- Header -->
    <?php require_once('frontend/header.php') ?>
    <!-- Content -->
    <main class="section">
        <?php require_once('menu/menu.php') ?>
        
        <!-- Content -->
        <section class="container">
            <article class="row section col s12">

            <h1 class="flow-text">Foto de portada</h1>

            <div class="col s3"></div>
            <div class="row">
                <div class="col s6 m6 xl4">
                    <div class="card">
                        <div class="card-image">
                        <img src="images/user.png" alt="Foto de portada">
                        <span class="card-title">Coloca una foto de portada</span>

                        <a href="#photo-cover" class="btn-floating halfway-fab waves-effect waves-light red modal-trigger"><i class="material-icons">photo_camera</i>
                        </a>

                        </div>
                    </div>

                    <a href="<?=$url?>" class="waves-effect red btn left">
                        <i class="material-icons left">arrow_forward</i>
                        M&aacute;s tarde
                    </a>

                </div>
            </div>

            <?php if(isset($error)) : ?>
                <p class="red-text"><?=$error?></p>
            <?php endif ?>
            <div class="divider"></div>
            <p>Paso 3/3</p>

            <!-- Modal select photo -->
            <?php require_once('modal/photo-cover.php') ?>
          

            </article>
        </section>
    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
    
</body>
</html>