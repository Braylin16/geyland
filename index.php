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

      <form action="#" class="login">

          <div class="field">
            <input type="text" placeholder="Correo electr&oacute;nico" required>
          </div>

          <div class="field">
              <input type="password" placeholder="Contraseña" required>
          </div>

          <div class="pass-link">
            <a href="#">¿Se te olvidó tu contraseña?</a>
          </div>

          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Entrar">
          </div>


          <div class="signup-link">
            ¿No eres miembro?  <a href="">Regístrate ahora</a>
          </div>

      </form>


      <form action="#" class="signup">
        <div class="field">
          <input type="text" placeholder="Nombre" required>
        </div>

        <div class="field">
          <input type="password" placeholder="Apellidos" required>
        </div>

        <div class="field">
          <input type="password" placeholder="Correo electr&oacute;nico" required>
        </div>

        <div class="field">
          <input type="text" placeholder="Contraseña" required>
        </div>

        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Registrarse">
        </div>

      </form>


    </div>
  </div>
</div>

<script src="js/app.js"></script>

</body>
</html>
