<?php
// Inicia la sesión al principio del script
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] !== TRUE) {
    header("location: index.php");
    exit();
}

$role = trim($_SESSION['role']);
$rolesPermitidos = array('usuario_hidalgo', 'usuario_total', 'usuario_puebla', '');

if (!isset($role) || !in_array($role, $rolesPermitidos)) {
    header("location: denegado.html");
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
        <title> Investigacion de Mercado </title>
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

<style>
    .porcentaje {
        font-weight: bold;
        color: green;
        display: inline;
    }
</style>

<style>
    .cantidades {
        font-weight: bold;
        display: inline;
    }
</style>

<style>
    .column-container {
        display: flex;
        justify-content: space-between;
    }

    .column-container .text {
        width: 48%;
        box-sizing: border-box;
    }
</style>


<style>
    /* Estilos para el botón fijo */
    .fixed-button {
        position: absolute;
        bottom: 60px; /* Puedes ajustar la posición según tus necesidades */
        right: 30px; /* Puedes ajustar la posición según tus necesidades */
        z-index: 1000; /* Ajusta la capa z-index según sea necesario */
    }
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


    <body class="layout-default"
        style="text-align: justify;">

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
                            
                               <img width="230" height="45"src="Logo.png" />
                           
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
                                        <a href="#" class="btn-link" style="color: #374D67;">Hidalgo</a>
                                        <span class="arrow">&gt;</span>
                                        <a href="#" class="btn-link" style="color: #3D45C0;">Pachuca</a>
                                    </div>
                                    <h1 class="m-0">Investigación de Mercado</h1>
                                    <div class="text py-2">En este informe, exploramos el proceso de investigación de mercado, que incluye la recopilación, el análisis y la <br> interpretación de datos, evaluar la competencia y encontrar oportunidades de crecimiento.</div>
                                    <a href="#" class="pdcc-open-modal">Panel Cookies</a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title flex m-0 py-2">1. Demográfico </h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 1.1. Distribución de la población por edad y género </h4>
                                        </div>

                                        <p style="text-align: center;">
                                            <iframe width="875" height="312" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=619638426&amp;format=interactive"></iframe>
                                        </p>
                                        
                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text"> En la pirámide poblacional de Hidalgo se tiene registro de <p class="cantidades">3,082,841</p>  habitantes de los cuales <p class="cantidades">2,907,688 </p>pertenecen a la población ocupada, <p class="porcentaje"> 28.3%</p>  se encuentra en un empleo formal y <p class="porcentaje"> 71.1% </p>en informal. Y de la población de menores de 29 años representan <p class="porcentaje">30.5%</p>, personas de <p class="cantidades">30 a 60 años</p> con <p class="porcentaje">36.9%</p>, y mayores de 64 años con <p class="porcentaje">8.6%</p></div>
                                        
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dpeg">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 1.2 Distribución de la población por edad y género Pachuca</h4>
                                        </div>

                                        <p style="text-align: center;">
                                            <iframe width="812" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1729812300&amp;format=interactive"></iframe>                                        </p>
                                        
                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <body>
                                                <div class="text">
                                                    Distribución de la estructura demográfica de la población de la <strong>Zona Metropolitana de Pachuca</strong> por grupos de edad y género, se tiene un registro de <strong>314,331 habitantes</strong> de los cuales los menores de <strong>29 años</strong> representan <p class="porcentaje">28.0%</p>, personas de <strong>30 a 60</strong> años con <p class="porcentaje">32.8%</p>, y mayores de 64 años con <p class="porcentaje">4.3%</p>.                                                 </div>
                                            </body>                                        
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dpegp">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white d-flex align-items-center">
                                    <h4 class="card-header__title m-0">1.3 Distribución de créditos por grupos de edad</h4>
                                </div>
                                <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                    <form style="text-align: center;">
                                        <div class="d-flex align-items-center">>
                                            <iframe width="505" height="277" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQSYGWZw5iYJ2HlIsjswROVVanWxRIe98RLIDP9rK3D1ydWL12OCCWop9cjT1yUjA/pubchart?oid=1578396855&amp;format=interactive"></iframe>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                    <div class="">
                                        <div class="text">
                                        <p>La gráfica de pastel revela que en Pachuca de Soto el <p class="porcentaje">76.6%</p> de los titulares de créditos tienen entre <p class="cantidades">30 y 59</p> años, destacando la actividad crediticia de este grupo. Asimismo, el <p class="porcentaje">14.3%</p> de personas menores de <p class="cantidades">29</p> años muestra cierta inclusión financiera en este segmento más joven, mientras que el <p class="porcentaje">9.1%</p>  de personas mayores de <p class="cantidades">60 años</p> con créditos sugiere su participación en actividades financieras.</p>
  
                                        </div>
                                    </div>
                                    <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                        <ul class="nav navbar-nav align-items-center">
                                            <button type="button"
                                                    class="mr-auto"
                                                    style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                    data-toggle="modal"
                                                    data-placement="bottom"
                                                    data-target="#modal-large-dcge">
                                                <i class="material-icons icon-14pt text-success">info</i> Descripción
                                            </button>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title flex m-0 py-2">2.	Precio de oferta </h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">2.1 Precio de oferta </h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="875" height="312" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=190439806&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center">                                             
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4> 
                                            <div class="">
                                                <div class="text">
                                                    <p>En los últimos doce meses, el mercado inmobiliario en Pachuca ha experimentado fluctuaciones en los precios de las propiedades. A pesar de ciertas variaciones mensuales, se observa un crecimiento general del valor promedio. Desde <strong>Octubre de 2022</strong> hasta <strong></strong>Septiembre de 2023, ha habido un aumento acumulado del <p class="porcentaje">6.8%</p> en el precio promedio de las propiedades. Este incremento se traduce en un valor promedio de <strong>$227,650</strong>, indicando un cambio significativo en la tendencia alcista de los precios a partir de <strong>Marzo de 2023</strong>.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-po">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">2.2 Mediana del precio de oferta  </h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="875" height="312" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=290586809&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center">                                             
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4> 
                                            <div class="text">
                                                <p>La gráfica muestra cómo han variado los precios medios de las viviendas de <strong>octubre de 2022</strong> a  <strong>septiembre de 2023</strong>.
                                                    <p>Se observa que los precios fueron subiendo de forma constante hasta <strong>junio de 2023</strong>, cuando alcanzaron su punto más alto. Esto nos muestra un mercado muy activo y una gran demanda de propiedades. 
                                                    </p>
                                                     <p>A partir de julio, los precios empezaron a bajar ligeramente en <strong>agosto y septiembre</strong>. Aunque aún son altos en comparación con el inicio del período, esta bajada nos indica una estabilización en el mercado y así mismo una disminución en la demanda.</p>
                                                    </p>
                                                
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-mpo">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 2.3 Porcentaje de vivienda ofertadas por antigüedad</h4>
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=2120659605&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Interpretación: </h4>
                                            <div class="text"> 
                                                <p>La gráfica muestra la proporción de viviendas ofertadas según su antigüedad durante los años <strong>2022 y 2023</strong>. </p>
                                                <ul>
                                                    <li>La mayoría de las viviendas ofertadas, el <p class="porcentaje">85%</p>, tienen entre <strong>0 y 5 años</strong> de antigüedad. Esto nos da una alta concentración de propiedades nuevas en el mercado durante este período que muestra un aumento en la oferta de viviendas recientes. </li>
                                                    <li>Por otro lado, hay una proporción menor de viviendas con antigüedad entre <strong>6 y 15</strong> años <p class="porcentaje">(11%)</p>, y una presencia aún menor de viviendas con más antigüedad señalando una disponibilidad limitada de viviendas de edades intermedias o antiguas en el mercado.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-pvoa">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title m-0">3. Segmentación de mercado</h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0"> 3.1	Distribución de propiedades por segmento</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1') & ocultar('contenido2')" value="2022">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2') & ocultar('contenido1')" value="2023">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1118581422&amp;format=interactive" id="contenido1" ></iframe>
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=750361758&amp;format=interactive" id="contenido2" class="oculto"></iframe>       
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text">
                                                Podemos observar concentraciones en 2022 y 2023 del <p class="porcentaje">28%</p> y <p class="porcentaje">29.1%</p> respectivamente en casas del segmento S con un valor promedio del <p class="cantidades">$6.681,071,</p>  
                                                seguidas de viviendas del segmento C con <p class="porcentaje">26.9%</p> y <p class="porcentaje">25.1%</p> de forma respectiva con un precio medio de <p class="cantidades"> $1,916,723 </p>y finalmente del segmento D con <p class="porcentaje">23%</p> y <p class="porcentaje">22.9%</p>  en el orden dado con un valor medio de <p class="cantidades">$1,322,676</p>.  
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dps">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0"> 3.2	Promedio de precio por segmento  </h4>
                                        </div>
                                        <p style="text-align: center;">
                                        <iframe width="875" height="312" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1085764152&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text">
                                                La gráfica presenta los precios promedio por segmento en el mercado de Pachuca. 
                                                <p>Se observa que: </p>
                                                <ul>
                                                    <li>El <strong>segmento S</strong> tiene el precio promedio más alto, con $6,590,148.53. </li>
                                                    <li>Le sigue el <strong>segmento A</strong>, con un precio promedio de $3,384,341.67 mientras que el segmento B tiene un precio promedio de $2,604,431.68. </li>
                                                    <li>En el <strong>segmento C</strong>, el precio promedio es de <strong>$1,909,157.39</strong>, y en el segmento D, es de <strong>$1,304,533.43</strong>. </li>
                                                    <li>Finalmente, el <strong>segmento E</strong> tiene el precio promedio más bajo, con <strong>$634,980.59</strong>.</li>
                                                    <p>Lo anterior permite entender la distribución de precios en el mercado inmobiliario local y puede ayudar a los asesores inmobiliarios a guiar a sus clientes en la búsqueda de propiedades que se ajusten a sus presupuestos y necesidades específicas.</p>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-pps">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">3.3 Tendencias de precios por segmento</h4>
                                        </div>            
                                        <p style="text-align: center;">
                                            <iframe width="583" height="312" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=671959304&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"> 
                                                La gráfica representa la variación y cambio de precios que se han presentado en cada trimestre entre 2022 y 2023, correspondientes a los diferentes segmentos de mercado. 
                                                <br>
                                                <p>El <strong>Segmento S</strong> experimentó la mayor variación positiva, con un aumento del <p class="porcentaje">9.30%</p>, un incremento significativo en los precios de las viviendas en este segmento durante el período de estudio, indicando un mercado inmobiliario en alza. </p>
                                                <p>Por otro lado, los segmentos <strong>D, C y B</strong> mostraron variaciones negativas, con disminuciones del <p class="porcentaje">7.20%, 3.20% y 1.90%</p> respectivamente  interpretandose como un mercado más accesible durante el período analizado. </p>
                                                <p>Por último, el <strong>segmento A</strong> registró una variación positiva del <p class="porcentaje">1%</p>, indicando un ligero aumento en los precios de las viviendas en este segmento.</p>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-tps">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title m-0">4. Créditos</h4>       
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">4.1	Distribución de créditos por segmento</h4>
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido3') & ocultar('contenido4')" value="2022">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido4') & ocultar('contenido3')" value="2023">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=989290642&amp;format=interactive" id="contenido3" ></iframe>
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1029231364&amp;format=interactive" id="contenido4" class="oculto"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"> 
                                                <br>
                                                <p> <strong>General</strong>
</p>
                                                <p><strong>2023</strong></p>
                                                <p>En el año <strong>2023</strong>, la distribución de créditos presenta algunas variaciones con respecto a <strong>2022</strong>. </p>
                                                <ul>
                                                    <li>El <strong>segmento E </strong>sigue siendo el más solicitado, representando el <p class="porcentaje">50%</p> de los créditos, aunque con una ligera disminución en comparación con el <p class="porcentaje">50.40%</p> del año anterior. </li>
                                                    <li>Por otro lado, <strong>el segmento D</strong> experimenta un aumento en su proporción, pasando del <p class="porcentaje">18.67%</p> en <strong>2022</strong> al <p class="porcentaje">19.23%</p> en <strong>2023</strong>. </li>
                                                    <li>Se observa un incremento en la proporción de créditos para el <strong>segmento C</strong>, que pasa a <p class="porcentaje">12.31% </p>.</li>
                                                    <li>Los segmentos <strong>B, A y S</strong> muestran una disminución en sus proporciones de créditos en <strong>2023</strong> en comparación con el año anterior. Estas variaciones indican posibles cambios en las preferencias de financiamiento para diferentes rangos de precios de propiedades durante el <strong>año 2023</strong>.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dcs">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h4 class="card-header__title m-0">4.2 Distribución % de créditos por categoría (trimestre)</h4>
                                    <div>
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido10') & ocultar('contenido11')" value="2022">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido11') & ocultar('contenido10')" value="2023">
                                    </div>
                                </div>
                                <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                    <form style="text-align: center;">  
                                        <div class="d-flex align-items-center">       
                                            <iframe width="470" height="308" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=53866877&amp;format=interactive" id="contenido10"></iframe>                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1029231364&amp;format=interactive" id="contenido4" class="oculto"></iframe>
                                            <iframe width="505" height="312" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=629684436&amp;format=interactive" id="contenido11" class="oculto"></iframe>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                    <div class="text"> <br><br>
                                        <p>En el <strong>año 2022</strong>, el cuarto trimestre registró la mayor cantidad de crédito, donde el segmento E tuvo la mayor proporción de créditos en todos los trimestres. </p>
                                        
                                        <p>En el <strong>año 2023</strong>, el segundo trimestre destacó con el mayor número de créditos, experimentando un aumento en comparación con el mismo trimestre del año anterior. Nuevamente el segmento E lideró en términos de proporción de créditos.</p>
                                        
                                        <p>Comparando los dos años, notamos un aumento en la actividad crediticia en el mercado inmobiliario durante el segundo trimestre del <strong>2023</strong>.</p>
                                    </div>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <ul class="nav navbar-nav align-items-center">
                                        <button type="button"
                                                class="mr-auto"
                                                style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                data-toggle="modal"
                                                data-placement="bottom"
                                                data-target="#modal-large-dcc">
                                            <i class="material-icons icon-14pt text-success">info</i> Descripción
                                        </button>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">4.3	Distribución de créditos por monto</h4> 
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido5') & ocultar('contenido6')" value="2022">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido6') & ocultar('contenido5')" value="2023">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1494154526&amp;format=interactive" id="contenido5" ></iframe>
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1489710853&amp;format=interactive" id="contenido6" class="oculto"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >interpretación: </h4>
                                            <div class="text"> 
                                                <p>En el año <strong>2022</strong>, se observa una mayor cantidad de créditos otorgados en los rangos de monto más bajos, especialmente en el intervalo de <strong>$0 a $1,000,000</strong>, con un total de <strong>637 créditos</strong>. Sin embargo, a medida que aumenta el monto, la cantidad de créditos disminuye gradualmente, con números significativamente menores en los rangos superiores, como el intervalo de <strong>$4,000,001 a $20,000,000</strong>, que registró solo <strong>103 créditos</strong>.</p>
                                                <p>Por otro lado, en el <strong>año 2023</strong> , se observa una disminución general en la cantidad de créditos otorgados en todos los rangos de monto en comparación con el año anterior. Es notable la reducción en el intervalo de <strong>$0 a $1,000,000</strong>, que pasó de <strong>637 créditos</strong> en <strong>2022</strong> a <strong>320 créditos</strong> en <strong>2023</strong>. Además, se observa una disminución en los rangos de monto más altos, mostrando menor actividad en el segmento de propiedades de mayor valor.</p>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-dcm">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h4 class="card-header__title m-0">4.4.	Promedio de valor de Créditos para casas nueva y para vivienda usada</h4>
                                    <div>
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido18') & ocultar('contenido19') & ocultar('contenido20')& ocultar('contenido12')& ocultar('contenido13')" value="2019">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido19') & ocultar('contenido18') & ocultar('contenido20')& ocultar('contenido12')& ocultar('contenido13')" value="2020">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido20') & ocultar('contenido18') & ocultar('contenido19')& ocultar('contenido12')& ocultar('contenido13')" value="2021">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido12') & ocultar('contenido18') & ocultar('contenido19')& ocultar('contenido20')& ocultar('contenido13')" value="2022">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido13') & ocultar('contenido18') & ocultar('contenido19')& ocultar('contenido20')& ocultar('contenido12')" value="2023">
                                    </div>
                                </div>
                                <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                    <form style="text-align: center;">  
                                        <div class="d-flex align-items-center">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRBuQf_JLieIE92GEP9bf4aabABwL_47wZTjUS_Y0gcqoWdC5yhfGRrOGv0dSRkhkeMZYhoVOGcONnB/pubchart?oid=237107566&amp;format=interactive" id="contenido18"></iframe>
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=2103006701&amp;format=interactive" id="contenido19" class="oculto"></iframe>                                            
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1542757930&amp;format=interactive" id="contenido20" class="oculto"></iframe>                                            
                                            <iframe width="544" height="337" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1592798427&amp;format=interactive" id="contenido12" class="oculto"></iframe>                                            
                                            <iframe width="544" height="337" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=2087895515&amp;format=interactive" id="contenido13" class="oculto"></iframe>                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                    <div class="text"> En la gráfica podemos ver el comportamiento del promedio de valor de crédito para viviendas nuevas y usadas a lo largo de los últimos años.<br><br>
                                        <div>
                                            <ul>
                                                <li>En <strong>2019</strong> el tercer trimestre fue el que obtuvo mayor valor en créditos, sin embargo para vivienda nueva el trimestre uno destacó con un valor promedio de <strong>$1,822,819.15</strong>.</li>
                                                <li>En <strong>2020</strong> al igual que en <strong>2019</strong>, el primer trimestre de vivienda nueva fue el que tuvo mayor valor promedio con un monto de <strong>$1,649,837.68</strong>.</li>
                                                <li>Para <strong>2021</strong> el trimestre cuatro obtuvo el mayor valor promedio de créditos, sin embargo el <strong>trimestre 3</strong> predomina con con un valor de <strong>$1,805,033.07</strong> en vivienda usada, siendo este el monto mayo en todo el año.</li>
                                                <li>En <strong>2022</strong> el promedio de valor para viviendas nuevas fue mayor que el de vivienda usada, siendo el Tercer trimestre el que tuvo mayor valor con <strong>$2,107,348</strong>.</li>
                                                <li>En <strong>2023</strong> el primer trimestre fue el que reflejó mayor valor promedio en viviendas usadas con un monto total de <strong>$1,872,784</strong>.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <ul class="nav navbar-nav align-items-center">
                                        <button type="button"
                                                class="mr-auto"
                                                style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                data-toggle="modal"
                                                data-placement="bottom"
                                                data-target="#modal-large-pvc">
                                            <i class="material-icons icon-14pt text-success">info</i> Descripción
                                        </button>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">4.5 Estacionalidad</h4> 
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="534" height="312" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=799785437&amp;format=interactive"></iframe>
                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <p>
                                                
                                            <div class="text"> 
                                                La gráfica nos permite observar la variación de créditos en los trimestres de <strong>2022 y 2023</strong>, en donde podemos observar. En general, podemos observar que el trimestre cuatro del <strong>2022</strong> fue el que tuvo un mayor número de créditos otorgados con un total de <strong>395</strong>.</p>     
                                               <ul>
                                                   <li>En <strong>2022</strong> el trimestre cuatro fue el más alto, seguido del trimestre 3 con un total de <strong>341 créditos</strong>.</li>
                                                    <li>En <strong>2023</strong>,en base a la información que se tiene, el trimestre dos fue el que obtuvo un mayor número de créditos con un total de <strong>310</strong>.</li>
                                                </ul> 
                                               </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-est">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                            <h4 class="card-header__title m-0">4.6 Créditos por porcentaje de UMAS</h4> 
                                            <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido7') & ocultar('contenido8')" value="2022">
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido8') & ocultar('contenido7')" value="2023">
                                            </div>
                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">       
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=120985107&amp;format=interactive" id="contenido7" ></iframe>
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1450111879&amp;format=interactive" id="contenido8" class="oculto"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                            <div class="text"> 
                                                <p>La distribución de créditos por porcentaje de (UMAS) muestra cambios significativos entre los años <strong>2022 y 2023</strong>. </p>
                                                <p>En el año 2022, los segmentos de ingresos más bajos (menor o igual a 2.60), tuvieron una participación relativamente baja en la obtención de créditos, con un porcentaje del <p class="porcentaje">5.51%</p>. Sin embargo, en el año <strong>2023</strong>, este segmento experimentó un aumento significativo en su participación, alcanzando el <p class="porcentaje">12.33%</p>.</p>
                                                <p>Por otro lado, los segmentos de ingresos más altos (más de 12.00) tuvieron una alta participación en la obtención de créditos en ambos años, con un porcentaje del <strong>8.82%</strong> en <strong>2022</strong> y un aumento notable al <p class="porcentaje">17.89% en 2023</p>. </p>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <ul class="nav navbar-nav align-items-center">
                                                <button type="button"
                                                        class="mr-auto"
                                                        style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                        data-toggle="modal"
                                                        data-placement="bottom"
                                                        data-target="#modal-large-umas">
                                                    <i class="material-icons icon-14pt text-success">info</i> Descripción
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            
                            <div class="card">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h4 class="card-header__title m-0">4.7	Distribución % de créditos por organismo</h4>
                                    <div>
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido14') & ocultar('contenido15')" value="2022">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido15') & ocultar('contenido14')" value="2023">
                                    </div>
                                </div>
                                <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                    <form style="text-align: center;">  
                                        <div class="d-flex align-items-center">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=454259470&amp;format=interactive" id="contenido14"></iframe>
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=268604880&amp;format=interactive" id="contenido15" class="oculto"></iframe>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Interpretación: </h4>
                                    <div class="text">
                                        <ul>
                                            <li>En <strong>2022</strong>, la vivienda tradicional representó el mayor porcentaje de créditos, con un <p class="porcentaje">41.0%</p>, seguida por la vivienda residencial con un <p class="porcentaje">33.4%</p>. Las viviendas económicas y populares también tuvieron una participación significativa, con un <p class="porcentaje">7.3%</p> y un <p class="porcentaje">10.4%</p>, respectivamente. Las viviendas residenciales plus representaron el menor porcentaje de créditos, con un <p class="porcentaje">7.9%</p> del total.</li>
                                            <li>En <strong>2023</strong>, hubo cambios en la distribución porcentual de créditos por valor de vivienda. La categoría de vivienda tradicional continuó siendo la más demandada, representando el <p class="porcentaje">43.5%</p> de los créditos. Sin embargo, se observó un aumento notable en la participación de las viviendas económicas y populares, que pasaron a representar el <p class="porcentaje">12.3%</p> y <p class="porcentaje">16.2%</p>el , respectivamente. Por otro lado, la participación de las viviendas residenciales y residenciales plus disminuyó en comparación con el año anterior.</li>
                                        </ul>
                                        
                                    </div>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <ul class="nav navbar-nav align-items-center">
                                        <button type="button"
                                                class="mr-auto"
                                                style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                data-toggle="modal"
                                                data-placement="bottom"
                                                data-target="#modal-large-dco">
                                            <i class="material-icons icon-14pt text-success">info</i> Descripción
                                        </button>
                                    </ul>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h4 class="card-header__title m-0">4.8	Distribución % de créditos por vivienda valor</h4>
                                    <div>
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido16') & ocultar('contenido17')" value="2022">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido17') & ocultar('contenido16')" value="2023">
                                    </div>
                                </div>
                                <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                    <form style="text-align: center;">  
                                        <div class="d-flex align-items-center">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=1026626228&amp;format=interactive" id="contenido16"></iframe>
                                            <iframe width="600" height="376" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQX6HV4iKEsF0uJ-dxHXixMFO_MfPxGthAhgbiLQ6shDr3WLOJSL5BAYESXBXj-Kg/pubchart?oid=344884242&amp;format=interactive" id="contenido17" class="oculto"></iframe>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                    <div class="text"> 
                                    <ul>
                                        <li>En el año <strong>2022</strong>, el INFONAVIT representó el mayor porcentaje de créditos, con un <p class="porcentaje">35.0%</p>, seguido por la CNBV con un <p class="porcentaje">42.9%</p> y el FOVISSSTE con un <p class="porcentaje">21.6%</p>. Otros organismos, como BANJERCITO, contribuyeron con un porcentaje menor al <p class="porcentaje">1%</p> del total de créditos otorgados.</li>
                                        <li>En <strong>2023</strong>, la distribución porcentual de créditos por organismo experimentó algunos cambios. El INFONAVIT mantuvo su posición como el principal otorgante de créditos, con un <p class="porcentaje">36.7%</p>, seguido por la CNBV con un <p class="porcentaje">39.1%</p> y el FOVISSSTE con un <p class="porcentaje">21.3%</p>. Además, se observó la participación de otros organismos como CONAVI, BANJERCITO e INSUS, aunque en menor medida en comparación con los principales otorgantes.</li>
                                    </ul>
                                    </div>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <ul class="nav navbar-nav align-items-center">
                                        <button type="button"
                                                class="mr-auto"
                                                style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                data-toggle="modal"
                                                data-placement="bottom"
                                                data-target="#modal-large-dcv">
                                            <i class="material-icons icon-14pt text-success">info</i> Descripción
                                        </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // END drawer-layout__content -->

                    <div class="mdk-drawer  js-mdk-drawer "
                         id="default-drawer"
                         data-align="start"
                         style="color: darkgray;">
                        <div class="mdk-drawer__content" >
                            <div class="sidebar sidebar-light sidebar-left sidebar-p-t bg-dark"
                                 data-perfect-scrollbar>
                                <div class="sidebar-heading" style="color: darkgray;">Menu</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="inicio.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">dvr</i>
                                            <span class="sidebar-menu-text" style="color: darkgrey;" >Inicio</span>   
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="prueba.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Analisis de Mercado</span>
                                            
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="hpim.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Investigacion de Mercado</span>
                                            
                                        </a>
                                    </li>
                                    
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="prospectacion.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Proyecciones y Tendencias</span>
                                            
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                         <a class="sidebar-menu-button"
                                            href="hpai.php">
                                             <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                             <span class="sidebar-menu-text" style="color: darkgray;">Analisis de Inversion</span>
                                             
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
        </div> 

        <!-- Interpretaciones -->
        <!--1.1. Distribución de la población por edad y género-->
        <div id="modal-large-dpeg"
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
                    <div class="modal-body text-left" style="color: black;"  > 
                        Distribución demográfica por rango de edad y género. La gráfica proporciona una representación visual de la población de Hidalgo para 2023, segmentada por rangos de edad y género para observar cómo se distribuye la población en el estado. 
                        <br><br>
                    </div>   
                    
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> 

        <!--1.2 Distribución de la población por edad y género Pachuca-->
        <div id="modal-large-dpegp"
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
                    <div class="modal-body text-left" style="color: black;"  > 
                        Distribución de la estructura demográfica de la población de la Zona Metropolitana de Pachuca por grupos de edad y género, se tiene un registro de <p class="cantidades">314,331</p> habitantes de los cuales los menores de <p class="cantidades">29</p> años representan <p class="porcentaje">28.0%</p>, personas de <p class="cantidades">30 a 60 años </p>con <p class="porcentaje">32.8%</p>, y mayores de <p class="cantidades">64 años</p> con <p class="porcentaje">4.3%</p></div>
                        <br><br>
                    </div>   
                    
                </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->

        <!--1.2 Distribución de la población por edad y género Pachuca-->
        <div id="modal-large-dcge"
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
                    <div class="modal-body text-left" style="color: black;"  > 
                        <p>Distribución de créditos por grupos de edad. Identifica cómo se distribuyen los préstamos en función de un grupo demográfico que revela que grupos etarios están accediendo más a los préstamos y cuales pueden tener una menor participación en este aspecto.</p>
                        <ul>
                            <li>Si una barra es alta, significa que la cantidad de préstamos otorgados a personas de esa edad es significativa.</li>
                            <li>Si una barra es menor, indica que existen menos créditos otorgados en ese rango de edad.</li>
                        </ul>                         <br><br>
                    </div>   
                </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
    </div>

        <!--2. Precio Oferta-->
        <div id="modal-large-po"
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
                    <div class="modal-body text-left" style="color: black;"  > 
                        <p>Precios de oferta para viviendas desde octubre de 2022 hasta septiembre de 2023. Explora la tendencia de los precios de las casas en este periodo de tiempo para la toma de decisiones inteligentes.</p>
                                                    <ul>
                                                    <li>Si se observa una tendencia ascendente, significa que los precios están aumentando, lo cual puede indicar una demanda alta en el mercado de viviendas.</li>
                                                    <li>Si muestra una tendencia a la baja, indica que los precios están disminuyendo. Esto podría ser una señal para los vendedores de que podrían obtener un precio mejor si esperan un poco más.</li>
                                                    <li>Si se mantiene relativamente plana sugiere que los precios están bastante firmes, señal de un mercado inmobiliario estable y predecible.</li>
                                                    </ul>
                    </div>   
                    
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> 

        <!--2.1. MediandaPrecio Oferta-->
        <div id="modal-large-mpo"
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
                    <div class="modal-body text-left" style="color: black;"  > 
                        Representación de la mediana de precios en el mercado durante el período de 2022-2023.
                                                Observa una vista general en la tendencia de precios medianos en el mercado de viviendas durante el periodo considerado.<br><br>  
                                                <div>
                                                    <ul>
                                                        <li>Si la mediana es alta, esto sugiere que, las casas se vendieron a precios relativamente altos en ese periodo, esto indica un mercado inmobiliario robusto o alta demanda de propiedades.</li>
                                                        <li>Si la mediana es baja, implica que los precios promedio fueron más asequibles. Esto podría señalar un mercado más accesible para compradores.</li>
                                                    </ul>
                                                </div>
                    </div>  
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> 

        <!--2.3 Porcentaje de vivienda ofertadas por antigüedad-->
        <div id="modal-large-pvoa"
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
                    <div class="modal-body text-left" style="color: black;"  > 
                        Proporción de las viviendas ofertadas por años de antigüedad de 2022-2023. 
                                                Visualiza el panorama y la dinámica de la concentración en función de las propiedades construidas en un rango especifico de años. <br><br>
                                                <div>
                                                    <ul>
                                                        <li>Si se tiene una gran concentración de casas construidas en un rango de años específico, podría indicar una alza en construcción u oferta en ese periodo de tiempo.</li>
                                                        <li>Si la distribución tiene tendencia baja, podría sugerir que las casas de diferentes edades están disponibles en cantidades menores. Esto puede ser relevante para conocer la oferta específica de la vivienda.</li>
                                                    </ul>
                                                </div>
                    </div>  
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> 

        <!--3.1 Distribución de propiedades por segmento-->
        <div id="modal-large-dps"
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
                    <div class="modal-body text-left" style="color: black;"  > 
                        Concentración y distribución de propiedades por segmento de mercado, durante 2022- 2023.<br><br>
                        <div>
                            <ul>
                                <li>Si las etiquetas están agrupadas en una zona específica esto puede ser indicativo de un mercado inmobiliario particularmente activo o demandado en ese lugar.</li>
                                <li>Si las etiquetas están más uniformes esto puede indicar un mercado más diversificado o una demanda más equitativa en distintos tipos de propiedades.</li>
                            </ul>
                        </div>
                    </div>  
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div> 

         <!--3.2 Promedio de precio por segmento-->
         <div id="modal-large-pps"
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
                <div class="modal-body text-left" style="color: black;"  > 
                    Clasificación de mercados por segmento e índice de precio asociados a cada uno de ellos.<br><br>
                    <div>
                        <ul>
                            <li>Esta representación es útil para indicar qué tipos de propiedades están más valoradas y cuáles son más accesibles para los compradores.</li>
                        </ul>
                    </div>
                </div>  
            </div> <!-- // END .modal-content -->
        </div> <!-- // END .modal-dialog -->
        </div> 

        <!--3.3 Tendencias de precios por segmento-->
        <div id="modal-large-tps"
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
               <div class="modal-body text-left" style="color: black;"  > 
                Variación y cambio precios que se han presentado en cada trimestre entre el 2022 y 2023, correspondientes a las diferentes clasificaciones y/o segmentos de mercado. <br><br>
                <div>
                    <ul>
                        <li>Si la variación sube, indica un aumento en los precios de las viviendas, lo que puede sugerir que el mercado inmobiliario está en alza durante el periodo de estudio.</li>
                        <li>Si la variación baja, significa que los precios de las viviendas han disminuido, lo que podría indicar un mercado más asequible en el período de estudio..</li>
                    </ul>
                </div>
               </div>  
           </div> <!-- // END .modal-content -->
       </div> <!-- // END .modal-dialog -->
       </div> 

       <!--4.1 Distribución de créditos por segmento-->
       <div id="modal-large-dcs"
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
              <div class="modal-body text-left" style="color: black;"  > 
                Distribución de créditos para viviendas adquiridos para cada segmento del mercado. Contempla que tipo de propiedades son más populares entre los compradores que utilizan financiamiento.<br><br>
                <div>
                    <ul>
                        <li>Si se tiene una concentración alta, significa que se han otorgado muchos créditos para este sector. Esto puede indicar que son una opción popular para los clientes que buscan financiamiento.</li>
                        <li>Si se tiene una concentración menor, implica que se han otorgado menos créditos para este tipo de viviendas en comparación con otras.</li>
                    </ul>
                </div>
              </div>  
          </div> <!-- // END .modal-content -->
      </div> <!-- // END .modal-dialog -->
      </div> 

      <!--4.2 Distribución de créditos por categoria-->
      <div id="modal-large-dcc"
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
             <div class="modal-body text-left" style="color: black;"  > 
                Distribución de créditos otorgados para las propiedades en diferentes segmentos (S, A, B, C, D, E) por trimestre.En función del porcentaje, observa cómo se agrupan los créditos para viviendas según su segmento en el mercado durante 2022-2023, permitiendo una visión clara y rápida de cómo se distribuyen y cuales son más predominantes en el mercado inmobiliario.
             </div>  
         </div> <!-- // END .modal-content -->
     </div> <!-- // END .modal-dialog -->
     </div> 

     <!--4.3 Distribución de créditos por monto-->
     <div id="modal-large-dcm"
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
            <div class="modal-body text-left" style="color: black;"  > 
                Distribución de créditos otorgados para cada rango de monto entre el <strong>2022 y el 2023</strong>. Explora una visión de los créditos para viviendas en términos de cantidad de dinero y observa el alcance de los préstamos en el mercado inmobiliario.
                        
            </div>  
        </div> <!-- // END .modal-content -->
    </div> <!-- // END .modal-dialog -->
    </div>

    <!--4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada-->
    <div id="modal-large-pvc"
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
           <div class="modal-body text-left" style="color: black;"  > 
            <p>
                Tendencia del valor promedio de los créditos para viviendas nuevas y de uso a lo largo de 2022 en el mercado inmobiliario.
            </p>     
            <ul>
                <li>Si se observa una tendencia ascendente, significa que el valor promedio de los créditos ha ido aumentando a lo largo del año.</li>
                <li>Si muestra una tendencia descendente, señala que la media de los precios ha disminuido.</li>
                <li>Si se observan picos en la tendencia puede indicar momentos en el que el mercado experimentó un aumento significativo en el valor de los créditos , por el contrario, si se observan caídas podrían representar periodos de disminución.</li>
            </ul>                  
           </div>  
       </div> <!-- // END .modal-content -->
   </div> <!-- // END .modal-dialog -->
   </div>

   <!--4.5. Estacionalidad-->
   <div id="modal-large-est"
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
          <div class="modal-body text-left" style="color: black;"  > 
            Número de créditos para vivienda adquiridos por trimestre en los años 2022 y 2023. 
            Proporciona una representación visual de cómo ha variado la adquisición de créditos hipotecarios en diferentes trimestres.
          </div>  
      </div> <!-- // END .modal-content -->
  </div> <!-- // END .modal-dialog -->
  </div>

  <!--4.6 UMAS-->
  <div id="modal-large-umas"
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
         <div class="modal-body text-left" style="color: black;"  > 
           Número de créditos para vivienda adquiridos por trimestre en los años 2022 y 2023. 
           Proporciona una representación visual de cómo ha variado la adquisición de créditos hipotecarios en diferentes trimestres.
         </div>  
     </div> <!-- // END .modal-content -->
 </div> <!-- // END .modal-dialog -->
 </div>

 <!--4.7 Distribución % de créditos por organismo-->
 <div id="modal-large-dco"
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
        <div class="modal-body text-left" style="color: black;"  >
            Distribución de créditos por vivienda valor <strong>2022-2023</strong>. Visualiza los porcentajes que representan las proporciones de los créditos otorgados al valor de la vivienda clasificado en: <strong>Economía, Popular, Tradicional, Media, Residencial y Residencial plus</strong>.
        </div>  
    </div> <!-- // END .modal-content -->
</div> <!-- // END .modal-dialog -->
</div>

        <!-- App Settings FAB -->
        <script src="assets/js/app-settings.js"></script>

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