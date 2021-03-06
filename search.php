<?php session_start();
require_once('connection/connection.php');
require_once('functions/functions.php');
$email = $_SESSION['email'];
require_once('url/url.php');
require_once('remember/remember.php');
logout();

// error_reporting(0);

if(isset($_GET['search'])){

    $search = $_GET['search'];
    $search = (string)$search;

}else{
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$search?> | Geyland</title>
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

                <h1 class="flow-text center-align">
                    Resultado de busqueda: <span class="pink-text"><?=$search?></span>
                </h1>

                <div class="divider"></div><br>

                <!-- User -->
                <?php require_once('backend/search.php') ?>
                <?php foreach($result as $post) : ?>
                    <div class="col s12">

                        <a href="profile?user=<?=$post['id_user']?>">
                        
                            <?php if($post['photo_profile'] != false) : ?>
                                <img src="img-profile/<?=$post['photo_profile']?>" alt="<?=$post['name'].' '.$post['surname']?>" class="circle col s2 m2 l1 xl1 img-adaptable" height="50">
                            <?php else : ?>
                                <img src="images/user.png" alt="<?=$post['name'].' '.$post['surname']?>" class="circle col s2 m2 l1 xl1 img-adaptable" height="50">
                            <?php endif ?>

                            <strong class="pink-text"><?=$post['name'].' '.$post['surname']?></strong>

                            <?php if($post['description'] == true) : ?>
                                <small class="grey-text">(<?=$post['nick']?>)</small><br>
                            <?php endif ?>

                            <?php if($post['description'] == true) : ?>
                                <span class="grey-text"><?=substr($post['description'], 0, 60).'...'?></span>
                            <?php endif ?>

                        </a>

                        <?php if($post['id_user'] != $id) : ?>
                            <a href="conversation?user=<?=$post['id_user']?>" class="col s4 m3 xl2 right btn-color btn">
                            <i class="material-icons left">near_me</i>
                            Chatear
                            </a>
                        <?php endif ?>

                    </div>

                    <p>
                        <div class="divider"></div>
                    </p><br><br>
                <?php endforeach ?>

            </article>
        </section>
    </main>
    
    <!-- Footer -->
    <?php require_once('frontend/footer.php') ?>
    
</body>
</html>