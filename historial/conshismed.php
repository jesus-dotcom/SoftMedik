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

    <section class="full-width header-well">
      <div class="full-width header-well-icon">
        <i class="zmdi zmdi-notifications-active"></i>
      </div>
      <div class="full-width header-well-text">
        <p class="text-condensedLight">
          <b>Atención!</b>  si el paciente posee historia medica, buscalo en la sección de pacientes; Para registrar el primer paciente debe ingresar aqui <a href="formHisMed.php" class="btn btn-primary">Click Aquí</a>
          <a href="inicioh.php" class="btn btn-danger">Volver</a>
        </p>
      </div>
    </section>
      
      <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                Lista De Paciente Registrados
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
                  <a href="mostrar1.php?mostrar1=<?php echo $idcoon; ?>" class="btn btn-info ">Ver más</a>
                  <a href="agregardatos.php?idPaciente=<?php echo $idcoon; ?>" class="btn btn-success">agregar datos</a>
                  <a href="conshismed.php?borrarcon=<?php echo $idcoon; ?>"  onclick="return confirm('ADVERTENCIA:¿Desea eliminar la consulta del paciente?')" class="btn btn-danger">Eliminar</a>
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
           window.location = 'conshismed.php';
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