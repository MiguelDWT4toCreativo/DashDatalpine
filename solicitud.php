<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
        <title>Signup</title>

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

    <body class="layout-login"
    style="text-align: justify;">

        <div class="layout-login__overlay"></div>
        <div class="layout-login__form bg-white"
             data-perfect-scrollbar>
            <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
                    <img width="230" height="45"src="Logo.png"/>
            </div>

            <h4 class="m-0">¡Registrate con nosotros!</h4>
            <p class="mb-5">Envíanos tu información y nosotros te apoyaremos a crear tu cuenta.</p>
            <form method="post" onsubmit="return validarFormulario()">

            

            <form action="form.php" method="post">
                  <label for="nombre">Nombre:</label>
                  <input type="text" id="nombre" name="nombre" required>
                  <br>
                  <label for="correo">Correo Electrónico:</label>
                  <input type="email" id="correo" name="correo" required>
                  <br>
                  <button name="register" class="btn btn-primary mb-2" type="submit">Enviar</button>
                  <a class="text-body text-underline"
                                    href="index.php">¿Tienes una cuenta? ¡Ingresa aquí!</a>   
            </form>
             
            
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
                    <div class="modal-header">
                        <img class="modal-title"
                            id="modal-large-title" width="350" height="70"src="Logo.png">
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         
                                              
                                              <h4 class="px-3">TÉRMINOS Y CONDICIONES</h4> <br>
                                              <h5 class="px-3">ACEPTACIÓN DE LOS TÉRMINOS</h5>
                                              <div class="text-align px-3">El ingreso, consulta o utilización del presente portal de Internet (en lo sucesivo referido como el Portal) de DATALPINE  le atribuye a usted la calidad de usuario del mismo (en lo sucesivo referido como el “Usuario”). Como resultado del ingreso, consulta o utilización del Portal, el Usuario se somete y adhiere a, y acepta plenamente, sin reserva alguna, el estar obligado a cumplir todos y cada una de los términos, condiciones y demás disposiciones incluidas o referidas en el presente Aviso Legal o en cualquier otro aviso que se encuentre en el Portal, que se encuentre vigente en el momento mismo en que el Usuario acceda al Portal (en lo sucesivo referido como el Aviso Legal).
                                                   <br> <br>Adicionalmente a lo dispuesto en el presente Aviso Legal, el Usuario se obliga al cumplimiento de cualesquiera otros términos y condiciones particulares bajo los cuales se rijan los servicio ofrecidos actual o posteriormente por DATALPINE a través del Portal (en lo sucesivo referidos conjuntamente como los Servicios del Portal), por lo que el Usuario reconoce que, previamente a la consulta o utilización de los Servicios del Portal, leerá y aceptará plenamente y sin reservas las condiciones particulares que rijan la utilización de cualquiera de los Servicios del Portal. La falta de lectura de este Aviso Legal o de cualquier otro aviso que se muestra en este Portal (en su conjunto referidos como los Avisos del Portal) o contrato en vigor no exime al Usuario de su obligación de cumplir de manera total y oportuna con todos y cada uno de los términos de los Avisos del Portal o el contrato celebrado. Los términos definidos se podrán utilizar en singular o en plural sin que se afecte con ello su significado.
                                              </div> <br>

                                              <h5 class="px-3">CARÁCTER INFORMATIVO DE LOS CONTENIDOS</h5>
                                              <div class="text-align px-3">La información y contenidos de este Portal hacen referencia a los productos y servicios ofrecidos por DATALPINE, los cuales incluyen, sin estar limitado a textos, fotografías, gráficas, estadísticas, tendencias, análisis, contenido editorial, imágenes, iconos, tecnología, software, links, los Avisos del Portal y demás contenidos visuales y/o sonoros, así como su diseño gráfico y códigos fuente que se encuentre, ahora o en el futuro, o se haya encontrado disponible, a través del Portal, así como cualquier derecho de autor, industrial, intelectual o de cualquier otra naturaleza que se deriven o se relacionen con el Contenido (en lo sucesivo referido como los Contenidos). Los Contenidos a los que el Usuario tenga a través del Portal tienen carácter enunciativo y de ninguna manera constituyen una oferta vinculante para DATALPINE o para el Usuario de celebrar contrato alguno en relación con los productos y servicios ofrecidos por DATALPINE.
                                                   <br> <br>DATALPINE se reserva el derecho a actualizar, complementar, modificar o eliminar los Contenidos del Portal, pudiendo incluso limitar o prohibir en ciertos casos el acceso a los mismos o a los Servicios del Portal.
                                                   <br> <br>DATALPINE no se responsabiliza de cualesquiera daños y/o perjuicios que deriven, o pudieran derivar, del acceso, uso o mal uso que se haga de los Contenidos de este Portal o de los Servicios del Portal.
                                                   <br> <br>Los resultados que arrojen las consultas realizadas por el Usuario a través de este Portal o de los Servicios del Portal tendrán un carácter meramente informativo sin valor o efecto legal o de cualquier otra naturaleza, por lo que DATALPINE no estará obligada a reconocer el resultado de dichas consultas. El Usuario informará a DATALPINE de cualquier discrepancia que exista entre la realidad y los Contenidos, sin embargo, dicho aviso no será vinculante u obligatorio para DATALPINE en ningún caso o bajo ninguna circunstancia y para ningún efecto.
                                                   <br> <br>DATALPINE no se responsabiliza de los posibles errores, imprecisiones, o discrepancias que pudieran existir entre los resultados de las consultas que realice el Usuario a través del Portal o de los Servicios del Portal y la realidad.
                                                   <br> <br>DATALPINE tampoco asume obligación o responsabilidad alguna con respecto a los contenidos, productos y/o servicios comerciales o de otra naturaleza que sean ofrecidos, comercializados y/o brindados por, y/o que provengan de, personas distintas a DATALPINE o de sitios de Internet de terceros a los que pueda enlazarse el Usuario a través del Portal.
                                                   <br> <br>En caso que el Usuario requiera contactar a un representante de DATALPINE, éste podrá hacerlo a la dirección y teléfonos que aparecen en la sección Contacto de este Portal.
                                              </div> <br>

                                              <h4 class="px-3">ADECUADA UTILIZACIÓN DEL PORTAL</h4> <br>
                                              <h5 class="px-3">Información Proporcionada por el Usuario a través del Portal.</h5>
                                              <div class="text-align px-3">Toda la información proporcionada por el Usuario a través del Portal deberá ser veraz. El Usuario garantiza la autenticidad de todos aquellos datos que comunique a través de los formularios para la suscripción a los Servicios del Portal cuando así se requiera. De igual forma, el Usuario estará obligado a mantener actualizada toda la información previamente proporcionada a DATALPINE, siendo de su exclusiva responsabilidad los daños y perjuicios que se llegasen a ocasionar a DATALPINE o a terceros como resultado de la falsedad o inexactitud de la información que proporcione.
                                              </div> <br>

                                              <h5 class="px-3">Uso Correcto del Portal</h5>
                                              <div class="text-align px-3">El Usuario se obliga a realizar un uso de los Servicios del Portal de conformidad con la ley y para fine lícitos, así como a abstenerse de utilizar el Portal con fines o efectos ilícitos o que pudieran afectar los derechos de DATALPINE de tercero, su persona o bienes incluyendo, pero sin estar limitado a, los equipos informáticos (hardware y software) de otros usuarios del Portal, de DATALPINE o de terceros. Se requiere del consentimiento previo y por escrito de DATALPINE para que cualquier persona incluya en su respectiva página de Internet un hiperenlace desde su página hacia el Portal.
                                              </div> <br>

                                              <h5 class="px-3">ADICIONALMENTE, EL USUARIO RECONOCE LO SIGUIENTE:</h5>
                                              <div class="text-align px-3">1. DATALPINE no se responsabiliza por, o garantiza en forma alguna, la disponibilidad y continuidad del funcionamiento del Portal y de los Servicios del Portal. DATALPINE tampoco garantiza la utilidad del Portal, los Contenidos y de los Servicios del Portal para la realización de ninguna actividad en concreto, ni su infalibilidad y, en particular, aunque no de modo exclusivo, que el Usuario pueda efectivamente utilizar el Portal, los Contenidos y los Servicios del Portal, acceder a las distintas páginas que forman el Portal o a aquéllas desde las que se prestan los Servicios del Portal.
                                                   <br> <br>2. DATALPINE ha establecido y mantiene medidas de seguridad administrativas, técnicas y físicas para proteger sus datos personales contra daño, pérdida, alteración, destrucción o el uso, acceso o tratamiento a dichos datos por terceros no autorizados, no menores a aquellas medidas que DATALPINE mantiene para el manejo de su propia información. No obstante, DATALPINE no garantiza en forma alguna que terceros no autorizados no podrán acceder a, y/o tener conocimiento sobre la clase, condiciones, características y circunstancias de uso del Portal y de los Servicios del Portal por parte del Usuario o la información personal de este último.
                                                   <br> <br>3. DATALPINE no garantiza en forma alguna la ausencia de virus ni de otros elementos en los Contenidos, los Servicios del Portal o correos electrónicos, que puedan producir alteraciones en los equipos y programas de cómputo del Usuario o en los archivos electrónicos almacenados en sus equipos informáticos.
                                                   <br> <br>4. DATALPINE no asume responsabilidad ni garantiza la licitud, fiabilidad, utilidad, veracidad, exactitud, exhaustividad y actualidad de los Contenidos y los Servicios del Portal.
                                                   <br> <br>5. DATALPINE no asume responsabilidad ni tiene obligación de controlar y no controla la utilización del Portal, los Servicios del Portal y los Contenidos por parte de los Usuarios.
                                              </div> <br>

                                              <h5 class="px-3">TITULARIDAD SOBRE MARCAS Y DERECHOS DE PROPIEDAD INTELECTUAL</h5>
                                              <div class="text-align px-3">El Portal y los Contenidos cuentan con información que se encuentra protegida por derechos de autor y derechos de propiedad industrial incluyendo, sin estar limitado a marcas, avisos comerciales, textos, obras, diseños, denominaciones, software, imágenes, palabras, análisis, bases de datos, signos y/o figuras que se encuentran protegidos por la legislación aplicable y/o por un registro ante las autoridades de derechos de autor y de propiedad industrial competentes (en lo sucesivo y en conjunto referidos como Propiedad Intelectual). Cualquier uso no autorizado de la Propiedad Intelectual por parte de un tercero distinto a DATALPINE y/o al titular que le otorgó licencia de uso a DATALPINE, representa una invasión a los derechos de Propiedad Intelectual de DATALPINE y/o su licenciante. Aquella persona que invada dichos derechos se obligará a pagar los daños y perjuicios, penalizaciones o cualquier tipo de sanción, gastos y costas (incluyendo honorarios de abogados) que se lleguen a provocar a DATALPINE, sus accionistas, administradores, empleados, funcionarios y consultores, independientemente de las sanciones derivadas de las infracciones y/o delitos en que se puedan incurrir por el Usuario.
                                                   <br> <br>La invasión a los derechos de Propiedad Intelectual aquí mencionados incluyen de manera enunciativa, más no limitativa, la imitación y/o reproducción total o parcial de las figuras protegidas por la legislación aplicable así como de los Contenidos, sea que la imitación y/o reproducción sea de todo o parte de los Contenidos.
                                              </div> <br>

                                              <h5 class="px-3">SOBRE LOS DATOS PERSONALES DEL USUARIO</h5>
                                              <div class="text-align px-3">La información personal del Usuario que éste proporcione a través del Portal será tratada como confidencial de conformidad con la Política de Confidencialidad de Datos Personales del Portal de este Portal que se encuentra en la siguiente liga de Internet: Aviso de Privacidad.
                                              </div> <br>

                                              <h5 class="px-3">VIGENCIA</h5>
                                                    <div class="text-align px-3">El presente Aviso Legal tendrá una vigencia indefinida. DATALPINE podrá descontinuar en cualquier momento el acceso del Usuario al Portal, a los Contenidos y a los Servicios del Portal sin responsabilidad y sin necesidad de que medie causa alguna.
                                              </div> <br>

                                              <h5 class="px-3">LEGISLACIÓN APLICABLE Y JURISDICCIÓN</h5>
                                                    <div class="text-align px-3">El presente Aviso Legal se rige por las disposiciones legales aplicables en la República Mexicana. Para el caso de cualquier disputa, controversia o reclamo que surja entre el Usuario y DATALPINE.
                                                    <br> <br> DATALPINE se reserva el derecho de modificar el contenido y alcance de los términos y condiciones establecidos en el Aviso Legal en cualquier momento y según lo considere necesario. El Usuario estará obligado y sujeto a dichas modificaciones, una vez que éstas entren en vigor, por virtud del uso que el Usuario haga de este Portal, de los Contenidos del Mismo y/o de los Servicios del Portal.
                                              </div> <br>

                                              <h4 class="px-3">AVISO DE PRIVACIDAD</h4> <br>
                                                <h5 class="px-3">Introducción</h5>
                                                <div class="text-align px-3">1.1 DATALPINE ("el Sitio Web") se compromete a proteger y respetar su privacidad. Este Aviso de Privacidad describe cómo recopilamos, utilizamos y protegemos su información personal en conformidad con la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (la "Ley").       
                                                </div> <br>

                                                <h5 class="px-3">Información que Recopilamos</h5>
                                                <div class="text-align px-3">2.1 Recopilamos información personal que usted proporciona directamente cuando se registra en el Sitio Web. Esta información puede incluir su nombre, dirección de correo electrónico, dirección física, número de teléfono, y datos de pago.
                                                      <br> <br> 2.2 También recopilamos información no personal, como datos de navegación y uso del sitio web, mediante el uso de cookies y tecnologías similares.
                                                </div> <br>

                                                <h5 class="px-3">Uso de la Información</h5>
                                                <div class="text-align px-3">3.1 Utilizamos la información personal para los siguientes fines:
                                                      <div>
                                                            <ul>
                                                                <li>Procesar sus pedidos y transacciones.</li>
                                                                <li>Comunicarnos con usted y responder a sus consultas.</li>
                                                                <li>Enviarle información sobre nuestros servicios.</li>
                                                                <li>Mejorar y personalizar su experiencia en el Sitio Web.</li>
                                                            </ul>
                                                      </div>
                                                      <br> <br> 3.2 No compartiremos su información personal con terceros sin su consentimiento, excepto en los casos permitidos por la Ley.
                                                </div> <br>

                                                <h5 class="px-3">Seguridad de la Información</h5>
                                                <div class="text-align px-3">4.1 DATALPINE toma medidas razonables para proteger su información personal contra la pérdida, el acceso no autorizado, la divulgación, la alteración o la destrucción.
                                                </div> <br>

                                                <h5 class="px-3">Derechos del Titular de los Datos</h5>
                                                <div class="text-align px-3">5.1 Usted tiene derechos en relación con su información personal, de acuerdo con la Ley. Estos derechos incluyen el acceso, la rectificación, la cancelación y la oposición de sus datos personales.
                                                </div> <br>

                                                <h5 class="px-3">Cambios en el Aviso de Privacidad</h5>
                                                      <div class="text-align px-3">6.1 El presente Aviso puede sufrir modificaciones o actualizaciones derivados de cambios regulatorios; de nuestras propias necesidades por los productos que ofrecemos; de prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas. Los cambios y actualizaciones del presente Aviso se harán de su conocimiento en nuestra Plataforma o por cualquier medio de comunicación que se tenga con el Titular, notificando los cambios y/o actualización al presente aviso de privacidad. Una vez que se publique el cambio del presente aviso entrará en vigor al día siguiente de su publicación, en los medios referidos con anterioridad.
                                                </div> <br>
                    
                                        
                    </div> 
                </div> <!-- // END .modal-content -->
            </div> <!-- // END .modal-dialog -->
        </div>
        

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