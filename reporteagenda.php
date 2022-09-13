<?php
include 'seguridad.php'; 
include("../conexion.php");
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
         Ingrese las fecha inicial y la fecha limite para sus reportes
        </p>
      </div>
    </section>
    <div class="full-width divider-menu-h"></div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">
          <div class="full-width panel-tittle bg-primary text-center tittles">
            REPORTE DE AGENDA POR FECHAS
          </div>
          <div class="full-width panel-content">
           <form method="POST" action="repora.php">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Generar reporte por fecha</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Desde:</small>
                    <input name="fecha1" class="mdl-textfield__input" type="date" id="fecha1">
                  </div>
                </div>                            

                  <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Hasta:</small>
                    <input name="fecha2" class="mdl-textfield__input" type="date" id="fecha2">
                  </div>
                </div>
   







 
 
              </div>
              <p class="text-center">
                <button name="repor" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany"  onclick="return confirm('¿Está seguro?')">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Generar Reporte</div>
              </p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>