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
  <!-- Notifications area -->
  
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
         Podras Visualizar todas las Agendas ya Registradas.
        </p>
      </div>
    </section>
      
      <div class="table-responsive" id="tabListCategory">
          <div class="mdl-grid">

          <div class="mdl-cell mdl-cell--12-col">
            <div class="full-width panel mdl-shadow--3dp">
              <div class="full-width panel-tittle  py-3 d-flex flex-row bg-success align-items-center justify-content-between">
                Lista De Agenda
                <a href="inicio.php" class="btn btn-danger">Volver</a>
              </div>
              <center>
                <table class="table table-bordered" id="dataAgenda" width="90%"  >
                  <thead>
                    <tr>
                      
                      <th>Servicio</th>
                      <th>Tipo De servicio</th>
                      <th>Fecha</th>
                      <th><center>Cantidad de Citas disponibles</center></th>
                      <th>Opciones</th>
                      
                    </tr>
                  </thead>
<?php  
  $consultas = "SELECT servicio.Descrip_Servicio,plan_agenda.idPlan_Agenda,plan_agenda.Servicio_idServicio,plan_agenda.tiposervicio_idtiposervicio,plan_agenda.Fecha_Agenda,plan_agenda.Cantidad_Agenda FROM plan_agenda,Servicio WHERE plan_agenda.Servicio_idServicio=servicio.idServicio";
  $query = mysqli_query($conexion,$consultas);
  

    while ($fila=mysqli_fetch_array($query)) {
      $idcon = $fila["idPlan_Agenda"];
      $des = $fila["Descrip_Servicio"];
      $tipo = $fila["tiposervicio_idtiposervicio"];
      $fecha = $fila["Fecha_Agenda"];
      $cantidad = $fila["Cantidad_Agenda"];
      
      
      
    
?>
          
            <tr>
               
                <td><?php echo $des; ?></td>
                <td><?php echo $tipo; ?></td>
                <td><?php echo $fecha; ?></td>
                <td><center><?php echo $cantidad; ?></center></td>
                 <td><a href="consAgendaAct.php?delete=<?php echo $idcon; ?>" onclick="return confirm('ADVERTENCIA:¿Desea eliminar la agenda de citas?')" class="btn btn-warning btn-sm" >Eliminar </a> 
            </td>
            </tr>                  
        <?php } 
        if (isset($_GET["delete"])) {
          $idAgenda = $_GET["delete"];
        
        $deleteAgenda = "DELETE FROM plan_agenda WHERE idPlan_Agenda=$idAgenda";
        $queryAgenda = $conexion->query($deleteAgenda);
        if ($queryAgenda) {
                        echo "<script>
           alert('Se han borrado los datos de la cita');
           window.location = 'consAgendaAct.php';
            </script>";
        }
        }

        ?>
            </tr>                  
       
        </tbody>
        
        <tfoot>
            <tr>

              <th>Servicio</th>
              <th>Tipo De servicio</th>
              <th>Fecha</th>
              <th><center>Cantidad de Citas disponibles</center></th>     
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
</body>

</html>