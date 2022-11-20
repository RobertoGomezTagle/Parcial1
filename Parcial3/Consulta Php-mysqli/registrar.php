<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['carrera']) >= 1 && strlen($_POST['semestre']) >= 1 && strlen($_POST['creditos']) >= 1 && strlen($_POST['especialidad']) >= 1 &&) {
	    $name = trim($_POST['name']);
	    $apellido = trim($_POST['apellido']);
        $carrera = trim($_POST['carrera']);
        $semestre = trim($_POST['semestre']);
        $creditos = trim($_POST['creditos']);
        $especialidad = trim($_POST['especialidad']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(nombre, apellido, carrera, semestre, creditos, especialidad, fecha_reg) VALUES ('$name','$apellido','$carrera','$semestre','$creditos','$especialidad','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Has ingresado los datos correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡ERROR EN LOS DATOS!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>