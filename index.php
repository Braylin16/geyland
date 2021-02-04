<?php session_start();
require_once('connection/connection.php');
require_once('url/url.php');
require_once('backend/login.php');
require_once('backend/register.php');
require_once('functions/functions.php');
notLogout();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienvenidos a Geylan</title>
    <link rel="stylesheet" href="style/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>

    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Inicial Sesi&oacute;n</div>
        <div class="title signup">Registrarse</div>
      </div>

    <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Entrar</label>
          <label for="signup" class="slide signup">Crear cuenta</label>
          <div class="slider-tab"></div>
        </div>

    <div class="form-inner">

      <!-- Form login -->
      <?php require_once('access/login.php') ?>

      <!-- Form register -->
      <?php require_once('access/register.php') ?>

    </div>
  </div>
</div>

<script src="js/app.js"></script>

</body>
</html>
