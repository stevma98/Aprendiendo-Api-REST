<?php
	include "conexion.php";

	$query="SELECT * FROM tarea";
	$result=mysqli_query($conexion,$query);

	if(!$result){
		die('Query Failed'.mysqli_error($conexion));
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
?>
