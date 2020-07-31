<?php
	$data = file_get_contents("json1.JSON");
	$datos = json_decode($data,true);
	

	echo $datos['registra']['solicitud'][0]['tipo']."<br>";
	echo $datos['registra']['conductor'][0]['fotoconductor'][0]['foto']."<br>";
	echo $datos['registra']['base'];

/*	foreach ($datos as $dato) {
		echo '<pre>';
		echo "Nombre: ".$dato['solicitud']['tipoTransaccion']."<br>";
		echo $dato['descripcion']."<br>";
		echo '</pre>';
	}
	*/
?>