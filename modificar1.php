<?php 
include 'seguridad.php';
include("../conexion.php");

if (isset($_GET["modificar1"])) {
    
    $idmodifi1 = $_GET["modificar1"];
    $condatos1 = "SELECT * FROM profesional WHERE idProfesional= '$idmodifi1'";
    $modquery1 = mysqli_query($conexion,$condatos1);
    if ($modquery1) {
    
    }else{
      echo "<div>Hay un problema interno</div>";
    }
    $fila1 =  mysqli_fetch_array($modquery1);
    $idProfesional = $fila1["idProfesional"];
    $ced = $fila1["Cedula_Profesional"];
    $nom = $fila1["Nombre_Profesional"];
    $ape = $fila1["Apellido_Profesional"];
    $gen = $fila1["sexo_profesional"];
    $tel = $fila1["Telefono_Profesional"];
    $correo = $fila1["correo_profesional"];
    $Direccion = $fila1["direccion_profesional"];

    
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
            Medico Nuevo
          </div>
          <div class="full-width panel-content">
            <form id="form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DEL PROFESIONAL</legend><br>
                            </div>
                            
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="ced" >Cédula de Identidad</small>
                    <input id="ced" type="text" name="ced" required  class="mdl-textfield__input" value="<?php echo $ced; ?>">
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
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">sexo:</small>
                   <select  name="sexo" class="mdl-textfield__input">
                    <option selected=""><?php echo $gen; ?></option>
                    <option>Femenino</option>
                    <option>Masculino</option>
                    <option>otro</option>
                    
                   </select> 
                  </div>
                </div>     
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="tel" >Telefono Movil:</small>
                    <input  id="tel" type="tel" name="tel" class="mdl-textfield__input"  pattern="[0-9()+]{11,20}" required value="<?php echo $tel ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <small for="nhis">Correo Electronico:</small>
                    <input id="email" type="email" class="mdl-textfield__input" name="correo" required value="<?php echo $correo ?>">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Direccion Especifica</small>
                   <textarea id="DirecRes_Paciente" class="mdl-textfield__input" rows="3" name="Direccion" required> <?php echo $Direccion; ?> </textarea>
                   
                  </div>
                </div>           
              </div>
              <p class="text-center">
                <button name="modi1" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar Datos</div>
              </p>
            </form>
            <?php  
  if (isset($_POST["modi1"])) {
    $ced = $_POST["ced"];
    $nom = $_POST["nom"];
    $ape = $_POST["ape"];
    $usuario = $_POST["usa"];
    $clave = $_POST["clave"];   
    $gen = $_POST["sexo"];
    $tel = $_POST["tel"];
    $correo = $_POST["correo"];
    $Direccion = $_POST["Direccion"];
    
  
    
    

    $update = "UPDATE  profesional SET  Cedula_Profesional= '$ced', Nombre_Profesional= '$nom', Apellido_Profesional= '$ape',sexo_profesional= '$gen', Telefono_Profesional= '$tel',correo_profesional= '$correo',direccion_profesional='$Direccion' WHERE idProfesional= '$idmodifi1' ";

    $dupdate = mysqli_query($conexion,$update);

    if ($dupdate) {
      echo "<script>alert('Los datos del profesional han sido modificados')</script>";
      echo "<script>window.location='consMedico.php','_self'</script>";
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