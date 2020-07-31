<?php
	require "conexion.php";

	$query="SELECT * FROM cliente";
	$result=mysqli_query($conexion,$query);

	if(!$result){
		die("Fallido");
	}
	$json=array();
	while($row=mysqli_fetch_array($result)){
		$json= array(
			'nombre' => $row['nombre'],
			'apellido' => $row['apellido'],
			'cedula' => $row['cedula']
		);
	}

	$jsonstring= json_encode($json);
	echo $jsonstring;

?>