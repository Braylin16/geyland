<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');
$email = $_SESSION['email'];
logout();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geyland</title>
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
        <section class="container z-depth-1 white">
            <article class="row section">

                <h1 class="flow-text center-align">Conversaciones</h1>

                <div class="divider"></div><br>

                <!-- Braylin -->
                <div class="col s12">
                    <img src="images/yo.jpg" alt="Braylin Ivan Payano" class="circle col s2 m2 xl1">
                    <strong class="pink-text">Braylin Ivan Payano</strong><br>
                    <small>Republica Dominicana</small>

                    <a class="col s4 m3 xl2 right btn-color btn">
                        <i class="material-icons left">near_me</i>
                        Chatear
                    </a>
                </div>

                <p>
                    <div class="divider"></div>
                </p><br><br>

                <div class="divider"></div><br>

                <!-- Usuarios -->
                <div class="col s12">
                    <img src="images/user.png" alt="Braylin Ivan Payano" class="circle col s2 m2 xl1">
                    <strong class="pink-text">Jairo Vasquez</strong><br>
                    <small>Hola, donde andas ?</small>

                    <a class="col s4 m3 xl2 right btn-color btn">
                        <i class="material-icons left">near_me</i>
                        Chatear
                    </a>
                </div>

                <p>
                    <div class="divider"></div>
                </p><br><br>

                <div class="divider"></div><br>

                <!-- Robert -->
                <div class="col s12">
                    <img src="images/robert.jpg" alt="Braylin Ivan Payano" class="circle col s2 m2 xl1">
                    <strong class="pink-text">Robert Smith</strong><br>
                    <small>Es cierto que juegas baloncesto</small>

                    <a class="col s4 m3 xl2 right btn-color btn">
                        <i class="material-icons left">near_me</i>
                        Chatear
                    </a>
                </div>

                <!-- Carla -->
                <p>
                    <div class="divider"></div>
                </p><br><br>

                <div class="divider"></div><br>

                <div class="col s12">
                    <img src="images/carla.jpg" alt="Braylin Ivan Payano" class="circle col s2 m2 xl1">
                    <strong class="pink-text">Carla Claker</strong><br>
                    <small>Te amo</small>

                    <a class="col s4 m3 xl2 right btn-color btn">
                        <i class="material-icons left">near_me</i>
                        Chatear
                    </a>
                </div>

            </article>
        </section>
    </main>
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
    
</body>
</html>