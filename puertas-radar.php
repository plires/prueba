<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Automatizaciones para portones corredizos rectos a cremallera o a sin fin. Tambien contamos con motores aereos para las limitantes del lugar a instalar.">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen, puertas radar</title>

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
      $current = "automatismos"; /*Variable para navegacion activa*/
      $navegacion_secundaria = "puertas"; /*Variable para navegacion secundaria*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <img src="img/productos/puertas/puertas-automaticas.jpg" alt="puertas automaticas">
        <h1 class="margin_botomm_1em">puertas automaticas</h1>
        <p>
          Puertas radar para accesos publicos y privados, con radar de proximidad.
        </p>
        <p>
          Muy utilizadas en estaciones de servicio, farmacias, pefumerias, oficinas, etc.
        </p>
        <p>
          Recomendada para alto flujo de entrada y salida de personas de cualquier establecimiento.
        </p>

        <div class="row">
          <div class="large-6 small-12 columns">
            <h2>Bona</h2>
            <img src="img/productos/puertas/bona.jpg" alt="bona">
          </div>
          <div class="large-6 small-12 columns">
            <h2>Flash</h2>
            <img src="img/productos/puertas/flash.jpg" alt="flash">
          </div>
          <div class="large-6 small-12 columns">
            <h2>Giro</h2>
            <img src="img/productos/puertas/giro.jpg" alt="giro">
          </div>
          <div class="large-6 small-12 columns">
            <h2>Tore</h2>
            <img src="img/productos/puertas/tore.jpg" alt="tore">
          </div>          
        </div>

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
