<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Conozca nuestra empresa Ingeniero Irigoyen automatizacion de portones corredizos, portones levadizos, portones pivotantes. La plata, city bell">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Automatizacion y Reforma de Portones, nuestra empresa</title>

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
      $current = "nosotros"; /*Variable para navegacion activa*/
      $navegacion_secundaria = ""; /*Variable para navegacion activa*/
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <img src="img/nosotros/nosotros-principal.jpg" alt="porton corredizo recto">
        <h1 class="margin_botomm_1em">nosotros</h1>
        <p>
          Ingenieria Irigoyen es una empresa nacida en el año 2001, nuestra actividad principal es  la 
          automatización de todo tipo de portones y la cosntrucción personalizada de portones a medida, 
          especializandonos en portones levadizos y transformación de portones existentes a levadizos contrapesados.
        </p> <br>
        <p>
          Brindamos servicio integral de instalación otorgando un año
          de garantía de cumplimiento real de todos los trabajos 
          realizados y realizamos la asistencia post-venta luego de 
          la misma, para ello contamos con técnicos especializados 
          en cada rama (electrónica, herreria o electricidad) y  
          asistencia de repuestos de nuestros proveedores.
        </p>
        <p>
          El  objetivo principal  es el servicio, asistencia y asesoramiento 
          personalizados orientados a brindar la máxima calidad a nuestros clientes.
        </p>
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
