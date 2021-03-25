<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('user/user.php');
require_once('./backend/notification.php');
require_once('remember/remember.php');
logout();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($noti)){echo "($noti)";} ?> Geyland | Usuarios que se han registrado ultimamente</title>
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

                <h1 class="flow-text center-align">Usuarios registrados recientemente</h1>
                <p class="center-align">
                    Chatear con personas har&aacute; m&aacute;s interesante <strong class="pink-text">Geyland</strong>
                </p>

                <div class="divider"></div><br>

                <?php require_once('backend/users.php') ?>
                <?php foreach($result as $post) : ?>
                    <!-- User -->
                    <div class="col s12">
                    
                        <a href="profile?user=<?=$post['id_user']?>">

                            <?php if($post['photo_profile'] != false) : ?>
                                <img src="img-profile/<?=$post['photo_profile']?>" alt="<?=$post['name'].' '.$post['surname']?>" class="circle col s2 m2 l1 xl1 img-adaptable" height="50">
                            <?php else : ?>
                                <img src="images/user.png" alt="<?=$post['name'].' '.$post['surname']?>" class="circle col s2 m2 l1 xl1 img-adaptable" height="50">
                            <?php endif?>

                            <strong class="pink-text"><?=$post['name'].' '.$post['surname']?></strong><br>
                            <small class="black-text"><?=substr($post['description'], 0, 50)?></small>

                        </a>

                        <a href="conversation?user=<?=$post['id_user']?>" class="col s4 m3 xl2 right btn-color btn">
                            <i class="material-icons left">near_me</i>
                            Chatear
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