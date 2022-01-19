<?php

	$conexion = mysqli_connect("localhost","id15256677_haide","B&H?8SU6oVC[OcR!","id15256677_apimovilesbd"); 

	$id = $_POST["id"];
	$nombre=$_POST["nombre"];
	$usuario=$_POST["usuario"];
	$clave = $_POST["clave"];

	$sql= "UPDATE empleado SET nombre='$nombre', usuario='$usuario', clave='$clave' where id='$id' ";
	$result = mysqli_query($conexion,$sql);

	if($result){
		echo "Datos Actualizados";
	}
	else{
		echo "No pudo actualizarse";
	}



?>