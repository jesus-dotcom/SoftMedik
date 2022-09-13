<?php
include 'seguridad.php'; 
include("../conexion.php");
$idcon = $_GET["idPaciente"];
$consultas = "SELECT * FROM paciente WHERE idPaciente ='".$idcon."'";
  $query = mysqli_query($conexion,$consultas);
  
    while ($fila=mysqli_fetch_array($query)) {
      
      $historia = $fila["HistoraPaciente_idHistoraPaciente"];
      $cedula = $fila["Cedula_Paciente"];
      $nombre = $fila["Nombre_Paciente"];
      $apellido = $fila["Apellidos_Paciente"];
      $FecNac = $fila["FecNac_Paciente"];
      $Sexo = $fila["Sexo_Paciente"];
      $Telefonos = $fila["Telefonos_Paciente"];
      $correo = $fila["correo_paciente"];
    }
  ?>
<!DOCTYPE html>
<html lang="es">
<?php include 'php/includes/head.php' ?>
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
          Podremos vizualizar todos los datos del paciente y agrerar si es necesario.
        </p>
      </div>
    </section>
    <div class="full-width divider-menu-h"></div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">
          <div class="full-width panel-tittle bg-primary text-center tittles">
            Datos del Paciente
          </div>
          <div class="full-width panel-content">
            <form name="f1" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS BASICOS</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha Registro</small>
                    <input disabled name="fregis" class="mdl-textfield__input" type="date" id="fecha" value="<?php echo $fecha; ?>">
                  </div>
                </div>                            
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">N° de Historia</small>
                    <input id="nhis" type="text" disabled name="nhis" class="mdl-textfield__input" value="<?php echo $historia; ?>" >
                    
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="ced" >Cédula de Identidad</small>
                    <input id="ced" type="text" disabled name="ced" class="mdl-textfield__input" value="<?php echo $cedula; ?>">
                    
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nombres</small>
                    <input  id="nom" type="text" disabled name="nom" class="mdl-textfield__input" value="<?php echo $nombre; ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Apellidos</small>
                    <input  id="ape" type="text" disabled name="ape"class="mdl-textfield__input" value="<?php echo $apellido; ?>">
                    
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha de Nacimiento:</small>
                    <input disabled name="fecha" class="mdl-textfield__input" type="date" id="fecha" value="<?php echo $FecNac; ?>">
                  </div>
                </div>
                 <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <small for="tservicio">sexo:</small>
                   <input disabled name="sexo" class="mdl-textfield__input" type="text" id="fecha" value="<?php echo $Sexo ?>">
                  </div>
                </div>     
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="tel" >Telefono Movil:</small>
                    <input  id="tel" type="tel" disabled name="tel" class="mdl-textfield__input" value="<?php echo $Telefonos ?>">
                   
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input id="email" type="email" class="mdl-textfield__input" disabled name="direccionemail" value="<?php echo $correo; ?>">
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col">
                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; LUGAR DE RESIDENCIA</legend><br>
                            </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Estado </small>
                    <input  id="nom" type="text"  name="Estado_res" class="mdl-textfield__input">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Municipio</small>
                    <input  id="nom" type="text" name="Municipio_res" class="mdl-textfield__input">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Parroquia</small>
                    <input  id="nom" type="text"  name="Parroquia_res" class="mdl-textfield__input" >
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                  <small for="TipoLocal_Paciente">Tipo De Localidad:</small>
                   <select name="TipoLocal_Paciente" class="mdl-textfield__input">
                    <option value="0" selected="" disabled="">Seleccione...</option>
                    <option>Urbana</option>
                    <option>Rural</option>
                  </select> 
                    
                </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Tiempo en la Residencia actual</small>
                    <input  id="tiempo" type="text" name="TiempoRes_Paciente" class="mdl-textfield__input" placeholder="00 años/meses/dias">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Direccion Especifica</small>
                   <textarea id="DirecRes_Paciente" class="mdl-textfield__input" rows="3" name="DirecRes_Paciente" required> </textarea>
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col">
                  <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Instrucción y Ocupación</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">Instrucción:</small>
                   <select  name="NivelIsntruccion_idNivelIsntruccion" class="mdl-textfield__input">
                    <option value="0" selected="" disabled="">Seleccione...</option>
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
                    <input  id="Ocupacion_Paciente" type="text"  name="Ocupacion_Paciente" class="mdl-textfield__input" >
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nacionalidad</small>
                    <input  id="Nacionalidad" type="text" name="Nac_Paciente" class="mdl-textfield__input">
                   
                  </div>
                </div>

              </div>
              <p class="text-center">
                <button name="modi2" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany"  onclick="return confirm('¿Está seguro?')">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar historial</div>
              </p>
            </form>
<?php
///actualizar datos de paciente
if(isset($_POST["modi2"])){ 
  


  $Estado_res = $_POST ['Estado_res'];
  $Municipio_res = $_POST['Municipio_res'];
  $Parroquia_res = $_POST['Parroquia_res'];
  $TipoLocal_Paciente = $_POST['TipoLocal_Paciente'];
  $TiempoRes_Paciente = $_POST['TiempoRes_Paciente'];
  $DirecRes_Paciente = $_POST['DirecRes_Paciente'];
  $NivelIsntruccion_idNivelIsntruccion = $_POST['NivelIsntruccion_idNivelIsntruccion'];
  $Ocupacion_Paciente= $_POST['Ocupacion_Paciente'];
  $Nac_Paciente = $_POST['Nac_Paciente'];
  
    $update1 = "UPDATE paciente SET Estado_res= '$Estado_res', Municipio_res= '$Municipio_res', Parroquia_res= '$Parroquia_res', TipoLocal_Paciente= '$TipoLocal_Paciente', TiempoRes_Paciente= '$TiempoRes_Paciente', DirecRes_Paciente = '$DirecRes_Paciente', NivelIsntruccion_idNivelIsntruccion = '$NivelIsntruccion_idNivelIsntruccion', Ocupacion_Paciente = '$Ocupacion_Paciente', Nac_Paciente = '$Nac_Paciente' WHERE idPaciente= '$idcon ' ";

    $dupdate1 = mysqli_query($conexion,$update1);

    if ($dupdate1) {
      echo "<script>alert('Los datos del paciente han sido agregados')</script>";
      echo "<script>window.location='mostrar1.php?mostrar1=$idcon','_self'</script>";
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