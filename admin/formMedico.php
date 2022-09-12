<?php 
include 'seguridad.php';
include("../conexion.php");

///registrar paciente
if(isset($_POST["registrar"])){
  $Cargo_idCargo = $_POST['cargo'];
  $Cedula_Profesional = mysqli_real_escape_string($conexion,$_POST['ced']);
  $Nombre_Profesional = mysqli_real_escape_string($conexion,$_POST['nom']);
  $Apellido_Profesional = mysqli_real_escape_string($conexion,$_POST['ape']);
  $Telefono_Profesional = mysqli_real_escape_string($conexion,$_POST['tel']);
  $sexo_profesional = mysqli_real_escape_string($conexion,$_POST['sexo']);
  $correo_profesional = mysqli_real_escape_string($conexion,$_POST['direccionemail']);
  $direccion_profesional = mysqli_real_escape_string($conexion,$_POST['direc']);
  $sqlprofesional = "SELECT idProfesional FROM profesional WHERE Cedula_Profesional = '$Cedula_Profesional'";
  $resultadoprofesional = $conexion->query($sqlprofesional);
  $filas= $resultadoprofesional->num_rows;
  if($filas >0){
    echo "<script>
           alert('el profesional ya existe');
           window.location = 'formMedico.php';
    </script>";
  }else{
    //insertar la informacion
    $sqlprofesional = "INSERT INTO profesional(Cargo_idCargo,Cedula_Profesional,Nombre_Profesional,Apellido_Profesional,Telefono_Profesional,sexo_profesional,correo_profesional,direccion_profesional)
      VALUES('$Cargo_idCargo','$Cedula_Profesional','$Nombre_Profesional','$Apellido_Profesional','$Telefono_Profesional','$sexo_profesional','$correo_profesional','$direccion_profesional')";
    $resultadoprofesional= $conexion->query($sqlprofesional);
    if ($resultadoprofesional > 0){
      echo "<script>
           alert('registro existoso');
           window.location = 'consMedico.php';
    </script>";
    }else{
     echo "<script>
           alert('Error al registrarse');
           window.location = 'formMedico.php';
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
                    <input id="ced" type="text" name="ced" required placeholder="Ej: 12345789" class="mdl-textfield__input" >
                    <span class="mdl-textfield__error"></span>
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
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">sexo:</small>
                   <select  name="sexo" class="mdl-textfield__input">
                    <option value="0" selected="" disabled="" >Seleccione...</option>
                    <option>Femenino</option>
                    <option>Masculino</option>
                    <option>otro</option>
                    
                   </select> 
                  </div>
                </div>     
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="tel" >Telefono Movil:</small>
                    <input  id="tel" type="tel" name="tel" class="mdl-textfield__input"  pattern="[0-9()+]{11,20}" required placeholder="Ej: 04245515789">
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <small for="nhis">Correo Electronico:</small>
                    <input id="email" type="email" class="mdl-textfield__input" name="direccionemail" placeholder="Ej: usuario@servidor.com" required>
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">Cargo Del Medico:</small>
                   <select  name="cargo" class="mdl-textfield__input">
                    <option value="0" selected="" disabled="">Seleccione...</option>
                    <option value="1">Gastroenterólogo</option>
                    <option value="2">Anestesiológo</option>
                    <option value="3">Radiológo</option> 
                   </select> 
                  </div>
                </div> 
                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Direccion Especifica</small>
                   <textarea id="DirecRes_Paciente" class="mdl-textfield__input" rows="3" name="DirecRes_Paciente" required> </textarea>
                   
                  </div>
                </div>           
              </div>
              <p class="text-center">
                <button name="registrar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar Datos</div>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>