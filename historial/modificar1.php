<?php
include 'seguridad.php'; 
include("../conexion.php");
  
  if (isset($_GET["modificar1"])) {
    
    $idmodifi1 = $_GET["modificar1"];
    $condatos1 = "SELECT * FROM paciente WHERE idPaciente= '$idmodifi1'";
    $modquery1 = mysqli_query($conexion,$condatos1);
    if ($modquery1) {
    
    }else{
      echo "<div>Hay un problema interno</div>";
    }
    $fila1 =  mysqli_fetch_array($modquery1);
    $idPaciente = $fila1["idPaciente"];
    $nhis = $fila1["HistoraPaciente_idHistoraPaciente"];
    $nom = $fila1["Nombre_Paciente"];
    $ape = $fila1["Apellidos_Paciente"];
    $ced = $fila1["Cedula_Paciente"];
    $fdn = $fila1["FecNac_Paciente"];
    $gen = $fila1["Sexo_Paciente"];
    $tel1 = $fila1["Telefonos_Paciente"];
    $correo = $fila1["correo_paciente"];

    $LugarNac_Paciente = $fila1["LugarNac_Paciente"];
    $Estado_nac = $fila1["Estado_nac"];
    $Municipio_nac =$fila1["Municipio_nac"];
    $Parroquia_nac = $fila1["Parroquia_nac"];
    $Estado_res = $fila1["Estado_res"];
    $Municipio_res = $fila1["Municipio_res"];
    $Parroquia_res =$fila1["Parroquia_res"];
    $TipoLocal_Paciente = $fila1["TipoLocal_Paciente"];
    $TiempoRes_Paciente = $fila1["TiempoRes_Paciente"];
    $DirecRes_Paciente = $fila1["DirecRes_Paciente"];
    $NivelInst_Paciente = $fila1["NivelIsntruccion_idNivelIsntruccion"];
    $Ocupacion_Paciente = $fila1["Ocupacion_Paciente"];
    $Nac_Paciente = $fila1["Nac_Paciente"];
  }
?>
  
<!DOCTYPE html>
<html lang="es">
<?php include 'php/includes/head.php' ?>
<link href="css/css/sb-admin-2.css" rel="stylesheet">
<body>
  <!-- navLateral -->
    <?php include 'php/includes/navLateral.php';?>
  <!-- pageContent -->
  <section class="full-width pageContent">
    <!-- navBar -->
      <?php include 'php/includes/navBar.php';?>
    </div>
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
            Actualizar Paciente
          </div>
          <div class="full-width panel-content">
            <form name="f1" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
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
                    <small for="nhis">N° de Historia</small>
                    <input id="nhis" type="text"  name="nhis" class="mdl-textfield__input" value="<?php echo $nhis ; ?>" >
                    
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="ced" >Cédula de Identidad</small>
                    <input id="ced" type="text"  name="ced" class="mdl-textfield__input" value="<?php echo $ced; ?>">
                    
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nombres</small>
                    <input  id="nom" type="text"  name="nom" class="mdl-textfield__input" value="<?php echo $nom; ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Apellidos</small>
                    <input  id="ape" type="text"  name="ape" class="mdl-textfield__input" value="<?php echo $ape; ?>">
                    
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha de Nacimiento:</small>
                    <input  name="fnac" class="mdl-textfield__input" type="date" id="fecha" value="<?php echo $fdn ?>">
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">sexo:</small>
                   <select  name="gen" class="mdl-textfield__input">
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
                    <input  id="tel" type="tel"  name="tel1" class="mdl-textfield__input" value="<?php echo $tel1 ?>">
                   
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="tel" >Correo Electronico:</small>
                    <input id="email" type="email" class="mdl-textfield__input" name="direccionemail" value="<?php echo $correo; ?>">
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col">
                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; LUGAR DE RESIDENCIA</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Estado </small>
                    <input  id="nom" type="text"  name="Estado_res" class="mdl-textfield__input" value="<?php echo $Estado_res; ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Municipio</small>
                    <input  id="nom" type="text" name="Municipio_res" class="mdl-textfield__input" value="<?php echo $Municipio_res; ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Parroquia</small>
                    <input  id="nom" type="text"  name="Parroquia_res" class="mdl-textfield__input" value="<?php echo $Parroquia_res; ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                  <small for="TipoLocal_Paciente">Tipo De Localidad:</small>
                   <select name="TipoLocal_Paciente" class="mdl-textfield__input">
                    <option selected=""><?php echo $TipoLocal_Paciente ?></option>
                    <option>Urbana</option>
                    <option>Rural</option>
                  </select> 
                    
                </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Tiempo en la Residencia actual</small>
                    <input  id="tiempo" type="text" name="TiempoRes_Paciente" class="mdl-textfield__input" placeholder="00 años/meses/dias" value="<?php echo $TiempoRes_Paciente; ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Direccion Especifica</small>
                   <textarea id="DirecRes_Paciente" class="mdl-textfield__input" rows="3" name="DirecRes_Paciente"><?php echo $DirecRes_Paciente; ?></textarea>
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col">
                  <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Instrucción y Ocupación</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">Instrucción:</small>
                   <select  name="NivelIsntruccion_idNivelIsntruccion" class="mdl-textfield__input">
                    <option value="0" selected><?php echo $NivelInst_Paciente; ?></option>
                    <option value="1">Alfabeta</option>
                    <option value="2">Analfabeta</option>
                    <option value="3">Primaria</option>
                    <option value="4">Secundaria</option>
                    <option value="5">Tecnica</option>
                    <option value="6">Superior</option>
                    <option value="7">Postgrado</option> 
                   </select> 
                  </div>
                </div> 

                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Ocupacion</small>
                    <input  id="Ocupacion_idOcupacion" type="text"  name="  Ocupacion_Paciente" class="mdl-textfield__input" value="<?php echo  $Ocupacion_Paciente; ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nacionalidad</small>
                    <input  id="Nacionalidad" type="text" name="Nac_Paciente" class="mdl-textfield__input" value="<?php echo $Nac_Paciente; ?>">
                   
                  </div>
                </div>

              </div>
              <p class="text-center">
                <button type="submit" name="modi1" class="btn btn-info" onclick="return confirm('¿Está seguro?')">Modificar</button>
          <a href="mostrar1.php?mostrar1=<?php echo $idPaciente; ?>" class="btn btn-danger">Cancelar</a>
              </p>
            </form>
 <?php
///actualizar datos de paciente
if(isset($_POST["modi1"])){ 
  
  $nhis = $_POST["nhis"];
  $nom = $_POST["nom"];
  $ape = $_POST["ape"];
  $ced = $_POST["ced"];
  $fnac = $_POST["fnac"];
  $gen = $_POST["gen"];
  $tel1 = $_POST["tel1"];
  $correo = $_POST["direccionemail"];

  $Estado_res = $_POST ['Estado_res'];
  $Municipio_res = $_POST['Municipio_res'];
  $Parroquia_res = $_POST['Parroquia_res'];
  $TipoLocal_Paciente = $_POST['TipoLocal_Paciente'];
  $TiempoRes_Paciente = $_POST['TiempoRes_Paciente'];
  $DirecRes_Paciente = $_POST['DirecRes_Paciente'];
  $NivelInst_Paciente = $_POST['NivelIsntruccion_idNivelIsntruccion'];
  $Ocupacion_Paciente = $_POST['Ocupacion_Paciente'];
  $Nac_Paciente = $_POST['Nac_Paciente'];
  
    $update1 = "UPDATE paciente SET  HistoraPaciente_idHistoraPaciente= '$nhis', Nombre_Paciente= '$nom', Apellidos_Paciente= '$ape', Cedula_Paciente= '$ced', FecNac_Paciente= '$fnac', Sexo_Paciente= '$gen', Telefonos_Paciente= '$tel1', correo_paciente= '$correo', Estado_res= '$Estado_res', Municipio_res= '$Municipio_res', Parroquia_res= '$Parroquia_res', TipoLocal_Paciente= '$TipoLocal_Paciente', TiempoRes_Paciente= '$TiempoRes_Paciente', DirecRes_Paciente = '$DirecRes_Paciente', NivelIsntruccion_idNivelIsntruccion = '$NivelInst_Paciente',Ocupacion_Paciente = '$Ocupacion_Paciente', Nac_Paciente = '$Nac_Paciente' WHERE idPaciente= '$idmodifi1 ' ";

    $dupdate1 = mysqli_query($conexion,$update1);

    if ($dupdate1) {
      echo "<script>alert('Los datos del paciente han sido modificados')</script>";
      echo "<script>window.location='mostrar1.php?mostrar1=$idmodifi1','_self'</script>";
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