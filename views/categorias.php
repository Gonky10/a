<?php
$type = isset($_GET['type']) ? (int) $_GET['type'] : 0;
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-...etc" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
      <link href="./css/style.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <!-- Para Apple -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">
    <style>
</style>

  </head>
    

<body>
     
    <div class='container'  id="#about">
  
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <!--<h1><a href="#intro" style="color: #7EC712" class="scrollto">GP Imagenes</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="https://gpimagenes.com/#intro"><img src="img/logo.png" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="https://gpimagenes.com/#intro">Inicio</a></li>
          <li><a href="https://gpimagenes.com/#about">Quienes somos</a></li>
          <li><a href="https://gpimagenes.com/#services">Servicios</a></li>
          <li><a href="https://gpimagenes.com/#portfolio">Productos</a></li>
          
          <li><a href="https://gpimagenes.com/#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
  
  <main id="main">

    
    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container my-5" id="productosContainer">
      <?php include '../adm_visible/productos.php'; ?>
  </div>
    </section><!-- #about -->
  </main>

  
<a href="https://wa.me/5491154198470" target="_blank" class="whatsapp-icon">
    <i class="fab fa-whatsapp"></i>
  </a>

</div>
<script>
function toggleDescripcion(id) {
    const div = document.getElementById("desc" + id); // usamos 'div' como en tu HTML
    const link = div.nextElementSibling;

    div.classList.toggle("descripcion-corta");
    link.textContent = div.classList.contains("descripcion-corta") ? "Ver más" : "Ver menos";

    // Aplica margin-top al contenedor si el texto está expandido
    const contenedor = document.getElementById("productosContainer");
    if (!div.classList.contains("descripcion-corta")) {
        contenedor.style.marginTop = "30%";
    } else {
        contenedor.style.marginTop = "0";
    }
}

function mostrarImagenModal(src) {
  document.getElementById('imagenModalSrc').src = src;
  const modal = new bootstrap.Modal(document.getElementById('imagenModal'), {
    backdrop: false
  });
  modal.show();
}

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Libraries -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <script src="./lib/jquery/jquery-migrate.min.js"></script>
  <script src="./lib/easing/easing.min.js"></script>
  <script src="./lib/superfish/hoverIntent.js"></script>
  <script src="./lib/superfish/superfish.min.js"></script>
  <script src="./lib/wow/wow.min.js"></script>
  <script src="./lib/waypoints/waypoints.min.js"></script>
  <script src="./lib/counterup/counterup.min.js"></script>
  <script src="./lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="./lib/isotope/isotope.pkgd.min.js"></script>
  <script src="./lib/lightbox/js/lightbox.min.js"></script>
  <script src="./lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script src="js/bootbox.min.js"></script>

  <script>
    // esta funciòn se anexa luego al fronttienda_view.js
    // pero se coloca aquì para que google encuentre el còdigo
    window._configurarGoogleAnalytics = function(){
      if( window.G_esCuttyCapt ) return;

      // CREACIÒN DE GOOGLE ANALYTICS
      (function(i,s,o,g,r,a,m){
        i['GoogleAnalyticsObject']=r;
        i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)
          },i[r].l=1*new Date();
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ///////////////////////////////
      // CONFIGURACIÒN DE CUENTAS
      var gaqCliente = model.data.market.codigoGoogleAnalytics();
      if( gaqCliente) {
        ga('create', '' , 'auto', {'allowLinker' : true });
      }
      ga('require', 'linker');
      ga('linker:autoLink', [document.domain] );
      ///////////////////////////////
      ga('create', 'UA-34317194-2', 'auto', 'market');


      ///////////////////////////////

      function trackPage(){
        var url = $.string.trimFirst(model.data.hashbang().get().toURL(), '#!');
        if( gaqCliente ){
          /*ga('send', 'pageview', url);*/
          ga('set', 'page', url);
          ga('send', 'pageview');
        }

        if($.getAllQueryStrings().notrack != 1){
          _ssaq.push(['_trackPageview', url]);
        }

        ga('market.set', 'page', url);
        ga('market.send', 'pageview');
      }

      setTimeout(function() {
        (function(i,s,o,g,r,a,m){
          a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];
          a.async=1;
          a.src=g;
          m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


        SSAQ.init('fronttienda/track/'); // TRACK PROPIO DE SS
        trackPage(); // TRACKEAR PAGINA POR PRIMERA VEZ
        ko.computed(model.data.hashbang).extend({throttle:500}).subscribe( trackPage ); //TRACKEAR PÀGINA CADA VEZ QUE CAMBIA LA URL
      }, 2000);
    }

  </script>
</body>
</html>
