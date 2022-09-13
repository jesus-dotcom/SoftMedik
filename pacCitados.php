<?php 
  include 'seguridad.php';
include "conexion.php";
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
          Se Visualizaran Pacientes Citados por Día.
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
              
            
               
                <table class="table table-bordered" id="dataGastro" width="90%"  >
                  <thead>
                    <tr>
                      
                      <th>N° de Historia</th>
                      <th>Cedula</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Servicio</th>
                      <th>Tipo Servicio</th>
                      <th>Hora Cita</th>
                      <th>Fecha Cita</th>
                      <th><center>Opciones</center></th>
                      
                    </tr>
                  </thead>
                  <tbody>

<?php  
  $fecha1 = $_POST["fecha1"];
  $consultas = "SELECT * FROM paciente,citaservicios,servicio WHERE citaservicios.Paciente_idPaciente=paciente.idPaciente and citaservicios.Servicio_idServicio=servicio.idServicio and citaservicios.status=0 and  citaservicios.Fecha_Cita ='$fecha1'";
  $query = mysqli_query($conexion,$consultas);
  

    while ($fila=mysqli_fetch_array($query)) {
      $idCita= $fila["idCitaServicios"];
      $historia = $fila["HistoraPaciente_idHistoraPaciente"];
      $cedula = $fila["Cedula_Paciente"];
      $nombre = $fila["Nombre_Paciente"];
      $apellido = $fila["Apellidos_Paciente"];
      $servicio = $fila["Descrip_Servicio"];
      $tipo = $fila["tiposervicio_idtiposervicio"];
      $hora = $fila["Hora_Cita"];
      $fecha = $fila["Fecha_Cita"];
?>
          
            <tr>
                <td><?php echo $historia; ?></td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
                <td><?php echo $servicio; ?></td>
                <td><?php echo $tipo; ?></td>
                <td><?php echo $hora; ?></td>
                <td><?php echo $fecha; ?></td>               
              <td><a href="pacCitados.php?delete=<?php echo $idCita; ?>?" onclick="return confirm('ADVERTENCIA:¿Desea eliminar la consulta del paciente?')" class="btn btn-warning btn-sm" >Eliminar Cita</a> 
            </td>
            </tr>                  
        <?php } 
        if (isset($_GET["delete"])) {
          $idCitaPac = $_GET["delete"];
        
        $deleteCitas = "DELETE FROM citaservicios WHERE idCitaServicios=$idCita";
        $queryCitas = $conexion->query($deleteCitas);
        if ($queryCitas) {
                        echo "<script>
           alert('Se han borrado los datos de la cita');
           window.location = 'pacCitados.php';
            </script>";
        }
        }

        ?>

        </tbody>
        <tfoot>
                              <tr>
                      
                      <th>N° de Historia</th>
                      <th>Cedula</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Servicio</th>
                      <th>Tipo Servicio</th>
                      <th>Hora Cita</th>
                      <th>Fecha Cita</th>
                      <th><center>Opciones</center></th>
                      
                    </tr>
        </tfoot> 
    </table>
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