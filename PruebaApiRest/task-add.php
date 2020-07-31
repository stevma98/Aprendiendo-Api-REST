<?php
	include "conexion.php";

	if(isset($_POST['name'])){
	$name=$_POST['name'];
	$description=$_POST['description'];
	$query="INSERT into tarea(name,description) VALUES ('$name','$description')";
	$result=mysqli_query($conexion,$query);
	if(!$result){
		die('Query Failed.');
	}
		echo "Added Successfully";
	}

	
	

?>