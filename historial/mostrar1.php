
<?php
include 'seguridad.php'; 
include("../conexion.php");
$idmostrar1 = $_GET["mostrar1"];
$mostrar1 = "SELECT * FROM paciente WHERE idPaciente ='".$idmostrar1."'";
$query1 = mysqli_query($conexion,$mostrar1);
  
  while ($fila1=mysqli_fetch_array($query1)) {
    $id_pac1 = $fila1["idPaciente"];
    $historia = $fila1["HistoraPaciente_idHistoraPaciente"];
    $fecha = $fila1["FechaReg_Paciente"];
    $cedula = $fila1["Cedula_Paciente"];
    $nombre = $fila1["Nombre_Paciente"];
    $apellido = $fila1["Apellidos_Paciente"];
    $FecNac = $fila1["FecNac_Paciente"];
    $Sexo = $fila1["Sexo_Paciente"];
    $Telefonos = $fila1["Telefonos_Paciente"];
    $correo = $fila1["correo_paciente"];

    $Estado_res = $fila1["Estado_res"];
    $Municipio_res = $fila1["Municipio_res"];
    $Parroquia_res =$fila1["Parroquia_res"];
    $TipoLocal_Paciente = $fila1["TipoLocal_Paciente"];
    $TiempoRes_Paciente = $fila1["TiempoRes_Paciente"];
    $DirecRes_Paciente = $fila1["DirecRes_Paciente"];
    $NivelInst_Paciente = $fila1["NivelIsntruccion_idNivelIsntruccion"];
    $Ocupacion_Paciente= $fila1["Ocupacion_Paciente"];
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
            Paciente
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
                    <input  id="nom" type="text" disabled name="Estado_res" class="mdl-textfield__input" value="<?php echo $Estado_res ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Municipio</small>
                    <input  id="nom" type="text" disabled name="Municipio_res" class="mdl-textfield__input" value="<?php echo $Municipio_res ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Parroquia</small>
                    <input  id="nom" type="text"  disabled name="Parroquia_res" class="mdl-textfield__input" value="<?php echo $Parroquia_res ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Tipo De Localidad</small>
                    <input  id="nom" type="text"  disabled name="Parroquia_res" class="mdl-textfield__input" value="<?php echo $TipoLocal_Paciente ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Tiempo en la Residencia actual</small>
                    <input  id="tiempo" type="text" disabled name="TiempoRes_Paciente" class="mdl-textfield__input" value="<?php echo $TiempoRes_Paciente ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Direccion Especifica</small>
                    <input  id="tiempo" type="text" disabled name="TiempoRes_Paciente" class="mdl-textfield__input" value="<?php echo $DirecRes_Paciente ?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--12-col">
                  <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Instrucción y Ocupación</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Instrucción</small>
                    <input  id="tiempo" type="text" disabled name="TiempoRes_Paciente" class="mdl-textfield__input"  value="<?php echo $NivelInst_Paciente?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Ocupacion</small>
                    <input  id="Ocupacion_Paciente" type="text" disabled name="Ocupacion_Paciente" class="mdl-textfield__input" value="<?php echo $Ocupacion_Paciente?>">
                   
                  </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis" >Nacionalidad</small>
                    <input  id="Nacionalidad" type="text" disabled name="Nac_Paciente" class="mdl-textfield__input" value="<?php echo $Nac_Paciente ?>">
                   
                  </div>
                </div>

              </div>
              <p class="text-center">
              <a href="modificar1.php?modificar1=<?php echo $id_pac1; ?>" class="btn btn-info"><i class="far fa-file-user"></i> Actualizar</a>  
              <a href="prueba.php" class="btn btn-danger">Volver</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
