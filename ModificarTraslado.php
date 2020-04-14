<?php
require 'conexion.php';
$id = $_GET['Id_traslado'];
$sql = "SELECT * FROM ttraslado WHERE Id_traslado ='$id2' ";
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
<form method="POST" action="EditarTraslado.php">

<h2>Egreso por traslado</h2>

<div class="left">
   <input type="hidden" id="id" name="id" value="<?php echo $row['Id_intrahospitalario']; ?>" required>
   <input type="hidden" id="id2" name="id2" value="<?php echo $row['I_traslado']; ?>" required>
  <label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $row['T_nombre']; ?>" required>
   <label>Diagnóstico de egreso:</label> <input type="text" name="diagnostico" value="<?php echo $row['T_estado']; ?>" required>
 <label>Condición de egreso: </label>
 <div class="dr1"><label for=peticion> A petición</label><input class="rd" type="radio"  name="condicion" value="peticion"></div>
	<div class="dr1"><label for=grave> Grave</label><input class="rd" type="radio"  name="condicion" value="grave"></div>


<label>Traslado a:</label> <input type="text" name="centro" value="<?php echo $row['T_centro']; ?>" required>
<label>Cirugías Practicadas:</label> <input type="text" name="cirugias" value="<?php echo $row['T_cirugias']; ?>" required>


  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos" value="<?php echo $row['T_apeliidos']; ?>" required>
  <label>Días de estadia hospitalaria: <input type="number" name="dias" value="<?php echo $row['T_dias']; ?>" required></label>
    <label>Recomendaciones:</label> <input type="text" name="recomendaciones" value="<?php echo $row['T_recomendaciones']; ?>" required>
    <label>Motivo de traslado:</label> <input type="text" name="motivo" value="<?php echo $row['T_motivo']; ?>" required>
     <label>Médico(a) responsable:</label> <input type="text" name="dr" value="<?php echo $row['T_medico']; ?>" required>

  </div>
				<input type="submit" name="">
				<input type="reset"  name="">
</div>

</form>

</body>
</html>