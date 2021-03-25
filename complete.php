<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require_once('./backend/notification.php');
require_once('backend/complete.php');
logout();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($noti)){echo "($noti)";} ?> Geyland | Completa tus datos para lograr conectarte con personas interesantes</title>
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
            <article class="section">
            <h1 class="flow-text center">Completa los datos de tu cuenta</h1>
            <p class="center">Geyland es mas divertido si conoces las persona que te agradan, ayudanos a encontrar esas personas complentando los datos de tu cuenta de <span class="pink-text">Geyland</span></p>

                <div class="divider"></div><br>

                <!-- Formulario -->
                <div class="row">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="row">

                            <!-- Apodo -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="nick" value="<?php if(isset($_POST["nick"])){echo $nick;} ?>" class="validate">
                            <label for="apodo">Apodo</label>
                            <span class="helper-text" data-error="wrong" data-success="right">No es obligatorio</span>
                            </div>

                            <!-- Descripcion breve sobre ti -->
                            <div class="input-field col s12">
                                <i class="material-icons prefix">description</i>
                                <textarea id="description" name="description" class="materialize-textarea"><?php if(isset($_POST["description"])){echo $description;} ?></textarea>
                                <label for="description">Descripci&oacute;n breve sobre t&iacute;</label>
                                <span class="helper-text" data-error="wrong" data-success="right">No es obligatorio</span>
                            </div>

                            <div class="input-field col s12">
                                <div class="divider"></div>
                            </div>

                            <!-- Fecha de nacimiento, dia -->
                            <div class="input-field col s12 m4 xl4">
                                <select name="day">
                                <option value="" disabled selected>D&iacute;a de nacimiento</option>
                                    <?php 
                                        for($d=1; $d<=31; $d++){
                                            echo "<option value='$d'>$d</option>";
                                        }
                                    ?>
                                </select>
                                <label>Fecha de nacimiento</label>
                            </div>

                            <!-- Fecha de nacimiento, mes -->
                            <div class="input-field col s12 m4 xl4">
                                <select name="month">
                                <option value="" disabled selected>Mes de nacimiento</option>
                                
                                <option value="enero">Enero</option>
                                <option value="febrero">Febrero</option>
                                <option value="marzo">Marzo</option>
                                <option value="abril">Abril</option>
                                <option value="mayo">Mayo</option>
                                <option value="junio">Junio</option>
                                <option value="julio">Julio</option>
                                <option value="agosto">Agosto</option>
                                <option value="septiembre">Septiembre</option>
                                <option value="octubre">Octubre</option>
                                <option value="noviembre">Noviembre</option>
                                <option value="diciembre">Diciembre</option>

                                </select>
                                <!-- <label>Fecha de nacimiento</label> -->
                            </div>

                            <!-- Fecha de nacimiento, year -->
                            <div class="input-field col s12 m4 xl4">
                                <select name="year">
                                <option value="" disabled selected>A&ntilde;o de nacimiento</option>
                                
                                    <?php 
                                        for($a=1950; $a<=2002; $a++){
                                            echo "<option value='$a'>$a</option>";
                                        }
                                    ?>

                                </select>
                                <!-- <label>Fecha de nacimiento</label> -->
                            </div>

                            <h2 class="pink-text flow-text center">Orientaci&oacute;n sexual</h2>

                            <!-- Sexo -->
                            <div class="input-field col s4 m3 xl3">
                            <p>
                                <label>
                                    <input class="with-gap" name="orientation" value="Hombres" type="radio"  />
                                    <span>Hombres</span>
                                </label>
                            </p>
                            </div>

                            <div class="input-field col s4 m3 xl3">
                            <p>
                                <label>
                                    <input class="with-gap" name="orientation" value="Mujeres" type="radio"  />
                                    <span>Mujeres</span>
                                </label>
                            </p>
                            </div>

                            <div class="input-field col s4 m3 xl3">
                            <p>
                                <label>
                                    <input class="with-gap" name="orientation" value="Ambos" type="radio"  />
                                    <span>Ambos</span>
                                </label>
                            </p>
                            </div>

                            <div class="col s12"></div>

                            <!-- Boton enviar form -->
                            <div class="input-field col s6">
                                <button class="btn waves-effect btn-color" type="submit" name="submit">Completar
                                    <i class="material-icons left">send</i>
                                </button>
                            </div>

                            <!-- Boton omitir -->
                            <div class="input-field col s6">
                                <a href="photo-profile" class="btn waves-effect red right">Omitir
                                    <i class="material-icons left">skip_next</i>
                                </a>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="divider"></div>
                <p class="paso">Paso 1/3</p>

                <?php if($errors) : ?>
                    <p class="red-text"><?=$errors?></p>
                <?php endif ?>
                
            </article>
        </section>
    </main>
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
    
</body>
</html>