<?php
	include "conexion.php";

	if(isset($_POST['id'])){
		
		$id=$_POST['id'];
		$query="DELETE FROM tarea WHERE id = '$id'";
		$result= mysqli_query($conexion,$query);

		if(!$result){
			die('Query Failed.');
		}
		echo "Task Deleted Successfully";
	}
?>