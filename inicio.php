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
        <title> Inicio </title>
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
<link rel="shortcut icon" type="image/x-icon" href="../../../docs/images/favicon.ico" />
	<link href="https://leafletjs.com/atom.xml" type="application/atom+xml" rel="alternate" title="Leaflet Dev Blog Atom Feed" />
	<link rel="stylesheet" href="../../../docs/css/normalize.css" />
	<link rel="stylesheet" href="../../../docs/css/main.css" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,300' rel='stylesheet' type='text/css'>
	<script src="../../../docs/highlight/highlight.pack.js"></script>
	<link rel="stylesheet" href="../../../docs/highlight/styles/github-gist.css" />
	<!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
	<script>
		ACCESS_TOKEN = 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
		MB_ATTR = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
		MB_URL = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=' + ACCESS_TOKEN;
		OSM_URL = 'https://tile.openstreetmap.org/{z}/{x}/{y}.png';
		OSM_ATTRIB = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
	</script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css"/>
        <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css"/>
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
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
    .container-bg {
        background: url('tu_imagen.jpg') center/cover no-repeat;
        background-color: rgba(172, 172, 172, 0.5); /* Ajusta el valor alfa para la transparencia */
        padding: 100px;
        height: 100%; 
    }
</style>

<style>
    /* Estilos adicionales según tus necesidades */
    .list-group-item {
        cursor: pointer;
    }
</style>

<style>
    .container-bg2 {
        background: url('tu_imagen2.jpg') center/cover no-repeat;
        background-color: #f5f5f5;
        padding: 20px;
        height: 100%;
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
                        <div class="container-fluid page__heading-container" style="background-color: #f0f0f0;">
                            <div class="page__heading d-flex align-items-end" style="height: 30px;">
                                <!-- Contenido del div -->
                            </div>
                        </div>
                        <div class="container-fluid page__container" style="background-color: #f0f0f0;">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="card" style="margin-bottom: 60px;">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i>
                                            <h4 class="card-header__title flex m-0">Busca la ubicacion de interés </h4>
                                        </div>
                                        <div class="card-body align-items-center justify-content-center">
                                            <form id="searchForm" novalidate>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="estado">Estados</label>
                                                            <select id="estado" class="custom-select">
                                                                <option value="">Seleccionar</option>
                                                                <option value="hidalgo">Hidalgo</option>
                                                                <option value="puebla">Puebla</option>
                                                                <option value="queretaro">Querétaro</option>
                                                                <option value="jalisco">Jalisco</option>
                                                                <option value="tlaxcala">Tlaxcala</option>
                                                                <!--<option value="queretaro">Querétaro</option>-->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="ciudad">Ciudad</label>
                                                            <select id="ciudad" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                                                                <option value="">Seleccionar</option>
                                                                <option value="pachuca" data-estado="hidalgo">Pachuca</option>
                                                                <option value="tulancingo" data-estado="hidalgo">Tulancingo</option>
                                                                <option value="puebla" data-estado="puebla">Puebla</option>
                                                                <option value="queretaro" data-estado="queretaro">Santiago de Querétaro</option>
                                                                <option value="puertov" data-estado="jalisco">Puerto Vallarta</option>
                                                                <option value="tlaxcala" data-estado="tlaxcala">Tlaxcala</option>

                                                                 <!-- <option value="queretaro">Querétaro</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-4 mt-2 align-items-center" > <!-- Coloca el botón en una fila nueva -->
                                                        <button class="btn btn-primary mb-0 align-items-center justify-content-center" type="button" onclick="buscar()">Buscar</button>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center px-2">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <br> <br>
                        
                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="row align-self-center">
                                        <h2 class="px-3" style="font-size: 1.5rem;">Menú</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card" style="height: 168px;">
                                                <div class="card-body py-4">
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <img src="assets/iconos/valor-agregado.svg">
                                                    </div>
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <div class="text-center"><strong>Explorador de valuación y precios</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card" style="height: 168px;">
                                                <div class="card-body py-4">
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <img src="assets/iconos/segmentacion.svg">
                                                    </div>
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <div class="text-center">
                                                            <strong><a id="segmentacionesLink" style="color: #112b4a; text-decoration: none;" href="#">Segmentaciones de mercado</a></strong>
                                                            <a class="sidebar-menu-button" href="#" data-toggle="modal" data-target="#modal-large-sm">
                                                                
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body py-4">
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <img src="assets/iconos/oportunidades.svg">
                                                    </div>
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <div class="text-center"><strong>Amenidades</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br><br><br><br><br><br><br><br><br>
                                        <div class="col-lg-4">
                                            <div class="card" style="height: 168px;">
                                                <div class="card-body py-4">
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <img src="assets/iconos/espacios.svg">
                                                    </div>
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <div class="text-center"><strong>Consultoria</strong></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card" style="height: 168px;">
                                                <div class="card-body py-4">
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <img src="assets/iconos/valor-agregado.svg">
                                                    </div>
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <div class="text-center"><strong>Tendencias</strong></div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card" style="height: 168px;">
                                                <div class="card-body py-4">
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <img src="assets/iconos/recomendaciones.svg">
                                                    </div>
                                                    <div class="d-flex justify-content-center pb-3">
                                                        <div class="text-center"><strong>Contacto</strong></div> <br><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card" style="background-color: #EAECFF;">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: #6773DF;">lock_open</i>
                                                        <h4 class="text m-0"><strong>Desbloquea todo el potencial</strong></h4>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="text">Obtén todos los beneficios que tenemos para ti.</div>
                                                        <div class="text">
                                                            <div style="margin-top: -30px;"> <!-- Ajusta el valor del margen superior según sea necesario -->
                                                                <a href="https://datalpine.mx/#pricing" class="btn btn-primary">Ver planes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row" style="height: 90%;">
                                        <div class="col">
                                            <!--
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="radio-colonia" name="radio-mapa-visualizacion" class="custom-control-input" checked="checked" value="colonias">
                                                <label class="custom-control-label" for="radio-colonia">Colonias</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="radio-fraccionamiento" name="radio-mapa-visualizacion" class="custom-control-input" value="fraccionamientos">
                                                <label class="custom-control-label" for="radio-fraccionamiento">Fraccionamientos</label>
                                            </div>
                                            <div id="mapa"></div>
                                            -->
                                            <div >
                                            <h2 class="card-header__title m-0">Ciudades</h2>
                                                <iframe src="/dashboard/mapa_ciudades.html" width="100%" height="470" frameborder="0" id="contenido01"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <br> <br>
                        
                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header card-header-large bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">Estados</h4>
                                        </div>
                                        <div class="card-header card-header-tabs-basic nav"
                                             role="tablist">
                                            <a href="#activity_all"
                                               class="active"
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true">Todos</a>
                                        </div>
                                        <div class="list-group tab-content list-group-flush">
                                            <div class="tab-pane active show fade"
                                                 id="activity_all">

                                                 <div class="list-group-item list-group-item-action d-flex align-items-center" onclick="redirigirAPagina()">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title rounded-circle">H</span>
                                                    </div>
                                                
                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt">Hidalgo</div>
                                                            <div class="text px-1"></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </div>
                                                
                                                <script>
                                                    function redirigirAPagina() {
                                                        // Cambiar 'nuevaPagina.html' por la URL de la página a la que deseas redirigir
                                                        window.location.href = 'prueba.php';
                                                    }
                                                </script>

                                                 <div class="list-group-item list-group-item-action d-flex align-items-center" onclick="redirigirAPaginaPuebla()">
                                                    <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">P</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Puebla</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </div>
                                                <script>
                                                    function redirigirAPaginaPuebla() {
                                                        // Cambiar 'nuevaPagina.html' por la URL de la página a la que deseas redirigir
                                                        window.location.href = 'ppam.php';
                                                    }
                                                </script>

                                                <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                    <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">Q</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Queretaro</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </div>
                                                <script>
                                                    function redirigirAPaginaPuebla() {
                                                        // Cambiar 'nuevaPagina.html' por la URL de la página a la que deseas redirigir
                                                        window.location.href = 'qqam.php';
                                                    }
                                                </script>

                                                <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                    <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">T</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Tlaxcala</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </div>

                                                <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                    <div class="avatar avatar-xs"
                                                    style="width: 32px; height: 32px;">
                                                    <span class="avatar-title rounded-circle">J</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Jalisco</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg">
                                    <div class="row card-group-row">
                                        <div class="col-lg-6 card-group-row__col">
                                            <div class="card card-group-row__card card-body card-body-x-lg"
                                                 style="position: relative; padding-bottom: calc(120px - 1.25rem); overflow: hidden; z-index: 0; width: 100px;">
                                        
                                                <div class="card-header__title text-muted mb-2">Precio Medio</div>
                                                <div class="text-amount">&dollar; 2,799,500</div>
                                                <div class="text-stats" style="color: blue;">Pachuca </div>
                                        
                                                <div class="chart"
                                                     style="height: 100px; width: 100%; position: absolute; left: 0; right: 0; bottom: 0;">
                                                    <canvas id="productsChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-lg-6 card-group-row__col">
                                            <div class="card card-group-row__card card-body card-body-x-lg"
                                                 style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">
                                                
                                                <div class="card-header__title text-muted mb-2">Precio Historico</div>
                                                <div class="text-amount">&dollar; 3,356,791</div>
                                                <div class="text-stats text-success">Pachuca </div>
                                                
                                                <div class="chart"
                                                style="height: 100px; width: 100%; position: absolute; left: 0; right: 0; bottom: 0;">
                                                <canvas id="anotherChart"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card" style="height: 295px;">
                                        <div class="card-header card-header-large bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0"> Clasificaciones por segmentos </h4>
                                        </div>
                                        <div class="card-header card-header-tabs-basic nav align-items-center justify-content-center"
                                             role="tablist">
                                            <a href="#"
                                               class="active"
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true"
                                               onclick="mostrar('contenido1') & ocultar('contenido2') & ocultar('contenido3') & ocultar('contenido4') & ocultar('contenido5') & ocultar('contenido6')">S </a>
                                            <a href="#"
                                               class
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true"
                                               onclick="mostrar('contenido2') & ocultar('contenido1') & ocultar('contenido3') & ocultar('contenido4') & ocultar('contenido5') & ocultar('contenido6')">A </a>
                                            <a href="#"
                                               class
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true"
                                               onclick="mostrar('contenido3') & ocultar('contenido2') & ocultar('contenido1') & ocultar('contenido4') & ocultar('contenido5') & ocultar('contenido6')">B </a>
                                            <a href="#"
                                               class
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true"
                                               onclick="mostrar('contenido4') & ocultar('contenido2') & ocultar('contenido3') & ocultar('contenido1') & ocultar('contenido5') & ocultar('contenido6')">C </a>
                                            <a href="#"
                                               class
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true"
                                               onclick="mostrar('contenido5') & ocultar('contenido2') & ocultar('contenido3') & ocultar('contenido4') & ocultar('contenido1') & ocultar('contenido6')">D </a>
                                            <a href="#"
                                               class
                                               data-toggle="tab"
                                               role="tab"
                                               aria-selected="true"
                                               onclick="mostrar('contenido6') & ocultar('contenido2') & ocultar('contenido3') & ocultar('contenido4') & ocultar('contenido5') & ocultar('contenido1')">E </a>
                                        </div>
                                        
                                        <div class="card-body d-flex align-items-center justify-content-center" style="height: 29vh;">
                                            <div class="col-12 table-responsive oculto" id="contenido6">
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >E1</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $500K  </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >E2</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                   <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $500k - $750K</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >E3</th>
                                                            </tr>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$750K - $1M</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 table-responsive oculto" id="contenido5">
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >D1</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $1M - $1.25M  </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >D2</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                   <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $1.25M - $1.5M</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >D3</th>
                                                            </tr>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$1.5M - $1.75M</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 table-responsive oculto" id="contenido4">
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >C1</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $1.75M - $2M  </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >C2</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                   <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$2M - $2.25MM</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >C3</th>
                                                            </tr>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$2.25M - $2.5M</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 table-responsive oculto" id="contenido3">
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >B1</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $2.5M - $2.75M  </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >B2</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                   <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$2.75M - $3M</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >B3</th>
                                                            </tr>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$3M - $3.25M</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 table-responsive oculto" id="contenido2">
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >A1</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $3.25M - $3.5M  </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >A2</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                   <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$3.5M - $3.75M</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >A3</th>
                                                            </tr>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$3.75M - $4M</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 table-responsive" id="contenido1">
                                                <div class="row">
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >S1</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="text-center px-2 py-3" style="background-color: #FAFBFE;"> $4M - $6M  </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>    
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >S2</th>
                                                            </tr>
                                                            <tbody>
                                                                <tr>
                                                                   <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$6M - $8M</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col">
                                                        <table class="table table-sm">
                                                            <tr>
                                                                <th style="color: black;" scope="col" colspan="2" class="text-center" >S3</th>
                                                            </tr>
                                                            <tbody>
                                                            <tr>
                                                                <td class="text-center px-2 py-3" style="background-color: #FAFBFE;">$8M - $12M</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <br> <br>

                            <div class="row card-group-row">
                                <div class="col-lg-4 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                            <div class="flex">
                                                <div class="card-header__title mb-2">Top </div>
                                                <div class="card-header__title mb-1"> <strong> Ciudades para invertir</strong></div>
                                                <div class="text" style="color: #6773DF;"> En el último año</div>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center" style="margin-bottom: 20px;">
                                            <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Pachuca</span>
                                                <span class="mx-3">643</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 5.00%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Durango</span>
                                                <span class="mx-3">322</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 4.70%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Veracruz</span>
                                                <span class="mx-3">234</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 60.6%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">San Luis Potosí</span>
                                                <span class="mx-3">78</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 11.1%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted">
                                                <span class="flex text-body">Tlaxcala</span>
                                                <span class="mx-3">45</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 15.8%</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom" >
                                            <div class="flex">
                                                <div class="card-header__title mb-2">Top </div>
                                                <div class="card-header__title mb-1"> <strong> Crecimiento en poblacíon</strong></div>
                                                <div class="text" style="color: #6773DF;"> En el último año</div>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center" style="margin-bottom: 20px;">
                                            <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Pachuca</span>
                                                <span class="mx-3">686,708</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 54.61%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Durango</span>
                                                <span class="mx-3">720,626</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 23.76%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Veracruz</span>
                                                <span class="mx-3">939,046</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 12.60%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">San Luis Potosí</span>
                                                <span class="mx-3">1,317,239</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 26.41%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted">
                                                <span class="flex text-body">Tlaxcala</span>
                                                <span class="mx-3">1,411,572</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 14.80%</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                            <div class="flex">
                                                <div class="card-header__title mb-2">Top </div>
                                                <div class="card-header__title mb-1"> <strong> Crecimiento en vivienda </strong></div>
                                                <div class="text" style="color: #6773DF;"> En el último año</div>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center" style="margin-bottom: 20px;">
                                            <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Pachuca</span>
                                                <span class="mx-3">199,376</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 45.00%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Durango</span>
                                                <span class="mx-3">493 698</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 21.10%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Veracruz</span>
                                                <span class="mx-3">423,759</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 10.53%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">San Luis Potosí</span>
                                                <span class="mx-3">774,658</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 21.00%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted">
                                                <span class="flex text-body">Tlaxcala</span>
                                                <span class="mx-3">341,577</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1">arrow_upward</i> 24.57%</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div> <br> <br>

                            <div class="row">
                                <!-- Columna Izquierda -->
                                <div class="col-md-6 mb-4">
                                    <!-- Primer contenedor con imagen de fondo, texto y botón -->
                                    <div class="container-bg d-flex align-items-center justify-content-center" style="background: url('/dashboard/assets/images/city-photo.jpg') center center/cover no-repeat;">
                                        <div class="text-center text-white">
                                            <h2 class="text-center text-white" style="font-size: 18px;" >Información detallada de los lugares con más impacto en México</h2>
                                        </div>
                                    </div>
                                </div>
                            
                                <!-- Columna Derecha -->
                                <div class="col-md-6">
                                    <!-- Primer div en la columna derecha -->
                                    <div class="col-md-12 mb-4 ">
                                        <div class="card-header card-header-large bg-white d-flex justify-content-between align-items-center mb-4" style="height: 200px; background: url('/dashboard/assets/images/house-ilustration_bg.jpg') center center/cover no-repeat; background-position: center;">
                                            <div class="text-white pl-0 text-justify">
                                                <h2 style="font-size: 1.2rem;">Transforma oportunidades <span style="display: block;">en decisiones estratégicas</span></h2>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!-- Segundo div en la columna derecha -->
                                    <div class="col-md-12 mb-4">
                                        <div class="card-header card-header-large bg-white d-flex justify-content-between align-items-center mb-4">
                                            <h4 class="card-header__title flex m-0">¿Necesitas mas información?</h4>
                                            <a href="https://datalpine.mx/#contact" class="btn btn-link">Contáctanos</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="card">
                                <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                    <h4 class="card-header__title mb-0">Últimas noticias</h4>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle text-muted"
                                           data-caret="false"
                                           href="#"
                                           data-toggle="dropdown"
                                           aria-haspopup="true"
                                           aria-expanded="false"><i class="material-icons icon-16pt"></i></a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="#">
                                                <i class="material-icons icon-16pt mr-2">settings</i>
                                                <span>Blog settings</span>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="#">
                                                <i class="material-icons icon-16pt mr-2">list</i>
                                                <span>List view</span>
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center"
                                               href="#">
                                                <i class="material-icons icon-16pt mr-2">grid_on</i>
                                                <span>Grid view</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-2">
                                    <div class="row">

                                        <div class="col-lg-6 py-2">
                                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                                <a href="https://blog.datalpine.mx/single-post.html"><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                                         src="assets/images/posts/fabian-irsara-92113.jpg"
                                                         alt="Blog post image"></a>
                                                <div class="flex">
                                                    <h5 class="card-title mb-1"><a href="https://blog.datalpine.mx/single-post.html"
                                                           class="headings-color">¿Cómo la data me ayuda a conocer mis clientes potenciales?</a></h5>
                                                    
                                                    <p class="mb-0">En la era digital actual, el éxito empresarial depende en gran medida...</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 py-2">
                                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                                <a href="https://blog.datalpine.mx/single-post2.html"><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                                         src="assets/images/posts/luke-chesser-2347.jpg"
                                                         alt="Blog post image"></a>
                                                <div class="flex">
                                                    <h5 class="card-title mb-1"><a href="https://blog.datalpine.mx/single-post2.html"
                                                           class="headings-color">¿Sabías que… Puebla se posiciona como el 7º estado con mayor oferta inmobiliaria en México?</a></h5>
                                                    
                                                    <p class="mb-0">En la era digital actual, el éxito empresarial depende en gran medida...</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 py-2">
                                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                                <a href="https://blog.datalpine.mx/single-post3.html"><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                                         src="assets/images/posts/thought-catalog-214785.jpg"
                                                         alt="Blog post image"></a>
                                                <div class="flex">
                                                    <h5 class="card-title mb-1"><a href="https://blog.datalpine.mx/single-post3.html"
                                                           class="headings-color">Los estados con mayor inversión inmobiliaria en México</a></h5>
                                                    
                                                    <p class="mb-0">De acuerdo a la Secretaría de Economía las inversiones más confiables son...</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 py-2">
                                            <div class="d-flex flex-column flex-xl-row align-items-center text-center text-xl-left align-items-xl-start">
                                                <a href="https://blog.datalpine.mx/single-post4.html"><img class="img-fluid img-lg-150 img-xl-200 rounded mr-xl-3 mb-3 mb-xl-0"
                                                         src="assets/images/posts/linkedin-sales-navigator-402873.jpg"
                                                         alt="Blog post image"></a>
                                                <div class="flex">
                                                    <h5 class="card-title mb-1"><a href="https://blog.datalpine.mx/single-post4.html"
                                                           class="headings-color">Panorama de precios de viviendas en el primer semestre de 2023</a></h5>
                                                    
                                                    <p class="mb-0">En los primeros seis meses de 2023, el precio promedio de una vivienda...</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
                        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('.select2').select2({
                                    width: '100%'
                                });
                            });
                        </script>
                        <style>
                            #mapa {
                                height: 100%;
                                width: 100%;
                            }
                        </style>
                        <script>
                            var tiles = L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                maxZoom: 18,
                                attribution: '&copy; <a href="//openstreetmap.org/copyright">OpenStreetMap</a> contributors, Points &copy 2012 LINZ'
                            });
                
                            var map = L.map('mapa', {
                                center: L.latLng(20.1086563, -98.7427154),
                                zoom: 13,
                                layers: [tiles]
                            });
                
                            var polygons_colonia = [];
                            var polygons_fraccionamiento = [];
                
                            polygons_colonia.push(new L.polygon([[20.1086563, -98.7427154], [20.1085564, -98.7426021], [20.1083011, -98.7421261], [20.1080632, -98.7416778], [20.1080799, -98.7416226], [20.108192, -98.7414684], [20.1081731, -98.7414281], [20.1079804, -98.7413665], [20.107583, -98.7405474], [20.1074905, -98.7405169], [20.1068641, -98.7410443], [20.1066264, -98.7411699], [20.1061844, -98.7412248], [20.1061728, -98.7414424], [20.1049027, -98.7414665], [20.104519, -98.7414767], [20.1041601, -98.7415275], [20.1040685, -98.7415559], [20.1039616, -98.7416616], [20.1036543, -98.742243], [20.1035455, -98.7425317], [20.1035371, -98.743098], [20.1015031, -98.7432291], [20.1003587, -98.7432937], [20.099424, -98.7433488], [20.0994172, -98.7426218], [20.099496, -98.7409361], [20.0994981, -98.7393396], [20.0994648, -98.7387344], [20.0983518, -98.7389533], [20.0983155, -98.7394107], [20.0983233, -98.7395909], [20.096113, -98.7399949], [20.0959331, -98.7400229], [20.0959353, -98.7399855], [20.0956722, -98.7400322], [20.0956025, -98.7400128], [20.0948415, -98.7426741], [20.0947977, -98.7426649], [20.0936095, -98.7422767], [20.0934946, -98.7422457], [20.0934562, -98.7423683], [20.0933871, -98.7423461], [20.0933216, -98.7423209], [20.0933023, -98.7423886], [20.0931186, -98.7423324], [20.0929418, -98.7423956], [20.0928482, -98.7426342], [20.0919857, -98.7423558], [20.0918733, -98.7423206], [20.0911593, -98.7421455], [20.0905865, -98.7419879], [20.0903088, -98.7419197], [20.0900261, -98.7418869], [20.0891983, -98.7417527], [20.0886801, -98.7417059], [20.0881948, -98.7416723], [20.0880453, -98.7416682], [20.0878697, -98.7413552], [20.0877132, -98.7414853], [20.0875429, -98.7415182], [20.0875032, -98.7415259], [20.0873886, -98.7415706], [20.0873218, -98.7417739], [20.0870927, -98.7417251], [20.0865524, -98.7415503], [20.0863615, -98.741654], [20.0862834, -98.7416919], [20.0874487, -98.7439939], [20.0875583, -98.7439423], [20.0876717, -98.7439799], [20.0887557, -98.744646], [20.0897778, -98.7453525], [20.09019, -98.7455759], [20.0908523, -98.7458144], [20.0911272, -98.7459515], [20.0931065, -98.7460779], [20.0935096, -98.7460015], [20.0944049, -98.7456336], [20.09581, -98.7450624], [20.096396, -98.744853], [20.097026, -98.7447372], [20.0972684, -98.7447229], [20.0980826, -98.7447493], [20.098101, -98.7446401], [20.0981653, -98.7442584], [20.0982186, -98.743942], [20.0989217, -98.7438743], [20.0988613, -98.7446813], [20.0988522, -98.7448017], [20.1009297, -98.7449187], [20.1022493, -98.744997], [20.1028068, -98.7450237], [20.1028028, -98.7449207], [20.102752, -98.7436004], [20.1031575, -98.7435817], [20.1034868, -98.7435512], [20.1034246, -98.7449653], [20.1034203, -98.745064], [20.105133, -98.7451937], [20.1053818, -98.7451998], [20.1054049, -98.7447593], [20.1054859, -98.7436316], [20.105023, -98.7435915], [20.1050358, -98.7433256], [20.1050703, -98.7429761], [20.1084508, -98.7427501], [20.1085754, -98.7427467], [20.1086563, -98.7427154]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1261922, -98.7402644], [20.1269283, -98.7401901], [20.1274766, -98.7401088], [20.128385, -98.7400051], [20.1283813, -98.740615], [20.1304344, -98.7405504], [20.1304889, -98.7405435], [20.1306295, -98.740557], [20.1306915, -98.7404367], [20.1307594, -98.740341], [20.1309217, -98.7402243], [20.1311069, -98.7401046], [20.1311672, -98.7400118], [20.131188, -98.7399055], [20.1311289, -98.7397298], [20.1310198, -98.7396508], [20.1307689, -98.7395747], [20.1304034, -98.739219], [20.1303212, -98.7391076], [20.1301957, -98.7389561], [20.1300937, -98.7388059], [20.1300169, -98.7385765], [20.1298809, -98.7378966], [20.1298101, -98.737862], [20.1297392, -98.7378513], [20.129515, -98.7378774], [20.1294557, -98.7378921], [20.1295237, -98.7383126], [20.1292872, -98.7383034], [20.1291136, -98.7383242], [20.1289372, -98.7383565], [20.1288092, -98.7384159], [20.1288051, -98.7383007], [20.1283971, -98.738037], [20.1271762, -98.7370433], [20.1268062, -98.7367482], [20.1267958, -98.7367908], [20.1265044, -98.7378219], [20.126287, -98.7386225], [20.126219, -98.739161], [20.1261969, -98.7393507], [20.1261818, -98.7395277], [20.126168, -98.7399696], [20.1261409, -98.7401815], [20.1261922, -98.7402644]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1151024, -98.7586137], [20.1156335, -98.7547997], [20.1156544, -98.7546479], [20.1157837, -98.7548429], [20.1201122, -98.7554524], [20.1201793, -98.7556137], [20.1202365, -98.7558192], [20.1204225, -98.7566411], [20.1206148, -98.7575169], [20.1206663, -98.7579742], [20.1207514, -98.758698], [20.1207731, -98.7590928], [20.1207731, -98.759414], [20.1151024, -98.7586137]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.0955521, -98.7397617], [20.0932303, -98.7352759], [20.0913394, -98.7365494], [20.0875595, -98.7387749], [20.0876991, -98.7393984], [20.0880014, -98.739874], [20.0886897, -98.7409565], [20.0890709, -98.7415563], [20.0892006, -98.7417438], [20.0900265, -98.7418783], [20.0903148, -98.7419103], [20.0906585, -98.7407661], [20.0914987, -98.7410281], [20.0929726, -98.7414878], [20.0926519, -98.7425692], [20.0928476, -98.7426315], [20.092939, -98.7423926], [20.0931185, -98.7423289], [20.0932997, -98.7423856], [20.0933216, -98.7423209], [20.0934758, -98.7418653], [20.0937002, -98.741929], [20.0936121, -98.7422758], [20.0947989, -98.7426601], [20.0955891, -98.7399645], [20.0955521, -98.7397617]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1150282, -98.7224344], [20.1150705, -98.7212575], [20.1148644, -98.7208805], [20.1151913, -98.7201264], [20.1155183, -98.7196858], [20.1157295, -98.7192083], [20.1159927, -98.7189772], [20.1159927, -98.7187584], [20.1162907, -98.7183456], [20.1163154, -98.7183245], [20.1157248, -98.7164167], [20.114935, -98.7147437], [20.1147585, -98.7142816], [20.114718, -98.7142169], [20.1140481, -98.7147273], [20.1136793, -98.7160934], [20.1134523, -98.7167588], [20.1119604, -98.7177146], [20.1126227, -98.7185984], [20.1132064, -98.7194057], [20.1139031, -98.7206126], [20.1139924, -98.720807], [20.1150282, -98.7224344]],{
                                color: 'yellow'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1238038, -98.781247], [20.1237641, -98.7809944], [20.1236811, -98.7806975], [20.1237603, -98.7803345], [20.1238583, -98.7796898], [20.1239187, -98.7786709], [20.1240124, -98.7767779], [20.1240587, -98.7768054], [20.1242249, -98.7769598], [20.1244761, -98.7771805], [20.124835, -98.7775989], [20.1256233, -98.7784961], [20.1261358, -98.7791077], [20.12689, -98.7799874], [20.1274101, -98.7805909], [20.128697, -98.7820635], [20.1289261, -98.7823089], [20.12877, -98.7825248], [20.1285358, -98.7828199], [20.1266992, -98.7845922], [20.1264346, -98.784283], [20.1265205, -98.7841915], [20.1260987, -98.7836914], [20.1259956, -98.783789], [20.1254329, -98.7831578], [20.1238038, -98.781247]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1077138, -98.7210948], [20.108034, -98.7203459], [20.1081456, -98.7202311], [20.1088452, -98.7197198], [20.1072348, -98.7172845], [20.1109255, -98.716169], [20.1113836, -98.7168945], [20.1114561, -98.7170733], [20.1114695, -98.7174148], [20.1113142, -98.7226264], [20.1096833, -98.7219391], [20.1097756, -98.721815], [20.1111371, -98.7199833], [20.1108042, -98.7189522], [20.1104696, -98.719381], [20.1103663, -98.7192287], [20.1101742, -98.7194157], [20.1101085, -98.7193339], [20.1098227, -98.7197002], [20.1097547, -98.7196308], [20.1085429, -98.7212111], [20.1088795, -98.7213615], [20.1100456, -98.719901], [20.1103219, -98.7201961], [20.1093819, -98.7214545], [20.1091904, -98.7217108], [20.1077138, -98.7210948]],{
                                color: 'yellow'
                            }));
                            polygons_colonia.push(new L.polygon([[20.0691416, -98.7801874], [20.0719053, -98.7829441], [20.073147, -98.7842], [20.0733928, -98.7844605], [20.0686329, -98.7878089], [20.0676344, -98.7863737], [20.0670002, -98.7854619], [20.0662382, -98.7843531], [20.0655717, -98.7833832], [20.0648896, -98.7824455], [20.0648713, -98.7824203], [20.0691416, -98.7801874]],{
                                color: 'red'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1159052, -98.7459825], [20.1158958, -98.7458778], [20.1159255, -98.7457739], [20.1168541, -98.7443953], [20.1206399, -98.7390153], [20.1220326, -98.7370097], [20.1209772, -98.7361903], [20.1206999, -98.7359828], [20.1192679, -98.734876], [20.1190848, -98.7346495], [20.1190114, -98.7345269], [20.1192493, -98.7343927], [20.1197596, -98.7341452], [20.1201958, -98.7340073], [20.1204021, -98.7339447], [20.1207968, -98.7338075], [20.1210096, -98.7337375], [20.1211065, -98.733692], [20.1218233, -98.7333253], [20.1220403, -98.7331633], [20.1222651, -98.7328752], [20.1222393, -98.7327742], [20.1221385, -98.7326376], [20.121819, -98.7319948], [20.1216043, -98.7314416], [20.1213793, -98.7307919], [20.1213316, -98.730684], [20.1210271, -98.7301425], [20.1209309, -98.7298605], [20.1209034, -98.7297473], [20.1209468, -98.7297404], [20.1209807, -98.7297346], [20.1216275, -98.729906], [20.122036, -98.7299183], [20.1226603, -98.7299793], [20.123112, -98.7299851], [20.1237204, -98.7299887], [20.1238274, -98.7300158], [20.124147, -98.730132], [20.1242149, -98.7301651], [20.124233, -98.7301255], [20.1243097, -98.7298379], [20.1251967, -98.7296865], [20.1254555, -98.7296747], [20.1256532, -98.7296654], [20.1256989, -98.7296522], [20.1258227, -98.7297265], [20.125958, -98.7298084], [20.1260751, -98.729856], [20.1262495, -98.7299097], [20.1263124, -98.7299258], [20.1265951, -98.7298815], [20.1266908, -98.7297648], [20.1270573, -98.7297065], [20.1274046, -98.7296406], [20.127417, -98.729702], [20.1275335, -98.7296743], [20.127705, -98.7296452], [20.1277377, -98.7297022], [20.1277472, -98.7297807], [20.1277591, -98.7298062], [20.1279541, -98.7297598], [20.1280869, -98.7297397], [20.128421, -98.7296688], [20.1284651, -98.7296111], [20.1284928, -98.7295152], [20.1284733, -98.7293912], [20.1285973, -98.7294468], [20.1286641, -98.7294448], [20.128739, -98.7294348], [20.1287681, -98.7296228], [20.1290037, -98.7295898], [20.1291322, -98.7296012], [20.1295023, -98.7297513], [20.1297699, -98.7296889], [20.1298046, -98.7296288], [20.1301358, -98.7295429], [20.1302803, -98.7295573], [20.1304942, -98.7295841], [20.1306302, -98.7295768], [20.1307347, -98.7295613], [20.1308502, -98.7295498], [20.1311978, -98.7295856], [20.1313803, -98.7296151], [20.1315081, -98.7296024], [20.1315371, -98.7298565], [20.1317549, -98.7297848], [20.1320578, -98.7297144], [20.1322176, -98.7296959], [20.1325777, -98.7296772], [20.1327917, -98.7296812], [20.1329844, -98.7297201], [20.1331679, -98.729705], [20.1332519, -98.7298636], [20.1332499, -98.7299235], [20.1330698, -98.7299948], [20.1328845, -98.7300228], [20.1324186, -98.7300345], [20.1322499, -98.7300481], [20.1321644, -98.7300493], [20.1319331, -98.7301205], [20.1315111, -98.7303307], [20.1312524, -98.730514], [20.1309818, -98.7307796], [20.1306776, -98.7310588], [20.1303615, -98.7312786], [20.1306549, -98.7318158], [20.1300112, -98.7321595], [20.1294837, -98.7325722], [20.1293755, -98.7326553], [20.1293227, -98.7326784], [20.1292163, -98.7327177], [20.1290305, -98.7327671], [20.128932, -98.7328256], [20.1288331, -98.7329247], [20.1282823, -98.7336413], [20.1281477, -98.7339448], [20.1277506, -98.7346907], [20.1274308, -98.7352658], [20.1271304, -98.7357666], [20.1270319, -98.7359363], [20.1268894, -98.7363262], [20.1267921, -98.7367871], [20.1264996, -98.7378188], [20.1262817, -98.7386183], [20.1262152, -98.7391571], [20.1261913, -98.7393502], [20.126177, -98.739526], [20.1261637, -98.7399671], [20.126136, -98.7401778], [20.1254216, -98.739642], [20.1250418, -98.7393555], [20.1232724, -98.7379895], [20.1191188, -98.74402], [20.1183804, -98.7434561], [20.1172212, -98.7447739], [20.1167231, -98.7454495], [20.1165305, -98.7456895], [20.1164228, -98.7458866], [20.1163791, -98.7460435], [20.1162672, -98.7461287], [20.1161487, -98.7461236], [20.1160436, -98.7461155], [20.1158936, -98.746111], [20.1159052, -98.7459825]],{
                                color: 'yellow'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1129635, -98.7319011], [20.1134706, -98.7321158], [20.1135278, -98.7321694], [20.1138425, -98.7320753], [20.1139091, -98.7319593], [20.1144512, -98.7324663], [20.1152493, -98.7333569], [20.1138749, -98.7338271], [20.1138121, -98.7336367], [20.1134654, -98.732923], [20.1132332, -98.732447], [20.1129635, -98.7319011]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1158619, -98.782037], [20.1167082, -98.7812828], [20.1168946, -98.7811193], [20.119473, -98.7843159], [20.1214484, -98.786812], [20.1216802, -98.7871089], [20.1218463, -98.7873602], [20.1224165, -98.7883097], [20.1225119, -98.7887195], [20.1225814, -98.7895791], [20.1226537, -98.7905003], [20.1226624, -98.7915171], [20.1227521, -98.7929282], [20.1229343, -98.7948107], [20.1231137, -98.7968103], [20.1232757, -98.7985018], [20.1233683, -98.7996634], [20.1234409, -98.8003638], [20.1235819, -98.8009619], [20.1237706, -98.801517], [20.1237677, -98.8017065], [20.1241317, -98.8024607], [20.1238899, -98.802737], [20.1236204, -98.802399], [20.1234567, -98.8025466], [20.1230918, -98.8020028], [20.1227645, -98.8024258], [20.1225651, -98.8025939], [20.1223524, -98.8027301], [20.1217609, -98.8017604], [20.1214602, -98.801702], [20.1214701, -98.8012685], [20.1214236, -98.8009916], [20.1210171, -98.8007331], [20.1204182, -98.8004589], [20.1201202, -98.800274], [20.1191626, -98.7992696], [20.1189919, -98.798601], [20.1189688, -98.7982759], [20.1191048, -98.7971945], [20.119492, -98.7946113], [20.1197354, -98.7929196], [20.1199776, -98.7912943], [20.1203145, -98.7888426], [20.1202747, -98.788711], [20.1198654, -98.7869718], [20.1198037, -98.7868401], [20.1182428, -98.7849041], [20.116982, -98.7833467], [20.1168461, -98.7833191], [20.1158619, -98.782037]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1272246, -98.7478195], [20.1281667, -98.7475788], [20.1281201, -98.7472717], [20.1292294, -98.7471843], [20.1289901, -98.7459881], [20.1287376, -98.7445948], [20.1288242, -98.7445669], [20.1293738, -98.7445114], [20.1296009, -98.7445207], [20.1312686, -98.7446069], [20.1312715, -98.7445207], [20.1311992, -98.7443358], [20.1307363, -98.7437211], [20.1305772, -98.7435116], [20.130505, -98.7433666], [20.1304833, -98.743231], [20.1304833, -98.7430231], [20.1305108, -98.7427596], [20.1304992, -98.7425674], [20.1304715, -98.7422415], [20.1304425, -98.7418754], [20.1304501, -98.7417037], [20.130508, -98.7413537], [20.1305772, -98.7409044], [20.1306317, -98.7405623], [20.1304882, -98.740546], [20.1304345, -98.7405524], [20.1296967, -98.7405781], [20.128379, -98.7406168], [20.128385, -98.7400098], [20.1269077, -98.7401965], [20.126193, -98.7402713], [20.1262132, -98.7407313], [20.1262554, -98.7412356], [20.1262925, -98.7418297], [20.1263284, -98.7425914], [20.1263901, -98.7441277], [20.1263935, -98.7442563], [20.1264134, -98.744443], [20.1264358, -98.7446536], [20.1266482, -98.7452338], [20.1268771, -98.7461034], [20.1272246, -98.7478195]],{
                                color: 'yellow'
                            }));
                            polygons_colonia.push(new L.polygon([[20.109557, -98.7294879], [20.1097036, -98.7291968], [20.1098935, -98.7291317], [20.1102638, -98.728649], [20.1105903, -98.7285026], [20.1107029, -98.7284843], [20.1107649, -98.7286398], [20.1109653, -98.7290606], [20.1112669, -98.7296237], [20.1121332, -98.7307085], [20.1117219, -98.7310953], [20.1118718, -98.7317222], [20.1120009, -98.7319395], [20.1121356, -98.7318899], [20.1127879, -98.731591], [20.1134164, -98.732855], [20.1137925, -98.7336375], [20.1138706, -98.7338563], [20.1142547, -98.7351326], [20.1146923, -98.736657], [20.1148347, -98.7372745], [20.1144341, -98.738187], [20.1141155, -98.7373844], [20.1136973, -98.7362702], [20.1127333, -98.7365146], [20.1116939, -98.7367985], [20.1110043, -98.7369626], [20.1110504, -98.7362404], [20.1111136, -98.7357256], [20.1112818, -98.7353368], [20.1111771, -98.7348494], [20.1110237, -98.7342207], [20.1109266, -98.7337747], [20.1109217, -98.7334437], [20.1109535, -98.7328559], [20.1109743, -98.7324005], [20.1109551, -98.732146], [20.1108132, -98.7317292], [20.1106685, -98.7313661], [20.1105533, -98.7310935], [20.1103555, -98.7307497], [20.1099438, -98.730107], [20.1095634, -98.7295005], [20.109557, -98.7294879]],{
                                color: 'yellow'
                            }));
                            polygons_colonia.push(new L.polygon([[20.110444, -98.7224472], [20.1091713, -98.7234768], [20.1090028, -98.7235707], [20.1085313, -98.7238878], [20.1066711, -98.7253329], [20.1052069, -98.7264929], [20.1042995, -98.7272316], [20.1041361, -98.7273536], [20.1043442, -98.7281372], [20.1044349, -98.7283558], [20.1053079, -98.7295785], [20.1064066, -98.7311978], [20.106672, -98.7315962], [20.1067811, -98.7317766], [20.106872, -98.7319832], [20.1070425, -98.7324222], [20.1071659, -98.732716], [20.1072839, -98.7329733], [20.1073953, -98.7329279], [20.1076496, -98.7327815], [20.1078522, -98.7326044], [20.1080504, -98.7324103], [20.108276, -98.7321669], [20.1085634, -98.7316226], [20.1087361, -98.7315047], [20.1088038, -98.731405], [20.1087764, -98.7313326], [20.1087282, -98.7309753], [20.1088254, -98.7307561], [20.1089535, -98.7302793], [20.1091483, -98.7297999], [20.1094334, -98.7293165], [20.1094983, -98.7292133], [20.10965, -98.7292664], [20.109702, -98.7291847], [20.1098857, -98.7291211], [20.1101103, -98.7288209], [20.1102572, -98.7286421], [20.1103546, -98.7285912], [20.1105836, -98.7284937], [20.1105836, -98.7283351], [20.1105836, -98.7281928], [20.110618, -98.7280973], [20.1108471, -98.7276176], [20.1109444, -98.7273269], [20.1110074, -98.726961], [20.1110632, -98.7265637], [20.1111249, -98.7250885], [20.1111447, -98.724599], [20.1111012, -98.724579], [20.1099925, -98.7240701], [20.1098763, -98.7236638], [20.1099239, -98.7235211], [20.1111451, -98.7240807], [20.1111853, -98.7240981], [20.1112647, -98.7233104], [20.1112742, -98.7229344], [20.111194, -98.7228185], [20.1110689, -98.7227117], [20.110498, -98.7224475], [20.110444, -98.7224472]],{
                                color: 'yellow'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1055042, -98.7469516], [20.1052303, -98.7452126], [20.1053907, -98.7452126], [20.1054935, -98.7436317], [20.1050287, -98.7435862], [20.1050758, -98.7429803], [20.1085692, -98.7427576], [20.1086697, -98.7427183], [20.1089758, -98.7432513], [20.1091457, -98.7435867], [20.1091778, -98.7437757], [20.1096278, -98.7443748], [20.1098604, -98.7447737], [20.1098903, -98.7448497], [20.1097963, -98.7452461], [20.109631, -98.7456081], [20.1094176, -98.74585], [20.1103434, -98.7471425], [20.1104445, -98.7471723], [20.1105016, -98.7472916], [20.1109403, -98.7473333], [20.1108387, -98.7474998], [20.1103319, -98.7481639], [20.1102181, -98.748258], [20.1057249, -98.7484685], [20.1055042, -98.7469516]],{
                                color: 'yellow'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1206638, -98.7613405], [20.120772, -98.7594213], [20.1182583, -98.7591083], [20.1181342, -98.7590839], [20.117951, -98.7589761], [20.1178679, -98.7590325], [20.1176043, -98.7610497], [20.1193312, -98.7612339], [20.1206123, -98.761391], [20.1206638, -98.7613405]],{
                                color: 'green'
                            }));
                            polygons_colonia.push(new L.polygon([[20.1109492, -98.7161684], [20.1122005, -98.715808], [20.1130582, -98.7155419], [20.1133272, -98.715391], [20.114005, -98.7148508], [20.1134407, -98.7167521], [20.1119541, -98.7177074], [20.1116207, -98.7172206], [20.1114067, -98.7169004], [20.1109492, -98.7161684]],{
                                color: 'green'
                            }));
                
                            polygons_fraccionamiento.push(new L.polygon([[20.1086563, -98.7427154], [20.1085564, -98.7426021], [20.1083011, -98.7421261], [20.1080632, -98.7416778], [20.1080799, -98.7416226], [20.108192, -98.7414684], [20.1081731, -98.7414281], [20.1079804, -98.7413665], [20.107583, -98.7405474], [20.1074905, -98.7405169], [20.1068641, -98.7410443], [20.1066264, -98.7411699], [20.1061844, -98.7412248], [20.1061728, -98.7414424], [20.1049027, -98.7414665], [20.104519, -98.7414767], [20.1041601, -98.7415275], [20.1040685, -98.7415559], [20.1039616, -98.7416616], [20.1036543, -98.742243], [20.1035455, -98.7425317], [20.1035371, -98.743098], [20.1015031, -98.7432291], [20.1003587, -98.7432937], [20.099424, -98.7433488], [20.0994172, -98.7426218], [20.099496, -98.7409361], [20.0994981, -98.7393396], [20.0994648, -98.7387344], [20.0983518, -98.7389533], [20.0983155, -98.7394107], [20.0983233, -98.7395909], [20.096113, -98.7399949], [20.0959331, -98.7400229], [20.0959353, -98.7399855], [20.0956722, -98.7400322], [20.0956025, -98.7400128], [20.0948415, -98.7426741], [20.0947977, -98.7426649], [20.0936095, -98.7422767], [20.0934946, -98.7422457], [20.0934562, -98.7423683], [20.0933871, -98.7423461], [20.0933216, -98.7423209], [20.0933023, -98.7423886], [20.0931186, -98.7423324], [20.0929418, -98.7423956], [20.0928482, -98.7426342], [20.0919857, -98.7423558], [20.0918733, -98.7423206], [20.0911593, -98.7421455], [20.0905865, -98.7419879], [20.0903088, -98.7419197], [20.0900261, -98.7418869], [20.0891983, -98.7417527], [20.0886801, -98.7417059], [20.0881948, -98.7416723], [20.0880453, -98.7416682], [20.0878697, -98.7413552], [20.0877132, -98.7414853], [20.0875429, -98.7415182], [20.0875032, -98.7415259], [20.0873886, -98.7415706], [20.0873218, -98.7417739], [20.0870927, -98.7417251], [20.0865524, -98.7415503], [20.0863615, -98.741654], [20.0862834, -98.7416919], [20.0874487, -98.7439939], [20.0875583, -98.7439423], [20.0876717, -98.7439799], [20.0887557, -98.744646], [20.0897778, -98.7453525], [20.09019, -98.7455759], [20.0908523, -98.7458144], [20.0911272, -98.7459515], [20.0931065, -98.7460779], [20.0935096, -98.7460015], [20.0944049, -98.7456336], [20.09581, -98.7450624], [20.096396, -98.744853], [20.097026, -98.7447372], [20.0972684, -98.7447229], [20.0980826, -98.7447493], [20.098101, -98.7446401], [20.0981653, -98.7442584], [20.0982186, -98.743942], [20.0989217, -98.7438743], [20.0988613, -98.7446813], [20.0988522, -98.7448017], [20.1009297, -98.7449187], [20.1022493, -98.744997], [20.1028068, -98.7450237], [20.1028028, -98.7449207], [20.102752, -98.7436004], [20.1031575, -98.7435817], [20.1034868, -98.7435512], [20.1034246, -98.7449653], [20.1034203, -98.745064], [20.105133, -98.7451937], [20.1053818, -98.7451998], [20.1054049, -98.7447593], [20.1054859, -98.7436316], [20.105023, -98.7435915], [20.1050358, -98.7433256], [20.1050703, -98.7429761], [20.1084508, -98.7427501], [20.1085754, -98.7427467], [20.1086563, -98.7427154]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1261922, -98.7402644], [20.1269283, -98.7401901], [20.1274766, -98.7401088], [20.128385, -98.7400051], [20.1283813, -98.740615], [20.1304344, -98.7405504], [20.1304889, -98.7405435], [20.1306295, -98.740557], [20.1306915, -98.7404367], [20.1307594, -98.740341], [20.1309217, -98.7402243], [20.1311069, -98.7401046], [20.1311672, -98.7400118], [20.131188, -98.7399055], [20.1311289, -98.7397298], [20.1310198, -98.7396508], [20.1307689, -98.7395747], [20.1304034, -98.739219], [20.1303212, -98.7391076], [20.1301957, -98.7389561], [20.1300937, -98.7388059], [20.1300169, -98.7385765], [20.1298809, -98.7378966], [20.1298101, -98.737862], [20.1297392, -98.7378513], [20.129515, -98.7378774], [20.1294557, -98.7378921], [20.1295237, -98.7383126], [20.1292872, -98.7383034], [20.1291136, -98.7383242], [20.1289372, -98.7383565], [20.1288092, -98.7384159], [20.1288051, -98.7383007], [20.1283971, -98.738037], [20.1271762, -98.7370433], [20.1268062, -98.7367482], [20.1267958, -98.7367908], [20.1265044, -98.7378219], [20.126287, -98.7386225], [20.126219, -98.739161], [20.1261969, -98.7393507], [20.1261818, -98.7395277], [20.126168, -98.7399696], [20.1261409, -98.7401815], [20.1261922, -98.7402644]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1151024, -98.7586137], [20.1156335, -98.7547997], [20.1156544, -98.7546479], [20.1157837, -98.7548429], [20.1201122, -98.7554524], [20.1201793, -98.7556137], [20.1202365, -98.7558192], [20.1204225, -98.7566411], [20.1206148, -98.7575169], [20.1206663, -98.7579742], [20.1207514, -98.758698], [20.1207731, -98.7590928], [20.1207731, -98.759414], [20.1151024, -98.7586137]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.0955521, -98.7397617], [20.0932303, -98.7352759], [20.0913394, -98.7365494], [20.0875595, -98.7387749], [20.0876991, -98.7393984], [20.0880014, -98.739874], [20.0886897, -98.7409565], [20.0890709, -98.7415563], [20.0892006, -98.7417438], [20.0900265, -98.7418783], [20.0903148, -98.7419103], [20.0906585, -98.7407661], [20.0914987, -98.7410281], [20.0929726, -98.7414878], [20.0926519, -98.7425692], [20.0928476, -98.7426315], [20.092939, -98.7423926], [20.0931185, -98.7423289], [20.0932997, -98.7423856], [20.0933216, -98.7423209], [20.0934758, -98.7418653], [20.0937002, -98.741929], [20.0936121, -98.7422758], [20.0947989, -98.7426601], [20.0955891, -98.7399645], [20.0955521, -98.7397617]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1238038, -98.781247], [20.1237641, -98.7809944], [20.1236811, -98.7806975], [20.1237603, -98.7803345], [20.1238583, -98.7796898], [20.1239187, -98.7786709], [20.1240124, -98.7767779], [20.1240587, -98.7768054], [20.1242249, -98.7769598], [20.1244761, -98.7771805], [20.124835, -98.7775989], [20.1256233, -98.7784961], [20.1261358, -98.7791077], [20.12689, -98.7799874], [20.1274101, -98.7805909], [20.128697, -98.7820635], [20.1289261, -98.7823089], [20.12877, -98.7825248], [20.1285358, -98.7828199], [20.1266992, -98.7845922], [20.1264346, -98.784283], [20.1265205, -98.7841915], [20.1260987, -98.7836914], [20.1259956, -98.783789], [20.1254329, -98.7831578], [20.1238038, -98.781247]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1077138, -98.7210948], [20.108034, -98.7203459], [20.1081456, -98.7202311], [20.1088452, -98.7197198], [20.1072348, -98.7172845], [20.1109255, -98.716169], [20.1113836, -98.7168945], [20.1114561, -98.7170733], [20.1114695, -98.7174148], [20.1113142, -98.7226264], [20.1096833, -98.7219391], [20.1097756, -98.721815], [20.1111371, -98.7199833], [20.1108042, -98.7189522], [20.1104696, -98.719381], [20.1103663, -98.7192287], [20.1101742, -98.7194157], [20.1101085, -98.7193339], [20.1098227, -98.7197002], [20.1097547, -98.7196308], [20.1085429, -98.7212111], [20.1088795, -98.7213615], [20.1100456, -98.719901], [20.1103219, -98.7201961], [20.1093819, -98.7214545], [20.1091904, -98.7217108], [20.1077138, -98.7210948]],{
                                color: 'yellow'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.0691416, -98.7801874], [20.0719053, -98.7829441], [20.073147, -98.7842], [20.0733928, -98.7844605], [20.0686329, -98.7878089], [20.0676344, -98.7863737], [20.0670002, -98.7854619], [20.0662382, -98.7843531], [20.0655717, -98.7833832], [20.0648896, -98.7824455], [20.0648713, -98.7824203], [20.0691416, -98.7801874]],{
                                color: 'yellow'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1158619, -98.782037], [20.1167082, -98.7812828], [20.1168946, -98.7811193], [20.119473, -98.7843159], [20.1214484, -98.786812], [20.1216802, -98.7871089], [20.1218463, -98.7873602], [20.1224165, -98.7883097], [20.1225119, -98.7887195], [20.1225814, -98.7895791], [20.1226537, -98.7905003], [20.1226624, -98.7915171], [20.1227521, -98.7929282], [20.1229343, -98.7948107], [20.1231137, -98.7968103], [20.1232757, -98.7985018], [20.1233683, -98.7996634], [20.1234409, -98.8003638], [20.1235819, -98.8009619], [20.1237706, -98.801517], [20.1237677, -98.8017065], [20.1241317, -98.8024607], [20.1238899, -98.802737], [20.1236204, -98.802399], [20.1234567, -98.8025466], [20.1230918, -98.8020028], [20.1227645, -98.8024258], [20.1225651, -98.8025939], [20.1223524, -98.8027301], [20.1217609, -98.8017604], [20.1214602, -98.801702], [20.1214701, -98.8012685], [20.1214236, -98.8009916], [20.1210171, -98.8007331], [20.1204182, -98.8004589], [20.1201202, -98.800274], [20.1191626, -98.7992696], [20.1189919, -98.798601], [20.1189688, -98.7982759], [20.1191048, -98.7971945], [20.119492, -98.7946113], [20.1197354, -98.7929196], [20.1199776, -98.7912943], [20.1203145, -98.7888426], [20.1202747, -98.788711], [20.1198654, -98.7869718], [20.1198037, -98.7868401], [20.1182428, -98.7849041], [20.116982, -98.7833467], [20.1168461, -98.7833191], [20.1158619, -98.782037]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.109557, -98.7294879], [20.1097036, -98.7291968], [20.1098935, -98.7291317], [20.1102638, -98.728649], [20.1105903, -98.7285026], [20.1107029, -98.7284843], [20.1107649, -98.7286398], [20.1109653, -98.7290606], [20.1112669, -98.7296237], [20.1121332, -98.7307085], [20.1117219, -98.7310953], [20.1118718, -98.7317222], [20.1120009, -98.7319395], [20.1121356, -98.7318899], [20.1127879, -98.731591], [20.1134164, -98.732855], [20.1137925, -98.7336375], [20.1138706, -98.7338563], [20.1142547, -98.7351326], [20.1146923, -98.736657], [20.1148347, -98.7372745], [20.1144341, -98.738187], [20.1141155, -98.7373844], [20.1136973, -98.7362702], [20.1127333, -98.7365146], [20.1116939, -98.7367985], [20.1110043, -98.7369626], [20.1110504, -98.7362404], [20.1111136, -98.7357256], [20.1112818, -98.7353368], [20.1111771, -98.7348494], [20.1110237, -98.7342207], [20.1109266, -98.7337747], [20.1109217, -98.7334437], [20.1109535, -98.7328559], [20.1109743, -98.7324005], [20.1109551, -98.732146], [20.1108132, -98.7317292], [20.1106685, -98.7313661], [20.1105533, -98.7310935], [20.1103555, -98.7307497], [20.1099438, -98.730107], [20.1095634, -98.7295005], [20.109557, -98.7294879]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1055042, -98.7469516], [20.1052303, -98.7452126], [20.1053907, -98.7452126], [20.1054935, -98.7436317], [20.1050287, -98.7435862], [20.1050758, -98.7429803], [20.1085692, -98.7427576], [20.1086697, -98.7427183], [20.1089758, -98.7432513], [20.1091457, -98.7435867], [20.1091778, -98.7437757], [20.1096278, -98.7443748], [20.1098604, -98.7447737], [20.1098903, -98.7448497], [20.1097963, -98.7452461], [20.109631, -98.7456081], [20.1094176, -98.74585], [20.1103434, -98.7471425], [20.1104445, -98.7471723], [20.1105016, -98.7472916], [20.1109403, -98.7473333], [20.1108387, -98.7474998], [20.1103319, -98.7481639], [20.1102181, -98.748258], [20.1057249, -98.7484685], [20.1055042, -98.7469516]],{
                                color: 'yellow'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1206638, -98.7613405], [20.120772, -98.7594213], [20.1182583, -98.7591083], [20.1181342, -98.7590839], [20.117951, -98.7589761], [20.1178679, -98.7590325], [20.1176043, -98.7610497], [20.1193312, -98.7612339], [20.1206123, -98.761391], [20.1206638, -98.7613405]],{
                                color: 'green'
                            }));
                            polygons_fraccionamiento.push(new L.polygon([[20.1109492, -98.7161684], [20.1122005, -98.715808], [20.1130582, -98.7155419], [20.1133272, -98.715391], [20.114005, -98.7148508], [20.1134407, -98.7167521], [20.1119541, -98.7177074], [20.1116207, -98.7172206], [20.1114067, -98.7169004], [20.1109492, -98.7161684]],{
                                color: 'yellow'
                            }));
                
                            function drawColonias() {
                                console.log("Executing drawColonias");
                                polygons_fraccionamiento.forEach(polygon=>{
                                    polygon.removeFrom(map);
                                }
                                );
                                polygons_colonia.forEach(polygon=>{
                                    polygon.addTo(map);
                                }
                                );
                            }
                
                            function drawFraccionamientos() {
                                console.log("Executing drawFraccionamientos");
                                polygons_colonia.forEach(polygon=>{
                                    polygon.removeFrom(map);
                                }
                                );
                                polygons_fraccionamiento.forEach(polygon=>{
                                    polygon.addTo(map);
                                }
                                );
                            }
                
                            drawColonias();
                
                            $('input[type=radio][name=radio-mapa-visualizacion]').change(function() {
                                if (this.value == 'colonias') {
                                    drawColonias();
                                } else {
                                    drawFraccionamientos();
                                }
                            });
                            var markers = new L.MarkerClusterGroup();

                            markers.addLayer(L.marker([20.1086563, -98.7427154]));
                            markers.addLayer(L.marker([20.1036533, -98.7411111]));
                            markers.addLayer(L.marker([20.1096513, -98.7493211]));
                            markers.addLayer(L.marker([20.1076123, -98.7183212]));
                            markers.addLayer(L.marker([20.1076133, -98.7173213]));
                            markers.addLayer(L.marker([20.1076143, -98.7143214]));
                            markers.addLayer(L.marker([20.1076153, -98.7126215]));
                            markers.addLayer(L.marker([20.1076163, -98.7123216]));
                            markers.addLayer(L.marker([20.1176173, -98.7223217]));
                            markers.addLayer(L.marker([20.1176183, -98.7293211]));
                            markers.addLayer(L.marker([20.1176193, -98.7423211]));

                            map.addLayer(markers);

                        </script>
                        
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
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container-fluid page__container">
                            <div class="row">
                                  <div class="col-lg-12">
                                        <div class="card">  
                                              <div class="card align-items-center">
                                                    <img width="350" height="70"src="Logo.png">
                                              </div>
                                              <h1 class="px-3">TÉRMINOS Y CONDICIONES</h1> <br>
                                              <h2 class="px-3">ACEPTACIÓN DE LOS TÉRMINOS</h2>
                                              <div class="text-align px-3">El ingreso, consulta o utilización del presente portal de Internet (en lo sucesivo referido como el Portal) de DATALPINE  le atribuye a usted la calidad de usuario del mismo (en lo sucesivo referido como el “Usuario”). Como resultado del ingreso, consulta o utilización del Portal, el Usuario se somete y adhiere a, y acepta plenamente, sin reserva alguna, el estar obligado a cumplir todos y cada una de los términos, condiciones y demás disposiciones incluidas o referidas en el presente Aviso Legal o en cualquier otro aviso que se encuentre en el Portal, que se encuentre vigente en el momento mismo en que el Usuario acceda al Portal (en lo sucesivo referido como el Aviso Legal).
                                                   <br> <br>Adicionalmente a lo dispuesto en el presente Aviso Legal, el Usuario se obliga al cumplimiento de cualesquiera otros términos y condiciones particulares bajo los cuales se rijan los servicio ofrecidos actual o posteriormente por DATALPINE a través del Portal (en lo sucesivo referidos conjuntamente como los Servicios del Portal), por lo que el Usuario reconoce que, previamente a la consulta o utilización de los Servicios del Portal, leerá y aceptará plenamente y sin reservas las condiciones particulares que rijan la utilización de cualquiera de los Servicios del Portal. La falta de lectura de este Aviso Legal o de cualquier otro aviso que se muestra en este Portal (en su conjunto referidos como los Avisos del Portal) o contrato en vigor no exime al Usuario de su obligación de cumplir de manera total y oportuna con todos y cada uno de los términos de los Avisos del Portal o el contrato celebrado. Los términos definidos se podrán utilizar en singular o en plural sin que se afecte con ello su significado.
                                              </div> <br>

                                              <h2 class="px-3">CARÁCTER INFORMATIVO DE LOS CONTENIDOS</h2>
                                              <div class="text-align px-3">La información y contenidos de este Portal hacen referencia a los productos y servicios ofrecidos por DATALPINE, los cuales incluyen, sin estar limitado a textos, fotografías, gráficas, estadísticas, tendencias, análisis, contenido editorial, imágenes, iconos, tecnología, software, links, los Avisos del Portal y demás contenidos visuales y/o sonoros, así como su diseño gráfico y códigos fuente que se encuentre, ahora o en el futuro, o se haya encontrado disponible, a través del Portal, así como cualquier derecho de autor, industrial, intelectual o de cualquier otra naturaleza que se deriven o se relacionen con el Contenido (en lo sucesivo referido como los Contenidos). Los Contenidos a los que el Usuario tenga a través del Portal tienen carácter enunciativo y de ninguna manera constituyen una oferta vinculante para DATALPINE o para el Usuario de celebrar contrato alguno en relación con los productos y servicios ofrecidos por DATALPINE.
                                                   <br> <br>DATALPINE se reserva el derecho a actualizar, complementar, modificar o eliminar los Contenidos del Portal, pudiendo incluso limitar o prohibir en ciertos casos el acceso a los mismos o a los Servicios del Portal.
                                                   <br> <br>DATALPINE no se responsabiliza de cualesquiera daños y/o perjuicios que deriven, o pudieran derivar, del acceso, uso o mal uso que se haga de los Contenidos de este Portal o de los Servicios del Portal.
                                                   <br> <br>Los resultados que arrojen las consultas realizadas por el Usuario a través de este Portal o de los Servicios del Portal tendrán un carácter meramente informativo sin valor o efecto legal o de cualquier otra naturaleza, por lo que DATALPINE no estará obligada a reconocer el resultado de dichas consultas. El Usuario informará a DATALPINE de cualquier discrepancia que exista entre la realidad y los Contenidos, sin embargo, dicho aviso no será vinculante u obligatorio para DATALPINE en ningún caso o bajo ninguna circunstancia y para ningún efecto.
                                                   <br> <br>DATALPINE no se responsabiliza de los posibles errores, imprecisiones, o discrepancias que pudieran existir entre los resultados de las consultas que realice el Usuario a través del Portal o de los Servicios del Portal y la realidad.
                                                   <br> <br>DATALPINE tampoco asume obligación o responsabilidad alguna con respecto a los contenidos, productos y/o servicios comerciales o de otra naturaleza que sean ofrecidos, comercializados y/o brindados por, y/o que provengan de, personas distintas a DATALPINE o de sitios de Internet de terceros a los que pueda enlazarse el Usuario a través del Portal.
                                                   <br> <br>En caso que el Usuario requiera contactar a un representante de DATALPINE, éste podrá hacerlo a la dirección y teléfonos que aparecen en la sección Contacto de este Portal.
                                              </div> <br>

                                              <h1 class="px-3">ADECUADA UTILIZACIÓN DEL PORTAL</h1> <br>
                                              <h2 class="px-3">Información Proporcionada por el Usuario a través del Portal.</h2>
                                              <div class="text-align px-3">Toda la información proporcionada por el Usuario a través del Portal deberá ser veraz. El Usuario garantiza la autenticidad de todos aquellos datos que comunique a través de los formularios para la suscripción a los Servicios del Portal cuando así se requiera. De igual forma, el Usuario estará obligado a mantener actualizada toda la información previamente proporcionada a DATALPINE, siendo de su exclusiva responsabilidad los daños y perjuicios que se llegasen a ocasionar a DATALPINE o a terceros como resultado de la falsedad o inexactitud de la información que proporcione.
                                              </div> <br>

                                              <h2 class="px-3">Uso Correcto del Portal</h2>
                                              <div class="text-align px-3">El Usuario se obliga a realizar un uso de los Servicios del Portal de conformidad con la ley y para fine lícitos, así como a abstenerse de utilizar el Portal con fines o efectos ilícitos o que pudieran afectar los derechos de DATALPINE de tercero, su persona o bienes incluyendo, pero sin estar limitado a, los equipos informáticos (hardware y software) de otros usuarios del Portal, de DATALPINE o de terceros. Se requiere del consentimiento previo y por escrito de DATALPINE para que cualquier persona incluya en su respectiva página de Internet un hiperenlace desde su página hacia el Portal.
                                              </div> <br>

                                              <h2 class="px-3">ADICIONALMENTE, EL USUARIO RECONOCE LO SIGUIENTE:</h2>
                                              <div class="text-align px-3">1. DATALPINE no se responsabiliza por, o garantiza en forma alguna, la disponibilidad y continuidad del funcionamiento del Portal y de los Servicios del Portal. DATALPINE tampoco garantiza la utilidad del Portal, los Contenidos y de los Servicios del Portal para la realización de ninguna actividad en concreto, ni su infalibilidad y, en particular, aunque no de modo exclusivo, que el Usuario pueda efectivamente utilizar el Portal, los Contenidos y los Servicios del Portal, acceder a las distintas páginas que forman el Portal o a aquéllas desde las que se prestan los Servicios del Portal.
                                                   <br> <br>2. DATALPINE ha establecido y mantiene medidas de seguridad administrativas, técnicas y físicas para proteger sus datos personales contra daño, pérdida, alteración, destrucción o el uso, acceso o tratamiento a dichos datos por terceros no autorizados, no menores a aquellas medidas que DATALPINE mantiene para el manejo de su propia información. No obstante, DATALPINE no garantiza en forma alguna que terceros no autorizados no podrán acceder a, y/o tener conocimiento sobre la clase, condiciones, características y circunstancias de uso del Portal y de los Servicios del Portal por parte del Usuario o la información personal de este último.
                                                   <br> <br>3. DATALPINE no garantiza en forma alguna la ausencia de virus ni de otros elementos en los Contenidos, los Servicios del Portal o correos electrónicos, que puedan producir alteraciones en los equipos y programas de cómputo del Usuario o en los archivos electrónicos almacenados en sus equipos informáticos.
                                                   <br> <br>4. DATALPINE no asume responsabilidad ni garantiza la licitud, fiabilidad, utilidad, veracidad, exactitud, exhaustividad y actualidad de los Contenidos y los Servicios del Portal.
                                                   <br> <br>5. DATALPINE no asume responsabilidad ni tiene obligación de controlar y no controla la utilización del Portal, los Servicios del Portal y los Contenidos por parte de los Usuarios.
                                              </div> <br>

                                              <h2 class="px-3">TITULARIDAD SOBRE MARCAS Y DERECHOS DE PROPIEDAD INTELECTUAL</h2>
                                              <div class="text-align px-3">El Portal y los Contenidos cuentan con información que se encuentra protegida por derechos de autor y derechos de propiedad industrial incluyendo, sin estar limitado a marcas, avisos comerciales, textos, obras, diseños, denominaciones, software, imágenes, palabras, análisis, bases de datos, signos y/o figuras que se encuentran protegidos por la legislación aplicable y/o por un registro ante las autoridades de derechos de autor y de propiedad industrial competentes (en lo sucesivo y en conjunto referidos como Propiedad Intelectual). Cualquier uso no autorizado de la Propiedad Intelectual por parte de un tercero distinto a DATALPINE y/o al titular que le otorgó licencia de uso a DATALPINE, representa una invasión a los derechos de Propiedad Intelectual de DATALPINE y/o su licenciante. Aquella persona que invada dichos derechos se obligará a pagar los daños y perjuicios, penalizaciones o cualquier tipo de sanción, gastos y costas (incluyendo honorarios de abogados) que se lleguen a provocar a DATALPINE, sus accionistas, administradores, empleados, funcionarios y consultores, independientemente de las sanciones derivadas de las infracciones y/o delitos en que se puedan incurrir por el Usuario.
                                                   <br> <br>La invasión a los derechos de Propiedad Intelectual aquí mencionados incluyen de manera enunciativa, más no limitativa, la imitación y/o reproducción total o parcial de las figuras protegidas por la legislación aplicable así como de los Contenidos, sea que la imitación y/o reproducción sea de todo o parte de los Contenidos.
                                              </div> <br>

                                              <h2 class="px-3">SOBRE LOS DATOS PERSONALES DEL USUARIO</h2>
                                              <div class="text-align px-3">La información personal del Usuario que éste proporcione a través del Portal será tratada como confidencial de conformidad con la Política de Confidencialidad de Datos Personales del Portal de este Portal que se encuentra en la siguiente liga de Internet: Aviso de Privacidad.
                                              </div> <br>

                                              <h2 class="px-3">VIGENCIA</h2>
                                                    <div class="text-align px-3">El presente Aviso Legal tendrá una vigencia indefinida. DATALPINE podrá descontinuar en cualquier momento el acceso del Usuario al Portal, a los Contenidos y a los Servicios del Portal sin responsabilidad y sin necesidad de que medie causa alguna.
                                              </div> <br>

                                              <h2 class="px-3">LEGISLACIÓN APLICABLE Y JURISDICCIÓN</h2>
                                                    <div class="text-align px-3">El presente Aviso Legal se rige por las disposiciones legales aplicables en la República Mexicana. Para el caso de cualquier disputa, controversia o reclamo que surja entre el Usuario y DATALPINE.
                                                    <br> <br> DATALPINE se reserva el derecho de modificar el contenido y alcance de los términos y condiciones establecidos en el Aviso Legal en cualquier momento y según lo considere necesario. El Usuario estará obligado y sujeto a dichas modificaciones, una vez que éstas entren en vigor, por virtud del uso que el Usuario haga de este Portal, de los Contenidos del Mismo y/o de los Servicios del Portal.
                                              </div> <br>

                                              <form action="signup.php">
                                                    <div class="card align-items-center">
                                                          <div class="form-group align-items-end">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input class="custom-control-input"
                                                                           type="checkbox"
                                                                           value=""
                                                                           id="invalidCheck01"
                                                                           required=""
                                                                           checked="">
                                                                    <label class="custom-control-label"
                                                                           for="invalidCheck01">
                                                                        Acepto los términos y condiciones
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary" 
                                                                    type="submit">Aceptar</button>
                                                    </div>
                                              </form>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div> 
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div>
        <!-- // END header-layout -->
        <!-- App Settings FAB -->

        <div id="modal-large-sm"
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
        </div>
        <!-- // END .modal-content --><!-- // END .modal-content --><!-- // END .modal-content --><!-- // END .modal-content --><!-- // END .modal-content --><!-- // END .modal-content -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script>
            $(document).ready(function () {
                // Captura el cambio en la selección del estado
                $('#estado').change(function () {
                    // Oculta todas las opciones de ciudad
                    $('#ciudad option').hide();
                    
                    // Muestra solo las opciones de ciudad asociadas al estado seleccionado
                    var selectedEstado = $(this).val();
                    $('#ciudad option[data-estado="' + selectedEstado + '"]').show();
                    
                    // Restablece la selección de ciudad
                    $('#ciudad').val('');
                });
            });

            function buscar() {
            var estadoSeleccionado = $('#estado').val();
            var ciudadSeleccionada = $('#ciudad').val();

             if (estadoSeleccionado && ciudadSeleccionada) {
            // Lógica de búsqueda real
            if ((estadoSeleccionado === 'hidalgo' && (ciudadSeleccionada === 'tulancingo' || ciudadSeleccionada === 'pachuca')) ||
                (estadoSeleccionado === 'puebla' && ciudadSeleccionada === 'puebla') ||
                (estadoSeleccionado === 'queretaro' && ciudadSeleccionada === 'queretaro') ||
                (estadoSeleccionado === 'jalisco' && ciudadSeleccionada === 'puertov') ||
                (estadoSeleccionado === 'tlaxcala' && ciudadSeleccionada === 'tlaxcala'))

                {
                // Construye la clave para buscar en el mapa
                var clave = estadoSeleccionado + '_' + ciudadSeleccionada;

                // Mapeo de combinaciones estado-ciudad a URLs
                var mapaUrls = {
                    //Hidalgo
                    'hidalgo_pachuca': 'prueba.php',
                    'hidalgo_tulancingo': 'htam.php',

                    //Puebla
                    'puebla_puebla': 'ppam.php',

                    //Querétaro
                    'queretaro_queretaro': 'qqam.php',

                    // Jalisco
                    'jalisco_puertov': 'jpam.php',

                    // Jalisco
                    'tlaxcala_tlaxcala': 'ttam.html',
                };

          
                // Busca la URL correspondiente en el mapa
                var url = mapaUrls[clave];

                if (url) {
                    // Redirige a la URL encontrada
                    window.location.href = url;
                } else {
                    alert("No se encontró una página para la combinación seleccionada.");
                }
            } else {
                alert('Selección no válida para la búsqueda.');
            }
        } else {
            alert('Por favor, selecciona un estado y una ciudad.');
        }
        }   

    </script>


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
        <script>
            $(document).ready(function(){
                // Opcional: Inicializar el modal al cargar la página
                // $('#modal-large-sm').modal();
        
                // Activar el modal al hacer clic en el enlace "Segmentaciones de mercado"
                $('#segmentacionesLink').click(function(e){
                    e.preventDefault(); // Evitar que el enlace realice su acción predeterminada
                    $('#modal-large-sm').modal('show');
                });
        
                // Opcional: Si deseas cerrar el modal al hacer clic en el botón dentro del modal
                $('#modal-large-sm button.close').click(function(){
                    $('#modal-large-sm').modal('hide');
                });
            });
        </script>

    </body>

</html>