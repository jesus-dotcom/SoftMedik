<?php 
$Nickname_Usuario = $_POST['usa'];
$Clave_Usuario = $_POST['clave'];
session_start();
$_SESSION['Nickname_Usuario'] = $Nickname_Usuario;

 include("conexion.php");

$consulta = "SELECT * FROM usuario WHERE Nickname_Usuario = '$Nickname_Usuario' AND Clave_Usuario ='$Clave_Usuario'";
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_fetch_array($resultado);
if ($filas['PerfilesUsuario_idPerfilesUsuario']==1) {
	header('location: admin/inicioa.php');
}else
if($filas['PerfilesUsuario_idPerfilesUsuario']==2){
	header('location: inicio.php');
}else
if($filas['PerfilesUsuario_idPerfilesUsuario']==3){
	header('location: recepcion/inicior.php');
}else
if($filas['PerfilesUsuario_idPerfilesUsuario']==4){
	header('location: historial/inicioh.php');
}else{
	echo "<script>
           alert('el usuario o la clave es incorrecta');
           window.location = 'index.php';
    </script>";
	?>
	<?php 
	include('index.php');
	?>
	  
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);


 