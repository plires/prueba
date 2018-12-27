<?php

{
$boundary = md5(time().rand(1,100));
//Generamos un numero de control usando un aleatorio sobre la hora
$fecha = date("d-M-y H:i");
//Creamos una funcion date para fechar los envios
//Creamos el contenido en html para enviarlo en forma de tabla para control
//de los envios a nuestro servidor


$Nombre = $_POST["nombre"];
$Email = $_POST["email"];
$Telefono = $_POST["telefono"];
$Consulta = $_POST["comentario"];
$Rubro = ' ';
$Rubro = 'Levadizos';
$Origen = ' ';
$Origen = 'Landing - Levadizos';
$Newsletter = $_POST["newsletter"];
$Tipo = $_POST["tipo"];

if (!$_POST['newsletter'] == 'Si') {
    $Newsletter ="No";
}




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
    <img src="http://ingirigoyen.com.ar/landing/img/logo-irigoyen.gif" alt="logo irigoyen">
</td>
                                        </tr>
                                        <tr>
<td align="center" style="font-size: 25px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">Contacto desde Landing Page - Linea Levadizos</td>
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
<td><br><hr><br></td>


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
<td><br><hr><br></td>

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
<td><br><hr><br></td>


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
<td><br><hr><br></td>
<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Tipo de Trabajo:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$Tipo.'
    </td>
</tr>
<td><br><hr><br></td>

<tr>
    <td align="left" style="font-size: 18px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #005085; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        Suscribe al Newsletter:
    </td>
</tr>
<tr>
    <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 10px 0 0;" class="padding-copy">
        '.$Newsletter.'
    </td>
</tr>
<td><br><hr><br></td>

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
<td><br><hr><br></td>

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
<td><br><hr><br></td>

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
<td><br><hr><br></td>

<tr>
<td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
    Ingeniero Irigoyen - Calle 28 Nº 2848 Citi Bell - La Plata - Buenos Aires
    <br>
    TEL/FAX (0221) 471 1280
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
//Y usamos la funci&oacute;n mail indicando que envie el correo a nuestro servidor para control
//con el t&iacute;tulo Formulario de contacto el contenido html y tipo de texto UTF-8
mail('info@ingirigoyen.com.ar', 'Contacto Landing Linea Levadizo',$content,"MIME-Version: 1.0\nContent-type: text/html; charset=UTF-8\nFrom: $Nombre < $Email >");

// Registro la consulta en la bdd
include("conexion.php");


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
    <img src="http://ingirigoyen.com.ar/landing/img/logo-irigoyen.gif" alt="logo irigoyen">
</td>
                                        </tr>
                                        <tr>
<td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt; padding: 20px 0 0;" class="padding-copy">Gracias por tu contacto...,</td>
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
    Ingeniero Irigoyen - Calle 28 Nº 4878 City Bell - La Plata - Buenos Aires.
    <br>
    TEL/FAX (0221) 471 1280
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

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$cabeceras .= 'From: Ingeniero Irigoyen < info@ingirigoyen.com.ar >' . "\r\n";
mail ("$Nombre < $Email >", "Su correo ha sido recibido",$mensaje,$cabeceras);
}

?>
<meta http-equiv="Refresh" content="0;URL=gracias-levadizos.php" />