<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require_once('backend/setting.php');
logout();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geyland | Actualizar informaci&oacute;n</title>
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

                <?php if(isset($errors)) : ?>
                    <p class="red flow-text center white-text"><?=$errors?></p>
                <?php endif ?>

                <?php if(isset($success)) : ?>
                    <p class="green flow-text center white-text"><?=$success?></p>
                <?php endif ?>

                <div class="divider"></div><br>

                <!-- Form -->
                <div class="row">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="col s12">
                        <div class="row">

                            <!-- Nombre -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" name="name" type="text" class="validate" value="<?=$name?>" />
                            <label for="name">Nombre</label>
                            </div>
                            
                            <!-- Apellido -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_box</i>
                            <input id="surname" name="surname" type="text" class="validate" value="<?=$surname?>" />
                            <label for="surname">Apellidos</label>
                            </div>

                            <!-- Correo electronico -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">mail</i>
                            <input id="email" name="email" type="email" class="validate" value="<?=$email?>" />
                            <label for="email">Correo electr&oacute;nico</label>
                            </div>

                            <!-- Correo apodo -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input id="nick" name="nick" type="text" class="validate" value="<?=$nick?>" />
                            <label for="nick">Apodo</label>
                            </div>

                            <!-- Descripcion breve sobre ti -->
                            <div class="input-field col s12">
                                <i class="material-icons prefix">description</i>
                                <textarea id="description" name="description" class="materialize-textarea"><?=$description?></textarea>
                                <label for="description">Descripci&oacute;n breve sobre t&iacute;</label>
                            </div>

                            <!-- Boton enviar formulario -->
                            <div class="input-field col s6">
                                <button class="btn waves-effect btn-color" type="submit" name="submit">Actualizar
                                    <i class="material-icons left">update</i>
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