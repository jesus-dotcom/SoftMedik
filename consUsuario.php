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
          Podrás Visualizar todos los usuarios o roles registrados
        </p>
      </div>
    </section>
      
      <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                Lista De Usuarios
                <a href="inicioa.php" class="btn btn-danger">Volver</a>
              </div>
              
            
               
                <center><table class="table table-bordered" id="dataGastro" width="90%"  >
                  <thead>
                    <tr>
                      
                       <th>Perfil</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Clave</th>
                        <th><center>Opciones</center></th>
                    </tr>
                  </thead>
<?php  
  $consultas = "SELECT perfilesusuario.Perfil_Usuario,usuario.IdUsuario,usuario.PerfilesUsuario_idPerfilesUsuario,usuario.Cedula_Usuario,usuario.Nombre_Usuario,usuario.Apellido_Usuario,usuario.Nickname_Usuario,usuario.Clave_Usuario  FROM usuario,perfilesusuario WHERE usuario.PerfilesUsuario_idPerfilesUsuario=perfilesusuario.idPerfilesUsuario";  
  $query = mysqli_query($conexion,$consultas);
  

    while ($fila=mysqli_fetch_array($query)) {
      $idcon = $fila["IdUsuario"];
      $Perfil = $fila["Perfil_Usuario"];
      $cedula = $fila["Cedula_Usuario"];
      $nombre = $fila["Nombre_Usuario"];
      $apellido = $fila["Apellido_Usuario"];
      $usuario= $fila["Nickname_Usuario"];
      $clave = $fila["Clave_Usuario"];
    
?>
          
            <tr>
               
                <td><?php echo $Perfil; ?></td>
                <td><?php echo $cedula; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
                <td><?php echo $usuario; ?></td>
                <td><?php echo $clave; ?></td>

                <td>
                <center>
                  <a href="modificar.php?modificar=<?php echo $idcon; ?>" class="btn btn-info"><i class="far fa-file-user"></i> Actualizar</a>
                  <a href="consUsuario.php?borrarcon=<?php echo $idcon; ?>" onclick="return confirm('ADVERTENCIA:¿Desea eliminar la consulta del administrador?')" class="btn btn-danger">Eliminar</a>
                </center> 
                </td>
            </tr>                  
               
        <?php } ?>
        </tbody>
        <?php  
          if (isset($_GET["borrarcon"])) {
            $borrar_con = $_GET["borrarcon"];
            $condelete = "DELETE FROM usuario WHERE IdUsuario = '$borrar_con'";
            $conquery = mysqli_query($conexion,$condelete);
            if ($conquery) {
              echo "<script>
           alert('Se han borrado los datos del administrador');
           window.location = 'consUsuario.php';
            </script>";
              
            }
          }
        ?>
        
        <tfoot>
            <tr>
            <th>Perfil</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Clave</th>
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