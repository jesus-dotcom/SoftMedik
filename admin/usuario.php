<?php 
include("../conexion.php");
include 'seguridad.php';
///registrar usuario
if(isset($_POST["registrar"])){
	$PerfilesUsuario_idPerfilesUsuario = mysqli_real_escape_string($conexion,$_POST['perfil']);
	$Cedula_Usuario = mysqli_real_escape_string($conexion,$_POST['ced']);
	$Nombre_Usuario = mysqli_real_escape_string($conexion,$_POST['nom']);
	$Apellido_Usuario = mysqli_real_escape_string($conexion,$_POST['ape']);
	$Nickname_Usuario = mysqli_real_escape_string($conexion,$_POST['usa']);
	$Clave_Usuario = mysqli_real_escape_string($conexion,$_POST['clave']);
	$sqluser = "SELECT idUsuario FROM usuario WHERE Cedula_Usuario = '$Cedula_Usuario'";
	$resultadouser = $conexion->query($sqluser);
	$filas= $resultadouser->num_rows;
	if($filas >0){
		echo "<script>
           alert('el usuario ya existe');
           window.location = 'usuario.php';
		</script>";
	}else{
		//insertar la informacion
		$sqlusuario = "INSERT INTO usuario(PerfilesUsuario_idPerfilesUsuario,Cedula_Usuario,Nombre_Usuario,Apellido_Usuario,Nickname_Usuario,Clave_Usuario)
		  VALUES('$PerfilesUsuario_idPerfilesUsuario','$Cedula_Usuario','$Nombre_Usuario','$Apellido_Usuario','$Nickname_Usuario','$Clave_Usuario')";
		$resultadousuario= $conexion->query($sqlusuario);
		if ($resultadousuario > 0){
			echo "<script>
           alert('registro existoso');
           window.location = 'consUsuario.php';
		</script>";
		}else{
			echo "<script>
           alert('error al registrase');
           window.location = 'usuario.php';
		</script>";
		}
	}
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
          Registremos los Nuevos Roles
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
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tperfil">perfil de usuario:</small>
                   <select  name="perfil" class="mdl-textfield__input">
                    <option value="0" selected="" disabled="" >Seleccione...</option>
                    <option value="1">Administrador</option>
                    <option value="2">citas</option>
                    <option value="3">recepcion</option>
                    <option value="4">transcripcion</option>
                    
                   </select> 
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="ced" >Cédula de Identidad</small>
                    <input id="ced" type="text" name="ced" required placeholder="Ej: 12345789" class="mdl-textfield__input" >
                    
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nombres</small>
                    <input  id="nom" type="text"  name="nom" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" required class="mdl-textfield__input" placeholder="Ej: Ana Maria">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Apellidos</small>
                    <input  id="ape" type="text"  name="ape" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" required class="mdl-textfield__input" placeholder="Ej: Jaimes Sanchez">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>     
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Usuario</small>
                    <input  id="ape" type="text"  name="usa" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" required class="mdl-textfield__input">
                   
                  </div>
                </div> 
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Clave</small>
                    <input  id="ape" type="text"  name="clave" pattern="[a-zA-0-9 ]{3,100}" required class="mdl-textfield__input">
                    
                  </div>
                </div>           
              </div>
              <p class="text-center">
                <button name="registrar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar Usuarios</div>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>