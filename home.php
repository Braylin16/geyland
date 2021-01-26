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
                                <img src="images/carla.jpg" alt="carla">

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
                                    <a href="" class="black-text right">
                                        <i class="material-icons left small">comment</i>
                                        <span class="flow-text black-text">2</span>
                                    </a>
                                </div>
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
    
</body>
</html>