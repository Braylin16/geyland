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

                <h1 class="flow-text center-align pink-text">Cambiar contrase&ntilde;a</h1>

                <div class="divider"></div><br>

                <!-- Form -->
                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <!-- pass -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="pass" type="text" class="validate">
                            <label for="pass">Contrase&ntilde;a</label>
                            </div>

                            <!-- Repite la pass -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="repit-pass" type="text" class="validate">
                            <label for="repit-pass">Repite la contrase&ntilde;a</label>
                            </div>

                            <!-- Boton enviar formulario -->
                            <div class="input-field col s12">
                                <button class="btn waves-effect btn-color" type="submit" name="action">Cambiar Contrase&ntilde;a
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
    
</body>
</html>