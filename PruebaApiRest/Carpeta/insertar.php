<?php
	require "conexion.php";

	if(isset($_POST['nombre'])){
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$cedula=$_POST['cedula'];

	$query="INSERT INTO envio (nombre,apellido,cedula,recibido) VALUES ('$nombre','$apellido','$cedula',true)";
	$result=mysqli_query($conexion,$query);

if(!$result){
		die('Query Failed.');
	}
		echo "Added Successfully";
	}

?>