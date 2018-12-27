<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Portones fabricados a medida, reformas de protones existentes para su posterior automatización">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen, portones nuevos y reforma de existentes. Constulte</title>

    <!-- favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="favicon.ico" rel="icon" type="image/x-icon" />

    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Autor del sitio -->
    <link type="text/plain" rel="author" href="http://ingirigoyen.com.ar/humans.txt" />

    <!-- Estilos Foundation -->
    <link rel="stylesheet" href="css/foundation.css" />

    <!-- Estilos Custom -->
    <link rel="stylesheet" href="css/estilos.css" />

    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <!-- Includes -->
    <?php
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      $current = "portones"; /*Variable para navegacion activa*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <div class="small-12 columns">
        <h1 class="margin_botomm_1em">Galeria de imagenes</h1>
      </div>

      <div class="small-12 columns portones_paginacion centrar">
        <a href="portones-vistas1.php">1</a>
        <span>-</span>
        <a href="portones-vistas2.php">2</a>
        <span>-</span>
        <a href="portones-vistas3.php">3</a>
        <span>-</span>
        <a class="portones_activa" href="portones-vistas4.php">4</a>
      </div>

      <div class="small-12 medium-4 columns centrar margin_botomm_1em">
        <div class="portones_contenedor">
            <img src="img/portones/porton-28.jpg" alt="porton 28">
            <p class="porton_titulo margin_bottom_1">Modelo P0028</p>
        </div>
      </div>

      <div class="small-12 medium-4 columns centrar margin_botomm_1em">
        <div class="portones_contenedor">
            <img src="img/portones/porton-29.jpg" alt="porton 29">
            <p class="porton_titulo margin_bottom_1">Modelo P029</p>
        </div>
      </div>

      <div class="small-12 medium-4 columns centrar margin_botomm_1em">
        <div class="portones_contenedor">
            <img src="img/portones/porton-30.jpg" alt="porton 30">
            <p class="porton_titulo margin_bottom_1">Modelo P030</p>
        </div>
      </div>

      <div class="small-12 medium-4 columns centrar margin_botomm_1em">
        <div class="portones_contenedor">
            <img src="img/portones/porton-31.jpg" alt="porton 31">
            <p class="porton_titulo margin_bottom_1">Modelo P031</p>
        </div>
      </div>

      <div class="small-12 medium-4 columns centrar margin_botomm_1em">
        <div class="portones_contenedor">
            <img src="img/portones/porton-32.jpg" alt="porton 32">
            <p class="porton_titulo margin_bottom_1">Modelo P032</p>
        </div>
      </div>

      <div class="small-12 columns portones_paginacion centrar">
        <a href="portones-vistas1.php">1</a>
        <span>-</span>
        <a href="portones-vistas2.php">2</a>
        <span>-</span>
        <a href="portones-vistas3.php">3</a>
        <span>-</span>
        <a class="portones_activa" href="portones-vistas4.php">4</a>
      </div>

    </div>

    <!-- Footer -->
    <?php include ('includes/footer.php'); ?>
    


    <!-- jquery y Foundation JS -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/menu.js" type="text/javascript"></script>
    
    <script>
      $(document).foundation();
    </script>

  </body>
</html>
