<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GP Imagenes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Manifest -->
    <link rel="manifest" href="/img/manifest.json">
    <!--<link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="css/style_2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .whatsapp-icon {
            font-size: 3vw;
            /* Tamaño del ícono relativo al ancho de la pantalla */
            color: #25D366;
            /* Color del ícono de WhatsApp */
            position: fixed;
            /* Fijo en la pantalla */
            bottom: 10vh;
            /* Margen inferior del 5% de la altura de la pantalla */
            right: 3vw;
            /* Margen derecho del 5% del ancho de la pantalla */
            z-index: 9999;
            /* Asegura que esté por encima de la mayoría de los elementos */
            cursor: pointer;
            /* Cambia el cursor al pasar por encima */
        }

        @media only screen and (max-width: 600px) {
            .whatsapp-icon {
                font-size: 10vw;
                /* Tamaño del ícono aumenta en pantallas más pequeñas */
                bottom: 10vh;
                /* Ajusta el margen inferior */
                right: 5vw;
                /* Ajusta el margen derecho */
            }
        }
    </style>
</head>

<body>
    <a href="https://wa.me/5491154198470" target="_blank" class="whatsapp-icon">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <!--<h1><a href="#intro" style="color: #7EC712" class="scrollto">GP Imagenes</a></h1>-->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Inicio</a></li>
                    <li><a href="#about">Quienes somos</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#portfolio">Productos</a></li>

                    <li><a href="#contact">Contacto</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url('img/incognito.png');">
                        <div class="carousel-container">
                            <div class="carousel-content">

                                <a href="#about" class="btn-get-started scrollto">Ingresar</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url('img/incognito_2.png');">
                        <div class="carousel-container">
                            <div class="carousel-content">

                                <a href="#about" class="btn-get-started scrollto">Ingresar</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">


        <section id="services" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Soluciones de Software</h3>
                </header>

                <section style="max-width: 900px; margin: 0 auto; padding: 40px 20px; font-family: Arial, sans-serif;">

                    <p style="font-size: 16px; line-height: 1.6; color: #333;">
                        En <strong>GP Imágenes SRL</strong> nos especializamos en brindar <strong>soluciones tecnológicas integrales</strong>
                        adaptadas al ámbito de la salud. Con más de una década de experiencia en el mercado, fusionamos el desarrollo de software con
                        nuestro conocimiento técnico en equipos de diagnóstico por imágenes.
                    </p>
                    <header class="section-header " style="margin-top: 20%;">
                        <h3 class="section-title">Nuestros servicios incluyen:</h3>
                    </header>

                    <ul style="font-size: 16px; line-height: 1.6; color: #333; padding-left: 20px;">
                        <li>Desarrollo de <strong>aplicaciones web personalizadas</strong> según las necesidades de cada cliente.</li>
                        <li>Creación de <strong>aplicaciones móviles</strong> intuitivas y funcionales.</li>
                        <li>Implementación de <strong>soluciones de software para equipos médicos</strong>, como tomografía computada y densitometría.</li>
                    </ul>

                    <p style="font-size: 16px; line-height: 1.6; color: #333; margin-top: 20px;">
                        Nuestro enfoque está en ofrecer herramientas digitales que <strong>optimicen procesos clínicos</strong>,
                        <strong>mejoren la precisión diagnóstica</strong> y <strong>aumenten la eficiencia operativa</strong>.
                    </p>

                    <p style="font-size: 16px; line-height: 1.6; color: #333; font-weight: bold; margin-top: 30px;">
                        Confíanos tu proyecto y lo transformamos en una solución eficaz, moderna y escalable.
                    </p>
                </section>



                <div class="d-flex flex-wrap gap-3" style="margin-top: 5%;">
                    <!-- Card 1 -->
                    <div class="card mb-3" style="max-width: 18rem; background-color: #0092db; color: white;">
                        <div class="card-header">Aplicaciones web clasicas</div>
                        <div class="card-body">
                            <h5 class="card-title">Webs con amplia gama de pestañas</h5>
                            <p class="card-text">Panel de </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="card mb-3" style="max-width: 18rem; background-color: #25D366; color: white;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Warning card title</h5>
                            <p class="card-text">Some quick example text...</p>
                        </div>
                    </div>

                    <!-- Repetí el resto igual -->
                </div>

            </div>

            </div>
        </section>
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>Quienes somos</h3>
                    <p><b>GP Imágenes</b> es una empresa dedicada a la entrega de Soluciones Integrales en Tecnología Médica, que van desde la tradicional venta y reparación de equipamiento médico y hasta, la adecuación de nuestra oferta en Soluciones y Servicios acordes a sus necesidades, focalizándonos siempre en aquellas tareas que aporten valor agregado a su negocio.

                        Contamos con un staff de profesionales ampliamente capacitados en la industria de equipamiento médico de última generación, con vasta experiencia en las principales marcas que lideran el mercado.</p>

                    <p><b>GP Imágenes</b> pone a su disposición los más de 20 años de experiencia en el mercado de la tecnología médica al servicio de la salud para crear, conjuntamente, planes estratégicos que consideren sus proyecciones de crecimiento, estado de situación actual de sus servicios y por lo tanto, necesidades de incorporación, recambio por obsolescencia tecnológica y mantenimiento del parque instalado de equipos, en el corto, mediano y largo plazo.</p>
                </header>

                <div class="row about-cols">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-list-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Nuestra Misión</a></h2>
                            <p>
                                Entregarle Servicios y Soluciones Integrales en Tecnología Médica acorde a sus necesidades, maximizando la productividad debido a la disminución en los tiempos de inoperancia de sus equipos con los mejores costos del mercado.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Nuestro Objetivo</a></h2>
                            <p>
                                Convertirnos en su Socio Tecnológico, de manera que pueda canalizar en nosotros todas sus inquietudes, requerimientos, y necesidades técnicas, asistiéndolo en la planificación estratégica para una adecuada toma de decisiones; permitiéndole de esta forma, focalizarse en el corazón de su negocio.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-people-outline"></i></div>
                            </div>
                            <h2 class="title"><a href="#">Nuestro Compromiso</a></h2>
                            <p>
                                Elaborar conjuntamente con usted un plan estratégico considerando necesidades de incorporación de nuevos equipamientos con base en su proyección de crecimiento considerando también, necesidades de adecuaciones de su actual parque instalado con base en la obsolescencia tecnológica. De esta forma, le garantizamos una adecuada cobertura y previsibilidad frente a eventuales dificultades técnicas y tecnológicas que se le presenten.</p>
                            <p>
                                Todo esto volcado en un plan que incorpore medidas de corto, mediano y largo plazo alineado a sus objetivos estratégicos facilitándole de esta forma, tomar las decisiones correctas en el momento oportuno.
                            </p>
                        </div>
                    </div>

                </div>
        </section><!-- #about -->



        </div>
        </section><!-- #facts -->

        <!--==========================
      Portfolio Section
    ============================-->
        -->


        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="section-bg wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Contacto</h3>
                </div>

                <div class="row  text-center">
                    <!-- Teléfono -->
                    <div class="col-md-4 contact-info">
                        <div class="contact-address">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Teléfono</h3>
                            <p><a href="tel:+5491154198470">+54 911 5419 8470</a></p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-md-4 contact-info">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@gpimagenes.com">info@gpimagenes.com</a></p>
                        </div>
                    </div>

                    <div class="col-md-4 contact-info">
                        <div class="contact-email">
                            <i class="ion-ios-telephone-outline"></i>

                            <h3>Redes Sociales</h3>
                            <div class="social-links-2">
                                <a href="https://www.facebook.com/GPimagenessrl" style="padding: 5px" target="_blank" class="facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/gpimagenesrl/" style="padding: 5px" target="_blank" class="instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/company/gp-imagenes-srl/" style="padding: 5px" target="_blank" class="linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="form">
                    <div id="sendmessage">Tu mensaje ha sido enviado con exito. A la brevedad te contactaremos, Gracias!</div>

                    <form action="send_form_email.php" method="post" role="form" class="contactForm" data-toggle="validator">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Empresa" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Dirección" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Teléfono" data-rule="minlen:4" data-msg="Por favor ingrese al menos 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email_from" id="email_from" placeholder="Email" data-rule="email" data-msg="Por favor ingrese un email válido" oninvalid="this.setCustomValidity('Por favor ingrese una dirección válida')" onkeypress="setCustomValidity('')" oninput="setCustomValidity('')" onerror="this.setCustomValidity('Por favor ingrese una dirección válida')" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="areaDeConsulta" class="form-control">
                                    <option value="Ventas">Ventas</option>
                                    <option value="Servicios">Servicios</option>
                                </select>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:8" data-msg="Por favor ingrese al menos 8 caracteres en el asunto" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comments" rows="5" data-rule="required" data-msg="Por favor detalle su consulta" placeholder="Consulta/Comentarios"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div id="errormessage"></div>
                        <div class="form-group">
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">



                    <div class="col-lg-3 col-md-6 footer-links" style="flex: 0 0 33.333%; max-width: 33.333%;">
                        <h4>GP Imágenes</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Inicio</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#about">Quiénes somos</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#services">Servicios</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">Productos</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#contact">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact" style="flex: 0 0 33.333%; max-width: 33.333%;">
                        <h4>Contacto</h4>
                        <p>
                            <strong>Teléfono:</strong> +54 911 54198470<br>
                            <strong>Email:</strong> info@gpimagenes.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter" style="flex: 0 0 33.333%; max-width: 33.333%;">
                        <h4>Redes sociales</h4>
                        <div class="social-links">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/GPimagenessrl" target="_blank" class="facebook">
                                <i class="fab fa-facebook"></i>
                            </a>

                            <!-- Instagram -->
                            <a href="https://www.instagram.com/gpimagenesrl/" target="_blank" class="instagram">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <!-- LinkedIn -->
                            <a href="https://www.linkedin.com/company/gp-imagenes-srl/" target="_blank" class="linkedin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
            </div>
            <div class="credits">

                Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script src="js/bootbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <script>
        // esta funciòn se anexa luego al fronttienda_view.js
        // pero se coloca aquì para que google encuentre el còdigo
        window._configurarGoogleAnalytics = function() {
            if (window.G_esCuttyCapt) return;

            // CREACIÒN DE GOOGLE ANALYTICS
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ///////////////////////////////
            // CONFIGURACIÒN DE CUENTAS
            var gaqCliente = model.data.market.codigoGoogleAnalytics();
            if (gaqCliente) {
                ga('create', '', 'auto', {
                    'allowLinker': true
                });
            }
            ga('require', 'linker');
            ga('linker:autoLink', [document.domain]);
            ///////////////////////////////
            ga('create', 'UA-34317194-2', 'auto', 'market');


            ///////////////////////////////

            function trackPage() {
                var url = $.string.trimFirst(model.data.hashbang().get().toURL(), '#!');
                if (gaqCliente) {
                    /*ga('send', 'pageview', url);*/
                    ga('set', 'page', url);
                    ga('send', 'pageview');
                }

                if ($.getAllQueryStrings().notrack != 1) {
                    _ssaq.push(['_trackPageview', url]);
                }

                ga('market.set', 'page', url);
                ga('market.send', 'pageview');
            }

            setTimeout(function() {
                (function(i, s, o, g, r, a, m) {
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');


                SSAQ.init('fronttienda/track/'); // TRACK PROPIO DE SS
                trackPage(); // TRACKEAR PAGINA POR PRIMERA VEZ
                ko.computed(model.data.hashbang).extend({
                    throttle: 500
                }).subscribe(trackPage); //TRACKEAR PÀGINA CADA VEZ QUE CAMBIA LA URL
            }, 2000);
        }
    </script>

</body>

</html>