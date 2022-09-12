<?php  
include 'conexion.php';

$idPaciente = $_POST["idPaciente"];
$idCita = $_POST["idAgenda"];
$medico = 1;
$ayuna = $_POST["ayuna"];
$precio = $_POST["precio"];
$horaCita = $_POST["horaCita"];
$fechaCita = $_POST["fechaCita"];
$servicioCitas = $_POST["servicioCitas"];
$tServicioCitas = $_POST["tServicioCitas"];
$cantCitas = $_POST["cantCitas"];
$newCantCitas = $cantCitas-1;

//echo "Id paciente: $idPaciente <br>| Id fecha: $idCita <br>| Medico Autorizado: $medico <br>| Ayuna: $ayuna <br>| Precio: $precio <br>|Fecha de la Cita: $fechaCita <br>|Servicio Cita: $servicioCitas <br>| Tipo de Servicio: $tServicioCitas <br>| Hora de la Cita: $horaCita <br>| Cantidad de Citas: $cantCitas <br>| Nueva Cantidad de Citas: $newCantCitas";

$insertCita = "INSERT INTO citaservicios(Profesional_idProfesional,Paciente_idPaciente,Servicio_idServicio,tiposervicio_idtiposervicio,Fecha_Cita,Hora_Cita,Ayuna_Cita,pago,status) VALUES ('$medico','$idPaciente','$servicioCitas','$tServicioCitas','$fechaCita','$horaCita','$ayuna','$precio','0')";
$queryCitas = $conexion->query($insertCita);
if ($queryCitas) {
	$updateAgenda = "UPDATE plan_agenda SET Cantidad_Agenda=$newCantCitas WHERE idPlan_Agenda=$idCita";
	$queryUpdate = $conexion->query($updateAgenda);
	if ($queryUpdate){
		echo "<script>alert('Registro completado')</script>";
		echo "<script>window.open('citaDescarga.php?id=$idPaciente')</script>";
      	//echo "<script>window.open='citaDescarga.php?id=$idPaciente','_self'</script>";



	}
}
?>

<a href="consCitas.php">Volver</a>