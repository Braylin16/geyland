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
            <article class="section">

                <div class="row">
                    <div class="col s6 m3 xl2">
                        <div class="card">
                            <div class="card-image">

                                <img src="images/user.png" alt="Foto de portada" class="materialboxed" height="150">

                                <a href="#modalportada" role="button" class="btn-floating modal-trigger halfway-fab waves-effect waves-light red"><i class="material-icons">photo_camera</i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider"></div><br>

                <!-- Formulario -->
                <div class="row">
                    <form class="col s12">
                        <div class="row">

                            <!-- Apodo -->
                            <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="apodo" type="email" class="validate">
                            <label for="apodo">Apodo</label>
                            <span class="helper-text" data-error="wrong" data-success="right">No es obligatorio</span>
                            </div>

                            <!-- Descripcion breve sobre ti -->
                            <div class="input-field col s12">
                                <i class="material-icons prefix">description</i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Descripci&oacute;n breve sobre t&iacute;</label>
                                <span class="helper-text" data-error="wrong" data-success="right">No es obligatorio</span>
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

                            <!-- Boton enviar form -->
                            <div class="input-field col s6">
                                <button class="btn waves-effect btn-color" type="submit" name="action">Completar
                                    <i class="material-icons left">send</i>
                                </button>
                            </div>

                            <!-- Boton omitir -->
                            <div class="input-field col s6">
                                <a href="<?=$url?>" class="btn waves-effect red right" name="action">Omitir
                                    <i class="material-icons left">skip_next</i>
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