<?php 
include("../conexion.php");
include 'seguridad.php';
///registrar usuario
if (isset($_GET["modificar"])) {
    
    $idmodifi = $_GET["modificar"];
    $condatos = "SELECT * FROM usuario,perfilesusuario  WHERE IdUsuario = '$idmodifi'";
    $modquery = mysqli_query($conexion,$condatos);
    if ($modquery) {
    
    }else{
      echo "<div>Hay un problema interno</div>";
    }
    $fila =  mysqli_fetch_array($modquery);
      $idcon = $fila["IdUsuario"];
      $cedula = $fila["Cedula_Usuario"];
      $nombre = $fila["Nombre_Usuario"];
      $apellido = $fila["Apellido_Usuario"];
      $usuario= $fila["Nickname_Usuario"];
      $clave = $fila["Clave_Usuario"];
  
    
    
  }
 
 ?>
<!DOCTYPE html>
<html lang="es">
<?php  
  include 'php/includes/head.php';
?>
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
    <div class="full-width divider-menu-h"></div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">
          <div class="full-width panel-tittle bg-primary text-center tittles">
            Nivel De Usuario 
          </div>
          <div class="full-width panel-content">
            <form id="form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                  <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS USUARIO</legend><br>
                </div>
                                         
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="ced" >Cédula de Identidad</small>
                    <input id="ced" type="text" name="ced" required  class="mdl-textfield__input" value="<?php echo $cedula; ?>" >
                    
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nombres</small>
                    <input  id="nom" type="text"  name="nom"  required class="mdl-textfield__input" value="<?php echo $nombre; ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Apellidos</small>
                    <input  id="ape" type="text"  name="ape" required class="mdl-textfield__input" value="<?php echo $apellido; ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>     
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Usuario</small>
                    <input  id="ape" type="text"  name="usa"  required class="mdl-textfield__input" value="<?php echo $usuario; ?>">
                   
                  </div>
                </div> 
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Clave</small>
                    <input  id="ape" type="text"  name="clave" required class="mdl-textfield__input" value="<?php echo $clave; ?>">
                    
                  </div>
                </div>           
              </div>
              <p class="text-center">
                <button name="modi" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar Usuarios</div>
              </p>
            </form>
<?php  
  if (isset($_POST["modi"])) {
    $ced = $_POST["ced"];
    $nom = $_POST["nom"];
    $ape = $_POST["ape"];
    $usuario = $_POST["usa"];
    $clave = $_POST["clave"];
    
  
    
    

    $update = "UPDATE  usuario SET  Cedula_Usuario= '$ced', Nombre_Usuario= '$nom', Apellido_Usuario= '$ape', Nickname_Usuario= '$usuario', Clave_Usuario= '$clave' WHERE IdUsuario= '$idmodifi' ";

    $dupdate = mysqli_query($conexion,$update);

    if ($dupdate) {
      echo "<script>alert('Los datos del paciente han sido modificados')</script>";
      echo "<script>window.location='consUsuario.php','_self'</script>";
    }
    else{
      echo "<div>No se insertaron los datos del paciente</div>";
    }
  }
?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>