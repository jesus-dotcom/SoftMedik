<?php  
  include 'seguridad.php';
include '../conexion.php';
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
    
    <section class="full-width text-center" style="padding: 40px 0;">
      <h3 class="text-center tittles">Bienvenido Al Panel Recepcion</h3>
      
      
      
    </section>
    <section class="full-width" style="margin: 30px 0;">
      
      <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                Lista De Pacientes Que No Asistieron
              </div>
              
            
               
                <center><table class="table table-bordered" id="dataGastro" width="90%"  >
                  <thead>
                    <tr>
                      
                      <th>N° de Historia</th>
                      <th>Fecha de cita</th>
                      <th>Hora de cita</th>
                      <th>cedula</th>
                      <th>nombre</th>
                      <th>apellido</th>
                      <th><center>Opciones</center></th>
                    </tr>
                  </thead>
<?php  
  $consultas = "SELECT paciente.idPaciente, paciente.HistoraPaciente_idHistoraPaciente,paciente.Cedula_Paciente,paciente.Nombre_Paciente,paciente.Apellidos_Paciente,citaservicios.idCitaServicios,citaservicios.Paciente_idPaciente,citaservicios.Fecha_Cita,citaservicios.Hora_Cita FROM paciente,citaservicios WHERE citaservicios.Paciente_idPaciente=paciente.idPaciente AND citaservicios.status = 2" ;
  $query = mysqli_query($conexion,$consultas);
  

   while ($fila=mysqli_fetch_array($query)) {
      $idcon = $fila["idCitaServicios"];
      $idcoon = $fila["idCitaServicios"];
      $historia = $fila["HistoraPaciente_idHistoraPaciente"];
      $fecha = $fila["Fecha_Cita"];
      $hora = $fila["Hora_Cita"];
      $cedula = $fila["Cedula_Paciente"];
      $nombre = $fila["Nombre_Paciente"];
      $apellido = $fila["Apellidos_Paciente"];
      
      
    
?>
          
            <tr>
               <td><?php echo $historia; ?></td>
                <td><?php echo $fecha; ?></td>
                <td><?php echo $hora; ?></td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
                <td>
                  
                  <p><a href="pacienten.php?set=<?php echo $idcon; ?>?" class="btn btn-warning btn-sm" >No citar</a> 
                 
                </td>
            </tr>                  
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <?php  
         if (isset($_GET["set"])) {
          $citarid = $_GET["set"];
          $set = "UPDATE citaservicios SET status=0 WHERE  idCitaServicios= '$citarid'";
          $citaquery = mysqli_query($conexion,$set);
          if ($citaquery) {
              echo "<script>alert('El paciente esta en espera.')</script>";
              echo "<script>window.location='inicior.php','_self'</script>";
            }
          }
        ?>
        
        <tfoot>
            <tr>
              
              <th>N° de Historia</th>
              <th>Fecha de cita</th>
              <th>Hora de cita</th>
              <th>cedula</th>
              <th>nombre</th>
              <th>apellido</th>
              <th><center>Opciones</center></th>
                   
            </tr>
        </tfoot>
    </table></center>
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
      </div>
    </section>
  </section>
</body>
</html>