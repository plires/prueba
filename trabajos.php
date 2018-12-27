<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Portones fabricados a medida, reformas de protones existentes para su posterior automatización">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen, portones nuevos y reforma de existentes</title>

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
      $current = "trabajos"; /*Variable para navegacion activa*/
      $navegacion_secundaria = ""; /*Variable para navegacion activa*/
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <h1 class="margin_botomm_1em">Trabajos realizados</h1>
        <div class="row">
          <div class="small-12 columns">
            <h3>Reforma de porton de hojas fijas a levadizo contrapesado</h3>
            <div class="row">
              <div class="small-12 medium-4 columns centrar separador">
                <img src="img/trabajos/reformas/reforma-levadizo.jpg" alt="reforma de porton de hojas fijas a levadizo">
              </div>
              <div class="small-12 medium-4 columns centrar separador">
                <img src="img/trabajos/reformas/reforma-levadizo-interior.jpg" alt="reforma de porton de hojas fijas a levadizo interior">
              </div>
              <div class="small-12 medium-4 columns centrar separador">
                <img src="img/trabajos/reformas/reforma-levadizo-abierto.jpg" alt="reforma de porton de hojas fijas a levadizo abierto">
              </div>
            </div>

            <hr class="separador">
            <h3>Colocación de contrapesos internos a portón levadizo.</h3>
            <div class="row">
              <div class="small-12 columns centrar separador">
                <img src="img/trabajos/reformas/levadizo-contrapesado.jpg" alt="contrapesos a porton levadizo">
              </div>
            </div>

            <hr class="separador">
            <h3>Automatización de porton pivotante de dos hojas.</h3>
            <div class="row">
              <div class="small-12 medium-6 columns centrar separador">
                <img src="img/trabajos/automatismos/pivotante-automatizado-exterior.jpg" alt="automatizacion de porton pivotante exterior">
              </div>
              <div class="small-12 medium-6 columns centrar separador">
                <img src="img/trabajos/automatismos/pivotante-automatizado.jpg" alt="automatizacion de porton pivotante">
              </div>
            </div>

            <hr class="separador">
            <h3>Corredizo recto en chapa y metal desplegado.</h3>
            <div class="row">
              <div class="small-12 columns centrar separador">
                <img src="img/trabajos/portones/corredizo-recto-chapa-metal-desplegado.jpg" alt="porton coredizo recto en chapa">
              </div>
            </div>
            <hr class="separador">

            <h3>Corredizo recto con puerta y manijón.</h3>
            <div class="row">
              <div class="small-12 columns centrar separador">
                <img src="img/trabajos/portones/corredizo-manijon.jpg" alt="porton coredizo recto con puerta y manijon">
              </div>
            </div>
            <hr class="separador">

            <h3>Automatización de corredizo aereo doble hoja.</h3>
            <div class="row">
              <div class="small-12 columns centrar separador">
                <img src="img/trabajos/automatismos/corredizo-aereo-doble-hoja.jpg" alt="corredizo aereo doble hoja">
              </div>
            </div>
            <hr class="separador">

            <div class="small-12 centrar">
              <a class="buttom" href="contacto.php">Consulte su caso particular.</a>
            </div>

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
