<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== TRUE) {
    header("location: index.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $nombreEmpresa = $_POST["nombre_empresa"];
    $areaInforme = $_POST["area_informe"];
    $interesPlataforma = $_POST["interes_plataforma"];
    $informacionAdicional = $_POST["informacion_adicional"];
    $recomendaciones = $_POST["recomendaciones"];
    $clasificacionSegmento = $_POST["clasificacion_segmento"];

    // Construye el cuerpo del correo electrónico
    $mensaje = "Nombre de la Empresa: $nombreEmpresa\n";
    $mensaje .= "Área que ocupa el informe: $areaInforme\n";
    $mensaje .= "Interés en la plataforma: $interesPlataforma\n";
    $mensaje .= "Información Adicional: $informacionAdicional\n";
    $mensaje .= "Recomendaciones: $recomendaciones\n";
    $mensaje .= "Clasificación de Segmento: $clasificacionSegmento\n";

    // Configura el destinatario y asunto del correo electrónico
    $destinatario = "contactoteseodata@gmail.com";
    $asunto = "Nuevo formulario de Encuesta de Satisfaccion DatAlpine";

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
                                            <h1 class="m-0">Encuesta de Satisfaccion Suscriptores</h1>
                                            <!--<div class="text">Copy</div> <br>-->
                                            <div class="flex">
                                                <div class="row px-3 card-form__body card-body">
                                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Pregunta 1: Nombre de la Empresa -->
        <label for="nombre_empresa">Nombre de la Empresa:</label>
        <input type="text" name="nombre_empresa" required><br>

        <!-- Pregunta 2: Área que ocupa el informe -->
        <label for="area_informe">Área que ocupa el informe:</label>
        <select name="area_informe" required>
            <option value="Mercadotecnia">Mercadotecnia</option>
            <option value="Comercial">Comercial</option>
            <option value="Direccion_General">Direccion General</option>
            <option value="Arquitectura">Arquitectura</option>
            <option value="Otro">Otro</option>
        </select><br>

        <!-- Pregunta 3: Interés en la plataforma -->
        <label>¿Qué graficas o información proporcionada dentro de nuestra plataforma fue de tu interés?</label>
        <input type="text" name="interes_plataforma" required><br>

        <!-- Pregunta 4: Información adicional a visualizar -->
        <label>¿Qué información adicional te gustaría visualizar?</label>
        <input type="text" name="informacion_adicional" required><br>

        <!-- Pregunta 5: Recomendación de funcionalidades -->
        <label>Recomendación de funcionalidades de nuestra plataforma</label>
        <input type="text" name="recomendaciones" required><br>

        <!-- Pregunta 6: Clasificación de segmento -->
        <label>¿De qué clasificación de segmento deseas tu informe inmobiliario?</label>
        <select name="clasificacion_segmento" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="S">S</option>
        </select><br>

        
        <input type="submit" value="Enviar">
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