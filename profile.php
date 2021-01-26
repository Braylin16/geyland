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
            <article class="row col s12 section">

                <div class="row">
                    <div class="col s12">

                        <div class="header">

                            <img src="images/paisaje.jpg" alt="Foto de portada" class="materialboxed cover-pic" height="300" />

                            <!-- <div class="col s3 m4 xl4"></div> -->
                            <img src="images/yo.jpg" alt="Nombre del usuario" class="center-align img-responsive circle profile-pic" height="190">


                        </div>
                        
                        <!-- Dropdaw and name -->
                        <div class="row">
                            <div class="col s6 m8 xl9 right">
                                <h1 class="flow-text pink-text">Braylin Ivan Payano</h1>
                            </div>
                        </div>

                    </div>
                </div>

            </article>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
    
</body>
</html>