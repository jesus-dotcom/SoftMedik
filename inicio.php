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
			<h3 class="text-center tittles">Bienvenido Al Panel De Citas</h3>
			<!-- Tiles -->
			<a href="consAgendaAct.php"><article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						<br>
						<small>Agenda</small>
					</span>
				</div>
				<i class="zmdi zmdi-calendar tile-icon"></i>
			</article></a>
			<a href="formDatosBasicos.php"><article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						
						<small>Citas</small>
					</span>
				</div>
				<i class="zmdi zmdi-face tile-icon"></i>
			</article></a>
			<a href="reporteagenda.php"><article class="full-width tile">
				<div class="tile-text">
					<span class="text-condensedLight">
						
						<small>Reporte</small>
					</span>
				</div>
				<i class="zmdi zmdi-assignment-o tile-icon"></i>
			</article></a>
		</section>
		<section class="full-width" style="margin: 30px 0;">
			
			</div>
		</section>
	</section>
</body>
</html>