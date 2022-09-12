<!DOCTYPE html>
<html lang="es">
<?php  
  include 'php/includes/head.php';
?>
<link href="css/css/sb-admin-2.css" rel="stylesheet">
<body>
  <div class="login-wrap cover">
    <div class="container-login">
      <p class="text-center" style="font-size: 80px;">
      <img src="assets/img/logokelly2.png" alt="Avatar" class="img-responsive">
      </p>
      <p class="text-center text-condensedLight">BIENVENIDOS</p>
      <form id="login" method="post" action="validar.php">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            
            <input type="text" id="nombre" class="mdl-textfield__input" name="usa" placeholder="Usuario" required>
            
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input type="password" id="password" class="mdl-textfield__input" name ="clave" placeholder="Contraseña" required>
            
        </div>
        <center>
        <input type="submit" onclick=' enviarFormulario();' class="btn btn-info" name="login" value="Iniciar Sesión">
        </center>
        </button>
      </form>
      <div id='error'></div>
    </div>
  </div>
  <script src="js1/validate.js"></script>
</body>
</html>