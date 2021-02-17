<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
logout();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajeria | Geyland</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
</head>
<body class="grey lighten-5">

    <!-- Header -->
    <?php require_once('frontend/header.php') ?>
    <!-- Content -->
    <main class="container section">
        <?php require_once('menu/menu.php') ?>

        <section class="section z-depth-1 white">
            <article class="row">

            <h1 class="flow-text pink-text center">Carlos Daniel</h1>
            <div class="divider"></div><br>

               <div class="chat-sala">

               <div class="col s12">
                    <img src="images/user.png" alt="Mi nombre" class="col s2 m2 xl1 img-adaptable circle" height="50">
                    <span class="black-text emisor left grey lighten-4" title="27 de marzo 2021">
                        Este es un mensaje de prueba
                    </span>
                </div>

                <div class="col s12">
                    <img src="images/yo.jpg" alt="Mi nombre" class="col s2 m2 xl1 img-adaptable circle right" height="50">
                    <span class="white-text right pink receptor" title="27 de marzo 2021">
                        Todo esta bien hermano...
                    </span>
                </div>

                <div class="col s12">
                    <img src="images/yo.jpg" alt="Mi nombre" class="col s2 m2 xl1 img-adaptable circle right" height="50">
                    <span class="white-text right pink receptor" title="27 de marzo 2021">
                        Espero que todo este bien hermano
                    </span>
                </div>

                <div class="col s12">
                    <img src="images/user.png" alt="Mi nombre" class="col s2 m2 xl1 img-adaptable circle" height="50">
                    <span class="black-text emisor left grey lighten-4" title="27 de marzo 2021">
                        Si, todo de maravilla hombre
                    </span>
                </div>

                <div class="col s12">
                    <img src="images/yo.jpg" alt="Mi nombre" class="col s2 m2 xl1 img-adaptable circle right" height="50">
                    <span class="white-text right pink receptor" title="27 de marzo 2021">
                        Que bueno
                    </span>
                </div>

            </div>


                <!-- Escribir mensaje -->
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="post" name="post" class="materialize-textarea" required></textarea>
                                <label for="post">Escribe un mensaje...</label>

                                <!-- Boton de publicar -->
                                <button class="btn waves-effect btn-color right" id="submit" type="button" name="public">Enviar
                                        <i class="material-icons left">near_me</i>
                                </button>

                                <span class="helper-text" data-error="wrong" data-success="right">

                                <div class="file-field input-field">
                                    <span class="file-path-wrapper">
                                        <i class="material-icons prefix">photo_camera</i>
                                        <input id="img" name="img" type="file">
                                    </span>
                                </div>

                                </span>
                            </div>
                        </div>

                        <!-- Boton de publicar
                        <button class="btn waves-effect btn-color right" id="submit" type="button" name="public">Enviar
                                <i class="material-icons left">send</i>
                        </button> -->


                    </form>
                </div>

            </article>
        </section>


    </main>

    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>

    <!-- Script -->
    <script src="js/top.js"></script>
    
</body>
</html>