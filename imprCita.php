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
        Citas de Pacientes.
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
              
            
               
                <center><table class="table table-bordered" id="descargar" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N° de Historia</th>
                      <th>Fecha de Registro</th>
                      <th>cedula</th>
                      <th>nombre</th>
                      <th>apellido</th>
                      <th>Opciones</th>
                    </tr>
                  </thead>
<?php  
  $consultas = "SELECT * FROM paciente";
  $query = mysqli_query($conexion,$consultas);
  

    while ($fila=mysqli_fetch_array($query)) {
      $idcon = $fila["idPaciente"];
      $historia = $fila["HistoraPaciente_idHistoraPaciente"];
      $fecha = $fila["FechaReg_Paciente"];
      $cedula = $fila["Cedula_Paciente"];
      $nombre = $fila["Nombre_Paciente"];
      $apellido = $fila["Apellidos_Paciente"];  
?>
          
            <tr>
                <td><?php echo $historia; ?></td>
                <td><?php echo $fecha; ?></td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
                <td>
                  
                   <a href="citaDescarga.php?id=<?php echo $idcon ?>" class="btn btn-info"><i class="far fa-file-pdf"></i> Descargar</a>
                </td>
            </tr>                  
                </td>
            </tr>
        <?php } ?>
        </tbody>
        
        
        <tfoot>
            <tr>
              
              <th>N° de Historia</th>
              <th>Fecha de Registro</th>
              <th>cedula</th>
              <th>nombre</th>
              <th>apellido</th>
              <th>Opciones</th>
                   
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