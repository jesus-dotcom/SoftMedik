<?php  
include 'seguridad.php';
 
include("conexion.php");

///registrar usuario
if(isset($_POST["registrar"])){
  $Servicio_idServicio = mysqli_real_escape_string($conexion,$_POST['servicio']);
  $tiposervicio_idtiposervicio = mysqli_real_escape_string($conexion,$_POST['tservicio']);
  $Fecha_Agenda = mysqli_real_escape_string($conexion,$_POST['fregis']);
  $Cantidad_Agenda = mysqli_real_escape_string($conexion,$_POST['cant']);
  
    //insertar la informacion
    $sqlplan_agenda = "INSERT INTO plan_agenda (Servicio_idServicio,tiposervicio_idtiposervicio,Fecha_Agenda,Cantidad_Agenda)
      VALUES('$Servicio_idServicio','$tiposervicio_idtiposervicio','$Fecha_Agenda','$Cantidad_Agenda')";
    $resultadoplan_agenda = $conexion->query($sqlplan_agenda);
    if ($resultadoplan_agenda > 0){
      echo "<script>
           alert('registro existoso');
           window.location = 'consAgendaAct.php';
    </script>";
    }else{
      echo "<script>
           alert('el registro de agenda no fue existoso');
           window.location = 'formAgenda.php';
    </script>";
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
          Creemos una Agenda.
        </p>
      </div>
    </section>
    <div class="full-width divider-menu-h"></div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">
          <div class="full-width panel-tittle bg-primary text-center tittles">
             Agenda
          </div>
          <div class="full-width panel-content">
            <form name="f1" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Nueva Agenda</legend><br>
                            </div>

                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
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
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfieldmdl-textfield--floating-label">
                  <small for="tservicio">Tipo De Servicio:</small>
                   <select name=tservicio class="mdl-textfield__input">
                          <option value="-">- 
                     </select> 
                        </select>
                  </div>
                </div>
                
                
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input name="fregis" class="mdl-textfield__input" type="date" id="fecha" required>
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="cant" id="coinCompany" required  pattern="[0-9]{1,100}" >
                    <label class="mdl-textfield__label" for="coinCompany">Cantidad</label>
                    <span class="mdl-textfield__error">Solo numeros</span>
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
  var tservicio_3=new Array("-","Rectosigmoidoscopia","Coloscopia","Rectoscopia","ERCP","...");
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