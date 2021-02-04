<!-- Form login -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="login" method="POST">

    <div class="field">
        <input type="text" name="email" value="<?php if(isset($_POST["email"])){echo $email;} ?>" placeholder="Correo electr&oacute;nico" required>
    </div>

    <div class="field">
        <input type="password" name="pass" placeholder="Contraseña" required>
    </div>

    <!-- Errores -->
    <?php if(isset($errors) || isset($errorLogin)) : ?>
        <br>
        <p class="red-text"><?=$errors?></p>
        <p class="red-text"><?=$errorLogin?></p>
    <?php endif ?>

    <div class="pass-link">
        <a href="#">¿Se te olvidó tu contraseña?</a>
    </div>

    <div class="field btn">
        <div class="btn-layer"></div>
        <input type="submit" name="login" value="Entrar">
    </div>


    <div class="signup-link">
        ¿No eres miembro?  <a href="">Regístrate ahora</a>
    </div>

</form>