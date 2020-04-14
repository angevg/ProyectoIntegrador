<?php
require 'conexion.php';
$id = $_GET['Id_defuncion'];
$sql = "SELECT * FROM tdefuncion WHERE Id_defuncion ='$id' ";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	  <meta name="theme-color" content="#000000">
  <meta name="author" content="Ana Angelica VG">
	<title>Modificar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/formstyle.css">
<link rel="stylesheet" type="text/css" href="fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/main.js"></script>
		<script src="js/jquery-3.5.0.min.js"></script>

</head>
<body>
<header>
	<div class="menu_bar">
		
<a href="#" class="bt-menu"><span class="icon-menu"></span> Menu</a>

	</div>

	<nav>
		<ul>
			<li class="submenu">
				<a href="index.php"><span class="icon-office"></span> Inicio</a>
			</li>

			<li class="submenu">

				<a href="#"><span class="icon-folder-plus"></span> Mantenimiento <span class="caret icon-circle-down"></span> </a>
				<ul class="children">
				<li><a href="#"><span class="icon-user-plus"></span> Ingreso</a></li>
				
				<li><a href="#"><span class="icon-user-check"></span> Egreso</a></li>		
				</ul>
			</li>

			<li class="submenu">
				<a href="#"><span class="icon-stats-bars"></span> Consultas <span class=" caret icon-circle-down"></span></a>
					<ul class="children">
				<li><a href="#"><span class="icon-user-plus"></span> Ingreso</a></li>
				<li><a href="#"><span class="icon-user-check"></span> Egreso</a></li>	
				</ul>
			</li>

			<li class="submenu">
				<a href="#"><span class="icon-paste"></span> Reportes <span class=" caret icon-circle-down"></span></a>
					<ul class="children">
				<li><a href="#"><span class="icon-user-plus"></span> Ingreso</a></li>
				<li><a href="#"><span class="icon-user-check"></span> Egreso</a></li>	
				</ul>
			</li>
		</ul>
	</nav>
</header>

<div class="programado-form">
<form action="editarDefuncion.php" method="POST">

<h2>Egreso por defunción</h2>

<div class="left">
	 <input type="hidden" id="id" name="id" value="<?php echo $row['Id_emergencia']; ?>" required>
	  <input type="hidden" id="id" name="id2" value="<?php echo $row['Id_defuncion']; ?>" required>
  <label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $row['D_nombre']; ?>" required>
   <label>Causas de defunción:</label> <input type="text" name="causa" value="<?php echo $row['D_causa']; ?>" required>
<label>Cirugías Practicadas:</label> <input type="text" name="cirugias" value="<?php echo $row['D_cirugias']; ?>" required>
  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos" value="<?php echo $row['D_apellidos']; ?>" required>
  <label>Días de estadia hospitalaria: <input type="number" name="dias" value="<?php echo $row['D_dias']; ?>" required></label>
    <label>Médico(a) responsable:</label> <input type="text" name="dr" value="<?php echo $row['D_medico']; ?>" required>
  </div>
				<input type="submit" name="">
				<input type="reset" name="">
</div>

</form>

</body>
</html>