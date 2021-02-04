<!-- Form register -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="signup" method="POST">
    <div class="field">
        <input type="text" name="name" value="<?php if(isset($_POST["name"])){echo $name;} ?>" placeholder="Nombre" required>
    </div>

    <div class="field">
        <input type="text" name="surname" value="<?php if(isset($_POST["surname"])){echo $surname;} ?>" placeholder="Apellidos" required>
    </div>

    <div class="field">
        <input type="email" name="email" value="<?php if(isset($_POST["email"])){echo $email;} ?>" placeholder="Correo electr&oacute;nico" required>
    </div>

    <div class="field">
        <input type="password" name="password" placeholder="Contraseña" required>
    </div>

    <div class="field btn">
        <div class="btn-layer"></div>
        <input type="submit" name="register" value="Registrarse">
    </div>

</form>