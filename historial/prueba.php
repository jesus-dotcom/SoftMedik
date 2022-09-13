<?php include '../conexion.php'; 
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

       <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">
        <h4 class="text-condensedLight">
          En esta sección debemos buscar por el número de cédula de nuestros pacientes.
        </h4>
          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                Actualizar Datos de Pacientes ya Registrados.
                <a href="inicioh.php" class="btn btn-danger">Volver</a>
              </div>
      
   

         
            
               
                <center><table class="table table-bordered" id="dataGastro" width="90%"  >
                  <thead>
                    <tr>
                      
                      <th>N° de Historia</th>
                      <th>Fecha de Registro</th>
                      <th>cedula</th>
                      <th>nombre</th>
                      <th>apellido</th>
                      <th><center>Opciones</center></th>
                    </tr>
                  </thead>
<?php  
  $consultas1 = "SELECT * FROM paciente";
  $query = mysqli_query($conexion,$consultas1);
  

    while ($fila=mysqli_fetch_array($query)) {
      $idcoon = $fila["idPaciente"];
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
                <center>
                  
                  <a href="mostrar1.php?mostrar1=<?php echo $idcoon; ?>" class="btn btn-success">Actualizar</a>
                  <a href="prueba.php?borrarcon=<?php echo $idcoon; ?>"  onclick="return confirm('ADVERTENCIA:¿Desea eliminar la consulta del paciente?')" class="btn btn-danger">Eliminar</a>
                </center> 
                </td>
            </tr>                  
               
        <?php } ?>
        </tbody>
        <?php  
          if (isset($_GET["borrarcon"])) {
            $borrar_con = $_GET["borrarcon"];
            $condelete = "DELETE FROM paciente WHERE idPaciente= '$borrar_con'";
            $conquery = mysqli_query($conexion,$condelete);
            if ($conquery) {
              echo "<script>
           alert('Se han borrado los datos del paciente');
           window.location = 'prueba.php';
            </script>";
              
            }
          }
        ?>
        
        <tfoot>
            <tr>
              
            
              <th>N° de Historia</th>
              <th>Fecha de Registro</th>
              <th>cedula</th>
              <th>nombre</th>
              <th>apellido</th>
             <th><center>Opciones</th></center>
                   
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