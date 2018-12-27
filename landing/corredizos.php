<!doctype html>
<html class="no-js" lang="es-AR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linea Portones automaticos corredizos.</title>
    <link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/corredizos/app.css">
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
          include ("envios/envio-corredizos.php");
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
        <img src="img/corredizos-2.jpg" alt="corredizos">
        <h1>AUTOMATIZAMOS TU <span class="bold">PORTON CORREDIZO</span> NUEVO O EXISTENTE</h1>
        <div id="ahora_12">
            <img src="img/ahora-12.png" alt="ahora 12 cuotas">
        </div>
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
                <option value="automatizar_corredizo_existente">Automatizar Porton Corredizo Existente</option>
                <option value="automatizar_corredizo_nuevo">Automatizar Porton Corredizo Nuevo</option>
                <option value="porton_corredizo_chapa">Confeccion de Porton en Chapa</option>
                <option value="porton_corredizo_hierro">Confeccion de Porton en Hierro</option>
                <option value="otro">Otro</option>
              </select>
              <textarea name="comentario" id="comentario" rows="4" placeholder="Comentario"><?php echo $_POST['comentario']; ?></textarea><p class="error"><?php echo ' ' . $error['comentario']; ?></p>
              <input name="enviar" id="enviar" type="submit" value="QUIERO MI PRESUPUESTO">
              <div class="checkbox"><input type="checkbox" name="newsletter" id="newsletter" value="Si" checked> Inscribir al newsletter</div><br>
            </form>
          </div>
      </div>
    </div>

    <div class="foto_fondo">
      <div class="row">

        <div class="large-7 faja centrar small-12 columns datos">

        <div id="ahora_12">
          <h4 class="texto_azul display_inline">Abonalo en <span class="bold">12</span> cuotas</h4>
            <img src="img/ahora-12.png" alt="ahora 12 cuotas">
        </div>
        
          <h1>AUTOMATIZAMOS TU <br><span class="bold">PORTON CORREDIZO</span> <br>NUEVO O EXISTENTE</h1>
        </div>

        <div class="large-5 small-12 columns contenedor_form centrar">
          <h2>¿NECESITAS UN PRESUPUESTO?</h2>
          <h3>Comentanos que necesitas y te contestaremos a la berevedad.</h3>
          <form method="post" action="">
            <input name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?php echo $_POST['nombre']; ?>">
            <p class="error"><?php echo ' ' . $error['nombre']; ?></p>
            <input name="email" id="email" type="email" placeholder="Email" value="<?php echo $_POST['email']; ?>">
            <p class="error"><?php echo ' ' . $error['email']; ?></p>
            <input name="telefono" id="telefono" type="tel" placeholder="Telefono" value="<?php echo $_POST['telefono']; ?>"><p class="error"><?php echo ' ' . $error['telefono']; ?></p>
            <select id="tipo" name="tipo">
                <option value="automatizar_corredizo_existente">Automatizar Porton Corredizo Existente</option>
                <option value="automatizar_corredizo_nuevo">Automatizar Porton Corredizo Nuevo</option>
                <option value="porton_corredizo_chapa">Confeccion de Porton en Chapa</option>
                <option value="porton_corredizo_hierro">Confeccion de Porton en Hierro</option>
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
          Velocidad de apertura, peso de la hoja y flujo de apertura.
        </h3>
        <br>
        <h4 class="texto_azul">Contamos con un modelo para cada necesidad</h4>
        <p>
          Nuestra diversidad de modelos de motores eléctricos para <strong>portones corredizos</strong> es muy amplia. Contamos con modelos para portones domiciliarios, semi industriales e industriales. <br>
          Motores especialmente diseñados para movilizar desde las hojas mas livianas hasta las de gran embergadura. <br>
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
