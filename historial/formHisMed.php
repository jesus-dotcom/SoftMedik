
<?php 
include 'seguridad.php'; 
include("../conexion.php");

///registrar paciente
if(isset($_POST["registrar"])){
  $FechaReg_Paciente = mysqli_real_escape_string($conexion,$_POST['fregis']);
  $HistoraPaciente_idHistoraPaciente = mysqli_real_escape_string($conexion,$_POST['nhis']);
  $Cedula_Paciente = mysqli_real_escape_string($conexion,$_POST['ced']);
  $Nombre_Paciente = mysqli_real_escape_string($conexion,$_POST['nom']);
  $Apellidos_Paciente  = mysqli_real_escape_string($conexion,$_POST['ape']);
  $FecNac_Paciente = mysqli_real_escape_string($conexion,$_POST['fecha']);
  $Sexo_Paciente = mysqli_real_escape_string($conexion,$_POST['sexo']);
  $Telefonos_Paciente= mysqli_real_escape_string($conexion,$_POST['tel']);
  $correo_paciente = mysqli_real_escape_string($conexion,$_POST['direccionemail']);



  $Estado_res = mysqli_real_escape_string($conexion,$_POST ['Estado_res']);
  $Municipio_res = mysqli_real_escape_string($conexion,$_POST['Municipio_res']);
  $Parroquia_res = mysqli_real_escape_string($conexion,$_POST['Parroquia_res']);

  $TipoLocal_Paciente = mysqli_real_escape_string($conexion,$_POST['TipoLocal_Paciente']);
  $TiempoRes_Paciente = mysqli_real_escape_string($conexion,$_POST['TiempoRes_Paciente']);
  $DirecRes_Paciente = mysqli_real_escape_string($conexion,$_POST['DirecRes_Paciente']);
  $NivelIsntruccion_idNivelIsntruccion = mysqli_real_escape_string($conexion,$_POST['NivelIsntruccion_idNivelIsntruccion']);
  $Ocupacion_Paciente = mysqli_real_escape_string($conexion,$_POST['Ocupacion_Paciente']);
  $Nac_Paciente = mysqli_real_escape_string($conexion,$_POST['Nac_Paciente']);
  $sqlpaciente = "SELECT idPaciente FROM paciente WHERE Cedula_Paciente = '$Cedula_Paciente'";
  $resultadopaciente  = $conexion->query($sqlpaciente );
  $filas= $resultadopaciente->num_rows;
  if($filas >0){
    echo "<script>
           alert('el paciente ya existe');
           window.location = 'conshismed.php';
    </script>";
  }else{
    //insertar la informacion
    $sqlpaciente = "INSERT INTO paciente (HistoraPaciente_idHistoraPaciente,Cedula_Paciente,FecNac_Paciente,Nombre_Paciente,Apellidos_Paciente,correo_paciente,Sexo_Paciente,  Telefonos_Paciente,FechaReg_Paciente,Estado_res,Municipio_res,Parroquia_res,TipoLocal_Paciente,TiempoRes_Paciente,DirecRes_Paciente,NivelIsntruccion_idNivelIsntruccion,Ocupacion_Paciente,Nac_Paciente)
      VALUES('$HistoraPaciente_idHistoraPaciente','$Cedula_Paciente','$FecNac_Paciente','$Nombre_Paciente','$Apellidos_Paciente','$correo_paciente','$Sexo_Paciente','$Telefonos_Paciente','$FechaReg_Paciente','$Estado_res','$Municipio_res','$Parroquia_res','$TipoLocal_Paciente','$TiempoRes_Paciente','$DirecRes_Paciente','$NivelIsntruccion_idNivelIsntruccion','$Ocupacion_Paciente','$Nac_Paciente')";
    $resultadopaciente = $conexion->query($sqlpaciente);
    if ($resultadopaciente > 0){
      echo "<script>
           alert('registro existoso');
           window.location = 'conshismed.php';
    </script>";
    }else{
     echo "<script>
           alert('el registro del paciente no fue existoso');
           window.location = 'conshismed.php';
    </script>";
    }
  }
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
          Formulamos la Historia Digital de Nuestro Paciente
        </p>
      </div>
    </section>
    <div class="full-width divider-menu-h"></div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">
          <div class="full-width panel-tittle bg-primary text-center tittles">
           Historia Médica
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
                    <input name="fregis" class="mdl-textfield__input" type="date" id="fecha">
                  </div>
                </div>                            
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">N° de Historia</small>
                    <input id="nhis" type="text"  name="nhis" class="mdl-textfield__input">
                    
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="ced" >Cédula de Identidad</small>
                    <input id="ced" type="text" name="ced" class="mdl-textfield__input">
                    
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nombres</small>
                    <input  id="nom" type="text"  name="nom" class="mdl-textfield__input">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Apellidos</small>
                    <input  id="ape" type="text" name="ape"class="mdl-textfield__input">
                    
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha de Nacimiento:</small>
                    <input  name="fecha" class="mdl-textfield__input" type="date" id="fecha">
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
                    <input  id="tel" type="tel"  name="tel" class="mdl-textfield__input">
                   
                  </div>
                </div>
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <small for="nhis">Correo Electronico:</small>
                    <input id="email" type="email" class="mdl-textfield__input"  name="direccionemail">
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
                    <input  id="Ocupacion_idOcupacion" type="text"  name="Ocupacion_Paciente" class="mdl-textfield__input" >
                   
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
                <button name="registrar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany"  onclick="return confirm('¿Está seguro?')">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar historial</div>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>