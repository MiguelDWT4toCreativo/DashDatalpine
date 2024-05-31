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
        <title> Investigacion de Mercado P </title>
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
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
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
    .fixed-button {
        position: relative;
        bottom: 20px; /* Ajusta la distancia desde la parte inferior según tus necesidades */
        right: 20px; /* Ajusta la distancia desde la derecha según tus necesidades */
        z-index: 1000; /* Ajusta el índice de apilamiento según sea necesario */
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
                                    <h1 class="m-0">Bienes Raices Pachuca 2024</h1>
                                    <div class="text py-2">Proporciona un análisis profundo del mercado inmobiliario de Pachuca, enfocándose en aspectos críticos como las tendencias del mercado, la dinámica de precios, la segmentación del mercado y el análisis de colonias.</div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title flex m-0 py-2"></h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">1. Tendencia de Mercado & Dinamica de Precios</h4>
                                        </div>

                                        <p style="text-align: center;">
                                            <iframe width="842" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=1580670798&amp;format=interactive"></iframe>                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <div class="text">El mercado inmobiliario de Pachuca ha experimentado una considerable variabilidad durante el período examinado, como lo demuestran los datos de transacciones y los movimientos de precios promedio. Nuestro análisis actualizado ofrece las siguientes perspectivas:
                                                <ul>
                                                    <li>El precio promedio de la propiedad experimentó una notable disminución en noviembre de <strong>2022</strong>, cayendo a <strong>2.69 millones de MXN</strong>, lo que significa una disminución del <strong>13.34%</strong> desde <strong>octubre de 2022</strong>. Esto fue seguido por un aumento a <strong>3.16 millones de MXN</strong> en <strong>febrero de 2023</strong>, un significativo aumento del <strong>15.43%</strong>, reflejando la resiliencia y el potencial de recuperación del mercado.</li>
                                                    <li>En los meses siguientes, observamos una disminución en <strong>marzo de 2023</strong>, con precios promedio cayendo a <strong>2.72 millones de MXN</strong>, y un aumento en <strong>junio de 2023</strong>, subiendo nuevamente a <strong>3.02 millones de MXN</strong>. Los datos más recientes de <strong>diciembre de 2023</strong> muestran una disminución a <strong>2.58 millones de MXN</strong>.</li>
                                                    <li>Los volúmenes de transacciones fluctuaron correspondientemente, alcanzando un pico en <strong>febrero de 2023</strong>, lo que se alinea con el aumento en los precios promedio, sugiriendo una actividad de mercado incrementada durante ese período.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title flex m-0 py-2"></h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">2. Segmentación y Análisis del Mercado</h4>
                                        </div>

                                        <p style="text-align: center;">
                                            <iframe width="729" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=1880405318&amp;format=interactive"></iframe>                                        <div class="card-header bg-white d-flex align-items-center">
                                        
                                            </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <div class="text">Este análisis de distribución de precios ofrece una visión clara de la composición del mercado en Pachuca, destacando la prevalencia de propiedades asequibles y de gama media. También apunta a la existencia de un mercado de gama alta más exclusivo, aunque estas propiedades son menos comunes. Esta información es crucial para comprender la dinámica del mercado y las oportunidades de inversión potenciales, especialmente para enfocarse en segmentos de precios específicos.
                                                <ul>
                                                    <li><strong>Rangos de Precios Más Comunes:</strong> La mayoría de las propiedades se encuentran en el rango de <strong>1M a 3M de pesos</strong>. Específicamente, alrededor del <strong>31.82%</strong> de las propiedades tienen precios entre <strong>1M y 2M</strong> de pesos, y aproximadamente el <strong>30.19%</strong> están en el rango de <strong>2M a 3M</strong> de pesos.</li>
                                                    <li><strong>Propiedades de Gama Media:</strong> El rango de <strong>3M a 4M</strong> de pesos representa el <strong>16.50%</strong> del mercado, indicando una presencia significativa de propiedades de gama media.</li>
                                                    <li><strong>Segmento de Mercado de Alto Nivel:</strong> A medida que nos movemos hacia rangos de precios más altos, el porcentaje de propiedades disminuye. El rango de <strong>4M a 5M</strong> de pesos abarca el <strong>6.90%</strong> del mercado, y el rango de <strong>5M a 6M</strong> de pesos incluye alrededor del <strong>3.46%</strong>.</li>
                                                    <li><strong>Propiedades de Lujo:</strong> Las propiedades con precios superiores a 9M de pesos representan una pequeña fracción del mercado, señalando un segmento limitado pero distintivo de propiedades de lujo.</li>
                                                </ul>
                                                <iframe width="899" height="410" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=1130565477&amp;format=interactive"></iframe>                                                <div>
                                                    <iframe width="968" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=1056809329&amp;format=interactive"></iframe>
                                                    <ul><li><h5>Precio Promedio de la Propiedad por Número de Habitaciones (de 1 a 5)</h5></li></ul>
                                                <p>En Pachuca, el precio promedio de la propiedad muestra una tendencia variada a medida que aumenta el número de habitaciones. Para propiedades con dos habitaciones, hay una disminución de aproximadamente el **20.34%** en comparación con aquellas de una habitación. Sin embargo, esta tendencia se invierte para propiedades de tres habitaciones, que muestran un aumento significativo del **56.98%** en comparación con las propiedades de dos habitaciones. La tendencia continúa con propiedades de cuatro habitaciones, que son **47.41%** más caras que las de tres habitaciones. El aumento es más modesto para las propiedades de cinco habitaciones, mostrando un aumento del **4.19%** sobre las propiedades de cuatro habitaciones. Estas cifras destacan una clara preferencia del mercado por propiedades de tres y cuatro habitaciones, que se consideran más valiosas, probablemente debido a su idoneidad para familias o segmentos de mercado de mayor nivel.</p>
                                                </div>
                                                <div>
                                                    <ul><li><h5>Precio Promedio de la Propiedad por Número de Baños (de 1 a 4)</h5></li></ul>
                                                <p>Los datos para Pachuca revelan una tendencia ascendente consistente en los precios de las propiedades con el aumento en el número de baños. Las propiedades con dos baños tienen un precio <strong>51.40%</strong> más alto en promedio que aquellas con solo uno. Esta tendencia ascendente continúa con propiedades de tres baños, que son <strong>31.52%</strong> más caras que las de dos baños. La tendencia es aún más pronunciada para las propiedades con cuatro baños, mostrando un incremento del <strong>39.80%</strong> sobre las de tres baños. Este aumento constante en el precio con baños adicionales indica una fuerte preferencia del mercado por propiedades con más comodidades, reflejando la demanda de confort y lujo.</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title flex m-0 py-2"></h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">3. Tendencias de Mercado en Colonias </h4>
                                        </div>

                                        <p style="text-align: center;">
                                        
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <div>
                                                <div>
                                                <ul><li><h5>'Colonias' Activas en el Mercado Inmobiliario de Pachuca</h5></li></ul>
                                                    <div class="text">El primer gráfico ofrece una imagen reveladora del paisaje inmobiliario de Pachuca, mostrando la distribución de la actividad del mercado a través de varias colonias. Al presentar los datos en términos de porcentaje del total de anuncios, obtenemos una perspectiva comparativa clara. Colonias como "centro" dominan el mercado, representando una proporción significativa de los anuncios, lo que podría indicar una alta demanda de propiedades en estas áreas. Esto también sugiere una concentración de la vitalidad del mercado en el núcleo de la ciudad, posiblemente impulsada por el atractivo de las comodidades urbanas y las oportunidades de empleo. Sin embargo, es crucial considerar que la alta actividad también puede resultar en un mercado competitivo para los compradores y podría indicar un mercado de alquiler saturado, factores que deben ser evaluados por inversores potenciales o aquellos que consideren ingresar al mercado.
                                                        <iframe width="953" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=2072686811&amp;format=interactive"></iframe>                                                                                                       </div>
                                                </div>
                                                <div>
                                                    <ul><li><h5>'Colonias' de Alto Potencial en Pachuca </h5></li></ul>
                                                    <p>En la segunda visualización, analizamos los precios promedio de las propiedades en diferentes colonias, ahora filtradas para excluir aquellas con datos escasos. Este enfoque refinado destaca las colonias de alto potencial, con precios promedio expresados en millones de pesos para una interpretación directa de los valores de las propiedades. </p>
                                                    <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                                        <ul class="nav navbar-nav align-items-center">
                                                            <button type="button"
                                                                    class="mr-auto"
                                                                    style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;"
                                                                    data-toggle="modal"
                                                                    data-placement="bottom"
                                                                    data-target="#modal-large-2">
                                                                <i class="material-icons icon-14pt text-success">info</i> interpretación
                                                            </button>
                                                        </ul>
                                                    </div>
                                                    <p>El gráfico ilumina la naturaleza premium de ciertas colonias, como "club de golf" y "valle del sol", donde los precios promedio superan la marca de 5 millones de pesos. Estas cifras sugieren un segmento inmobiliario de alto nivel en estas áreas, probablemente caracterizado por amenidades de lujo, propiedades más grandes y demografías más acaudaladas. Para inversores o desarrolladores, estos son los distritos donde las estrategias de mercado de gama alta podrían ser más efectivas.</p>
                                                    <iframe width="884" height="394" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=318249545&amp;format=interactive"></iframe>                                                
                                                </div>
                                                <div>
                                                    <ul><li><h5>Las Mejores 'Colonias' para Inversión en Pachuca </h5></li></ul>
                                                    <p>El tercer gráfico se enfoca en la crema del mercado inmobiliario de Pachuca: las principales colonias de inversión basadas en precios promedio, considerando solo aquellas áreas con un número robusto de anuncios. Aquí, el término 'inversión' se alinea con precios promedio más altos, lo que podría correlacionarse tanto con ofertas residenciales de lujo como con mercados de alquiler potencialmente lucrativos. Notablemente, colonias como "club de golf" y "misión san agustín" se destacan, con precios promedio rondando el rango de 8-9 millones de pesos. Estas cifras indican no solo un alto punto de entrada de precio, sino también un potencial para un retorno significativo de la inversión, especialmente si estas áreas están experimentando una trayectoria ascendente en la valoración de propiedades. Esto indica que los inversores que apuntan a los escalones superiores del mercado podrían encontrar un terreno fértil aquí, aunque las altas apuestas vienen con la necesidad de un entendimiento profundo del mercado y una evaluación de riesgos.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title flex m-0 py-2"></h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0">Cambio de Precios en el Mercado Inmobiliario de Pachuca</h4>
                                        </div>

                                        <p style="text-align: center;">
                                            <iframe width="707" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=1979155317&amp;format=interactive"></iframe>                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <div class="text">El gráfico de Análisis de Cambio de Precios a lo largo del tiempo ilustra los cambios porcentuales en los precios promedio de las propiedades en el mercado inmobiliario de Pachuca para los meses disponibles. Aquí están las perspectivas clave:
                                                <ul>
                                                    <li>Hay fluctuaciones significativas en los precios de mes a mes. Por ejemplo, hubo una disminución de aproximadamente el <strong>13.34% </strong>en <strong>noviembre de 2022</strong> en comparación con <strong>octubre de 2022</strong>, seguida de un aumento notable del <strong>15.43%</strong> en <strong>febrero de 2023</strong>.</li>
                                                    <li>Los meses subsiguientes también muestran variabilidad, con una disminución del <strong>12.92%</strong> en <strong>marzo de 2023</strong> y un aumento del <strong>12.53%</strong> en <strong>junio de 2023</strong>.</li>
                                                    <li>El dato más reciente, <strong>diciembre de 2023</strong>, muestra una disminución del <strong>15.44%</strong> en comparación con <strong>septiembre de 2023</strong>.</li>
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
                                                        data-target="#modal-large-1">
                                                    <i class="material-icons icon-14pt text-success">info</i> interpretación
                                                </button>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4 class="card-header__title flex m-0 py-2"></h4>
                                    <div class="card">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <h4 class="card-header__title m-0"> Oportunidad de Inversión en el Mercado Inmobiliario de Pachuca</h4>
                                        </div>

                                        <p style="text-align: center;">
                                            <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=1213986408&amp;format=interactive"></iframe>                                        <div class="card-header bg-white d-flex align-items-center">
                                        </div>
                                        <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                            <h4 class="card-header__title flex m-0">Descripción: </h4>
                                            <div class="text">
                                                <p>Destaca las potenciales claves de inversión en las principales colonias de Pachuca. </p>
                                                <div>
                                                    <h5>Principales 'Colonias' por Precio Promedio</h5>
                                                    <ul>
                                                        <li><strong>Club de Golf</strong> lidera con un precio promedio de ~10.50 millones de MXN, notable por su alta área promedio de ~423 m².</li>
                                                        <li><strong>Misión de Santiago y Residencial Dolores</strong> siguen con precios promedio de ~9.06 millones de MXN y ~8.91 millones de MXN, respectivamente.</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h5>Principales 'Colonias' por Relación de Volatilidad de Precios</h5>
                                                    <ul>
                                                        <li><strong>Misión de Santiago</strong> muestra la relación de volatilidad de precios más alta, indicando fluctuaciones significativas de precios y potencialmente mayor riesgo u oportunidad de inversión.</li>
                                                        <li><strong>Zona Plateada y La Moraleja</strong> también exhiben altas relaciones de volatilidad de precios, sugiriendo condiciones de mercado dinámicas.</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h5>Principales 'Colonias' por Área Promedio</h5>
                                                    <ul>
                                                        <li><strong>Club de Golf</strong> ofrece el área promedio más grande, alineándose con su posición como la 'Colonia' más cara.</li>
                                                        <li><strong>Cuesco y Zona Plateada</strong> también presentan áreas promedio relativamente grandes, indicando la presencia de propiedades espaciosas.</li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h5>Principales 'Colonias' por Precio Promedio por m²</h5>
                                                    <ul>
                                                        <li><strong>Residencial Dolores y Jade Residencial</strong> lideran en precio promedio por m², sugiriendo una prima en el espacio de la propiedad, posiblemente debido a amenidades de gama alta o ubicaciones deseables.</li>
                                                    </ul>

                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Concepto</th>
                                                                <th>Club de Golf</th>
                                                                <th>Misión de Santiago</th>
                                                                <th>Residencial Dolores</th>
                                                                <th>Zona Plateada</th>
                                                                <th>Jade Residencial</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><strong>Precio Promedio</strong></td>
                                                                <td>~10.50 millones de MXN</td>
                                                                <td>~9.06 millones de MXN</td>
                                                                <td>~8.91 millones de MXN</td>
                                                                <td>~7.41 millones de MXN</td>
                                                                <td>~7.18 millones de MXN</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Volatilidad de Precios</strong></td>
                                                                <td>~6.56 millones de MXN</td>
                                                                <td>~9.04 millones de MXN</td>
                                                                <td>~4.12 millones de MXN</td>
                                                                <td>~6.73 millones de MXN</td>
                                                                <td>~2.44 millones de MXN</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Número de Anuncios</strong></td>
                                                                <td>21</td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Área Promedio</strong></td>
                                                                <td>~423 m²</td>
                                                                <td>~339 m²</td>
                                                                <td>~246 m²</td>
                                                                <td>~275 m²</td>
                                                                <td>~209 m²</td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Precio Promedio por m²</strong></td>
                                                                <td>~23,876 MXN</td>
                                                                <td>~23,606</td>
                                                                <td>~34,588 MXN</td>
                                                                <td>~26,238 MXN</td>
                                                                <td>~33,855 MXN</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--
                                                       <ol>
                                                        <li>Club de Golf</li>
                                                        <ul>
                                                            <li>Precio Promedio: ~10.50 millones de MXN</li>
                                                            <li>Volatilidad de Precios: ~6.56 millones de MXN</li>
                                                            <li>Número de Anuncios: 21</li>
                                                            <li>Área Promedio: ~423 m²</li>
                                                            <li>Precio Promedio por m²: ~23,876 MXN</li>
                                                        </ul>
                                                        <li>Misión de Santiago</li>
                                                        <ul>
                                                            <li>Precio Promedio: ~9.06 millones de MXN</li>
                                                            <li>Volatilidad de Precios: ~6.56 millones de MXN</li>
                                                            <li>Volatilidad de Precios: ~9.04 millones de MX</li>
                                                            <li>Área Promedio: ~339 m²</li>
                                                            <li>Precio Promedio por m²: ~23,606</li>
                                                        </ul>
                                                        <li>Residencial Dolores</li>
                                                        <ul>
                                                            <li>Precio Promedio: ~8.91 millones de MXN</li>
                                                            <li>Volatilidad de Precios: ~4.12 millones de MXN</li>
                                                            <li>Área Promedio: ~246 m</li>
                                                            <li>Precio Promedio por m²: ~34,588 MXN</li>
                                                        </ul>
                                                        <li>Zona Plateada</li>
                                                        <ul>
                                                            <li>Precio Promedio: ~7.41 millones de MXN</li>
                                                            <li>Volatilidad de Precios: ~6.73 millones de MXN</li>
                                                            <li>Área Promedio: ~275 m²</li>
                                                            <li>Precio Promedio por m²: ~26,238 MXN</li>
                                                        </ul>
                                                        <li>Jade Residencial</li>
                                                        <ul>
                                                            <li>Precio Promedio: ~7.18 millones de MXN</li>
                                                            <li>Volatilidad de Precios: ~2.44 millones de MXN</li>
                                                            <li>Área Promedio: ~209 m²</li>
                                                            <li>Precio Promedio por m²: ~33,855 MXNN</li>
                                                        </ul>
                                                    </ol> 
                                                    -->
                                                    
                                                </div>
                                                <div class="card-header bg-white d-flex align-items-center">
                                                    <iframe width="790" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRqKMlaBySYAMInSrOC4_pGVF2AjYAwvDNmFREBke-ma1b5wwqw7kofTI5ukUQqw0nWl_sPIoEWX9RH/pubchart?oid=1689774406&amp;format=interactive"></iframe>                                                </div>
                                                <div>
                                                    <p>El gráfico de barras anterior representa visualmente el Índice de Atractivo de Inversión para las 10 principales 'Colonias' en Pachuca. Este índice es una medida compuesta que se ha construido para proporcionar una cifra integral que refleja varios factores importantes para un inversor:</p>
                                                    <ul>
                                                        <li><strong>Precio Promedio por Metro Cuadrado (Mean_Price_M2)</strong></li>
                                                        <p>Refleja el precio típico del mercado para una propiedad en cada 'Colonia' e indica el nivel general de precios del área.</p>
                                                        <li><strong>Desviación Estándar del Precio por Metro Cuadrado (Std_Dev_Price_M2):</strong></li>
                                                        <p>Mide la variabilidad o volatilidad de los precios dentro de cada 'Colonia'. Una desviación estándar más baja indica un entorno de precios más estable, lo cual es generalmente preferible para la inversión.</p>
                                                        <li><strong>Cantidad de Anuncios (Count_Listings):</strong></li>
                                                        <p>Refleja la liquidez del mercado en cada 'Colonia'. Un mayor número de anuncios indica un mercado más activo, lo que puede proporcionar más oportunidades para comprar y vender propiedades y típicamente sugiere un menor riesgo de iliquidez de la inversión</p>
                                                    </ul>
                                                </div>
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
               <!-- Distribución recámaras -->
       <div id="modal-large-1"
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
                <p>El gráfico de Cambio de Precios a lo largo del tiempo revela fluctuaciones significativas en el mercado inmobiliario de Pachuca. Se observó una notable disminución de aproximadamente el 13.34% en noviembre de 2022 en comparación con el mes anterior, lo que indica una posible corrección del mercado o un impacto estacional. <br>Sin embargo, esta tendencia se revirtió rápidamente con un marcado aumento del 15.43% en febrero de 2023, sugiriendo un resurgimiento en la demanda del mercado o cambios en los tipos de propiedades vendidas. <br>El mercado continuó mostrando variabilidad, con una disminución del 12.92% en marzo de 2023 y un aumento del 12.53% en junio de 2023. Los datos más recientes, que muestran una disminución del 15.44% en diciembre de 2023, podrían reflejar ajustes de fin de año o factores económicos específicos que afectan los valores de las propiedades. <br> Estas fluctuaciones resaltan la naturaleza dinámica del mercado inmobiliario de Pachuca y la importancia de comprender las tendencias a corto plazo para tomar decisiones de inversión oportunas.</p>
              </div>
          </div> <!-- // END .modal-content -->
      </div> <!-- // END .modal-dialog -->
        </div> 
                <!-- 'Colonias' de Alto Potencial en Pachuca -->
       <div id="modal-large-2"
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
                <p>El gráfico ilumina la naturaleza premium de ciertas colonias, como "club de golf" y "valle del sol", donde los precios promedio superan la marca de 5 millones de pesos. Estas cifras sugieren un segmento inmobiliario de alto nivel en estas áreas, probablemente caracterizado por amenidades de lujo, propiedades más grandes y demografías más acaudaladas. Para inversores o desarrolladores, estos son los distritos donde las estrategias de mercado de gama alta podrían ser más efectivas.</p>
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