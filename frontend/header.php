<!-- Header -->
<header>
    <!-- Dropdown Structure1 -->
    <ul id="dropdown1" class="dropdown-content">

        <!-- Perfil -->
        <li>
            <a href="#" class="black-text">
                <i class="material-icons">account_circle</i> 
                Perfil
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
            <a href="#" class="black-text">
                <i class="material-icons">power_settings_new</i> 
                Cerrar Sesi&oacute;n
            </a>
        </li>
    </ul>

    <!-- Dropdown Structure2 -->
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="#" class="black-text">Mensaje 1</a></li>
        <li><a href="#" class="black-text">Mensaje 2</a></li>
        <li class="divider"></li>
        <li><a href="#" class="black-text">Mensaje 3</a></li>
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
                <a href="/geyland" class="brand-logo">Geyland</a>
                <ul class="right hide-on-med-and-down">

                <!-- Boton de inicio -->
                <li>
                    <a href="/geyland/home" class="messenger-dropdown">
                        <i class="material-icons right">home</i>
                    </a>
                </li>

                <!-- Boton de busqueda de personas -->
                <li>
                    <a href="#">
                        <i class="material-icons right">search</i>
                    </a>
                </li>

                <!-- Boton de leer mensajes -->
                <li>
                    <a href="#" class="dropdown-trigger messenger-dropdown" data-target="dropdown2">
                        <i class="material-icons right">mail</i>
                    </a>
                </li>

                <!-- Dropdown Trigger -->
                <li>
                    <a class="dropdown-trigger" href="#" data-target="dropdown1">
                        <img src="images/yo.jpg" alt="Braylin Ivan Payano" class="img-dropdown circle" width="34" height="34">
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>

                </ul>

            </div>
        </nav>
    </div>
</header> <!-- End Header -->