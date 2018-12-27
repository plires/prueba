<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Automatizaciones para portones corredizos pivotantes o batientes. Brazos de diferentes largos para cada tipo de portón">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen, motores para portones pivotante</title>

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
      $navegacion_secundaria = "pivotante"; /*Variable para navegacion secundaria*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <img src="img/productos/pivotante/motor-porton-pivotante.jpg" alt="motor para porton pivotante">
        <h1 class="margin_botomm_1em">automatismos para portones pivotantes</h1>
        <p>
          Existen portones pivotantes de una o dos hojas. Los mismos pueden tener apertura interna o externa.
        </p>
        <p>
          Ninguna de estas combinaciones son un impedimento para que el portón quede automatizado.
        </p><br>
        <p>
          Contamos con sistemas de gran potencia para portones pesados y tambien realizamos, de ser necesario, todos los ajustes y/o mantenimiento de bisagras que las hojas requieran.
        </p><br>
        <p>
          También contamos con cerraduras electricas que se sincronizan con los motores del portón para lograr una apertura cómoda y un cierre seguro de las hojas.
          <i><a class="anchor" href="contacto.php"> Consultenos</a></i>
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
