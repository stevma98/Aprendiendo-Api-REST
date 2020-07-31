<?php
	include "conexion.php";

	if(isset($_POST['id'])){
		$id=$_POST['id'];
	$query="SELECT * FROM tarea WHERE id = '$id'";
	$result=mysqli_query($conexion,$query);
	
	if(!$result){
		die('Query Failed'. mysqli_error($conexion));
	}
	$json = array();
	while($row=mysqli_fetch_array($result)){
		$json[]= array(
			'name' => $row['name'],
			'description' => $row['description'],
			'id' => $row['id']
		);
	}

	
	$jsonstring= json_encode($json);
	echo $jsonstring;
}
?>