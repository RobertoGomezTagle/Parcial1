<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$creditos = $_POST['creditos'];
$especialidad = $_POST['especialidad'];

echo "<h2>Informacion de PHP</h2>";
echo "El nombre es: " . $nombre . "<br/>";
echo "El apellido es: " . $apellido . "<br/>";
echo "La carrera es: " . $carrera . "<br/>";
echo "Esta en el semestre: " . $semestre . "<br/>";
echo "Este es el numero de creditos: " . $creditos . "<br/>";
echo "Su especialidad es: " . $especialidad . "<br/>"; 
?>
