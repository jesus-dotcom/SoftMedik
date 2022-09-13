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
      <h3 class="text-center tittles">Bienvenido Al Panel De Recepcion</h3>
      
      
    </section>
      
      <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                Lista De pacientes Confirmados que asistieron a sus citas.
                <a href="inicior.php" class="btn btn-danger">Volver</a>
              </div>
              
            
              <table class="table table-bordered" id="dataRecepcion">
                  <thead>
                   <tr>
                      
                      <th>N° de Historia</th>
                      <th>Fecha de cita</th>
                      <th>Servicio</th>
                      <th>Tipo de Servicio</th>
                      <th>Cedula</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                     
                    </tr>
                  </thead>
                  <tbody>
<?php  
  $consultas = "SELECT paciente.*,citaservicios.* FROM paciente,citaservicios WHERE citaservicios.Paciente_idPaciente=paciente.idPaciente AND citaservicios.status=1";
  $query = mysqli_query($conexion,$consultas);
  

    while ($fila=mysqli_fetch_array($query)) {
      $idcon = $fila["idCitaServicios"];
      $historia = $fila["HistoraPaciente_idHistoraPaciente"];
      $fecha = $fila["Fecha_Cita"];
      $hora = $fila["Hora_Cita"];
      $cedula = $fila["Cedula_Paciente"];
      $nombre = $fila["Nombre_Paciente"];
      $apellido = $fila["Apellidos_Paciente"];
      $tiposervicio = $fila["tiposervicio_idtiposervicio"];

      $idServicio = $fila["Servicio_idServicio"];
      $consServicio = "SELECT Descrip_Servicio FROM servicio WHERE idServicio=$idServicio";
      $queryServicio = $conexion->query($consServicio);
      $fetchServicio = mysqli_fetch_array($queryServicio);
      $decripServicio = $fetchServicio["Descrip_Servicio"];

      
      
    
?>
          
            <tr>
              
                <td><?php echo $historia; ?></td>
                <td><?php echo $fecha; ?></td>
                <td><?php echo $decripServicio; ?></td>
                <td><?php echo $tiposervicio; ?></td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
            </tr>                  
                
            
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
              
              
                      <th>N° de Historia</th>
                      <th>Fecha de cita</th>
                      <th>Servicio</th>
                      <th>Tipo de Servicio</th>
                      <th>Cedula</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
              
              
                   
            </tr>
        </tfoot>
    </table>
        <br>
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
</body>
</html>
      </div>
    </section>
  </section>
</body>
</html>