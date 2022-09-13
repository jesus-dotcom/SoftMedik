<?php 
include("conexion.php");
include 'seguridad.php';
$idmostrar = $_GET["mostrar"];
$mostrar = "SELECT * FROM paciente WHERE idPaciente ='".$idmostrar."'";
$query = mysqli_query($conexion,$mostrar);
  
    while ($fila=mysqli_fetch_array($query)) {
      $id_pac = $fila["idPaciente"];
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
            Registro De Paciente
          </div>
          <div class="full-width panel-content">
            <form id="form" method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
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
                     <small for="nhis">Correo Electronico:</small>
                   <input id="email" type="email" class="mdl-textfield__input" disabled name="direccionemail" value="<?php echo $correo; ?>">
                  </div>
                </div>
            
              </div>
              <p class="text-center">
                 <a href="citaDescarga.php?id=<?php echo $id_pac ?>" class="btn btn-info"><i class="far fa-file-pdf"></i> Descargar</a>
            <a href="modificar.php?modificar=<?php echo $id_pac; ?>" class="btn btn-info"><i class="far fa-file-user"></i> Actualizar</a>
            <a href="consCitas.php" class="btn btn-danger">Volver</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>