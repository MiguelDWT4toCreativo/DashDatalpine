<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== TRUE) {
    header("location: index.php");
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
        <title> Analisis de Mercado </title>
        <link rel="stylesheet" href="pdcc.min.css">
<script charset="utf-8" src="pdcc.min.js"></script>
<script type="text/javascript">
PDCookieConsent.config({
"defaultLang" : "es",
"brand": {
"dev" : false,
"name": "PRUEBAS",
"url" : "https://localhost",
"websiteOwner" : "PRUEBAS"
},
"cookiePolicyLink": "http://localhost/cookies.php",
"hideModalIn": ["http://localhost/cookies.php"],
"styles": {
"primaryButton": {
"bgColor" : "#A1FFA1",
"txtColor": "#036900"
},
"secondaryButton": {
"bgColor" : "#EEEEEE",
"txtColor": "#333333"
}
}
});


</script>

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

        <!-- Flatpickr -->
        <link type="text/css"
              href="assets/css/vendor-flatpickr.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-flatpickr.rtl.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-flatpickr-airbnb.css"
              rel="stylesheet">
        <link type="text/css"
              href="assets/css/vendor-flatpickr-airbnb.rtl.css"
              rel="stylesheet">

        <!-- Vector Maps -->
        <link type="text/css"
              href="assets/vendor/jqvmap/jqvmap.min.css"
              rel="stylesheet">
    <script>
      function mostrar(id)
      {
         var objeto=document.getElementById(id)
            objeto.style.display="block";
      }
      function ocultar(id)
      {
         var objeto=document.getElementById(id)
            objeto.style.display="none";
      }
   </script>
   <style>
      .oculto {display:none;}
   </style>
   <style>
    .sidebar-menu-item:last-child {
        margin-top: auto;
        margin-bottom: 0;
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>
<style>
    table {
        border-collapse: collapse;
        width: 70%; /* Puedes ajustar el ancho según tus necesidades */
        margin: 20px auto; /* Agregado para espaciado alrededor de la tabla */
        text-align: center;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: justify;
        padding: 8px;
    }

    /* Estilo para la primera columna */
    td:nth-child(odd) {
        background-color: #f2f2f2;
    }

    /* Estilo para la segunda columna */
    td:nth-child(even) {
        background-color: #e6e6e6;
    }
</style>

    </head>

    <style>
        .tooltip-alpine {
          position: relative;
          display: inline-block;
          
        }
        .tooltip-alpine .tooltiptext-alpine {
          visibility: hidden;
          width: 250px;
          background-color: white;
          color: black;
          text-align: center;
          border: 1px solid #D5DDE6;
          border-radius: 6px;
          padding: 5px 0;
          /* Position the tooltip */
          position: absolute;
          z-index: 1;
          top: 125%; /* Posiciona el tooltip bajo del elemento */
          right: 0%;
        }
        .tooltip-alpine:hover .tooltiptext-alpine {
          visibility: visible;
        }
    </style>

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
                        <div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-end">
                                <div class="flex">
                                    <div>
                                        <a href="#" class="btn-link" style="color: #374D67;">Jalisco</a>
                                        <span class="arrow">&gt;</span>
                                        <a href="#" class="btn-link" style="color: #3D45C0;">Puerto Vallarta</a>
                                    </div>
                                    <h1 class="m-0">Análisis de mercado</h1>
                                    <div class="text py-2">Este apartado ofrece datos históricos y actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión <br> completa de las transformaciones, tendencias y precios a lo largo del tiempo.</div>
                                    <a href="#" class="pdcc-open-modal">Panel Cookies</a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">PRECIO MERCADO </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Información relevante sobre los precios de mercado, relacionada con las propiedades existentes en el mercado.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span>$350,000</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span>$120,000,000</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span>$10,050,961.99</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span>$6,700,000</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">M2 TERRENO </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Muestra la variabilidad en los tamaños de M2 de terrenos en la muestra, desde los más pequeños hasta los más grandes, proporcionando una visión general de la distribución.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span>44</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span>13,000</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span>178</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span>113</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">M2 CONSTRUCCIÓN </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Aquí te presentamos la variedad en el tamaño de M2 de construcciones en nuestra muestra. Desde las más pequeñas hasta las más grandes.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span>45</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span>5,918</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span>162</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span>115</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">PRECIO M2 CONSTRUCIÓN </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Estos valores reflejan la variabilidad en los precios de construcción por metro cuadrado, desde muy bajos hasta muy altos.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Minimo</strong>
                                                <div>
                                                    <span>$1,448</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Maximo</strong>
                                                <div>
                                                    <span>$1,706,779</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Promedio</strong>
                                                <div>
                                                    <span>$64,859</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-3">
                                                <strong>Mediana</strong>
                                                <div>
                                                    <span>$59,366</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">CASA PROMEDIO </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title=" Comparación de datos de propiedades, resaltando las estadísticas promedio.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Recámaras</strong>
                                                <div>
                                                    <span>2.3</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Baños</strong>
                                                <div>
                                                    <span>3</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Estacionamientos</strong>
                                                <div>
                                                    <span>0.9</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Terreno</strong>
                                                <div>
                                                    <span>178.2</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>M2 Construido</strong>
                                                <div>
                                                    <span>161.9</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio</strong>
                                                <div>
                                                    <span>$10,050,961.99</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio M2 Construido</strong>
                                                <div>
                                                    <span>$64,858.60</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">CASA MEDIA </h4>
                                        </div>
                                        <div class="card-header d-flex align-items-center justify-content-end" style="background-color: #FAFBFE;">
                                            <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información </div>
                                            <a class="btn btn-white btn-sm" 
                                               data-toggle="tooltip"
                                               data-placement="bottom"
                                               title="Comparación de datos de propiedades, resaltando las estadísticas medias.">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                            </a>  
                                        </div>
                                        <div class="card-body py-4">
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Recámaras</strong>
                                                <div>
                                                    <span>2.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Baños</strong>
                                                <div>
                                                    <span>2.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Estacionamientos</strong>
                                                <div>
                                                    <span>1.0</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Terreno</strong>
                                                <div>
                                                    <span>113</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>M2 Construido</strong>
                                                <div>
                                                    <span>115</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio</strong>
                                                <div>
                                                    <span>$6,700,000.00</span> 
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between pb-1">
                                                <strong>Precio M2 Construido</strong>
                                                <div>
                                                    <span>$59,366.10</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mapa de calor</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido01') & ocultar('contenido02') " value="Códigos postales por precios ">
                                                <!--<input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido02') & ocultar('contenido01') " value="Mapa 2"> -->
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div >
                                                    <!--
                                                    <iframe src="/dashboard/pachuca_property_map_formatted2.html" width="800" height="400" frameborder="0" id="contenido01"></iframe>
                                                     <iframe src="/pachuca_property_map_formatted.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"  > Este mapa interactivo proporciona una visión detallada de las colonias locales, presentando datos esenciales para la toma de decisiones inmobiliarias. Desde los precios por metro cuadrado hasta la distribución de construcciones, el número de baños y estacionamientos disponibles, cada punto en el mapa revela aspectos cruciales para entender el mercado.. 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Interpretación
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mapa de calor Propiedades</h4>
                                            
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div >
                                                    <!--
                                                    <iframe src="/dashboard/hidalgo_heat_map.html" width="800" height="400" frameborder="0" id="contenido01"></iframe>
                                                     <iframe src="/pachuca_property_map_formatted.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"  > 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Interpretación
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Clientes potenciales foráneos</h4>
                                            <div>
                                                <!--<input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido01') & ocultar('contenido02') " value="Códigos postales por precios "> -->
                                                <!--<input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido02') & ocultar('contenido01') " value="Mapa 2"> -->
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div >
                                                    <img src="/dashboard/assets/images/PachucaAct.png" alt="100%" style="width: 100%;">
                                                    <!-- <iframe src="/pachuca_property_map_formatted.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe> -->
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"  > Este análisis estratégico, presenta una representación geográfica minuciosa de las oportunidades comerciales identificadas en ciudades estratégicas de la región. La ponderación asignada a cada ubicación se basa en un meticuloso análisis de variables clave, como el tamaño del mercado, la demanda del producto o servicio y la accesibilidad logística. A través de una codificación visual precisa, este mapa resalta áreas con un potencial comercial más significativo, facilitando decisiones estratégicas informadas.. 
                                                <br><br>
                                            </div>    
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mdc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Interpretación
                                                </button>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title m-0">1.  Segmentos </h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">1.1. Distribución de segmentos </h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="966" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1178002596&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex">Interpretación: </h4>
                                            <div class="text"> Distribución de segmentos. Conoce la participación en el mercado inmobiliario por segmentos (S, A, B, C, D, E). 
                                                Cada sección representa el porcentaje o proporción en ese segmento específico en relación con el total.  </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.2 Distribución por M2 construcción por rango</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1') & ocultar('contenido2') " value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2') & ocultar('contenido1') " value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="808" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=239845512&amp;format=interactive" id="contenido1"></iframe>                                                    
                                                    <iframe width="677" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1884579134&amp;format=interactive" id="contenido2" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dm2cr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li><strong>Segmento S</strong>: Posee una alta concentración de propiedades con un tamaño de construcción mayor a los <strong>100-150 m2</strong>.</li>
                                                    <li><strong>Segmento A</strong>: Tiene una cantidad significativa de propiedades de <strong>0-100m2 de construcción</strong>.</li>
                                                    <li><strong>Segmento B</strong>: Destaca las propiedades con <strong>0-100m2</strong>.</li>
                                                    <li><strong>Segmento C</strong>: Destaca las mayores a los 0-100m2.</li>
                                                    <li><strong>Segmento D</strong>: Posee los valores más cercanos a la media presupuestal y tiene una distribución equitativa.</li>
                                                    <li><strong>Segmento E</strong>: Tiene una cantidad significativa de propiedades de <strong>0 a 100 m2</strong></li>
                                                    <li><strong>Segmento L</strong>: Tiene una cantidad significativa de propiedades de <strong>>300m2</strong></li>                        
                                                </ul>
                                            </div>    
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.2.2 Precio promedio por M2 totales</h4>
                                            
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="731" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1693915285&amp;format=interactive"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-ppmt">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                La gráfica presenta los precios promedio por metro cuadrado en diferentes rangos, ofreciendo una perspectiva clara de la variación de costos en el mercado inmobiliario. Desde <strong>$4,981,233</strong> en el rango de <strong>0-100 metros</strong> cuadrados hasta <strong>$32,495,588</strong> para propiedades que superan los <strong>300 metros cuadrados</strong>, la visualización destaca la evolución de los precios a medida que aumenta la dimensión de las propiedades                                             
                                            </div>    
                                        </div>            
                                    </div>
                                </div>
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.3 Distribución M2 de terreno por rango</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido3') & ocultar('contenido4')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido4') & ocultar('contenido3')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=743527838&amp;format=interactive" id="contenido3"></iframe>
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1229151807&amp;format=interactive" id="contenido4" class="oculto"></iframe>                                                </div>
                                            </form>      
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dm2tr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li>Segmento S</strong>: Esto significa que en este segmento hay una gran cantidad de terrenos construidos de este tamaño.</li>
                                                    <li>Segmento A</strong>: Tiene una alta concentración de terrenos en el rango mayor a los <strong>0-100 M2</strong>. Esto indica que los terrenos de tamaño amplio son comunes en este segmento.</li>
                                                    <li>Segmento B, C y D</strong>: Muestran una distribución más acentuada entre los terrenos de tamaño de <strong>0-100 M2</strong>. Esto implica que este segmento es más adecuado para aquellos que buscan terrenos de tamaño medio.</li>
                                                    <li>Segmento E</strong>: Muestran una distribución más acentuada entre los terrenos de tamaño de <strong>0-100 M2</strong>. Esto implica que este segmento es más adecuado para aquellos que buscan terrenos de tamaño chico.</li>
                                                    <li>Segmento L</strong>: Tiene una alta concentración de terrenos en el rango mayor a los <strong>>300 M2</strong>. Esto indica que los terrenos de tamaño amplio son comunes en este segmento.</li>
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.4 Distribución recámaras </h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido5') & ocultar('contenido6')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido6') & ocultar('contenido5')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=500208769&amp;format=interactive" id="contenido5"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=654037226&amp;format=interactive" id="contenido6" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > 
                                                <ul>
                                                    <li>Las propiedades con 2 recámaras son las más comunes en todos los segmentos, esto se puede observar en las barras altas, con una cantidad significativa para el <strong>segmento D</strong>.</li>
                                                    <li>Subsiguiente, las propiedades con <strong>3 recámaras</strong> también son populares en los segmentos.</li>
                       
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.5 Distribución de baños</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido7') & ocultar('contenido8')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido8') & ocultar('contenido7')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="829" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1198227102&amp;format=interactive" id="contenido7"></iframe>                                                    
                                                    <iframe width="694" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=718080675&amp;format=interactive" id="contenido8" class="oculto"></iframe>                                                
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-db">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li><strong>Segmento S</strong>: La mayoría de las propiedades tiene <strong>6 baños</strong>. Esto se puede observar en las barras altas en este segmento para las propiedades con estos números de baños.</li>
                                                    <li><strong>Segmento A</strong>: Hay una distribución predominante entre propiedades con 4 baños, seguido de 3 baños.</li>
                                                    <li><strong>Segmento B</strong>: Muestra una predominancia de propiedades con <strong>4 baños</strong>. Esto se puede observar en la barra alta en este segmento para las propiedades, seguido de <strong>3 baños</strong>.</li>
                                                    <li><strong>Segmento C y D</strong>: La mayoría de las propiedades es común encontrar entre 3 y 4 baños.</li>
                                                    <li><strong>Segmento E</strong>:  Tiene mayor propiedades en cada categoría de número de baños. En las que predominan <strong>2 baños</strong>.</li>                        
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">1.6 Distribución de estacionamientos</h4>
                                            <div>    
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido9') & ocultar('contenido10')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido10')& ocultar('contenido9')" value="General">
                                            </div>    
                                        </div>                        
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="627" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1195562975&amp;format=interactive" id="contenido9"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1520299643&amp;format=interactive" id="contenido10" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-des">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > 
                                                <ul>
                                                    <li>Los <strong>segmento E, C y S</strong>  muestran una preferencia marcada por 1 estacionamiento. Esto se puede observar en las barras altas en estos segmentos para las propiedades con estos números de estacionamientos.</li>
                                                    <li>El <strong>segmento D</strong> tiene una notable cantidad de propiedades con 2 estacionamiento.</li>
                                                    <li>El <strong>segmento A</strong> destaca con propiedades con de 1 estacionamiento. Esto se puede observar en las barras altas para dicho segmento.</li>
                                                    <li>El <strong>segmento L</strong> destaca con propiedades con de 1 estacionamiento.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title m-0">2. Tiempo estimado de venta  </h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">2.1 Tiempo estimado de venta  </h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido11') & ocultar('contenido12')" value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido12') & ocultar('contenido11')" value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="695" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1127042123&amp;format=interactive" id="contenido11"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=569881331&amp;format=interactive" id="contenido12" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-tev">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                <ul>
                                                    <li><strong>Segmento S</strong>: Su distribución es sesgada hacia la derecha puesto que posee una alta concentración de propiedades con una antigüedad de oferta de <strong>7 meses</strong>. </li>
                                                    <li><strong>Segmento A y B</strong>: Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7 y 11 meses</strong>.</li>
                                                    <li><strong>Segmento C Y D</strong>: Poseen una distribución sesgada hacia la izquierda con una concentración de disponibilidad que ronda los <strong>7 meses</strong> de antigüedad.</li>
                                                    <li><strong>Segmento E</strong>: Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7 meses</strong>.</li>
                                                    <li><strong>Segmento L</strong>: Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7 meses</strong>.</li>                        
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"> 
                                    <h4 class="card-header__title m-0">3. Créditos</h4>      
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 3.1. Distribución de créditos por género </h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=460574456&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dcg">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  >
                                                <ul>
                                                    <li>Un <strong>mayor porcentaje de préstamos se otorga a hombres</strong> en el mercado inmobiliario. Los hombres tienen el <strong>53.9%</strong> de los créditos.</li>
                                                    <li>Las mujeres tienen el <strong>46.1%</strong> de los créditos. Esto indica que un <strong>menor porcentaje de préstamos se otorga a mujeres</strong>.</li>
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 3.2. Destino del crédito</h4> 
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1857163564&amp;format=interactive"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dcr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > 
                                                <ul>
                                                    <li>La mayoría de los créditos se destinan a <strong>viviendas nuevas (1231)</strong> y <strong>viviendas usadas (574)</strong>. Esto se puede observar en la barra más alta en el gráfico para viviendas nuevas.</li>
                                                    <li>Los créditos para mejoramientos son significativamente menores <strong>(538)</strong>.</li>
                                                    <li>Otros programas reciben la menor cantidad de créditos <strong>(156)</strong>.</li>

                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mercado salario por persona </h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido13') & ocultar('contenido14')" value="%">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido14') & ocultar('contenido13')" value="Rango de $">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="726" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1147835890&amp;format=interactive" id="contenido13"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=32447870&amp;format=interactive" id="contenido14" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">  
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-msps">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text"> 
                                                <ul>
                                                    <li>La tabla proporciona una clasificación del mercado salarial por persona, dividida en diferentes categorías desde <strong>“G”</strong> hasta <strong>“S”</strong>. Cada categoría representa un rango de salario específico.</li>
                                                    <li>La mayoría de las personas se encuentran en la categoría <strong>“F” (38.08%)</strong>, que representa salarios entre <strong>$5000 y $7,999 pesos</strong>, seguida por la categoría <strong>“F1”</strong>, que incluye salarios entre <strong>$8,000 y $11,999 pesos</strong>, y en tercer lugar la categoría <strong>“E” (12.50%)</strong> que representa salarios que ronda los <strong>$12000 a $15,999 pesos</strong> indicando que una gran proporción de individuos tiene ingresos dentro de esos rangos. A partir de la clasificación ‘D’, los porcentajes disminuyen significativamente. Las demás categorías tienen una menor proporción de personas.</li>
                                                    <li>Esta tabla nos permite comprender de manera efectiva cómo se distribuyen los salarios en el mercado laboral y dónde se encuentra un elemento específico dentro de este mercado. Es una herramienta útil para analizar la estructura salarial de la población.</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                            <h4 class="card-header__title m-0">Mercado salario por pareja </h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido15') & ocultar('contenido16')" value="%">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido16') & ocultar('contenido15')" value="Rango de $">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="731" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1433026444&amp;format=interactive" id="contenido15"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=993575119&amp;format=interactive" id="contenido16" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mspr">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                <ul>
                                                    <li>La tabla proporciona una clasificación del mercado salarial por pareja, dividida en diferentes categorías desde “G” hasta “S”. Cada categoría representa un rango de salario específico y el porcentaje de parejas que caen dentro de ese rango.</li>
                                                    <li>La mayoría de las personas se encuentran en la categoría <strong>“E” (32.85%)</strong>, que representa salarios entre <strong>$12000 y $16000 pesos</strong>, seguida por la categoría <strong>“F1”</strong>, que incluye salarios entre <strong>$8,000 y $11,999 pesos</strong>, y en tercer lugar la categoría <strong>“E1”(13.37%)</strong> que incluye a parejas que ganan entre <strong>$16000 y $20,000 pesos</strong>. A partir de la clasificación ‘C’, los porcentajes disminuyen significativamente. Las demás categorías tienen una menor proporción de personas a medida que los rangos salariales aumentan.</li>
                                                    <li>Esta tabla nos permite comprender de manera efectiva cómo se distribuyen los salarios en el mercado laboral y dónde se encuentra un elemento específico dentro de este mercado. Es una herramienta útil para analizar la estructura salarial de la población.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> Volumen del mercado salarial de parejas</h4> 
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <iframe width="1084" height="319" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQsnIBg-MCJFYSjuf8sKSeHJqtfF8tS1hLQWTpHjbo80bou-jofoLK9I-M5aR7zybJWaAfr-ToEcxYK/pubchart?oid=1501374355&amp;format=interactive"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-vmsp">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > 
                                                <ul>
                                                    <li>Las barras están coloreadas para representar visualmente cada rango de ingreso; hay una barra naranja y una verde que son prominentes porque representan volúmenes salariales netos más altos. Los valores exactos del volumen salarial están indicados en cada barra para proporcionar detalles precisos.</li>
                                                    <li>Se observa que la categoría color verde de ingresos de $8000-$1200(F) tiene el volumen salarial más alto, seguido por la categoría de $12000-$16000 (E). Las categorías con ingresos superiores a 30K(C) en adelante tienen un volumen salarial significativamente menor.</li>
                                                    <li>Este gráfico nos permite comprender de manera efectiva cómo se distribuyen los salarios en el mercado laboral y dónde se encuentra un elemento específico dentro de este mercado. Es una herramienta útil para analizar la estructura salarial de la población.
                                                    </li>
                                                </ul>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"> 
                                    <h4 class="card-header__title m-0">Profesiones</h4>      
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> Salario Individual</h4> 
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">
                                                <div class="d-flex align-items-center">
                                                    <table border="1">
                                                        <thead>
                                                            <tr>
                                                                <th>Profesiones Más Bajas</th>
                                                                <th>Profesiones Más Altas</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Columna 1 -->
                                                            <tr>
                                                                <td>Trabajadores de Apoyo en la Industria de la Cerámica, Vidrio y Similares</td>
                                                                <td>JCoordinadores y Jefes de Área en Desarrollo Social y Económico</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tejedores de Fibras</td>
                                                                <td>Directores y Gerentes en Informática</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Trabajadores de Apoyo en Actividades de Acuicultura y Pesca</td>
                                                                <td>Nutriólogos</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Trabajadores de Apoyo que Realizan Actividades Agrícolas y Ganaderas</td>
                                                                <td>Investigadores y Especialistas en Matemáticas, Estadística y Actuaría</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Vendedores por Catálogo</td>
                                                                <td>Directores y Gerentes en Construcción, Reparación y Mantenimiento</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Otros Trabajadores Artesanales, no Clasificados Anteriormente</td>
                                                                <td>Directores y Gerentes en Servicios de Transporte</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Auxiliares y Técnicos en Construcción y Arquitectura</td>
                                                                <td>Ingenieros en Comunicaciones y Telecomunicaciones</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Recolectores de Basura y Material Reciclable</td>
                                                                <td>Ingenieros Biomédicos</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ayudantes en la Preparación de Alimentos</td>
                                                                <td>Biólogos y Especialistas en Ciencias del Mar y Oceanógrafos</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Vendedores Ambulantes de Artículos Diversos (Excluyendo los de Venta de Alimentos)</td>
                                                                <td>Farmacólogos</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>                                                                                                 
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"  > Explora nuestra plataforma para conocer las profesiones que lideran los ingresos y aquellas que presentan retos económicos. Obtén información detallada sobre los salarios, tendencias y perspectivas profesionales, brindándote una visión clara de las carreras más y menos lucrativas en el mercado laboral actual.
                                                Los datos presentados destacan notables diferencias salariales entre diversas profesiones. En el espectro más bajo, se encuentran Tejedores de fibras, vendedores por catálogo, posiblemente señalando desafíos económicos. En el extremo superior, Nutriólogos, Farmacólogos y coordinadores de transporte lideran en compensación, sugiriendo una mayor valoración económica en sectores tecnológicos y de transporte.
                                                <br><br>
                                                
                                            </div>    
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
                                     <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="jpam.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Analisis de Mercado</span>
                                            
                                        </a>
                                    </li>
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="jpim.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Investigacion de Mercado</span>
                                             
                                         </a>
                                     </li>
                                     
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="jppt.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Proyecciones y Tendencias</span>
                                             
                                         </a>
                                     </li>
                                     <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;"></i>
                                            <div >
                                                <ul class=" nav navbar-nav align-items-end">
                                                    <input type="button" 
                                                class=""
                                                data-toggle="modal"
                                                data-placement="bottom"
                                                data-target="#modal-large"
                                                value="Clasificación de mercado">
                                                </ul>
                                            </div>                                            
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
        <div id="modal-large"
             class="modal fade"
             tabindex="-1"
             role="dialog"
             aria-labelledby="modal-large-title"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center align-items-center"> 
                        <div class="text-align"
                            id="modal-large-title">Para comprender mejor el dinámico y amplio mercado inmobiliario, se desarrolla una clasificación por segmentos <strong>(S, A, B, C, D, E)</strong> basada en la oferta de precios de las viviendas. Dicha segmentación proporciona una visión rápida y clara que facilita el análisis de las opciones actuales disponibles, que van desde propiedades asequibles hasta lujosas residencias. <strong> ¡Descubre el rango de posibilidades que el mercado tiene para ofrecer!</strong> </div>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <!-- // END .modal-header -->
                    <div class="modal-body">
                        <h2 class="text-center"> Clasificación de mercado</h2> <br>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#6773df">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >E</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">E1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> <$500K  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">E2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $500k - $750K</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">E3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$750K - $1M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#67c2df">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >D</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">D1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $1M - $1.25M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">D2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $1.25M - $1.5M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">D3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$1.5M - $1.75M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#7cc668">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >C</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">C1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$1.75M - $2M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">C2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $2M - $2.25M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-2 py-3">C3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$2.25M - $2.5M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#ffb038">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >B</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="text-left px-2 py-3">B1</th>
                                            <td class="text-center" style="background-color: #FAFBFE;"> $2.5M - $2.75M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-left px-2 py-3">B2</th>
                                            <td class="text-center" style="background-color: #FAFBFE;"> $2.75M - $3M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-left px-2 py-3">B3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$3M - $3.25M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#ff4853">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >A</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th class="text-center px-2 py-3" scope="row">A1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $3.25M - $3.5M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">A2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $3.5M - $3.75M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">A3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$3.75M - $4M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-10 col-md-3 table-responsive">
                                <table class="table table-sm">
                                    <tr bgcolor="#3d45c0">
                                        <th style="color: white;" scope="col" colspan="2" class="text-center" >S</th>
                                    </tr>
                                    <tbody>
                                        <tr>
                                            <th class="text-center px-2 py-3" scope="row">S1</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $4M - $6M  </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">S2</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $6M - $8M</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="text-center px-1 py-3">S3</th>
                                            <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$8M - $12M</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> <!-- // END .modal -->
        <!-- App Settings FAB -->
        
                        <!-- Interpretaciones -->
            <!-- 1.1 Distribución por M2 de construcción por rango -->
            <div id="modal-large-dm2cr"
             class="modal fade"
             tabindex="-1"
             role="dialog"
             aria-labelledby="modal-large-title"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg"
                 role="document">
                <div class="modal-content">
                    <div class="modal-header justify-content-center align-items-center"> 
                        <div class="text-align"
                            id="modal-large-title">Descripción</div>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> <!-- // END .modal-header -->
                    <div class="modal-body text-left" style="color: black;"  > Distribución por M2 de construcción por rango para las propiedades en diferentes segmentos (S, A, B, C, D, E). 
                        En función de la cantidad de metros cuadrados de construcción, observa cómo se agrupan las viviendas según su tamaño disponible permitiendo una visión rápida y clara de cómo se distribuyen y
                        cuales son más predominantes en un cierto mercado inmobiliario. 
                        <br><br>
                        <div>
                            <ul>
                                <li>Si una barra es alta, significa que hay muchas propiedades que tienen un tamaño de construcción dentro de ese rango específico.</li>
                                <li>Si una barra es baja, existen menos propiedades en ese rango en particular.</li>
                            </ul>
                        </div>
                    </div>   
                    
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> 

        <!-- Distribución M2 de terreno por rango -->
            <div id="modal-large-dm2tr"
            class="modal fade"
            tabindex="-1"
            role="dialog"
            aria-labelledby="modal-large-title"
            aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered modal-lg"
                role="document">
               <div class="modal-content">
                   <div class="modal-header justify-content-center align-items-center"> 
                       <div class="text-align"
                           id="modal-large-title">Descripción</div>
                       <button type="button"
                               class="close"
                               data-dismiss="modal"
                               aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div> <!-- // END .modal-header -->
                   <div class="modal-body text-left" style="color: black;">
                    <p>Distribución M2 de terreno por rango para las propiedades en diferentes segmentos (S, A, B, C, D, E). En base a los metros cuadrados de terreno, visualiza la agrupación según su tamaño disponible permitiendo una visión rápida y clara de cómo se distribuyen los terrenos en términos de tamaño y cuales son más predominantes en un cierto mercado inmobiliario.</p>
                    <ul>
                        <li>Si una barra es alta, significa que hay muchos terrenos que tienen un tamaño dentro de ese rango particular.</li>
                        <li>Si una barra es baja, indica que existen menos terrenos en ese rango especifico.</li>
                    </ul>
                    
                    </div>
               </div> <!-- // END .modal-content -->
           </div> <!-- // END .modal-dialog -->
       </div> 
       <!-- App Settings FAB -->

       <!-- Precio promedio por M2 cuadrados -->
       <div id="modal-large-ppmt"
       class="modal fade"
       tabindex="-1"
       role="dialog"
       aria-labelledby="modal-large-title"
       aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg"
           role="document">
          <div class="modal-content">
              <div class="modal-header justify-content-center align-items-center"> 
                  <div class="text-align"
                      id="modal-large-title">Descripción</div>
                  <button type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div> <!-- // END .modal-header -->
              <div class="modal-body text-left" style="color: black;">
                  Este análisis visual presenta la variación en costos por metro cuadrado en distintos segmentos inmobiliarios. Se observa un aumento progresivo de los valores a medida que se avanza de un rango a otro, proporcionando una representación concisa de las tendencias de precios en diferentes dimensiones de propiedades.                     
              </div>
          </div> <!-- // END .modal-content -->
      </div> <!-- // END .modal-dialog -->
      </div> 
       <!-- Distribución recámaras -->
       <div id="modal-large-dr"
       class="modal fade"
       tabindex="-1"
       role="dialog"
       aria-labelledby="modal-large-title"
       aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg"
           role="document">
          <div class="modal-content">
              <div class="modal-header justify-content-center align-items-center"> 
                  <div class="text-align"
                      id="modal-large-title">Descripción</div>
                  <button type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div> <!-- // END .modal-header -->
              <div class="modal-body text-left" style="color: black;">
                <p> Distribución del número de recamaras para las propiedades en diferentes segmentos (S, A, B, C, D, E). Explora una visión concisa sobre los rangos de recamaras más comunes y menos comunes en las preferencias de un sector inmobiliario. 
                    </p>
                <div>
                        <ul>
                            <li>Si una barra es alta, significa que hay muchas propiedades con ese número de recámaras dentro de ese rango en especifico</li>
                            <li>Si una barra es baja, indica que hay menos propiedades con ese número de recámaras.</li>
                        </ul>
                </div>
              </div>
          </div> <!-- // END .modal-content -->
      </div> <!-- // END .modal-dialog -->
  </div> 
  <!-- App Settings FAB -->

  <!-- Distribución de baños) -->
  <div id="modal-large-db"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Distribución del número de baños para las propiedades en diferentes segmentos (S, A, B, C, D, E). Conoce un panorama claro sobre los rangos de baños predominantes y menos predominantes. 
            <div>
                <ul>
                    <li>Si una barra es alta, significa que hay muchas propiedades con ese número de baños dentro de ese rango en particular.</li>
                    <li>Si una barra es baja, indica que hay menos propiedades con ese número de baños en específico.</li>
                </ul>
            </div>
        </div> 
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Distribución de estacionamientos -->
  <div id="modal-large-des"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Distribución del número de estacionamientos para las propiedades en diferentes segmentos (S, A, B, C, D, E). Observa como se distribuyen los números de lugares de estacionamiento para comprender las preferencias del mercado en cuanto a este aspecto. 
            <div>
                <ul>
                    <li>Si una barra es alta, significa que hay muchas propiedades con esa cantidad de estacionamientos</li>
                    <li>Si una barra es baja, indica que hay menos propiedades con esa cantidad de espacios para estacionamientos.</li>
                </ul>
            </div>
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!--  Tiempo estimado de venta -->
  <div id="modal-large-tev"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
             Distribución de las viviendas en función de la cantidad de meses que han estado en existencia para venta por segmentos (S, A, B, C, D, E). De acuerdo al tiempo de venta estimado se puede identificar que segmentos tienen una demanda más alta y tienden a venderse un poco más rápido y cuales requieren un poco más de tiempo para encontrar compradores. 
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Distribución de créditos por género -->
  <div id="modal-large-dcg"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Distribución de créditos por género. Distingue la diferencia en la porporción de prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser útil para comprender las tendencias de financiamiento y su participación en terminos de acesso a créditos por grupo de género  
            <br><br>
            <div>
                <ul>
                    <li>Si la sección de hombres es más grande, significa que un mayor porcentaje de préstamos se otorga a hombres</li>
                    <li>Si la sección de mujeres es más grande, indica que un mayor porcentaje de préstamos se otorga a mujeres</li>
                </ul>
            </div>
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Destino del crédito -->
  <div id="modal-large-dcr"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Número de créditos por tipo de vivienda. Descubre como se distribuyen los créditos de acuerdo al tipo de vivienda: nueva, con mejoras, usada y otros programas. Cada sección del gráfico representa la proporción del número de créditos que se destina a un propósito específico en relación con el total de créditos otorgados para viviendas. Explora hacia donde se dirige el dinero prestado y comprende las preferencias y necesidades de las personas que invierten en este sector inmobiliario.
            <div>
                <ul>
                    <li>Si una sección es grande, significa que una parte significativa de los créditos se utiliza para dicho destino.</li>
                </ul>
            </div>
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Mercado salario por persona -->
  <div id="modal-large-msps"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Esta clasificación se basa en rangos de valores que representan diferentes niveles en el mercado salarial promedio por persona. Lo que nos permite entender y comunicar de manera efectiva dónde se encuentra un determinado elemento en el mercado. 
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Mercado salario por pareja-->
  <div id="modal-large-mspr"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Esta clasificación se basa en rangos de valores que representan diferentes niveles en el mercado salarial promedio por pareja. Lo que nos permite entender y comunicar de manera efectiva dónde se encuentra un determinado elemento en el mercado.
                     
        </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Volumen del mercado salarial de parejas -->
  <div id="modal-large-vmsp"
  class="modal fade"
  tabindex="-1"
  role="dialog"
  aria-labelledby="modal-large-title"
  aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered modal-lg"
      role="document">
     <div class="modal-content">
         <div class="modal-header justify-content-center align-items-center"> 
             <div class="text-align"
                 id="modal-large-title">Descripción</div>
             <button type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div> <!-- // END .modal-header -->
         <div class="modal-body text-left" style="color: black;">
            Esta gráfica es una representación visual del volumen total de salarios por pareja anuales, segmentados por categorías. En otras palabras, nos muestra cómo se divide el dinero ganado neto entre diferentes tipos de trabajos y ocupaciones. De un vistazo, podemos comprender cómo se distribuye este volumen salarial en diferentes niveles de ingresos, lo que proporciona una visión completa de la estructura salarial en nuestro mercado laboral.
            
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
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

        <!-- Flatpickr -->
        <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
        <script src="assets/js/flatpickr.js"></script>

        <!-- Global Settings -->
        <script src="assets/js/settings.js"></script>

        <!-- Moment.js -->
        <script src="assets/vendor/moment.min.js"></script>
        <script src="assets/vendor/moment-range.js"></script>

        <!-- Chart.js -->
        <script src="assets/vendor/Chart.min.js"></script>

        <!-- App Charts JS -->
        <script src="assets/js/charts.js"></script>
        <script src="assets/js/chartjs-rounded-bar.js"></script>

        <!-- Chart Samples -->
        <script src="assets/js/page.dashboard.js"></script>
        <script src="assets/js/progress-charts.js"></script>

        <!-- Vector Maps -->
        <script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
        <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/js/vector-maps.js"></script>

    </body>

</html>