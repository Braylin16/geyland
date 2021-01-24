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

                <h1 class="flow-text center-align pink-text">Editar informaci&oacute;n</h1>

                <div class="divider"></div><br>

                <!-- Form -->
                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <!-- Nombre -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" type="text" class="validate">
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

                            <!-- Boton enviar formulario -->
                            <div class="input-field col s12">
                                <button class="btn waves-effect btn-color" type="submit" name="action">Actualizar
                                    <i class="material-icons left">update</i>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </article>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>

    <!-- Script -->
    <script src="materialize/js/materialize.min.js"></script>
    <script src="js/inicialize.js"></script>
    
</body>
</html>