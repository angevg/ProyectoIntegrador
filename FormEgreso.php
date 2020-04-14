<?php
require 'conexion.php';
$id = $_GET['Id_programado'];
$sql = "SELECT * FROM tingresoprogramado WHERE Id_programado ='$id' ";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	  <meta name="theme-color" content="#000000">
  <meta name="author" content="Ana Angelica VG">
	<title>Egreso</title>
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
<form method="POST" action="guardarEgreso.php">

<h2>Egreso </h2>
<!--
<div class="buscar">
    <input type="search" id="busqueda" name="q">
    <button>Buscar</button>
  </div> -->
<div class="left">
  <input type="hidden" id="id" name="id" value="<?php echo $row['Id_programado']; ?>" required>
  <label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $row['P_nombre'] ?>" required>
   <label>Diagnóstico de egreso:</label> <input type="text" name="diagnostico">
 <label>Condición de egreso: </label>
 <div class="dr1"><label for=curado> Curado</label><input class="rd" type="radio"  name="condicion" value="curado"checked> </div>
	<div class="dr1"><label for=mejor> Mejor</label><input class="rd" type="radio"  name="condicion" value="mejor"></div>
	<div class="dr1"><label for=fuga> Fuga</label><input class="rd" type="radio"  name="condicion" value="fuga"></div>
<div class="dr1"><label for=peticion> A petición</label><input class="rd" type="radio"  name="condicion" value="peticion"></div>
<label>tratamiento ambulatorio:</label> <input type="text" name="tratamiento">
<label>Cirugías Practicadas:</label> <input type="text" name="cirugias">

  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos" value="<?php echo $row['P_apellidos'] ?>" required>
  <label>Días de estadia hospitalaria: <input type="number" name="dias"></label>
    <label>Recomendaciones:</label> <input type="text" name="recomendaciones">
    <label>Médico(a) responsable:</label> <input type="text" name="dr">

  </div>
				<input type="submit" name="">
				<input type="reset" name="">
</div>

</form>

</body>
</html>