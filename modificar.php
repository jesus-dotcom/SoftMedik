<?php 
  include 'seguridad.php';
  include("conexion.php");
  
  if (isset($_GET["modificar"])) {
    
    $idmodifi = $_GET["modificar"];
    $condatos = "SELECT * FROM paciente WHERE idPaciente= '$idmodifi'";
    $modquery = mysqli_query($conexion,$condatos);
    if ($modquery) {
    
    }else{
      echo "<div>Hay un problema interno</div>";
    }
    $fila =  mysqli_fetch_array($modquery);
    $idPaciente = $fila["idPaciente"];
    $fdr = $fila["FechaReg_Paciente"];
    $nhis = $fila["HistoraPaciente_idHistoraPaciente"];
    $nom = $fila["Nombre_Paciente"];
    $ape = $fila["Apellidos_Paciente"];
    $ced = $fila["Cedula_Paciente"];
    $fdn = $fila["FecNac_Paciente"];
    $gen = $fila["Sexo_Paciente"];
    $tel1 = $fila["Telefonos_Paciente"];
    $correo = $fila["correo_paciente"];
    
  }
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
    <div class="full-width divider-menu-h"></div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">
          <div class="full-width panel-tittle bg-primary text-center tittles">
            Paciente Nuevo
          </div>
          <div class="full-width panel-content">
            <form id="form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS BASICOS</legend><br>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                 <div class="alert alert-info" rule="alert">
                  <b>Paciente:</b> <?php echo "$nhis | $nom"; ?>
                  </div>
                </div>  
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha Registro</small>
                    <input name="fregis" class="mdl-textfield__input" type="date" id="fecha" required value="<?php echo "$fdr" ?>">
                  </div>
                </div>                            
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">N° de Historia</small>
                    <input id="nhis" type="text"  name="nhis" class="mdl-textfield__input"  value="<?php echo $nhis; ?>" required>
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="ced" >Cédula de Identidad</small>
                    <input id="ced" type="text" name="ced" required class="mdl-textfield__input" value="<?php echo $ced; ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nombres</small>
                    <input  id="nom" type="text"  name="nom" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" required class="mdl-textfield__input" value="<?php echo $nom; ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Apellidos</small>
                    <input  id="ape" type="text"  name="ape" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,100}" required class="mdl-textfield__input" value="<?php echo $ape; ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha de Nacimiento:</small>
                    <input name="fnac" class="mdl-textfield__input" type="date" id="fecha" required value="<?php echo $fdn ?>">
                  </div>
                </div>
                 <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">sexo:</small>
                   <select  name="gen" class="mdl-textfield__input">
                    <option selected ><?php echo $gen; ?></option>
                    <option>Femenino</option>
                    <option>Masculino</option>
                    <option>otro</option>
                    
                   </select> 
                  </div>
                </div>     
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="tel" >Telefono Movil:</small>
                    <input type="tel" name="tel1" class="mdl-textfield__input" required value="<?php echo $tel1; ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <small for="nhis">Correo Electronico:</small>
                    <input id="email" type="email" class="mdl-textfield__input" name="correo" required value="<?php echo $correo; ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
            
              </div>
              <p class="text-center">
                <button type="submit" name="modi" class="btn btn-info" onclick="return confirm('¿Está seguro?')">Modificar</button>
                <a href="mostrar.php?mostrar=<?php echo $idPaciente; ?>" class="btn btn-danger">Cancelar</a>
              </p>
            </form>
<?php  
  if (isset($_POST["modi"])) {
    $fregis = $_POST["fregis"];
    $nhis = $_POST["nhis"];
    $nom = $_POST["nom"];
    $ape = $_POST["ape"];
    $ced = $_POST["ced"];
    $fnac = $_POST["fnac"];
    $gen = $_POST["gen"];
    $tel1 = $_POST["tel1"];
    $correo = $_POST["correo"];
    

    $update = "UPDATE paciente SET FechaReg_Paciente= '$fregis', HistoraPaciente_idHistoraPaciente= '$nhis', Nombre_Paciente= '$nom', Apellidos_Paciente= '$ape', Cedula_Paciente= '$ced', FecNac_Paciente= '$fnac', Sexo_Paciente= '$gen', Telefonos_Paciente= '$tel1', correo_paciente= '$correo'WHERE idPaciente= '$idmodifi' ";

    $dupdate = mysqli_query($conexion,$update);

    if ($dupdate) {
      echo "<script>alert('Los datos del paciente han sido modificados')</script>";
      echo "<script>window.location='mostrar.php?mostrar=$idmodifi','_self'</script>";
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