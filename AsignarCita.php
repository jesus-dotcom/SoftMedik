<?php 
include 'seguridad.php';
include("conexion.php");

$idcon = $_GET["idPaciente"];
$consultas = "SELECT * FROM paciente WHERE idPaciente ='$idcon'";
  $query = mysqli_query($conexion,$consultas);
  
    while ($fila=mysqli_fetch_array($query)) {
      $id = $fila["idPaciente"];
      $historia = $fila["HistoraPaciente_idHistoraPaciente"];
      $fecha = $fila["FechaReg_Paciente"];
      $cedula = $fila["Cedula_Paciente"];
      $nombre = $fila["Nombre_Paciente"];
      $apellido = $fila["Apellidos_Paciente"];
      $FecNac = $fila["FecNac_Paciente"];
      $Sexo = $fila["Sexo_Paciente"];
      $Telefonos = $fila["Telefonos_Paciente"];
      $correo = $fila["correo_paciente"];
    }
  ?>
 <?php
///registrar citas
if(isset($_POST["registrar"])){
  $Profesional_idProfesional = $_POST['cargo']; 
  $paciente = $_POST['paciente'];
  $Servicio_idServicio = $_POST['servicio'];
  $tiposervicio_idtiposervicio = $_POST['tservicio'];
  $Fecha_Cita = $_POST['fechacita'];
  $Hora_Cita = $_POST['hora'];
  $Ayuna_Cita = $_POST['ayuna'];
  $pago = $_POST['Costo'];
 
    $sqlcitaservicios = "INSERT INTO citaservicios (Profesional_idProfesional,Paciente_idPaciente,Servicio_idServicio,tiposervicio_idtiposervicio,Fecha_Cita,Hora_Cita,Ayuna_Cita,pago)
      VALUES('$Profesional_idProfesional','$paciente','$Servicio_idServicio','$tiposervicio_idtiposervicio','$Fecha_Cita','$Hora_Cita','$Ayuna_Cita','$pago')";
    $resultadocitaservicios = $conexion->query($sqlcitaservicios);
    if ($resultadocitaservicios > 0){
      echo "<script>alert('registro existoso')</script>";
      echo "<script>window.location='citaDescarga.php?id=$paciente','_self'</script>";
    }else{
     echo "<script>
           alert('error no se puede registrar la cita');
           window.location = 'AsignarCita.php?idPaciente=$paciente','_self';
    </script>";
    }  
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
            Citas
          </div>
          <div class="full-width panel-content">
            <form name="f1" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS BASICOS</legend><br>
                     <div class="col-4">
         
         <input type="tel"  name="paciente" class="mdl-textfield__input" value="<?php echo $id; ?>">
         </div>
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
                    <small for="tel" >Correo Electronico:</small>
                    <input id="email" type="email" class="mdl-textfield__input" disabled name="direccionemail" value="<?php echo $correo; ?>">
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col">
                  <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DE LA CITA</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="servicio">Servicio:</small>
                   <select  name=servicio class="mdl-textfield__input"onchange="cambia_servicio()"> 
                                <option value="0" selected>Seleccione... 
                                <option value="1">Consulta 
                                <option value="2">Endoscopia 
                                <option value="3">Colonoscopia 
                                <option value="4">Ecografia 
                                <option value="5">Radiología
                                </select>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                  <small for="tservicio">Tipo De Servicio:</small>
                   <select name=tservicio class="mdl-textfield__input">
                          <option value="-">- 
                     </select> 
                        </select>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell-8--col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="tel" >Ayuna:</small>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="ayuna"  id="si" value="si" required>
                  <label class="form-check-label" for="ayuna">
                    Si
                   </label>
                  </div>
                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="ayuna"  id="no" checked value="no" required>
                  <label class="form-check-label" for="ayuna">
                    No
                   </label>
                   </div>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">Medico Autorizado:</small>
                   <select  name="cargo" class="mdl-textfield__input">
                    <option value="0" selected="" disabled="">Seleccione...</option>
                    <option value="1">Gastroenterólogo</option>
                    <option value="2">Anestesiológo</option>
                    <option value="3">Radiológo</option> 
                   </select> 
                  </div>
                </div> 

                <div class="mdl-cell mdl-cell--3-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <small for="nhis">Hora De Cita</small>
                    <input name="hora" class="mdl-textfield__input" type="Time" id="fecha" required>
                  </div>
                </div>

                
                <div class="mdl-cell mdl-cell--4-col mdl-cell--1-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <small for="nhis">Fecha De Cita</small>
                    <input name="fechacita" class="mdl-textfield__input" type="date" id="fecha" required>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--1-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                   <small for="tservicio">Costo:</small>
                   <select  name="Costo" class="mdl-textfield__input">
                    <option value="0" selected="" disabled="" >Seleccione...</option>
                    <option>50.000.000,00</option>
                    <option>40.000.000,00</option>
                    <option>$</option> 
                   </select> 
                  </div>
                </div> 
         
              </div>
              <p class="text-center">
                
                <button name="registrar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar Agenda</div>
              </p>
            </form>
            <script>
              var tservicio_1=new Array("-","Gastroenterologia","Higado","Vias-Biliares","Nutricion","Pre-Anestesia","...");
              var tservicio_2=new Array("-","Diagnostica","Terapéutica","Ligadura-de-Varices","Recepcion-Mucosal-Endoscopica","Polipectomia","...");
              var tservicio_3=new Array("-","Rectosigmoidoscopia","Coloscopia","Rectoscopia","...");
              var tservicio_4=new Array("-","EcografÍa-Abdonal","Abdomino-Pelvica","...");
              var tservicio_5=new Array("-","Colon-por-Enema","Tratamiento-Intestinal","Fluorescopia","...");

              var todosservicio = [
                [],
                tservicio_1,
                tservicio_2,
                tservicio_3,
                tservicio_4,
                tservicio_5,
              ];

              function cambia_servicio(){ 
                //tomo el valor del select del pais elegido 
                var servicio 
                servicio = document.f1.servicio[document.f1.servicio.selectedIndex].value 
                //miro a ver si el pais está definido 
                if (servicio != 0) { 
                    //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
                    //selecciono el array de provincia adecuado 
                    tservicio=todosservicio[servicio]
                    //calculo el numero de provincias 
                    num_tservicio = tservicio.length 
                    //marco el número de provincias en el select 
                    document.f1.tservicio.length = num_tservicio 
                    //para cada provincia del array, la introduzco en el select 
                    for(i=0;i<num_tservicio;i++){ 
                      document.f1.tservicio.options[i].value=tservicio[i] 
                      document.f1.tservicio.options[i].text=tservicio[i] 
                    } 
                }else{ 
                    //si no había provincia seleccionada, elimino las provincias del select 
                    document.f1.tservicio.length = 1 
                    //coloco un guión en la única opción que he dejado 
                    document.f1.tservicio.options[0].value = "-" 
                    document.f1.tservicio.options[0].text = "-" 
                } 
                //marco como seleccionada la opción primera de provincia 
                document.f1.tservicio.options[0].selected = true 
              }

            </script>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>