<!-- Requerimos las url -->
<?php require_once('./url/url.php') ?>
<?php require_once('./user/user.php') ?>
<?php require_once('./backend/notification.php') ?>
<!-- Header -->
<header>
    <!-- Dropdown Structure1 -->
    <ul id="dropdown1" class="dropdown-content">

        <!-- Perfil -->
        <li>
            <a href="profile?user=<?=$id?>" class="black-text">
                <i class="material-icons">account_circle</i> 
                Perfil
            </a>
        </li>

        <!-- Personas para chatear -->
        <li>
            <a href="users" class="black-text">
                <i class="material-icons">person</i> 
                Gente
            </a>
        </li>

        <!-- Configuracion -->
        <li>
            <a href="setting" class="black-text">
                <i class="material-icons">settings</i> 
                Configuraci&oacute;n
            </a>
        </li>

        <!-- Cambiar pass -->
        <li>
            <a href="setting-password" class="black-text">
                <i class="material-icons">edit</i> 
                Contrase&ntilde;a
            </a>
        </li>

        <li class="divider"></li>

        <!-- Cerrar sesion -->
        <li>
            <a href="./logout" class="black-text">
                <i class="material-icons">power_settings_new</i> 
                Cerrar Sesi&oacute;n
            </a>
        </li>
    </ul>

    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">

                <!-- Boton para aparecer el menu | Sidenav -->
                <a href="#" data-target="slide-out" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

                <!-- Titulo -->
                <a href="<?=$url?>" class="brand-logo">Geyland</a>
                <ul class="right hide-on-med-and-down">

                <!-- buscar persona -->
                <li id="input-search" class="hide">
                    <div class="row">
                        <form action="./search" method="GET" class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="search-header" name="search" type="search" placeholder="Buscar persona" class="validate" autocomplete="off">
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Boton search -->
                <li id="btn-icon-search">
                    <a class="messenger-dropdown">
                        <i class="material-icons right">search</i>
                    </a>
                </li>

                <!-- Boton de inicio -->
                <li>
                    <a href="<?=$url?>">
                        <i class="material-icons right">home</i>
                    </a>
                </li>

                <!-- Boton de leer mensajes -->
                <li>
                    <a href="messenger" class="messenger-dropdown">
                        <i class="material-icons right">mail</i>
                        <?php if($noti != 0) : ?>
                            <span class="notification cyan pulse tooltipped" data-position="bottom" data-tooltip="Tienes <?=$noti?> mensajes sin leer">
                                <?=$noti?>
                            </span>
                        <?php endif ?>
                    </a>
                </li>

                <!-- Dropdown Trigger -->
                <?php require_once('./dropdown/dropdown.php') ?>

                </ul>

            </div>
        </nav>
    </div>
</header> <!-- End Header -->