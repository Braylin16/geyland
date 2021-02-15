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
    <title>Geyland | Entra en comunicaci&oacute;n con nuestro equipo</title>
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

                <h1 class="flow-text center-align pink-text">Contacta con nuestro equipo</h1>
                <p class="center-align">
                    Reportar falla o comunicarte con nuestro equipo
                </p>

                <div class="divider"></div><br>

                <!-- Form -->
                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <!-- Nombre -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" type="text" class="validate" required>
                            <label for="name">Nombre</label>
                            </div>
                            
                            <!-- Apellido -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_box</i>
                            <input id="surname" type="tel" class="validate">
                            <label for="surname">Apellidos</label>
                            </div>

                            <!-- Correo electronico -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">mail</i>
                            <input id="email" type="tel" class="validate">
                            <label for="email">Correo electr&oacute;nico</label>
                            </div>

                            <!-- Mensaje -->
                            <div class="input-field col s12">
                                <i class="material-icons prefix">description</i>
                                <textarea id="messenger" class="materialize-textarea"></textarea>
                                <label for="messenger">Mensaje</label>
                            </div>

                            <!-- Boton enviar formulario -->
                            <div class="input-field col s6">
                                <button class="btn waves-effect btn-color" type="submit" name="action">Enviar
                                    <i class="material-icons left">send</i>
                                </button>
                            </div>

                            <!-- Boton cancelar -->
                            <div class="input-field col s6">
                                <a href="<?=$url?>" class="btn waves-effect red right">Cancelar
                                    <i class="material-icons left">cancel</i>
                                </a>
                            </div>

                        </div>
                    </form>
                </div>

            </article>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
    
</body>
</html>