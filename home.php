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
    <header>
        <!-- Dropdown Structure1 -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#" class="black-text">Perfil</a></li>
            <li><a href="#" class="black-text">Configuraci&oacute;n</a></li>
            <li class="divider"></li>
            <li><a href="#" class="black-text">Cerrar Sesi&oacute;n</a></li>
        </ul>

        <!-- Dropdown Structure2 -->
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="#" class="black-text">Mensaje 1</a></li>
            <li><a href="#" class="black-text">Mensaje 2</a></li>
            <li class="divider"></li>
            <li><a href="#" class="black-text">Mensaje 3</a></li>
        </ul>

        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper">

                    <!-- Boton para aparecer el menu | Sidenav -->
                    <a href="#" data-target="slide-out" class="sidenav-trigger">
                        <i class="material-icons">menu</i>
                    </a>

                    <a href="/geyland" class="brand-logo">Geyland</a>
                    <ul class="right hide-on-med-and-down">
                    <li><a href="#"><i class="material-icons right">search</i></a></li>
                    <li><a href="#" class="dropdown-trigger messenger-dropdown" data-target="dropdown2">
                        <i class="material-icons right">mail</i>
                    </a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#" data-target="dropdown1">
                        <img src="images/yo.jpg" alt="Braylin Ivan Payano" class="img-dropdown circle" width="34" height="34">
                        <i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header> <!-- End Header -->

    <!-- Content -->
    <main class="section">

    <!-- Menu sidenav responsive -->
    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
        <div class="background">
            <img src="images/paisaje.jpg">
        </div>
        <a href="#user"><img class="circle" src="images/yo.jpg"></a>
        <a href="#name"><span class="white-text name">Braylin Ivan Payano</span></a>
        <a href="#email"><span class="white-text email">viraleschanner16@gmail.com</span></a>
        </div></li>
        <li><a href="#!"><i class="material-icons">account_circle</i>Perfil</a></li>
        <li><a href="#!"><i class="material-icons">settings</i>Configuraci&oacute;n</a></li>
        <li><a href="#!"><i class="material-icons">mail</i>Chat</a></li>
        <li><a href="#!"><i class="material-icons">search</i>Buscar persona</a></li>
    </ul><!-- Fin menu -->

        <section class="container z-depth-1 white">
            <article class="row section">

                <h1 class="flow-text center-align">Usuarios registrados recientemente</h1>
                <p class="center-align">
                    Chatear con personas har&aacute; m&aacute;s interesante <strong class="pink-text">Geyland</strong>
                </p>

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
                    <small>Colombia</small>

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
                    <small>Estados Unidos</small>

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
                    <small>Reino Unido</small>

                    <a class="col s4 m3 xl2 right btn-color btn">
                        <i class="material-icons left">near_me</i>
                        Chatear
                    </a>
                </div>

            </article>
        </section>        
    </main>

    <!-- Footer -->
    <footer class="pink page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Geyland</h5>
                <p class="grey-text text-lighten-4">Geyland es el sitio perfecto para conocer personas y futuro mejores amigos.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">M&aacute;s informaci&oacute;n</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Uso</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">T&eacute;rminos y condiciones</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Cookies</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Ayuda</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2021 Copyright | Todos los derechos reservados
            <a class="grey-text text-lighten-4 right" href="#!">Contacto</a>
            </div>
          </div>
        </footer>

    <!-- Script -->
    <script src="materialize/js/materialize.min.js"></script>
    <script src="js/inicialize.js"></script>
    
</body>
</html>