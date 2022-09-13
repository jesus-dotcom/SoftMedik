<?php include 'conexion.php'; 
  include 'seguridad.php';
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
                Lista De Citas
                <a href="inicio.php" class="btn btn-danger">Volver</a>
              </div>
              
            
               
                <center><table class="table table-bordered" id="dataGastro">
                  <thead>
                    <tr>
                      <th style="visibility:hidden;"></th>
                      <th>N° de Historia</th>
                      <th>Fecha de Registro</th>
                      <th>Cedula</th>
                      <th>Paciente</th>
                      <th><center>Opciones</center></th>
                    </tr>
                  </thead>
<?php  
  $consultas = "SELECT * FROM paciente ORDER BY idPaciente,FechaReg_Paciente DESC";
  $query = mysqli_query($conexion,$consultas);
  $i= 0;

    while ($fila=mysqli_fetch_array($query)) {
      $idcon = $fila["idPaciente"];
      $historia = $fila["HistoraPaciente_idHistoraPaciente"];
      $fecha = $fila["FechaReg_Paciente"];
      $cedula = $fila["Cedula_Paciente"];
      $nombre = $fila["Nombre_Paciente"];
      $apellido = $fila["Apellidos_Paciente"];
      $objetoFecha = date_create_from_format('Y-m-d', $fecha);
      $newFechaPac = date_format($objetoFecha, "d/m/Y");

      $i++;
?>
          
            <tr>
                <td style="visibility:hidden;"><?php echo $idcon; ?></td>
                <td><?php echo $historia; ?></td>
                <td><?php echo $newFechaPac; ?></td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo "$nombre $apellido"; ?></td>
                <td>
                  <a href="mostrar.php?mostrar=<?php echo $idcon; ?>"  class="btn btn-info">Ver más</a>
                  <a href="consAsigCitas.php?idPaciente=<?php echo $idcon; ?>" class="btn btn-success">Asignar Cita</a>
<!-- Trigger the modal with a button -->

                  <a href="consCitas.php?borrarcon=<?php echo $idcon; ?>" onclick="return confirm('ADVERTENCIA:¿Desea eliminar la consulta del paciente?')" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>                  
               
        <?php } ?>
        </tbody>
        <?php  
          if (isset($_GET["borrarcon"])) {
            $borrar_con = $_GET["borrarcon"];
            $condelete = "DELETE FROM paciente WHERE idPaciente= $borrar_con";
            $conquery = mysqli_query($conexion,$condelete);
            if ($conquery) {
              echo "<script>
           alert('Se han borrado los datos del paciente');
           window.location = 'consCitas.php';
            </script>";
              
            }
          }
        ?>
        
        <tfoot>
            <tr>
              
              <th style="visibility:hidden;"></th>
              <th>N° de Historia</th>
              <th>Fecha de Registro</th>
              <th>Cedula</th>
              <th>Paciente</th>
              <th><center>Opciones</center></th>    
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