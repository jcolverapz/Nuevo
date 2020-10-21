<?php

//$conex = mysqli_connect("localhost","root","","test"); 
$servidor="b8e4mlr9bqsybaethi8m-mysql.services.clever-cloud.com";
	$usuario="uyowtqqpcjuwppgu";
	$clave="8nwv725oEoIJ1dCzwTz0";
	$baseDeDatos="b8e4mlr9bqsybaethi8m";

	$conex = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$conex){
		echo"Error en la conexion con el servidor";
	}else{
		echo "Correcto";
	}
?>