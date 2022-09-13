<?php  
  include 'seguridad.php';
include '../conexion.php';
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
    
      <section class="full-width text-center" style="padding: 5px 0;">
      <h3 class="text-center tittles">Bienvenido Al Área De Historia</h3>
      <!-- Tiles -->
      <a href="formHisMed.php"><article class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight">
            
            <small>Crear Nueva Historia</small>
          </span>
        </div>
        <i class="zmdi zmdi-calendar tile-icon"></i>
      </article></a>
      <a href="reporgene.php"><article class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight">
            <br>
            <small>Reporte General</small>
          </span>
        </div>
        <i class="zmdi zmdi-assignment-o tile-icon"></i>
      </article></a>
    
      
      
    </section>
    <section class="full-width" style="margin: 30px 0;">
      <div class="full-width header-well-text">
      
      </div>
    </section>
    <div class="full-width divider-menu-h"></div>
    <h4 class="text-condensedLight">
          Para poder visualizar a los pacientes citados por día, debes selecionar la fecha deseada a consultar.
        </h4>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">

          <div class="full-width panel-tittle bg-primary text-center tittles">
           Visualizar Pacientes Citados
          </div>
          <div class="full-width panel-content">
           <form method="POST" action="reporPRUEBA.php">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; Ver Pacientes  por fecha</legend><br>
                </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Desde:</small>
                    <input name="fecha1" class="mdl-textfield__input" type="date" id="fecha1">
                  </div>
                </div>                            
   
              </div>
              <p class="text-center">
                <button name="reporPRUEBA" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany"  onclick="return confirm('¿Está seguro?')">
                  <i class="zmdi zmdi-plus"></i>
                </button>
                <div class="mdl-tooltip" for="btn-addCompany">Generar Reporte</div>
              </p>
            </form>
     
        <br>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Menu Toggle Script -->
  

                 
       
<?php 
      include 'php/includes/footer.php';
      ?>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
      </div>
    </section>
  </section>
</body>
</html>