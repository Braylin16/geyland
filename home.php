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
    <title>Geyland</title>
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
        <section class="container">
            <article class="row section">

            <!-- Textarea para publicar -->
            <div class="col s12">
                <div class="col s12 m2 xl2"></div>
               <div class="col s12 m7 xl6 z-depth-1">

                    <div class="row">
                        <form id="form" method="POST" class="col s12" enctype="multipart/form-data">
                            <div class="row">
                                <div class="input-field col s12">
                                <textarea id="post" name="post" class="materialize-textarea" required></textarea>
                                <label for="post">Dile algo al mundo...</label>
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

                            <div id="respuesta"></div>

                            <!-- Boton de publicar -->
                            <button class="btn waves-effect btn-color right" id="submit" type="button" name="public">Publicar
                                <i class="material-icons left">send</i>
                            </button>

                            <p id="respuesta" class="red-text"></p>
                        </form>
                    </div>

               </div>
            </div>

            <div class="col s2"></div>
            <?php require_once('publication/publication.php') ?>

            <!-- Ultimos usuarios registrados -->
            <!-- <div class="col s6">
                <p class="pink-text flow-text">Ultimos usuarios registrados</p>
                <div class="divider"></div>

                
            </div> -->
            <!-- Fin ultimos usuarios registrados -->

            </div>

            </article>
        </section>
    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>

    <script src="js/comment.js"></script>
    <script src="js/publication.js"></script>
    
</body>
</html>