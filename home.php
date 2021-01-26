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
        <section class="container">
            <article class="row section">

            <!-- Textarea para publicar -->
            <div class="col s12">
                <div class="col s12 m2 xl2"></div>
               <div class="col s12 m7 xl6 z-depth-1">

                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <!-- <i class="material-icons prefix">photo_camera</i> -->
                                <textarea id="post" class="materialize-textarea" required></textarea>
                                <label for="post">Publicar algo...</label>
                                <span class="helper-text" data-error="wrong" data-success="right">

                                    <div class="file-field">
                                        <i class="material-icons prefix">photo_camera</i>
                                        <input type="file">
                                    </div>

                                </span>
                                </div>
                            </div>

                            <!-- Boton de publicar -->
                            <button class="btn waves-effect btn-color right" type="submit">Publicar
                                <i class="material-icons left">send</i>
                            </button>
                        </form>
                    </div>

               </div>
            </div>

            <div class="col s2"></div>

                <!-- Card de publicacion -->
                <div class="row">
                    <div class="col s12 m7 xl6">
                        <div class="card">
                            <div class="card-image">
                            <img src="images/yo.jpg" alt="publicacion de braylin" class="materialboxed">
                            <span class="card-title">Braylin Ivan Payano</span>
                            <a class="btn-floating halfway-fab waves-effect waves-light white">
                            
                                <!-- Imagen del usuario que publico -->
                                <img src="images/yo.jpg" alt="carla">

                            </a>
                            </div>
                            <div class="card-content">
                            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p><br>

                            <div class="divider"></div><br>

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
    
</body>
</html>