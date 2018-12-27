<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Todo tipo de accesorios para portones automáticos. Cremalleras, control remoto, accionadores, trabas electromagnéticas, receptores, placas, etc">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen, accesorios para portones automáticos</title>

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
      $navegacion_secundaria = "accesorios"; /*Variable para navegacion secundaria*/
      include ('includes/nav.php'); /*Nav*/
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <img src="img/productos/accesorios/accesorios.jpg" alt="accesorios">
        <h1 class="margin_botomm_1em">accesorios</h1>
        <p>
          Contamos con una amplia gama de accesorios en materia de automatismo de portones
        </p><br>
        <p>
          Nos abastecemos con las empresas líderes de insumos de esta indole y contamos con un stock permanente de accesorios 
        </p>
        <br>
        <ul>
          <li>- Cerraduras electricas.</li>
          <li>- Pestillos electrónicos.</li>
          <li>- Fotocelulas de amplio alcance.</li>
          <li>- Controles remotos de diversos canales y frecuencias.</li>
          <li>- Accionadores.</li>
          <li>- Placas de comando para todos los sistemas.</li>
          <li>- Receptores de amplio rango.</li>
          <li>- Finales de carrera.</li>
          <li>- Coronas externas e internas.</li>
          <li>- Carcazas.</li>
          <li>- Carenados.</li>
          <li>- Etc</li>
        </ul>
        
        <p>
          Un sin fin de accesorios que aseguran a nuestros clientes una respuesta agil a todas su necesidades.
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
