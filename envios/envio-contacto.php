<?php

{
$boundary = md5(time().rand(1,100));
//Generamos un numero de control usando un aleatorio sobre la hora
$fecha = date("d-M-y H:i");
//Creamos una funcion date para fechar los envios
//Creamos el contenido en html para enviarlo en forma de tabla para control
//de los envios a nuestro servidor

$Nombre = $_POST["nombre"];
$Telefono = $_POST["telefono"];
$Email = $_POST["mail"];
$Consulta = $_POST["comentario"];
$Rubro = ' ';
$Origen = ' ';
$Origen = 'Formulario web de contactos';


$content='
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contacto de Landing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; height: 100% !important; width: 100% !important; margin: 0; padding: 0;">


<!-- ONE COLUMN SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
<tr>
<td bgcolor="#ffffff" align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px;" class="section-padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="800">
            <tr>
            <td align="center" valign="top" width="800">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 800px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;" class="responsive-table"><tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;"><tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
<tr>
<td align="center" style="line-height: 25px;-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;">
    <img src="http://ingirigoyen.com.ar/img/envios/logo-irigoyen-envio.png" alt="logo irigoyen">
</td>
                                        </tr>
                                        <tr>
<td align="center" style="font-size: 25px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">Contacto desde formulario web</td>
                                        </tr>
                                        <tr>
<td><br><hr><br></td>
                                        </tr>
<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Nombre:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$Nombre.'
    </td>
</tr>

<tr>
<td><br><hr><br></td>
</tr>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Email:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$Email.'
    </td>
</tr>

<tr>
<td><br><hr><br></td>
</tr>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Telefono:
    </td>
</tr>

<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$Telefono.'
    </td>
</tr>

<tr>
<td><br><hr><br></td>
</tr>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Consulta:
    </td>
</tr>

<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$Consulta.'
    </td>
</tr>

<tr>
<td><br><hr><br></td>
</tr>
<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Fecha:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$fecha.'
    </td>
</tr>

<tr>
<td><br><hr><br></td>
</tr>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        IP:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$REMOTE_ADDR.'
    </td>
</tr>

<tr>
<td><br><hr><br></td>
</tr>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Numero de Serie:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$boundary.'
    </td>
</tr>

<tr>
<td><br><hr><br></td>
</tr>


<tr>
<td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
    Ingeniero Irigoyen - Calle 28 4848 . City Bell . Argentina
    <br>
    TEL/FAX (+54) 0221 471 1280
    <span style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
    <a href="mailto:info@ingirigoyen.com.ar" style="color: #666666; text-decoration: none;">info@ingirigoyen.com.ar</a>
</td>
</tr>
</table>
</td>
                            </tr></table>
</td>
                </tr></table>
<!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
</td>
    </tr>
</table>
</body>
</html>';
//Y usamos la funci&oacute;n mail indicando que envie el correo a nuestro servidor para control
//con el t&iacute;tulo Formulario de contacto el contenido html y tipo de texto UTF-8 para que
//los s&iacute;mbolos introducidos en los campos de flash sean legibles
//para terminar le damos el nombre del remitente puesto en el formulario y su direcci&oacute;n de correo.
//de aqui solo se tiene que cambiar buzon@tuservidor.tudomino y poner el correo donde se
//desean recibir los formularios, respetando los entrecomillados.
//es importante que pongas una direcci&oacute;n de correo valida en lugar de buzon@tuservidor.tudomino,
//si no el escript podria no enviar el correo
mail('info@ingirigoyen.com.ar', 'Contacto Web',$content,"MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: $Nombre < $Email >");

// Registro la consulta en la bdd
include("landing/conexion.php");


//preparamos el mensaje de confirmaci&oacute;n que le enviaremos al remitente.
$mensaje = '
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Gracias por su contacto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; height: 100% !important; width: 100% !important; margin: 0; padding: 0;">


<!-- ONE COLUMN SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
<tr>
<td bgcolor="#ffffff" align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 15px;" class="section-padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="800">
            <tr>
            <td align="center" valign="top" width="800">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 800px; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;" class="responsive-table"><tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;"><tr>
<td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-collapse: collapse !important;">
<tr>
<td align="center" style="line-height: 25px;-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;">
    <img src="http://ingirigoyen.com.ar/img/envios/logo-irigoyen-envio.png" alt="logo irigoyen">
</td>
                                        </tr>
                                        <tr>
<td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;" class="padding-copy">Gracias por tu contacto...</td>
                                        </tr>
<tr>
<td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;" class="padding-copy">Tu correo ha sido recibido y ser&aacute; respondido con la mayor brevedad </td>
                                        </tr>
<tr>
<td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;" class="padding-copy">Este correo confirma su env&iacute;o efectuado desde nuestro formulario de contacto.</td>
                                        </tr>
<tr>
<td align="left" style="font-size: 14px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #999999; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;" class="padding-copy">
    Formulario enviado el '.$fecha.'.<br>
    Desde la IP: '.$REMOTE_ADDR.'<br>
    Numero de serie: '.$boundary.'</td>
                                        </tr>
<tr>
<td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
    <br>
    <hr>
    <br>
</td>
</tr>
<tr>
<td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
    Ingeniero Irigoyen - Calle 28 4848 . City Bell . Argentina
    <br>
    TEL/FAX (+54) 0221 471 1280
    <span style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
    <a href="mailto:info@ingirigoyen.com.ar" style="color: #666666; text-decoration: none;">info@ingirigoyen.com.ar</a>
</td>
</tr>
</table>
</td>
                            </tr></table>
</td>
                </tr></table>
<!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
</td>
    </tr>
</table>
</body>
</html>
';
//de este html podemos hacernos uno a nuestro gusto y reemplazarlo
//desde la etiqueta de apertura html hasta la de cierre respetando la comilla
//simple de apertura y la comilla simple de cierre y el punto y coma.
//Podremos reutilizar '.$Nombre.', para personalizar el mail asi como
//la IP, la fecha y por supuesto el numero de serie.
//Para poder usar el nombre la ip la fecha o el n&uacute;mero de serie se tienen que
//poner '. .', o sea abrir con comilla simple y punto y cerrar con punto y comilla simple.
//asi en todos los casos '.$fecha.'
//De las lineas que estan debajo de esta tendremos que cambiar 
//tubuzon@tuservidor.tudominio por la direcci&oacute;n de correo de tu servidor.
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'From: Ingeniero Irigoyen < info@ingirigoyen.com.ar >' . "\r\n";
mail ("$Nombre < $Email >", "Su correo ha sido recibido",$mensaje,$cabeceras);
}
//es importante que pongas una direcci&oacute;n de correo valida en lugar de buzon@tuservidor.tudomino,
//si no el escript podria no enviar el correo.
//Y finalmente le enviamos a nuestro formulario flash la palabra que pondra en marcha
//la animacion que ira borrando los campos de texto y confirmar&aacute; nuestro envio
//dejandonos en el boton repetir por si deseamos mandar otro.
//De aqui solo tenemos que tener en cuenta en que nivel o dentro de que clip hemos
//puesto nuestro formulario y cambiar la ruta si fuera preciso.
//Si cambiamos la palabra Enviando por otra lo tendremos que indicar en el sensor
//de nuestro formulario flash
//Y por ultimo tendremos que tener en cuenta donde se carga nuestro formulario en
//nuestro servidor y donde ponemos este php para que lo encuentre al pasarle las
//variables desde flash.
?>
<meta http-equiv="Refresh" content="0;URL=gracias.php" />