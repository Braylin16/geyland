<!-- Menu sidenav responsive -->
<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
        <div class="background">
            <img src="img-cover/<?=$photo_cover?>">
        </div>
        <a href="#user"><img class="circle" src="img-profile/<?=$photo_profile?>"></a>
        <a href="#name"><span class="white-text name"><?=$name.' '.$surname?></span></a>
        <a href="#email"><span class="white-text email"><?=$email?></span></a>
        </div>
    </li>
    <!-- Notificaciones - Chat -->
    <li>
        <a href="messenger" class="messenger-dropdown tooltipped" data-position="bottom" data-tooltip="Tienes <?=$noti?> mensajes sin leer">
            <?php if($noti != 0) : ?>
                <span class="notification cyan pulse">
                    <?php if($noti >= 9) {$noti = '9+'; } ?>
                    <?=$noti?>
                </span>
            <?php else : ?>
                <i class="material-icons left">mail</i>Mis conversaciones
            <?php endif ?>
        </a>
    </li>
    <li><a href="<?=$url?>"><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="profile?user=<?=$id?>"><i class="material-icons">account_circle</i>Perfil</a></li>
    <li><a href="users"><i class="material-icons">person</i>Gente</a></li>
    <li><a href="#!"><i class="material-icons">search</i>Buscar persona</a></li>

    <li><div class="divider"></div></li>

    <li><a href="setting"><i class="material-icons">settings</i>Configuraci&oacute;n</a></li>
    <li><a href="setting-password"><i class="material-icons">lock</i>Editar contrase&ntilde;a</a></li>
    <li><div class="divider"></div></li>
    <li><a href="#!"><i class="material-icons">power_settings_new</i>Cerrar sesi&oacute;n</a></li>
</ul><!-- Fin menu -->