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
                                        <a href="#" class="btn-link" style="color: #374D67;">Querétaro</a>
                                        <span class="arrow">&gt;</span>
                                        <a href="#" class="btn-link" style="color: #3D45C0;">Santiago de Querétaro</a>
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
                                            <iframe width="871" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1175557764&amp;format=interactive"></iframe>                                        </p>
                                        
                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <div class="text"> En la pirámide poblacional de Querétaro se tiene registro de <p class="cantidades">2,361,643</p>  habitantes de los cuales <p class="cantidades">1,066,235</p>pertenecen a la población ocupada, <p class="porcentaje"> 30%</p>  se encuentra en un empleo formal y <p class="porcentaje">44.4% </p>en informal. Y de la población de menores de 29 años representan <p class="porcentaje">29.6%</p>, personas de <p class="cantidades">30 a 60 años</p> con <p class="porcentaje">31.1%</p>, y mayores de 64 años con <p class="porcentaje">10.5%</p></div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> 1.2 Distribución de la población por edad y género Querétaro</h4>
                                        </div>

                                        <p style="text-align: center;">
                                            <iframe width="972" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=2055642090&amp;format=interactive"></iframe>                                        
                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <body>
                                                <div class="text">Distribución de la estructura demográfica de la población de la Zona Metropolitana de Querétaro por grupos de edad y género, se tiene un registro de <p class="cantidades">1,044,971</p> habitantes de los cuales los menores de <p class="cantidades">29</p> años representan <p class="porcentaje">28.6%</p>, personas de <p class="cantidades">30 a 60 años </p>con <p class="porcentaje">32.3%</p>, y mayores de <p class="cantidades">64 años</p> con <p class="porcentaje">3.8%</p></div>
                                            </body>                                        
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
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1387922275&amp;format=interactive"></iframe>                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                    <div class="column-container">
                                        <div class="text">
                                            <p>Distribución de créditos por grupos de edad. Identifica como se distribuyen los préstamos en función de un grupo demográfico que devela que grupos etarios están accediendo más a los prestamos y cuales pueden tener una menor participación en este aspecto. </p>
                                            <ul>
                                                <li>Si una barra es alta, significa que la cantidad de préstamos otorgados a personas de esa edad es significativa.</li>
                                                <li>Si una barra es menor, indica que existen menos créditos otorgados en ese rango de edad.</li>
                                            </ul>
                                        </div>
                                
                                        <div class="text">
                                            <p>La gráfica de pastel revela que en Querétaro, el <p class="porcentaje">68.5%</p> de los titulares de créditos tienen entre <p class="cantidades">30 y 59</p> años, destacando la actividad crediticia de este grupo. Asimismo, el <p class="porcentaje">23.3%</p> de personas menores de <p class="cantidades">29</p> años muestra cierta inclusión financiera en este segmento más joven, mientras que el <p class="porcentaje">8.3%</p> de personas mayores de <p class="cantidades">60 años</p> con créditos sugiere su participación en actividades financieras.</p>
                                        </div>
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
                                            <iframe width="765" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1468021992&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center">                                             
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4> 
                                            <div class="column-container">
                                                <div >
                                                    <p>Precios de oferta para viviendas desde octubre de 2022 hasta septiembre de 2023. Explora la tendencia de los precios de las casas en este periodo de tiempo para la toma de decisiones inteligentes.</p>
                                                    <ul>
                                                        <li>Si se observa una tendencia ascendente, significa que los precios están aumentando, lo cual puede indicar una demanda alta en el mercado de viviendas.</li>
                                                        <li>Si muestra una tendencia a la baja, indica que los precios están disminuyendo. Esto podría ser una señal para los vendedores de que podrían obtener un precio mejor si esperan un poco más.</li>
                                                        <li>Si se mantiene relativamente plana sugiere que los precios están bastante firmes, señal de un mercado inmobiliario estable y predecible.</li>
                                                    </ul>
                                                </div>
                                            </div>
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
                                            <iframe width="728" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1918826424&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center">                                             
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4> 
                                            <div class="text">Representación de la mediana de precios en el mercado durante el período de 2022-2023.
                                                Observa una vista general en la tendencia de precios medianos en el mercado de viviendas durante el periodo considerado.<br><br>  
                                                <div>
                                                    <ul>
                                                        <li>Si la mediana es alta, esto sugiere que, las casas se vendieron a precios relativamente altos en ese periodo, esto indica un mercado inmobiliario robusto o alta demanda de propiedades.</li>
                                                        <li>Si la mediana es baja, implica que los precios promedio fueron más asequibles. Esto podría señalar un mercado más accesible para compradores.</li>
                                                    </ul>
                                                </div>
                                            </div>
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
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1444412918&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <div class="text"> Proporción de las viviendas ofertadas por años de antigüedad de 2022-2023. 
                                                Visualiza el panorama y la dinámica de la concentración en función de las propiedades construidas en un rango especifico de años. <br><br>
                                                <div>
                                                    <ul>
                                                        <li>Si se tiene una gran concentración de casas construidas en un rango de años específico, podría indicar una alza en construcción u oferta en ese periodo de tiempo.</li>
                                                        <li>Si la distribución tiene tendencia baja, podría sugerir que las casas de diferentes edades están disponibles en cantidades menores. Esto puede ser relevante para conocer la oferta específica de la vivienda.</li>
                                                    </ul>
                                                </div>
                                                <!--Este mercado inmobiliario cuenta con un <p class="porcentaje">85%</p> de casas menores a 5 años, 
                                                esto como un reflejo de que se encuentren más opciones de casas recién construidas en oferta.  -->
                                                
                                            </div>
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
                                            <!--
                                                <div>
                                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1') & ocultar('contenido2')" value="2022">
                                            </div>
                                            -->

                                        </div>
                                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                            <form style="text-align: center;">  
                                                <div class="d-flex align-items-center">
                                                    <iframe width="682" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1357461573&amp;format=interactive"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"> Concentración y distribución de propiedades por segmento de mercado, durante 2022- 2023.<br><br>
                                                <div>
                                                    <ul>
                                                        <li>Si las etiquetas están agrupadas en una zona específica esto puede ser indicativo de un mercado inmobiliario particularmente activo o demandado en ese lugar.</li>
                                                        <li>Si las etiquetas están más uniformes esto puede indicar un mercado más diversificado o una demanda más equitativa en distintos tipos de propiedades.</li>
                                                    </ul>
                                                </div>
                                                <!--
                                                    Podemos observar concentraciones en 2022 y 2023 del <p class="porcentaje">28%</p> y <p class="porcentaje">29.1%</p> respectivamente en casas del segmento S con un valor promedio del <p class="cantidades">$6.681,071,</p>  
                                                seguidas de viviendas del segmento C con <p class="porcentaje">26.9%</p> y <p class="porcentaje">25.1%</p> de forma respectiva con un precio medio de <p class="cantidades"> $1,916,723 </p>y finalmente del segmento D con <p class="porcentaje">23%</p> y <p class="porcentaje">22.9%</p>  en el orden dado con un valor medio de <p class="cantidades">$1,322,676</p>. 
                                                -->
                                            </div>
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
                                            <iframe width="750" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=145110822&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text">Clasificación de mercados por segmento e índice de precio asociados a cada uno de ellos.<br><br>
                                                <div>
                                                    <ul>
                                                        <li>Esta representación es útil para indicar qué tipos de propiedades están más valoradas y cuáles son más accesibles para los compradores.</li>
                                                    </ul>
                                                </div>
                                            </div>
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
                                            <iframe width="746" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=403732508&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"> Variación y cambio precios que se han presentado en cada trimestre entre el 2022 y 2023, correspondientes a las diferentes clasificaciones y/o segmentos de mercado. <br><br>
                                                <div>
                                                    <ul>
                                                        <li>Si la variación sube, indica un aumento en los precios de las viviendas, lo que puede sugerir que el mercado inmobiliario está en alza durante el periodo de estudio.</li>
                                                        <li>Si la variación baja, significa que los precios de las viviendas han disminuido, lo que podría indicar un mercado más asequible en el período de estudio..</li>
                                                    </ul>
                                                </div>
                                            </div>
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
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=147339669&amp;format=interactive" id="contenido3"></iframe>                                                   
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1167379577&amp;format=interactive" id="contenido4" class="oculto"></iframe>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"> Distribución de créditos para viviendas adquiridos para cada segmento del mercado. Contempla que tipo de propiedades son más populares entre los compradores que utilizan financiamiento.<br><br>
                                                <div>
                                                    <ul>
                                                        <li>Si se tiene una concentración alta, significa que se han otorgado muchos créditos para este sector. Esto puede indicar que son una opción popular para los clientes que buscan financiamiento.</li>
                                                        <li>Si se tiene una concentración menor, implica que se han otorgado menos créditos para este tipo de viviendas en comparación con otras.</li>
                                                    </ul>
                                                </div>
                                            </div>
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
                                            <iframe width="847" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=735604744&amp;format=interactive" id="contenido10"></iframe>                                            
                                            <iframe width="750" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1445855524&amp;format=interactive" id="contenido11" class="oculto"></iframe>                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                    <div class="text"> Distribución de créditos otorgados para las propiedades en diferentes segmentos (S, A, B, C, D, E) por trimestre.En función del porcentaje, observa cómo se agrupan los créditos para viviendas según su segmento en el mercado durante 2022-2023, permitiendo una visión clara y rápida de cómo se distribuyen y cuales son más predominantes en el mercado inmobiliario.<br><br>
                                    </div>
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
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=2051981758&amp;format=interactive" id="contenido5"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=527438645&amp;format=interactive" id="contenido6" class="oculto"></iframe>
                                                    </div>
                                            </form>
                                        </div>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"> Distribución de créditos otorgados para cada rango de monto entre el 2022 y el 2023. 
                                                Explora una visión de los créditos para viviendas en términos de cantidad de dinero y observa el alcance de los préstamos en el mercado inmobiliario</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h4 class="card-header__title m-0">4.4.	Promedio de valor de Créditos para casas nueva y para vivienda usada</h4>
                                    <div>
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido12') & ocultar('contenido13')" value="2022">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido13') & ocultar('contenido12')" value="2023">
                                    
                                        <!--
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido18') & ocultar('contenido19') & ocultar('contenido20')& ocultar('contenido12')& ocultar('contenido13')" value="2019">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido19') & ocultar('contenido18') & ocultar('contenido20')& ocultar('contenido12')& ocultar('contenido13')" value="2020">
                                        <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido20') & ocultar('contenido18') & ocultar('contenido19')& ocultar('contenido12')& ocultar('contenido13')" value="2021">
                                        -->
                                        
                                    </div>
                                </div>
                                <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                    <form style="text-align: center;">  
                                        <div class="d-flex align-items-center">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=169486884&amp;format=interactive" id="contenido12"></iframe>                                            
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=352096356&amp;format=interactive" id="contenido13" class="oculto"></iframe>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                    <div class="text"> Tendencia del valor promedio de los créditos para viviendas nuevas y de uso a lo largo de 2022 en el mercado inmobiliario. <br><br>
                                        <div>
                                            <ul>
                                                <li>Si se observa una tendencia ascendente, significa que el valor promedio de los créditos ha ido aumentando a lo largo del año.</li>
                                                <li>Si muestra una tendencia descendente, señala que la media de los precios ha disminuido.</li>
                                                <li>Si se observan picos en la tendencia puede indicar momentos en el que el mercado experimentó un aumento significativo en el valor de los créditos , por el contrario, si se observan caídas podrían representar periodos de disminución.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">4.5 Estacionalidad</h4> 
                                        </div>
                                        <p style="text-align: center;">
                                            <iframe width="773" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=969813298&amp;format=interactive"></iframe>                                        </p>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"> Número de créditos para vivienda adquiridos por trimestre en los años 2022 y 2023. 
                                                Proporciona una representación visual de cómo ha variado la adquisición de créditos hipotecarios en diferentes trimestres.</div>
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
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1137395368&amp;format=interactive" id="contenido7"></iframe>                                                    
                                                    <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=821998056&amp;format=interactive" id="contenido8" class="oculto"></iframe>                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-header bg-white d-flex align-items-center"></div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                            <div class="text"> Visualiza la distribución de créditos según el porcentaje de Unidades de Medida y Actualización (UMAS) </div>
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
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=227805741&amp;format=interactive" id="contenido14"></iframe>                                            
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=2016085822&amp;format=interactive" id="contenido15" class="oculto"></iframe>                                        
                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                    <div class="text"> Porcentaje de créditos otorgados por un organismo para viviendas en 2022-2023.<br><br>
                                        <div>
                                            <ul>
                                                <li>Si se observan barras elevadas significa que se tiene una gran concentración de créditos otorgados por dicha entidad.</li>
                                                <li>Si se presentan variaciones entre las barras , podría señalar una temporada en la cual se otorgaron más créditos.</li>
                                                <li>Si se visualiza barras uniformes podría indicar una distribución constante a lo largo del tiempo.</li>
                                            </ul>
                                        </div>
                                    </div>
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
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=1555690157&amp;format=interactive" id="contenido16"></iframe>                                            
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRphL9cL5bbuqM5zxqcaiueLghrvoCdQyDRPbp9RCYdC5pFFpbBm5jqhEEdXj3lZtNe1PvZsGy8Eupe/pubchart?oid=614538438&amp;format=interactive" id="contenido17" class="oculto"></iframe>                                        </div>
                                    </form>
                                </div>
                                <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                    <h4 class="card-header__title flex m-0" >Descripción: </h4>
                                    <div class="text"> Distribución de créditos por vivienda valor 2022-2023. Visualiza los porcentajes que representan las proporciones de los créditos otorgados al valor de la vivienda clasificado en: Economía, Popular, Tradicional, Media, Residencial y Residencial plus.<br><br>
                                        
                                    </div>
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
                                            <span class="sidebar-menu-text" style="color: darkgray;">Inicio</span>   
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                       <a class="sidebar-menu-button"
                                          href="qqam.php">
                                           <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                           <span class="sidebar-menu-text" style="color: darkgray;">Analisis de Mercado</span>
                                           
                                       </a>
                                   </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="qqim.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Investigacion de Mercado</span>
                                            
                                        </a>
                                    </li>
                                    
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="qqpt.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Proyecciones y Tendencias</span>
                                            
                                        </a>
                                    </li>
                                    <!--<li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button"
                                           href="hpai.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: darkgray;">assessment</i>
                                            <span class="sidebar-menu-text" style="color: darkgray;">Analisis de Inversion</span>
                                            
                                        </a>
                                    </li>
                                   -->
                                    
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