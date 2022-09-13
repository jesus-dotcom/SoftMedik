<?php 
  include 'conexion.php';

    $HistoraPaciente_idHistoraPaciente = $_POST['nhis'];
    $Cedula_Paciente = $_POST['ced'];
    $Nombre_Paciente = $_POST['nom'];
    $Apellidos_Paciente  = $_POST['ape'];
    $Sexo_Paciente = $_POST['sexo'];
    $FecNac_Paciente = $_POST['fecha'];
    $correo_paciente = $_POST['direccionemail'];
    $Telefonos_Paciente= $_POST['tel'];
    $FechaReg_Paciente = $_POST['fregis'];
    $sqlpaciente = "SELECT idPaciente FROM paciente WHERE Cedula_Paciente = '$Cedula_Paciente'";
    $resultadopaciente  = $conexion->query($sqlpaciente );
    $filas= $resultadopaciente->num_rows;
  if($filas >0){
    echo "<script>
           alert('el paciente ya existe');
           window.location = 'formDatosBasicos.php';
    </script>";
  }else{
    //insertar la informacion
    $sqlpaciente2 = "INSERT INTO paciente (HistoraPaciente_idHistoraPaciente, NivelIsntruccion_idNivelIsntruccion, Cedula_Paciente, Nac_Paciente, Nombre_Paciente, Apellidos_Paciente, Sexo_Paciente, FecNac_Paciente, correo_paciente, Estado_res, Municipio_res, Parroquia_res, DirecRes_Paciente, TipoLocal_Paciente, TiempoRes_Paciente, Telefonos_Paciente, FechaReg_Paciente, Ocupacion_Paciente, status) VALUES('$HistoraPaciente_idHistoraPaciente',NULL,'$Cedula_Paciente',NULL,'$Nombre_Paciente','$Apellidos_Paciente','$Sexo_Paciente','$FecNac_Paciente','$correo_paciente',NULL,NULL,NULL,NULL,NULL,NULL,'$Telefonos_Paciente','$FechaReg_Paciente',NULL,'1')";
    $queryPaciente = $conexion->query($sqlpaciente2);
    if ($queryPaciente) {
      $selectPacienteUlt = "SELECT idPaciente FROM paciente WHERE Cedula_Paciente='$Cedula_Paciente'";
      $querySelect = $conexion->query($selectPacienteUlt);
      $fecthPac = mysqli_fetch_array($querySelect);
      $idPacienteNue = $fecthPac["idPaciente"];
      echo "<script>window.location='consAsigCitas.php?idPaciente=$idPacienteNue','_self'</script>";
    }
  }