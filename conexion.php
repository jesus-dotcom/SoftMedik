<?php 
include("configuracion.php");
$conexion = new mysqli($server,$user,$pass,$bd);
if(mysqli_connect_errno()){
	echo "No se hizo la conexion a la base de datos",mysql_connect_errno();
	exit();
}