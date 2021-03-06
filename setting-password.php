<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require_once('backend/setting-password.php');
require_once('remember/remember.php');
logout();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contrase&ntilde;a | Geyland</title>
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

                <?php if(isset($errors)) : ?>
                    <p class="red white-text center flow-text"><?=$errors?></p>
                <?php endif ?>

                <?php if(isset($success)) : ?>
                    <p class="green white-text center flow-text"><?=$success?></p>
                <?php endif ?>

                <div class="divider"></div><br>

                <!-- Form -->
                <div class="row">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="col s12">
                        <div class="row">

                            <!-- pass -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="pass-actual" type="password" class="validate" name="actual" />
                            <label for="pass-actual">Contrase&ntilde;a actual</label>
                            </div>

                            <!-- pass -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">lock_open</i>
                            <input id="pass" type="password" class="validate" name="nueva" />
                            <label for="pass">Nueva contrase&ntilde;a</label>
                            </div>

                            <!-- Repite la pass -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="repit-pass" type="password" class="validate" name="repit" />
                            <label for="repit-pass">Repite la contrase&ntilde;a</label>
                            </div>

                            <!-- Boton enviar formulario -->
                            <div class="input-field col s12">
                                <button class="btn waves-effect btn-color" type="submit" name="submit">Cambiar Contrase&ntilde;a
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