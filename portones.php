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
      $current = "portones"; /*Variable para navegacion activa*/
      $navegacion_secundaria = ""; /*Variable para navegacion activa*/
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <img src="img/portones/portones-principal.jpg" alt="portones nuevos y reforma de existentes">
        <h1 class="margin_botomm_1em">portones nuevos y reforma de existentes</h1>
        <h2>Portones nuevos</h2>
        <p>
          En nuestra empresa contacmos con un area exclusiva para la confeccion de portones nuevos. Confeccionamos portones levadizos, pivotantes y corredizos.
          En la etapa inicial se releva el lugar de instalacion, luego se dibujan los planos del porton y se construye con los mejores materiales del mercado.
        </p>
        <i><a class="anchor" href="presupuesto.php">Solicite presupuesto</a></i>

        <hr class="separador">


        <h2>Quiere automatizar su portón? no necesita comprar uno nuevo.</h2>
        <p>
          Nos adaptamos a sus necesidades y le brindamos la opción de reformar su portón actual al sistema que mejor se adapte a su entrada.
        </p>
        <p>
          Probalemente tenga un porton de tres o cuatro hojas fijas y se pregunte si es necesario comprar un portón nuevo para poder automatizarlo.
          Quizas tenga un portón batiente y desea convertilo a levadizo o corredizo...
        </p>
        <p>
          No es necesario adquirir un portón nuevo, nosotros reformamos cualquier portón a todos los sistemas de apertura, con o sin sistema de automatizacion.
        </p><br>
        <h3>Ejemplos de reformas</h3>
          <p>
            -Reforma de pivotante a corredizo recto. <br>
           -Reforma de pivotante a levadizo. <br>
           -Reforma de levadizo a corredizo. <br>
           -Reforma de levadizo a pivotante. <br>
           -Reforma de corredizo a levadizo. Etc.
         </p><br>
        </p>
        <span class="both">&nbsp;</span>

        <div class="row">
          <div class="small-12 medium-4 columns centrar margin_botomm_1em">
            <div class="portones_contenedor">
                <img src="img/portones/porton-01.jpg" alt="porton 01">
                <p class="porton_titulo margin_bottom_1">Modelo P001</p>
            </div>
          </div>
          <div class="small-12 medium-4 columns centrar margin_botomm_1em">
            <div class="portones_contenedor">
                <img src="img/portones/porton-02.jpg" alt="porton 02">
                <p class="porton_titulo margin_bottom_1">Modelo P002</p>
            </div>
          </div>
          <div class="small-12 medium-4 columns centrar margin_botomm_1em">
            <div class="portones_contenedor">
                <img src="img/portones/porton-03.jpg" alt="porton 03">
                <p class="porton_titulo margin_bottom_1">Modelo P003</p>
            </div>
          </div>
          <div class="small-12 columns centrar">
            <a class="portones_ver_todos" href="portones-vistas1.php">Ver todos</a>
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
