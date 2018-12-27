<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="automatizacion de portones corredizos, portones levadizos, portones pivotantes. Tambien hacemos todo tipo de reformas de porton">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen-Automatizacion y Reforma de Portones</title>

    <!-- favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="favicon.ico" rel="icon" type="image/x-icon" />

    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Autor del sitio -->
    <link type="text/plain" rel="author" href="http://ingirigoyen.com.ar/humans.txt" />

    <!-- Estilos Foundation -->
    <link rel="stylesheet" href="css/foundation.css" />

    <!--css del slider-->
    <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>

    <!-- Estilos Custom -->
    <link rel="stylesheet" href="css/estilos.css" />

    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <!-- Includes -->
    <?php
      $current = 'home';
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <!--inicio slider-->
    <div class="row">
      <div class="small-12 columns single-item">
        <img src="img/home/slide/ahora-12.gif" alt="ahora 12 cuotas"></a>
        <a href="automatizacion-porton-corredizo.php"><img src="img/home/slide/porton-corredizo-automatico.jpg" alt="motor corredizo automatico">
        <a href="portones.php"><img src="img/home/slide/motor-corredizo.jpg" alt="porton automatico corredizo recto"></a>
      </div>
    </div>
    <!--fin slider-->

    <div class="row">
      <div class="small-12 medium-3 columns centrar">
        <a href="automatizacion-porton-corredizo.php">
          <h2 class="home_h2">corredizos</h2>
          <img src="img/home/corredizo-automatico.jpg" alt="porton corredizo automatico">
        </a>
      </div>
      <div class="small-12 medium-3 columns centrar">
        <a href="automatizacion-porton-pivotante.php">
          <h2 class="home_h2">pivotante</h2>
          <img src="img/home/pivotante-automatico.jpg" alt="porton pivotante automatico">
        </a>
      </div>
      <div class="small-12 medium-3 columns centrar">
        <a href="automatizacion-porton-levadizo.php">
          <h2 class="home_h2">levadizo</h2>
          <img src="img/home/levadizo-automatico.jpg" alt="porton levadizo automatico">
        </a>
      </div>
      <div class="small-12 medium-3 columns centrar">
        <a href="portones.php">
          <h2 class="home_h2">reformas</h2>
          <img src="img/home/reforma-portones.jpg" alt="reforma de portones">
        </a>
      </div>
    </div>

    <div class="row">
      <div class="small-12 medium-6 columns">
        <a href="importancia-automatizar-porton.php">
          <h3 class="home_h3">Importancia de<br> <span class="home_span_celeste home_opacity_100">automatizar</span> su <span class="home_span_celeste home_opacity_100">portón</span></h3>
          <img src="img/home/automatizar-porton.jpg" alt="importancia de automatizar su porton">
        </a>
      </div>
      <div class="small-12 medium-6 columns derecha">
        <a href="nosotros.php">
          <h3 class="home_h3">15 años de <span class="home_span_celeste home_opacity_100">trayectoria</span><br> avalan nuestros <span class="home_span_celeste home_opacity_100">productos</span></h3>
          <img src="img/home/experiencia-irigoyen.jpg" alt="experiencia y trayectoria ingenieria irigoyen">
        </a>
        <p>&nbsp;</p><br>
      </div>
    </div>

    <!-- Footer -->
    <?php include ('includes/footer.php'); ?>
    


    <!-- jquery y Foundation JS -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>

    <!--Inicializa el slider-->
    <script type="text/javascript" src="slick/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/menu.js" type="text/javascript"></script>


  </body>
</html>
