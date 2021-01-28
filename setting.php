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

                            <!-- Correo apodo -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">person</i>
                            <input id="nick" type="tel" class="validate">
                            <label for="nick">Apodo</label>
                            </div>

                            <!-- Descripcion breve sobre ti -->
                            <div class="input-field col s12">
                                <i class="material-icons prefix">description</i>
                                <textarea id="description" class="materialize-textarea"></textarea>
                                <label for="description">Descripci&oacute;n breve sobre t&iacute;</label>
                            </div>

                            <div class="input-field col s12">
                                <div class="divider"></div>
                            </div>

                            <!-- Fecha de nacimiento, dia -->
                            <div class="input-field col s12 m4 xl4">
                                <select>
                                <option value="" disabled selected>D&iacute;a de nacimiento</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                </select>
                                <label>Fecha de nacimiento</label>
                            </div>

                            <!-- Fecha de nacimiento, mes -->
                            <div class="input-field col s12 m4 xl4">
                                <select>
                                <option value="" disabled selected>Mes de nacimiento</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                </select>
                                <!-- <label>Fecha de nacimiento</label> -->
                            </div>

                            <!-- Fecha de nacimiento, year -->
                            <div class="input-field col s12 m4 xl4">
                                <select>
                                <option value="" disabled selected>A&ntilde;o de nacimiento</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                </select>
                                <!-- <label>Fecha de nacimiento</label> -->
                            </div>

                            <!-- Sexo -->
                            <div class="input-field col s4 m3 xl3">
                            <p>
                                <label>
                                    <input class="with-gap" name="group1" type="radio"  />
                                    <span>Hombre</span>
                                </label>
                            </p>
                            </div>

                            <div class="input-field col s4 m3 xl3">
                            <p>
                                <label>
                                    <input class="with-gap" name="group1" type="radio"  />
                                    <span>Mujer</span>
                                </label>
                            </p>
                            </div>

                            <div class="col s12"></div>

                            <!-- Boton enviar formulario -->
                            <div class="input-field col s6">
                                <button class="btn waves-effect btn-color" type="submit" name="action">Actualizar
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