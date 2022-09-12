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
        <i class="zmdi zmdi-balance"></i>
      </div>
      <div class="full-width header-well-text">
        <p class="text-condensedLight">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
        </p>
      </div>
    </section>
      
      <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                Lista De Profesional
                <a href="inicioa.php" class="btn btn-danger">Volver</a>
              </div>
              
            
               
                <center><table class="table table-bordered" id="dataGastro" width="100%"  >
                  <thead>
                    <tr>
                      
                       <th>Cargo</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Sexo</th>
                        <th>Correo</th>
                        <th>Direccion</th>
                        <th><center>Opciones</center></th>
                    </tr>
                  </thead>
<?php  
  $consultas = "SELECT cargo.Descrip_Cargo,profesional.idProfesional,profesional.Cargo_idCargo,profesional.Cedula_Profesional,profesional.Nombre_Profesional,profesional.Apellido_Profesional,profesional.Telefono_Profesional,profesional.sexo_profesional,profesional.correo_profesional,profesional.direccion_profesional  FROM profesional,cargo WHERE profesional.Cargo_idCargo=cargo.idCargo";  
  $query = mysqli_query($conexion,$consultas);

    while ($fila=mysqli_fetch_array($query)) {
      $idcon = $fila["idProfesional"];
      $cargo = $fila["Descrip_Cargo"];
      $cedula = $fila["Cedula_Profesional"];
      $nombre = $fila["Nombre_Profesional"];
      $apellido = $fila["Apellido_Profesional"];
      $telefono= $fila["Telefono_Profesional"];
      $sexo = $fila["sexo_profesional"];
      $Correo= $fila["correo_profesional"];
      $Direccion = $fila["direccion_profesional"];
    
    
?>
          
            <tr>
               
                <td><?php echo $cargo; ?></td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
                <td><?php echo $telefono; ?></td>
                <td><?php echo $sexo; ?></td>
                <td><?php echo $Correo; ?></td>
                <td><?php echo $Direccion; ?></td>

                <td>
                <center>
                  <a href="modificar1.php?modificar1=<?php echo $idcon; ?>" class="btn btn-info"><i class="far fa-file-user"></i> Actualizar</a>
                  <a href="consMedico.php?borrarcon=<?php echo $idcon; ?>" onclick="return confirm('ADVERTENCIA:¿Desea eliminar la consulta del medico?')" class="btn btn-danger">Eliminar</a>
                </center> 
                </td>
            </tr>                  
               
        <?php } ?>
        </tbody>
        <?php  
          if (isset($_GET["borrarcon"])) {
            $borrar_con = $_GET["borrarcon"];
            $condelete = "DELETE FROM profesional WHERE idProfesional= '$borrar_con'";
            $conquery = mysqli_query($conexion,$condelete);
            if ($conquery) {
              echo "<script>
           alert('Se han borrado los datos del medico');
           window.location = 'consMedico.php';
            </script>";
              
            }
          }
        ?>
        
        <tfoot>
            <tr>
            <th>Cargo</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Sexo</th>
            <th>Correo</th>
            <th>Direccion</th>
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