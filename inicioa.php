<?php  
  include 'seguridad.php';
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
    
    <section class="full-width text-center" style="padding: 40px 0;">
      <h3 class="text-center tittles">Bienvenido Al Panel De Administracion</h3>
      <!-- Tiles -->
      <a href="usuario.php">
        <article  class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight">
            
            <small>Agregar Usuario</small>
          </span>
        </div>
        <i class="zmdi zmdi-account-add tile-icon"></i>
      </article></a>
      <a href="formMedico.php"><article class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight">
            <small>Agregar Medico</small>
          </span>
        </div>
        <i class="zmdi zmdi-accounts-add tile-icon"></i>
      </article></a>
    </section>
    <section class="full-width" style="margin: 30px 0;">
      
      </div>
    </section>
  </section>
</body>
</html>