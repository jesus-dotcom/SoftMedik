<?php include 'conexion.php'; 
  include 'seguridad.php';
  if (isset($_REQUEST["idPaciente"])) {
    $idPaciente = $_REQUEST["idPaciente"];
    $selectPac = "SELECT * FROM paciente WHERE idPaciente=$idPaciente";
    $queryPac = $conexion->query($selectPac);
    $filaPac = mysqli_fetch_array($queryPac);
    $cedulaPac = $filaPac["Cedula_Paciente"];
    $idPac = $filaPac["idPaciente"];
    $nombrePac = $filaPac["Nombre_Paciente"];
    $apellidoPac = $filaPac["Apellidos_Paciente"];
    $nhistoriaPac = $filaPac["HistoraPaciente_idHistoraPaciente"];
    
  }
 ?>

<!DOCTYPE html>
<html lang="es">
<?php  
  include 'php/includes/head.php';
?>
<link href="css/css/sb-admin-2.css" rel="stylesheet">

<body>

  <!-- navLateral -->
<?php 
  include 'php/includes/navLateral.php';
?>

  <!-- pageContent -->
  <section class="full-width pageContent">
<!-- navBar -->
     <?php 
          include 'php/includes/navBar.php';
        ?>

    <section class="full-width header-well">
      <div class="full-width header-well-icon">
        <i class="zmdi zmdi-balance"></i>
      </div>
      <div class="full-width header-well-text">
        <p class="text-condensedLight">
          Se Visualizaran todos los Pacientes ya Registrados.
        </p>
      </div>
    </section>
      
      <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                <?php echo "  Asignar cita para el paciente: $nombrePac $apellidoPac | N°Historia: $nhistoriaPac | Cedula: $cedulaPac"; ?>
                <a href="consCitas.php" class="btn btn-danger">Volver</a>
              </div>
              
        <div class="container-fluid">
          <div>
            <center><table class="table table-bordered" id="dataCitas">          
                  <thead>
                    <tr>
                      <th></th>
                      <th>Fecha</th>
                      <th>Citas disponibles</th>
                      <th>Servicio</th>
                      <th>Tipo de Servicio</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
<?php  
  $consCitas = "SELECT * FROM plan_agenda,servicio WHERE servicio.idServicio=plan_agenda.Servicio_idServicio AND plan_agenda.Cantidad_Agenda>=1 ORDER BY plan_agenda.Fecha_Agenda desc";
  $queryCitas = $conexion->query($consCitas);
  $ii= 0;
  while ($filaCitas=mysqli_fetch_array($queryCitas)){
    $idCitas = $filaCitas['idPlan_Agenda'];
    $idServicioCita = $filaCitas["Servicio_idServicio"];
    $servicioCitas = $filaCitas['Descrip_Servicio'];
    $tServicioCitas = $filaCitas['tiposervicio_idtiposervicio'];
    $fechaCitas = $filaCitas['Fecha_Agenda'];
    $cantCitas = $filaCitas['Cantidad_Agenda'];
    $objetoFechaCitas = date_create_from_format('Y-m-d', $fechaCitas);
    $newFecha = date_format($objetoFechaCitas, "d/m/Y");
    $ii++;
?>                  
                  <tr>
                    <td style="visibility:hidden;"><?php echo $idCitas; ?></td>
                    <td><?php echo $newFecha; ?></td>
                    <td><?php echo $cantCitas; ?></td>
                    <td><?php echo $servicioCitas; ?></td>
                    <td><?php echo $tServicioCitas; ?></td>
                    <td>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalForm<?php echo $ii;?>">Asignar Cita</button></td>

<!-- Modal -->
<div id="modalForm<?php echo $ii; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="container">
          <form method="post" action="controllerCita.php">
            <div class="row">
            <div class="col-3">
              <label>Ayuna:</label>
              <input type="radio" name="ayuna" value="Si" id="ayuna">
              <label for="ayuna">Si</label>
              <input type="radio" name="ayuna" value="No" id="ayuna">
              <label for="ayuna">No</label>
            </div>
            <div class="col-3">
              <input class="form-control" type="time" name="horaCita">
            </div>
            <div class="col-3">
              <select class="form-control" name="precio">
                <option >Costo consulta</option>
                <option value="1">0 bs</option>
                <option value="2">0 bs</option>
              </select>
            </div>
                <input type="hidden" name="cantCitas" value="<?php echo $cantCitas; ?>">
                <input type="hidden" name="fechaCita" value="<?php echo $fechaCitas; ?>">
                <input type="hidden" name="servicioCitas" value="<?php echo $idServicioCita; ?>">
                <input type="hidden" name="tServicioCitas" value="<?php echo $tServicioCitas; ?>">
                <input type="hidden" name="idPaciente" value="<?php echo $idPac; ?>">
                <input type="hidden" name="idAgenda" value="<?php echo $idCitas; ?>">
            <div class="col-3">
              <input type="submit" name="registroCita" class="btn btn-success" value="Registrar cita">
            </div>
          </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default bg-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
                  </tr>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
                </td>
            </tr>                  
               
        <?php } ?>
        </tbody>      
        <tfoot>
          <tr>
            <th></th>
            <th>Fecha</th>
            <th>Citas disponibles</th>
            <th>Servicio</th>
            <th>Tipo de Servicio</th>
            <th>Opciones</th>
         </tr>  
    </table>
  </center>
        <br>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Menu Toggle Script -->
  

                 
       
<?php 
      include 'php/includes/footer.php';
      ?>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>