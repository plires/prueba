<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Contacto para automatizar su porton. Portones corredizos, pivotantes y curvos. Reformas de existentes.Consulte.">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen, contacto por formulario</title>

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
      $navegacion_secundaria = "contacto"; /*Variable para navegacion secundaria*/
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      include ('includes/nav.php'); /*Nav*/

      $errores = [];
      $nombre="";
      $mail="";
      $telefono="";
      $comentario="";

      if (isset($_POST["contacto_enviar"])){
          include ("validaciones/funciones_validar.php");

          if(campoVacio($_POST['nombre'])){
            $errores['nombre']='Ingrese su nombre';
          } else {
            $nombre = $_POST['nombre'];
          }

          if(!comprobar_email($_POST['mail'])) {
            $errores['mail']='Direccion invalida';
          } else {
            $mail = $_POST['mail'];
          }

          if(campoVacio($_POST['telefono'])){
            $errores['telefono']='Ingrese su telefono';
          } else {
            $telefono = $_POST['telefono'];
          }

          if(campoVacio($_POST['comentario'])){
            $errores['comentario']='Ingrese su comentario';
          } else {
            $comentario = $_POST['comentario'];
          }

          if (count($errores) == 0){
              include ("envios/envio-contacto.php");
          }      
      }
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/ ?>
      <div class="medium-9 columns">
        <img src="img/presupuestos/presupuesto-principal.jpg" alt="presupuesto">
        <h1 class="margin_botomm_1em">contacto</h1>
        <div class="row">

          <div class="small-12 columns">

            <div class="contacto_error">
              <ul>
                <?php foreach ($errores as $error) { ?>
                  <li><?php echo $error; ?></li>
                <?php } ?>
              </ul>
            </div>

            <form id="presupuesto" method="post">
              <h2 class="presupuesto_h2">por favor complete el formulario</h2>
              <input class="presupuesto_input" name="nombre" type="text" placeholder="Nombre *" value="<?= $nombre ?>" />
              <input class="presupuesto_input" name="mail" type="email" placeholder="email *" value="<?= $mail ?>" />
              <input class="presupuesto_input" name="telefono" type="tel" placeholder="Telefono *" value="<?= $telefono ?>" />
              <textarea class="presupuesto_input presupuesto_comentarios" name="comentario" id="comentario" placeholder="Comentarios..."><?= $comentario ?></textarea>
              <input class="presupuesto_enviar" id="contacto_enviar" name="contacto_enviar" type="submit" value="Enviar" />
              <span class="both">&nbsp;</span>
              <br><p>&nbsp;</p>

            </form>

          </div>

          <div class="small-12 columns">
            <h2 class="presupuesto_h2">Ubicacion.</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.6222128478466!2d-58.04390801137065!3d-34.89083183136231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a2ddcf50d09777%3A0x6b6375bfc67cd308!2sCalle+28+4848%2C+Gonnet%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1448849684155" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
