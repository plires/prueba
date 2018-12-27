<!doctype html>
<html class="no-js" lang="es-AR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linea Portones automaticos pivotantes.</title>
    <link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/pivotantes/app.css">
  </head>
  <body>
    <?php 
      if (isset($_POST["enviar"])){
        include ("validaciones/funciones_validar.php");
        if(campoVacio($_POST['nombre'])){
          $error['nombre']='Completa tu nombre';
        }
        if(campoVacio($_POST['comentario'])){
          $error['comentario']='Comentanos que necesitas...';
        }
        if (!comprobar_email($_POST['email'])){
          $error['email']='Completa tu email';
        }
        if(campoVacio($_POST['telefono'])){
          $error['telefono']='Completa tu telefono';
        }
        if (!$error){
          include ("envios/envio-pivotantes.php");
        }   
      }
      include_once("../includes/analyticstracking.php"); /*Google Analitycs*/
    ?>

    <header class="row">
      <div class="large-3 small-12 columns">
        <img src="img/logo-irigoyen.gif" alt="logo irigoyen">
      </div>
      <div class="large-5 small-12 columns invisible">
        &nbsp;
      </div>
      <div class="large-4 small-12 columns invisible_mobile">
        <a href="mailto:info@ingirigoyen.com.ar">info@ingirigoyen.com.ar</a>
        <p>t.  (0221) 471 1280</p>
      </div>
    </header>
    
    <div class="row foto_mobile">
      <div class="small-12 columns centrar">
        <img src="img/pivotantes-2.jpg" alt="pivotantes">
        <div id="ahora_12">
            <img src="img/ahora-12.png" alt="ahora 12 cuotas">
        </div>
        <h1>AUTOMATIZAMOS TU <span class="bold">PORTON PIVOTANTE</span> NUEVO O EXISTENTE</h1>
        <h2>¿NECESITAS UN PRESUPUESTO?</h2>
        <h3>Comentanos que necesitas y te contestaremos a la berevedad.</h3>
          <div class="contenedor_form">
            <form method="post" action="">
              <input name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?php echo $_POST['nombre']; ?>">
              <p class="error"><?php echo ' ' . $error['nombre']; ?></p>
              <input name="email" id="email" type="email" placeholder="Email" value="<?php echo $_POST['email']; ?>">
              <p class="error"><?php echo ' ' . $error['email']; ?></p>
              <input name="telefono" id="telefono" type="tel" placeholder="Telefono" value="<?php echo $_POST['telefono']; ?>">
              <p class="error"><?php echo ' ' . $error['telefono']; ?></p>
              <select id="tipo" name="tipo">
                <option value="automatizar_pivotante_una_hoja">Automatizar Porton Pivotante de una hoja</option>
                <option value="automatizar_pivotante_dos_hojas">Automatizar Porton Pivotante de dos hoja</option>
                <option value="porton_corredizo_chapa">Confeccion de Porton Pivotante en Chapa</option>
                <option value="porton_corredizo_hierro">Confeccion de Porton Pivotante en Hierro</option>
                <option value="otro">Otro</option>
              </select>
              <textarea name="comentario" id="comentario" rows="4" placeholder="Comentario"><?php echo $_POST['comentario']; ?></textarea>
              <p class="error"><?php echo ' ' . $error['comentario']; ?></p>
              <input name="enviar" id="enviar" type="submit" value="QUIERO MI PRESUPUESTO">
              <div class="checkbox"><input type="checkbox" name="newsletter" id="newsletter" value="Si" checked> Inscribir al newsletter</div><br>
            </form>
          </div>
      </div>
    </div>

    <div class="foto_fondo">
      <div class="row">

        <div class="large-7 faja small-12 columns datos centrar">
        
        <div id="ahora_12">
          <h4 class="texto_azul display_inline">Abonalo en <span class="bold">12</span> cuotas</h4>
            <img src="img/ahora-12.png" alt="ahora 12 cuotas">
        </div>

          <h1>AUTOMATIZAMOS TU <br><span class="bold">PORTON PIVOTANTE</span> <br>NUEVO O EXISTENTE</h1>
        </div>

        <div class="large-5 small-12 columns contenedor_form centrar">
          <h2>¿NECESITAS UN PRESUPUESTO?</h2>
        <h3>Comentanos que necesitas y te contestaremos a la berevedad.</h3>
          <form method="post" action="">
            <input name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?php echo $_POST['nombre']; ?>">
            <p class="error"><?php echo ' ' . $error['nombre']; ?></p>
            <input name="email" id="email" type="email" placeholder="Email" value="<?php echo $_POST['email']; ?>">
            <p class="error"><?php echo ' ' . $error['email']; ?></p>
            <input name="telefono" id="telefono" type="tel" placeholder="Telefono" value="<?php echo $_POST['telefono']; ?>">
            <p class="error"><?php echo ' ' . $error['telefono']; ?></p>
            <select id="tipo" name="tipo">
                <option value="automatizar_pivotante_una_hoja">Automatizar Porton Pivotante de una hoja</option>
                <option value="automatizar_pivotante_dos_hojas">Automatizar Porton Pivotante de dos hoja</option>
                <option value="porton_corredizo_chapa">Confeccion de Porton Pivotante en Chapa</option>
                <option value="porton_corredizo_hierro">Confeccion de Porton Pivotante en Hierro</option>
                <option value="otro">Otro</option>
              </select>
            <textarea name="comentario" id="comentario" rows="4" placeholder="Comentario"><?php echo $_POST['comentario']; ?></textarea><p class="error"><?php echo ' ' . $error['comentario']; ?></p>
            <input name="enviar" id="enviar" type="submit" value="QUIERO MI PRESUPUESTO">
            <div class="checkbox"><input type="checkbox" name="newsletter" id="newsletter" value="Si" checked> Inscribir al Newsletter</div><br>
          </form>
        </div>

      </div>

      <div class="both">&nbsp;</div>
    </div>

    <div class="row">
      <div class="small-12 large-12 large-centered columns centrar gris">
        <h4>Durante más de 15 años brindando un servicio personalizado en la zona de La Plata y alrededores.</h4>
        <h4 class="texto_azul">
          <strong>NO PAGUES DE MAS</strong> Tenemos el motor para <strong>TU PORTON</strong>.
        </h4>
        <h3>
          Velocidad de apertura, peso de la hoja/s y flujo de apertura.
        </h3>
        <br>
        <h4 class="texto_azul">Contamos con un modelo para cada necesidad</h4>
        <p>
          Nuestra diversidad de modelos de motores eléctricos para <strong>portones pivotantes</strong> es muy amplia.<br>
          Automatizamos portones de una y dos hojas<br>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="small-12 large-4 columns centrar">
        <img class="circular" src="img/distancia.gif" alt="distancia">
        <p class="gris">Gran distancia<br> de alcance.</p>
      </div>
      <div class="small-12 large-4 columns centrar">
        <img class="circular" src="img/velocidad.gif" alt="velocidad">
        <p class="gris">Velocidad <br>en apertura y cierre.</p>
      </div>
      <div class="small-12 large-4 columns centrar">
        <img class="circular" src="img/comodidad.gif" alt="comodidad">
        <p class="gris">Comodidad<br>en un toque.</p>
      </div>
    </div>
    <div class="both">&nbsp;</div><br>

    <div class="fondo_azul">
      <footer class="row">
        <div class="small-12 large-6 large-centered">
          <div class="izq">
            <a href="mailto:info@ingirigoyen.com.ar"><img src="img/mail.png" alt="mail irigoyen"></a>
            <a href="mailto:info@ingirigoyen.com.ar">info@ingirigoyen.com.ar</a>
          </div>
          <div class="der">
            <img src="img/telefono.png" alt="telefono irigoyen">
            <span>t. (0221) 471 1280</span>
        </div>
        </div>
        <hr>
        <p class="centrar">Calle 28 Nº 4848 - City Bell - La Plata - Buenos Aires</p>
        <p class="centrar">Copyright &copy; 2001 Ingeniero Irigoyen. Todos los derechos reservados.</p>
      </footer>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
