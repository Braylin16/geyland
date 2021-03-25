<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
require_once('url/url.php');
require_once('remember/remember.php');
$email = $_SESSION['email'];
logout();
require_once('./user/user.php');
require_once('./backend/notification.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($noti)){echo "($noti)";} ?> Mis conversaciones | Geyland</title>
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

                <h1 class="flow-text center-align">Mis conversaciones</h1>

                <div class="divider"></div><br>

                <!-- Braylin -->
                <?php require_once('backend/messenger.php') ?>
                <?php foreach($result as $post) : ?>
                <div class="col s12">

                    <a href="conversation?user=<?=$post['id_user']?>">

                        <?php if($post['photo_profile'] != false) : ?>
                            <img src="img-profile/<?=$post['photo_profile']?>" alt="<?=$post['name'].' '.$post['surname']?>" class="circle col s2 m2 l1 xl1 img-adaptable" height="50">
                        <?php else : ?>
                            <img src="images/user.png" alt="<?=$post['name'].' '.$post['surname']?>" class="circle col s2 m2 l1 xl1 img-adaptable" height="50">
                        <?php endif ?>


                        <strong class="pink-text"><?=$post['name'].' '.$post['surname']?></strong>
                        <small class="black-text"><?=form_fecha($post['create_at_messege'])?></small><br>
                        <span class="grey-text">

                            <?php if($post['ultimo_id_messege_env'] > $post['ultimo_id_messege_rec']) : ?>
                                <span class="purple-text">T&uacute;:</span>
                            <?php endif ?>

                            <?php if($post['messege'] != false) : ?>
                                <?=mb_substr($post['messege'], 0, 60)?>
                            <?php else : ?>
                                <i class="material-icons">photo</i>
                            <?php endif ?>

                            <?php if($post['view'] == 'No' AND $post['id_emisor'] != $id) : ?>
                                <!-- Solo si el no he leido el mensaje -->
                                <?php if($post['countMessege'] != 0) : ?>
                                    <span class="CountMsg tooltipped" data-position="top" data-tooltip="<?=$post['countMessege']?> mensaje sin leer">
                                        <?=$post['countMessege']?>
                                    </span>
                                <?php endif ?>
                            <?php endif ?>

                            <?php if($post['view'] == 'Si' AND $post['ultimo_id_messege_env'] > $post['ultimo_id_messege_rec']) : ?>
                                <!-- Leido -->
                                <i class="material-icons blue-text tooltipped" data-position="top" data-tooltip="Le&iacute;do">
                                    done_all
                                </i>
                            <?php elseif($post['ultimo_id_messege_env'] > $post['ultimo_id_messege_rec'] AND $post['view'] == 'No') : ?>
                                <i class="material-icons tooltipped" data-position="top" data-tooltip="<?=$post['name']?> a&uacute;n no ha le&iacute;do tu mensaje">
                                    check
                                </i>
                            <?php endif ?>

                        </span>

                        <button type="button" class="col s4 m3 xl2 right btn-color btn">
                            <i class="material-icons left">near_me</i>
                            Chatear
                        </button>

                    </a>
                    
                </div>

                <p>
                    <div class="divider"></div>
                </p><br><br>

                <div class="divider"></div><br>
                <?php endforeach ?>

            </article>
        </section>
    </main>
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
    
</body>
</html>