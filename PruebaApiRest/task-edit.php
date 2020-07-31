<?php
	include "conexion.php";

	$name= $_POST['name'];
	$description=$_POST['description'];
	$id=$_POST['id'];	

	$query= "UPDATE tarea SET name = '$name' , description = '$description' WHERE id = '$id'";
	$result=mysqli_query($conexion,$query);

	if(!$result){
		die("Query Failed");
	}

	echo "Update Task Successfully";
?>