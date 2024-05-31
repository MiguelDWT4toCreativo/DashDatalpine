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
        <title> Proyecciones y Tendencias </title>
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

    <style>
        .cantidades {
            font-weight: bold;
            display: inline;
        }
    </style>




    <body class="layout-default">

        <div class="preloader">
        </div>

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
                               <img width="230" height="45"src="Logo.png" />
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
                                        <a href="#" class="btn-link" style="color: #374D67;">Puebla</a>
                                        <span class="arrow">&gt;</span>
                                        <a href="#" class="btn-link" style="color: #3D45C0;">Puebla</a>
                                    </div>
                                    <h1 class="m-0">Proyecciones y Tendencias</h1>
                                    <div class="text py-2">Esta sección muestra un análisis exhaustivo de las proyecciones y tendencias del mercado inmobiliario en los próximos años, proporcionando una visión detallada de elementos cruciales como el precio promedio de la vivienda, la dinámica de los créditos otorgados, el tiempo en el mercado y el crecimiento poblacional.</div>
                                    <a href="#" class="pdcc-open-modal">Panel Cookies</a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">Precio Media Anual</h4>    
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=2101813011&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-pma">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                <p>En el año <strong>2023</strong>, el precio medio de las propiedades en Puebla fue de <strong>$3,085,590.00</strong>, y se espera que este valor siga aumentando de manera constante hasta llegar a <strong>$3,280,225.27</strong> en el año <strong>2027</strong>. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">Plusvaía estimada (3 años)</h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="940" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=1792522628&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center">                                             
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-pec">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4> 
                                            <div class="text">
                                                <p>Los resultados muestran una proyección ascendente en la plusvalía del precio promedio de las viviendas en Puebla para los próximos cinco años. En el año <strong>2023</strong>, se muestra un valor de <strong>$4,446,433</strong>, con un crecimiento continuo hasta alcanzar <strong>$4,726,909</strong> en el año <strong>2027</strong>.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0"> Forecast créditos generales (cantidad)</h4>    
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="481" height="282" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR7XRGLuj_0lqmp5GZNq-WpqZbP1ehaBfYmMQNmBB-ma0TVuiP5Nikxc3Wf3a0uFw/pubchart?oid=1213990303&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-fcgc">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text"> 
                                                <ul>
                                                    <li>En <strong>2019 y 2021</strong> se observó una variación significativa en el <strong>número total de créditos</strong>, alcanzando niveles destacados en esos años. Sin embargo, en <strong>2023</strong>, se registra una pronunciada disminución. </li>
                                                    <li>En cuanto a las proyecciones para las categorías <strong>"Vivienda Nueva"</strong> y <strong>"Vivienda Usada"</strong> , presentan patrones similares de descenso en <strong>2023</strong>, pero se anticipa una recuperación en los años que siguen a este periodo. 
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0"> Forecast créditos generales (valor )</h4>
                                            
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1') & ocultar('contenido2') " value="Segmentos">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2') & ocultar('contenido1') " value="General">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=1228184625&amp;format=interactive" id="contenido1"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=1221224799&amp;format=interactive" id="contenido2" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-fcgv">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4> 
                                            <div class="text"> 
                                                <ul>
                                                    <li><strong>Monto total</strong>: El monto total de créditos generales se proyecta a aumentar de <strong>$4,076,027,268.63</strong> en 2019 a <strong>$5,063,299,339.68</strong> en <strong>2026</strong>, mostrando una tendencia general de crecimiento a lo largo del periodo </li>
                                                    <p>Para <strong>vivienda nueva</strong> muestra una variación en los años proyectados, registrando disminuciones en <strong>2020 y 2021</strong>, seguidas de una estabilidad en los años posteriores</p>
                                                    <p>Los créditos para <strong>vivienda</strong> experimentan un aumento general de <strong>$1,585,803,756.76</strong> en <strong>2019</strong> a <strong>$2,423,898,487.30</strong> en <strong>2026</strong>, indicando un crecimiento notorio en este segmento.</p>
                                                    <li><strong>Monto promedio</strong>: Para todas las categorías muestra un crecimiento constante de <strong>$1,182,142.48</strong> en <strong>2019</strong> a <strong>$1,631,217.57</strong> en <strong>2026</strong>.</li>
                                                    <p>La categoría de <strong>"Vivienda Nueva"</strong> exhibe variaciones, con una disminución en <strong>2020</strong> y una estabilidad en los años siguientes.            </p>
                                                    <p>Para la <strong>"Vivienda Usada"</strong>, se observa un crecimiento progresivo en el monto promedio por crédito a lo largo de los años proyectados.            </p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">  Forecast general y por segmento (demanda)</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido56') & mostrar('contenido57') & mostrar('contenido58') & ocultar('contenido66') & ocultar('contenido67') & ocultar('contenido68')" value="General">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido66') & mostrar('contenido67') & mostrar('contenido68') & ocultar('contenido56') & ocultar('contenido57') & ocultar('contenido58')" value="Segmentos">
                                                <div class="tooltip-alpine" 
                                            type="button"
                                            data-toggle="modal"
                                            data-placement="bottom"
                                            data-target="#modal-large">
                                                <i class="material-icons icon-14pt text-success">info</i>
                                                <p class="tooltiptext-alpine"><span class="font-weight-bold"> Clasificación de segmentos <span> </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=439727961&amp;format=interactive" id="contenido56"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=431598483&amp;format=interactive" id="contenido66" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4> 
                                            <div class="text"> Los datos proporcionan una proyección anual de la demanda general y desglosada en segmentos <strong>(A, B, C, D, E y S)</strong> para los años del <strong>2022 al 2026</strong>. Cada segmento representa una categoría específica y los valores indican la estimación de la cantidad de unidades necesarias o solicitadas en cada uno de esos periodos.  </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-fgsd">
                                                    <i class="material-icons icon-14pt text-success">info</i> Interpretación
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             -->
                            
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">Forecast Casas y Departamentos</h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="407" height="251" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=1130244623&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-fcd">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                <ul>
                                                    <li>La línea <strong>azul</strong> representa el porcentaje de cambio en la oferta de casas. Se espera una disminución en <strong>2024</strong> del <strong>0.5%</strong>, y del <strong>3%</strong> tanto para los años <strong>2025</strong> como para el año siguiente. Esto indica un decrecimiento en la oferta de casas durante este período.</li>
                                                    <li>La línea <strong>roja</strong> representa el porcentaje de cambio en la oferta de departamentos. De acuerdo a la tendencia comienza con un aumento del <strong>25%</strong> en <strong>2024</strong>, para el año siguiente, aumenta ligeramente a <strong>31%</strong> y se mantiene constante durante el próximo año. Esto sugiere que la oferta de departamentos se mantiene en crecimiento durante este período.</li>
                                                 </p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">Tiempo en el mercado</h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="439" height="271" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=1007832220&amp;format=interactive"></iframe>                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                            
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-tm">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text"> 
                                                <ul>
                                                    <p>La mayor concentración de unidades se encuentra en las categorías de <strong>31-100 días</strong>  y <strong>101-365 días</strong>, indicando que muchas propiedades permanecen en el mercado durante períodos de tiempo más prolongados antes de su venta.</p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> Proyección poblacional </h4> 
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="433" height="267" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=1350457785&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-pp">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">  
                                                <ul>
                                                    <p>La estimación poblacional revela un crecimiento progresivo en la región a lo largo de los años <strong>2020 a 2026</strong>. Iniciando con <strong>6,583,278</strong>  habitantes en <strong>2020</strong>, la población experimenta un incremento constante, alcanzando los <strong>11,556,676</strong> habitantes en <strong>2026</strong></p>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0"> Riesgo</h4>
                                            
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="507" height="314" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=258417594&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-rie">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">  
                                                <ul>
                                                    <li>Cerca del <strong>20.45%</strong> de las propiedades han estado en el mercado por <strong>más de un año</strong>, indicando un nivel de riesgo potencialmente mayor en términos de su comercialización y venta. Este grupo de propiedades podría enfrentar desafíos relacionados con la demanda o características específicas.</li>
                                                    <li>Por otro lado, el <strong>79.55%</strong> restante lleva <strong>menos de un año</strong>  en el mercado, sugiriendo una dinámica más favorable, con propiedades más recientes que tienden a ser menos riesgosas en términos de comercialización.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>                             
                            </div> 
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">Proyeccion en dias</h4>
                                            
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="487" height="239" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=128704229&amp;format=interactive"></iframe>                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                            
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-pd">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text">
                                                <ul>
                                                    <li>En el historial, se observa una duración de <strong>150 días</strong> en <strong>Diciembre de 2023</strong>, seguida de una disminución a <strong>146 días</strong> en <strong>Enero 2024</strong> y <strong>142 días</strong> en <strong>Febrero 2024</strong>. La proyección para <strong>Marzo y Abril</strong> indica una continuación de esta tendencia, con estimaciones de <strong>139</strong>, y <strong>136</strong> días respectivamente.</li>
                                                    <li>La proyección muestra una disminución gradual en la duración promedio de venta, lo que puede ser interpretado como una posible mejora en la agilidad del mercado inmobiliario.</li>
                                                </ul>
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
                                           href="ppam.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Analisis de Mercado</span>
                                            
                                        </a>
                                    </li>
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="pueblaim.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Investigacion de Mercado</span>
                                             
                                         </a>
                                     </li>
                                     
                                     <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="ppap.php">
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
            <!-- Precio Media Anual -->
        <div id="modal-large-pma"
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
                        Los datos proporcionados representan una proyección del precio media de las propiedades en los próximos cinco años. Lo que muestran es que el valor de las propiedades está en un constante y significativo aumento a medida que avanzamos en el tiempo.
                    </div>
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> 

        <!-- Plusvalia estimada en cinco anios -->
            <div id="modal-large-pec"
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
                    La gráfica presenta una proyección del precio medio de las propiedades en Puebla para los próximos años. Estos datos anticipan la dirección esperada en la evolución del valor promedio de las viviendas.
                   </div>
               </div> <!-- // END .modal-content -->
           </div> <!-- // END .modal-dialog -->
       </div> 
       <!-- App Settings FAB -->

       <!-- Forecast Créditos Generales (Cantidad) -->
       <div id="modal-large-fcgc"
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
                Estos datos representan las proyecciones de créditos generales en cantidad para los años <strong>2019 a 2026</strong>, desglosados en dos categorías: <strong>'Vivienda Nueva'</strong>  y <strong>'Vivienda Usada'</strong>. A lo largo de este periodo, se proporciona información sobre el <strong>número total de créditos </strong>otorgados, así como la cantidad específica de créditos destinados a viviendas nuevas y usadas
                
              </div>
          </div> <!-- // END .modal-content -->
      </div> <!-- // END .modal-dialog -->
  </div> 
  <!-- App Settings FAB -->

  <!-- Forecast Créditos Generales (Valor) -->
  <div id="modal-large-fcgv"
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
            Se muestran las proyecciones de créditos generales en términos de valor monetario <strong>(total y promedio)</strong> para los años <strong>2019 a 2026</strong>, subdividiendose  en las categorías <strong>"Vivienda Nueva"</strong>  y <strong>"Vivienda Usada"</strong> , proporcionando un análisis detallado de cómo se espera que evolucione el valor monetario de los créditos en estas dos clasificaciones a lo largo de los años proyectados.
           
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Forecast general y por segmento (demanda) -->
  <div id="modal-large-fgsd"
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
           <ul>
               <li><strong>General</strong>:</li>
               <p>La demanda total proyectada muestra una tendencia general al alza, partiendo de <strong>2,152</strong> unidades en <strong>2022</strong> y alcanzando las <strong>2,191</strong> unidades en <strong>2026</strong>.</p>
               <li><strong>Segmentos</strong>:</li>
               <p>Los segmentos <strong>A y B</strong> muestran un crecimiento constante, destacándose como las categorías de <strong>mayor demanda</strong>, con números considerables en <strong>2026</strong>. Los segmentos <strong>C y D</strong> experimentan un <strong>incremento moderado</strong>, indicando una demanda estable y continua. El segmento <strong>E</strong>, aunque más pequeño en comparación, evidencia un <strong>aumento constante</strong>. Por último, el segmento <strong>S</strong> emerge como un factor significativo, registrando un <strong>crecimiento substancial</strong> y posicionándose como un componente esencial en la proyección general. 
            </p>
           </ul>
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Forecast Casas y departamentos -->
  <div id="modal-large-fcd"
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
            Proporciona estimaciones porcentuales anuales sobre la tendencia en la cantidad de casas y departamentos que se anticipa serán ofertados en cada año, abarcando desde el presente hasta los próximos años.
           
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Tiempo en el mercado -->
  <div id="modal-large-tm"
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
            La distribución se presenta en cinco categorías según el número de días que las propiedades han estado disponibles, lo que proporciona información sobre la disponibilidad y el estado actual de las propiedades en el mercado inmobiliario. 
           
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Proyección poblacional -->
  <div id="modal-large-pp"
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
            La proyección poblacional es una estimación de cuántas personas se espera que vivan en una región o área geográfica específica a lo largo de varios años.
           
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->


<!-- App Settings FAB -->

  <!-- Riesgo -->
  <div id="modal-large-rie"
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
            El riesgo de stock en el mercado inmobiliario se relaciona con la cantidad de casas disponibles durante distintos lapsos de tiempo. Esta métrica es esencial para evaluar la dinámica de oferta y demanda en el sector.
           
         </div>
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
</div> 
<!-- App Settings FAB -->

  <!-- Proyección en días -->
  <div id="modal-large-pd"
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
            La proyección en días permite anticipar la duración promedio que las propiedades podrían requerir para su venta, lo que resulta esencial para ajustar estrategias de comercialización, establecer precios competitivos y adaptarse a las dinámicas cambiantes del mercado.
           
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