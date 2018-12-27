<?php

$dsn = 'mysql:host=localhost;dbname=ingirigo_consultas;charset=utf8mb4;port:3306';
$db_user = 'ingirigo_plires';
$db_pass = 'perezzs7478';

$db = new PDO($dsn, $db_user, $db_pass);

$sql = "INSERT INTO consultas values(default, :nombre, :mail, :telefono, :consulta, :rubro, :suscribe, :fecha, :origen)";
$stmt = $db->prepare($sql);

$stmt->bindValue(":nombre", $Nombre, PDO::PARAM_STR);
$stmt->bindValue(":mail", $Email, PDO::PARAM_STR);
$stmt->bindValue(":telefono", $Telefono, PDO::PARAM_STR);
$stmt->bindValue(":consulta", $Consulta, PDO::PARAM_STR);
$stmt->bindValue(":rubro", $Rubro, PDO::PARAM_STR);
$stmt->bindValue(":suscribe", $Newsletter, PDO::PARAM_STR);
$stmt->bindValue(":fecha", $fecha, PDO::PARAM_STR);
$stmt->bindValue(":origen", $Origen, PDO::PARAM_STR);

$stmt->execute();

$db = null;

?>