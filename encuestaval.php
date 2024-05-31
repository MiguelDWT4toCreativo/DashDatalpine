<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== TRUE) {
    header("location: index.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $email = $_POST["email"];
    $nombreEmpresa = $_POST["nombre_empresa"];
    $propiedadEspecifica = $_POST["propiedad_especifica"];
    $caracteristicasPropiedad = $_POST["caracteristicas_propiedad"];
    $ubicacion = $_POST["ubicacion"];
    $metrosCuadrados = $_POST["metros_cuadrados"];
    $banos = $_POST["banos"];
    $metrosConstruccion = $_POST["metros_construccion"];
    $numeroRecamaras = $_POST["numero_recamaras"];
    $estacionamientos = $_POST["estacionamientos"];
    $precio = $_POST["precio"];
    $archivo = $_POST["archivo"];

    // Construye el cuerpo del correo electrónico
    $mensaje = "Nombre de la Empresa: $nombreEmpresa\n";
    $mensaje .= "Propiedad Especifica: $propiedadEspecifica\n";
    $mensaje .= "Caracteristicas de la Propiedad: $caracteristicasPropiedad\n";
    $mensaje .= "Ubicacion: $ubicacion\n";
    $mensaje .= "Metros Cuadrados totales: $metrosCuadrados\n";
    $mensaje .= "Banos: $banos\n";
    $mensaje .= "Metros Cuadrados de Construccion: $metrosConstruccion\n";
    $mensaje .= "Numero de recamaras: $numeroRecamaras\n";
    $mensaje .= "Estacionamiento: $estacionamientos\n";
    $mensaje .= "Precio: $precio\n";
    $mensaje .= "Archivo: $archivo\n";


    // Configura el destinatario y asunto del correo electrónico
    $destinatario = "contactoteseodata@gmail.com";
    $asunto = "Nuevo formulario de Encuesta de Valuacion DatAlpine";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Puedes redirigir al usuario a una página de confirmación
    header("Location: /dashboard/confrimacion.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Edit</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="assets/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="assets/css/app.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/app.rtl.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="assets/css/vendor-material-icons.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-material-icons.rtl.css"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="assets/css/vendor-fontawesome-free.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-fontawesome-free.rtl.css"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

    </head>
    

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header m-0"
                 data-fixed>
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-white  pr-0"
                         id="navbar"
                         data-primary>
                        <div class="container-fluid p-0">

                            <!-- Navbar toggler -->

                            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none"
                                    type="button"
                                    data-toggle="sidebar"
                                    style="background-color: darkblue;">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href="inicio.php">
                            <img width="230" height="45"src="Logo.png"/>
                            </a>

                            <form class="search-form d-none d-sm-flex flex"
                                  action="inicio.php">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Buscar">
                            </form>
                            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a href="#notifications_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <i class="material-icons nav-icon navbar-notifications-indicator" style="color: darkgray;">notifications</i>
                                    </a>
                                    <div id="notifications_menu"
                                         class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                        <div class="dropdown-item d-flex align-items-center py-2">
                                            <span class="flex navbar-notifications-menu__title m-0">Notificaciones</span>
                                            <a href="javascript:void(0)"
                                               class="text-muted"><small>Borrar notificaciones</small></a>
                                        </div>
                                        <div class="navbar-notifications-menu__content"
                                             data-perfect-scrollbar>
                                            <div class="py-2">
                                                <div class="dropdown-item d-flex">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <div class="avatar avatar-xs"
                                                                 style="width: 32px; height: 32px;">
                                                                <span class="avatar-title rounded-circle">B</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="flex">
                                                        <a href="#">Brayan</a> <small class="text-muted">Escribio:</small><br>
                                                        <div>Prueba de mensaje</div>
                                                        <small class="text-muted">Hace 1 minuto</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <a href="javascript:void(0);"
                                           class="dropdown-item text-center navbar-notifications-menu__footer">Ver todas las notificaciones</a>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">AD</span>
                                        </div>
                                    </a>
                                    <div id="account_menu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>Administrador</strong></div>
                                            <div class="text-muted">@admin</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="edit-account.php"><i class="material-icons">account_circle</i> Mi perfil</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="logout.php"><i class="material-icons">exit_to_app</i> Cerrar sesión</a>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                     data-push
                     data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">
                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="form-group px-3 py-3">
                                            <h1 class="m-0">Encuesta de Valuacion</h1>
                                            <!--<div class="text">Copy</div> <br>-->
                                            <div class="flex">
                                                <div class="row px-3 card-form__body card-body">
                                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                                        <label for="email">Correo Electronico: *</label><br>
                                                        <input type="email" name="Email" required><br><br>
                                                
                                                        <label for="nombre_empresa">Nombre de la Empresa:</label>
                                                        <input type="text" name="nombre_empresa" required><br>
                                                
                                                        <label for="propiedad_especifica">Propiedad Específica (si existe URL): *</label><br>
                                                        <input type="text" name="propiedad_especifica" required><br><br>
                                                
                                                        <label for="caracteristicas_propiedad">Características de la Propiedad (si no hay URL): *</label><br>
                                                        <input type="text" name="caracteristicas_propiedad" required><br><br>
                                                
                                                        <label for="ubicacion">Ubicación</label><br>
                                                        <input type="text" name="ubicacion" required><br><br>

                                                        <label for="metros_cuadrados">Metros Cuadrados Totales: </label><br>
                                                        <input type="text" name="metros_cuadrados"><br><br>

                                                        <label for="banos">Banos:</label>
                                                        <select name="banos" required>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="Otro">Otro</option>
                                                        </select><br>
                                                
                                                        <label for="metros_construccion">Metros Cuadrados de Construcción: </label><br>
                                                        <input type="text" name="metros_construccion"><br><br>
                                                
                                                        <label for="recamaras">Recamaras:</label>
                                                        <select name="recamaras" required>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="Otro">Otro</option>
                                                        </select><br>

                                                        <label for="estacionamientos">Estacionamiento:</label>
                                                        <select name="estacionamientos" required>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="Otro">Otro</option>
                                                        </select><br>
                                                        
                                                
                                                        <label for="precio">Precio: </label><br>
                                                        <input type="number" name="precio" min="1"><br><br>
                                                
                                                        <label for="archivo">Si ya tiene toda esta información en un documento, puede enviarlo aquí,<br>
                                                            sin necesidad de contestar las anteriores preguntas</label><br><br>
                                                        <input type="file" name="archivo"><br><br>
                                                
                                                        <input type="submit" value="Enviar"><br><br>
                                                
                                                        <!-- <input type="hidden" name="_next" value="./satisfaccion.php">
                                                                                                        <input type="hidden" name="_captcha" value="false"> -->
                                                    </form>
                                                </div>
                                                
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END drawer-layout__content -->
                    <div class="mdk-drawer  js-mdk-drawer"
                         id="default-drawer"
                         data-align="start">
                        <div class="mdk-drawer__content">
                            <div class="sidebar sidebar-light sidebar-left sidebar-p-t bg-dark"
                                 data-perfect-scrollbar>
                                 <div class="sidebar-heading" style="color: darkgray;">Menu</div>
                                 <ul class="sidebar-menu">
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="inicio.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">dvr</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Inicio</span>   
                                         </a>
                                     </li>
                                     
                                     
                                 </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        <!-- App Settings FAB -->
        

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- App -->
        <script src="assets/js/toggle-check-all.js"></script>
        <script src="assets/js/check-selected-row.js"></script>
        <script src="assets/js/dropdown.js"></script>
        <script src="assets/js/sidebar-mini.js"></script>
        <script src="assets/js/app.js"></script>

        <!-- App Settings (safe to remove) -->
        <script src="assets/js/app-settings.js"></script>

    </body>

</html>