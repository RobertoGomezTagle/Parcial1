<?php

$servidor = "localhost";
$basedatos = "alumnos";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor, $usuario, $password, $basedatos) or die("No se pudo conectar a localhost");
$consulta = "select * from alumnos.datos";
$registros = mysqli_connect($con, $consulta) or die ("Problemas en el select");

$result = mysqli_fetch_all($registros,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);

?>