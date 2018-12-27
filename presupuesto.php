<!doctype html>
<html class="no-js" lang="es">
  <head>
    <!-- Etiquetas meta -->
    <meta name="description" content="Presupuesto para automatizar su porton. Portones corredizos, pivotantes y curvos. Reformas de existentes.Consulte.">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ingeniero Irigoyen, presupuesto automatizacion de portones</title>

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
      $current = "presupuesto"; /*Variable para navegacion activa*/
      $navegacion_secundaria = "presupuesto"; /*Variable para navegacion secundaria*/
      include_once("includes/analyticstracking.php"); /*Google Analitycs*/
      include ('includes/header.php'); /*Header*/
      include ('includes/nav.php'); /*Nav*/

      $errores = [];
      $nombre="";
      $mail="";
      $telefono="";
      $comentarios="";

      if (isset($_POST["presupuesto_enviar"])){
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

          if(campoVacio($_POST['tipo'])){
            $errores['tipo']='Que tipo de trabajo necesita?';
          } else {
            $tipo = $_POST['tipo'];
          }

          if(campoVacio($_POST['tipo_trabajo'])){
            $errores['tipo_trabajo']='Que tipo de portón es?';
          } else {
            $tipo_trabajo = $_POST['tipo_trabajo'];
          }

          if(campoVacio($_POST['comentarios'])){
            $errores['comentarios']='Deje su comentario';
          } else {
            $comentarios = $_POST['comentarios'];
          }

          if (count($errores) == 0){
              include ("envios/envio-presupuesto.php");
          }    
      }
    ?>

    <div class="row">
      <?php include ('includes/aside-botonera.php'); /*Botonera Productos*/?>
      <div class="medium-9 columns">
        <img src="img/presupuestos/presupuesto-principal.jpg" alt="presupuesto">
        <h1 class="margin_botomm_1em">presupuesto</h1>
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
              <label for="tipo">Tipo de trabajo *</label>
              <select class="presupuesto_input" name="tipo_trabajo" placeholder="Tipo de trabajo" value="<?= $tipo_trabajo ?>" />
                <option value="">Seleccionar...</option>
                <option value="Automatizacion">Automatizacion de porton</option>
                <option value="porton_nuevo">Porton nuevo</option>
                <option value="reforma">Reforma de porton</option>
                <option value="otro_trabajo">Otro (especificar)</option>
              </select>
              <label for="tipo">Tipo de porton *</label>
              <select class="presupuesto_input" name="tipo" placeholder="Tipo de porton" value="<?= $tipo ?>" />
                <option value="">Seleccionar...</option>
                <option value="corredizo-recto">Porton corredizo recto</option>
                <option value="corredizo-curvo">Porton corredizo curvo</option>
                <option value="pivotante">Porton pivotante</option>
                <option value="levadizo">Porton levadizo</option>
                <option value="otro">Otro</option>
              </select>
              <textarea class="presupuesto_input presupuesto_comentarios" name="comentarios" placeholder="Comentarios..."><?= $comentarios ?></textarea>
              <input class="presupuesto_enviar" id="presupuesto_enviar" name="presupuesto_enviar" type="submit" value="Enviar" />
              <span class="both">&nbsp;</span>
              <br><p>&nbsp;</p>
            </form>
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
