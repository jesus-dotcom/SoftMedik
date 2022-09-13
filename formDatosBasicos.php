<?php 
include 'seguridad.php';
include("conexion.php");

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
         Iniciamos Registrando los Datos Basicos del Paciente, Guardamos y se mostrara el formulario para asignar cita.
        </p>
      </div>
    </section>
    <div class="full-width divider-menu-h"></div>
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col">
        <div class="full-width panel mdl-shadow--2dp">
          <div class="full-width panel-tittle bg-primary text-center tittles">
            Paciente Nuevo
          </div>
          <div class="full-width panel-content">
            <form id="form" method="post" action="controllerPaciente.php">
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                                <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS BASICOS</legend><br>
                            </div>
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha Registro</small>
                    <input name="fregis" class="mdl-textfield__input" type="date" id="fecha" required>
                  </div>
                </div>                            
                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">N° de Historia</small>
                    <input id="nhis" type="text"  name="nhis" class="mdl-textfield__input"  pattern="[a-zA-Z0-9]{4,35}" placeholder="Ej: C1111">
                    <span class="mdl-textfield__error"></span>
                  </div>
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
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <small for="nhis">Fecha de Nacimiento:</small>
                    <input name="fecha" class="mdl-textfield__input" type="date" id="fecha" required>
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
                  <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                     <small for="nhis">Correo Electronico:</small>
                    <input id="email" type="email" class="mdl-textfield__input" name="direccionemail" placeholder="Ej: usuario@servidor.com" required>
                    <span class="mdl-textfield__error"></span>
                  </div>
                </div>
            
              </div>
              <p class="text-center">
                <button type="submit" name="registrar" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addCompany">
                  <i class="zmdi zmdi-plus"></i>
                </button>

  </div>
</div>
                <div class="mdl-tooltip" for="btn-addCompany">Agregar Datos</div>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    include 'php/includes/footer.php';

  ?>
</body>
</html>