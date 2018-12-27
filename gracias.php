<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Conozca nuestra empresa Ingeniero Irigoyen automatizacion de portones corredizos, portones levadizos, portones pivotantes. La plata, city bell">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Automatizacion y Reforma de Portones, envio exitoso</title>

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
      $current = "contacto"; /*Variable para navegacion activa*/
      $navegacion_secundaria = ""; /*Variable para navegacion activa*/
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <img src="img/presupuestos/presupuesto-principal.jpg" alt="presupuesto">
        <h1 class="margin_botomm_1em">Envio Exitoso</h1>
        <p>
          Muchas gracias por su envio. <br>
          A la brevedad nos estaremos comunicando con usted.
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
