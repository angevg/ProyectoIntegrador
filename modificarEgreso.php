<?php
require 'conexion.php';
$id = $_GET['Id_egreso'];
$sql = "SELECT * FROM tegreso WHERE Id_egreso ='$id' ";
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
<body style="background-image: url(img/fondo.jpg); background-size: 100% 100%;
	  background-repeat: no-repeat;
    background-size: cover;">
<header>
	<div class="menu_bar">
		
<a href="#" class="bt-menu"><span class="icon-menu"></span> Menu</a>

	</div>
<!--INICIO de Menu -->
	<nav>
		<ul>
	<li class="submenu">
				<a href="index.php"><span class="icon-office"></span> Inicio</a>
			</li>

				<li class="submenu">
				<a href="nosotros.php"><span class="icon-user-tie"></span> Sobre Nosotros</a>
			</li>

			<li class="submenu">
				<a href="#"><span class="icon-folder-plus"></span> Mantenimiento <span class="caret icon-circle-down"></span> </a>
				<ul class="children">
				<li><a href="FormProgramado.php"><span class="icon-calendar"></span>Ingreso por Citas</a></li>
				<li><a href="FormIntrahospitalario.php"><span class="icon-clipboard"></span>Ingreso Intrahospitalario</a></li>
				<li><a href="FormEmergencia.php"><span class="icon-aid-kit"></span>Emegencias</a></li>	
				<li><a href="lista.php"><span class="icon-user-check"></span> Egreso</a></li>	
				<li><a href="listaTraslado.php"><span class="icon-upload"></span> Traslado</a></li>
				<li><a href="listaEmergencia.php"><span class="icon-folder-upload"></span> Defuncion</a></li>				
				</ul>
			</li>

			<li class="submenu">
				<a href="#"><span class="icon-stats-bars"></span> Consultas <span class=" caret icon-circle-down"></span></a>
					<ul class="children">
				<li><a href="consulta.php"><span class="icon-calendar"></span>Ingreso por Citas</a></li>
				<li><a href="consultaIntrahospitalario.php"><span class="icon-clipboard"></span>Ingreso Intrahospitalario</a></li>
				<li><a href="consultaEmergencia.php"><span class="icon-aid-kit"></span>Emegencias</a></li>	
				<li><a href="consultaEgreso.php"><span class="icon-user-check"></span> Egreso</a></li>	
				<li><a href="consultaTaslado.php"><span class="icon-upload"></span> Traslado</a></li>
				<li><a href="consultaDefuncion.php"><span class="icon-folder-upload"></span> Defuncion</a></li>	
				</ul>
			</li>

			<li class="submenu">
				<a href="#"><span class="icon-paste"></span> Reportes <span class=" caret icon-circle-down"></span></a>
					<ul class="children">
				<li><a href="reporte.php" target="_blank"><span class="icon-calendar"></span>Ingreso por Citas</a></li>
				<li><a href="reporteIntrahospitalario.php" target="_blank"><span class="icon-clipboard"></span>Ingreso Intrahospitalario</a></li>
				<li><a href="reporteEmergencia.php" target="_blank" ><span class="icon-aid-kit"></span>Emegencias</a></li>	
				<li><a href="reporteEgreso.php" target="_blank" ><span class="icon-user-check"></span> Egreso</a></li>	
				<li><a href="reporteTraslado.php" target="_blank" ><span class="icon-upload"></span> Traslado</a></li>
				<li><a href="reporteDefuncion.php" target="_blank" ><span class="icon-folder-upload"></span> Defuncion</a></li>	
				
				</ul>
			</li>
		</ul>
	</nav>
</header>
<!--FIN de Menu -->

<div class="programado-form">
<form method="POST" action="editarEgreso.php">

<h2>Egreso </h2>
<div class="left">
  <input type="hidden" id="id" name="id" value="<?php echo $row['Id_programado']; ?>" required>
  <input type="hidden" id="id" name="id2" value="<?php echo $row['Id_egreso']; ?>" required>
  <label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $row['Eg_nombre'] ?>" required>
   <label>Diagnóstico de egreso:</label> <input type="text" name="diagnostico" value="<?php echo $row['Eg_condicion'] ?>" required>
 <label>Condición de egreso: </label>
 <div class="dr1"><label for=curado> Curado</label><input class="rd" type="radio"  name="condicion" value="curado"> </div>
	<div class="dr1"><label for=mejor> Mejor</label><input class="rd" type="radio"  name="condicion" value="mejor"></div>
	<div class="dr1"><label for=fuga> Fuga</label><input class="rd" type="radio"  name="condicion" value="fuga"></div>
<div class="dr1"><label for=peticion> A petición</label><input class="rd" type="radio"  name="condicion" value="peticion"></div>
<label>tratamiento ambulatorio:</label> <input type="text" name="tratamiento" value="<?php echo $row['Eg_tratamiento'] ?>" required>
<label>Cirugías Practicadas:</label> <input type="text" name="cirugias" value="<?php echo $row['Eg_cirugias'] ?>" required>

  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos" value="<?php echo $row['Eg_apellidos'] ?>" required>
  <label>Días de estadia hospitalaria: <input type="number" name="dias" value="<?php echo $row['Eg_dias'] ?>" required></label>
    <label>Recomendaciones:</label> <input type="text" name="recomendaciones" value="<?php echo $row['Eg_recomendaciones'] ?>" required>
    <label>Médico(a) responsable:</label> <input type="text" name="dr" value="<?php echo $row['Eg_medico'] ?>" required>

  </div>
				<input type="submit" name="">
				<input type="reset" name="">
</div>

</form>

</body>
</html>