<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require_once('url/url.php');
require_once('remember/remember.php');
require_once('view-messege/view-messege.php');
logout();

error_reporting(0);

if(isset($_GET['user'])){

    $receptor = $_GET['user'];
    $receptor = (int)$receptor;

    $_SESSION['id_user'] = $receptor;
    $_SESSION['receptor'] = $receptor;

    // Si me envio un mensaje a mi, me salgo
    if($id === $receptor){
        header("Location: $url");
    }

}else{
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajeria | Geyland</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="materialize/css/materialize-icons.css" />
    <script src="jquery/jquery.min.js"></script>
</head>
<body class="grey lighten-5">

    <!-- Header -->
    <?php require_once('frontend/header.php') ?>
    <!-- Content -->
    <main class="container section">
        <?php require_once('menu/menu.php') ?>

        <section class="section z-depth-1 white">
            <article class="row">

            <?php require_once('backend/conversation.php') ?>
            <?php foreach($result as $post) : ?>
                <a href="messenger" class="tooltipped" data-position="top" data-tooltip="Regresar">
                    <i class="material-icons left small pink-text">arrow_back</i>
                </a>
                
                <a href="profile?user=<?=$receptor?>">
                    <span class="flow-text pink-text"><?=$post['name'].' '.$post['surname']?></span>
                </a>

                <div class="divider"></div><br>
            <?php endforeach ?>
            
            <div id="chat-sala">
                <?php require_once('messege/emisor.php') ?>
            </div>


                <!-- Escribir mensaje -->
                <div class="row">
                    <form class="col s12" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-field col s12">
                                
                                <!-- Smogis -->
                                <i class="material-icons prefix red-text dropdown-trigger" data-target='emotico'>insert_emoticon</i>
                                
                                <textarea id="messege" name="messege" class="materialize-textarea" autofocus required></textarea>
                                <label for="messege">Escribe un mensaje...</label>

                                <input type="hidden" id="receptor" value="<?=$receptor?>" />
                                <div class="red-text" id="respuesta"></div>

                                <!-- Boton de publicar -->
                                <button class="btn waves-effect btn-color right" id="submit" type="button" name="public">Enviar
                                        <i class="material-icons left">near_me</i>
                                </button>

                                <span class="helper-text" data-error="wrong" data-success="right">

                                <div class="file-field input-field">
                                    <span class="file-path-wrapper">
                                        <i class="material-icons prefix">photo_camera</i>
                                        <input id="photo" name="photo" type="file">
                                    </span>
                                </div>

                                </span>
                            </div>
                        </div>

                    </form>
                </div>

            <?php require_once('emoticos/emoticos.php') ?>

            </article>
        </section>


    </main>

    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>

    <!-- Script -->
    <script src="js/top.js"></script>
    <script src="js/conversation.js"></script>
    <script src="js/scroll-chat.js"></script>
    <script src="js/select-conversation.js"></script>
    <script src="js/smojis.js"></script>
    
</body>
</html>