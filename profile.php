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
        <section class="container z-depth-1 white">
            <article class="row col s12 section">

                <div class="row">
                    <div class="col s12">

                        <div class="header">

                            <img src="images/paisaje.jpg" alt="Foto de portada" class="materialboxed cover-pic" height="300" />

                            <a href="#option" role="button" class="btn-floating modal-trigger halfway-fab waves-effect waves-light red"><i class="material-icons">photo_camera</i>
                            </a>

                            <img src="images/yo.jpg" alt="Nombre del usuario" class="center-align img-responsive circle profile-pic" height="190">

                        </div>
                        
                        <!-- Dropdaw and name -->
                        <div class="row">
                            <div class="col s6 m8 xl9 right">
                                <span class="flow-text pink-text">Braylin Ivan Payano</span><br>
                                <span>(Capullito)</span>
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
                                Republica Dominicana &#8226; 22 a&ntilde;os
                            </p>
                        </div>

                        <!-- Descripcion -->
                        <div class="col s12 m6 xl6">
                            <p>Bienvenido a mi perfil, aca encontraras todo lo que yo publico en mi muro de geyland, no olvides dejarme un like hermano.</p>
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
                            <li class="tab col s4"><a class="active black-text" href="#test1">Publicaciones</a></li>
                            <li class="tab col s4"><a class="black-text" href="#test2">Fotos</a></li>
                            <li class="tab col s4"><a class="black-text" href="#test4">Me gustas</a></li>
                        </ul>
                    </div>

                    <!-- Publicaciones -->
                    <div id="test1" class="col s12">
                    <div class="col s12 m2 xl2"></div>
                        <div class="row">
                            <div class="col s12 m7">
                            <div class="card">
                                <div class="card-image">
                                <img src="images/yo.jpg">
                                <span class="card-title">Braylin Ivan Payano</span>
                                </div>
                                <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                                </div>
                                <div class="card-action">
                                
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
                                
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fotos -->
                    <div id="test2" class="col s12">
                    <div class="col s12 m2 xl2"></div>
                        <div class="row">
                          <div class="col s12 m7">
                            <div class="card">
                              <div class="card-image">
                                <img src="images/yo.jpg">
                                <span class="card-title">Card Title</span>
                              </div>
                              <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                              </div>
                              <div class="card-action">
                                
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

                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <!-- Me gustas -->
                    <div id="test4" class="col s12">
                    <div class="col s12 m2 xl2"></div>
                        <div class="row">
                          <div class="col s12 m7">
                            <div class="card">
                              <div class="card-image">
                                <img src="images/yo.jpg">
                                <span class="card-title">Card Title</span>
                              </div>
                              <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                              </div>
                              <div class="card-action">
                                
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

                              </div>
                            </div>
                          </div>
                        </div>
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
    <script src="js/comment.js"></script>

</body>
</html>