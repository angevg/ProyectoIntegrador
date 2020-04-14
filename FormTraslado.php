<?php
require 'conexion.php';
$id = $_GET['Id_intrahospitalario'];
$sql = "SELECT * FROM tingresointrahospitalario WHERE Id_intrahospitalario ='$id' ";
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
<form method="POST" action="guardarTraslado.php">

<h2>Egreso por traslado</h2>

<div class="left">
   <input type="hidden" id="id" name="id" value="<?php echo $row['Id_intrahospitalario']; ?>" required>
  <label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $row['I_nombre']; ?>" required>
   <label>Diagnóstico de egreso:</label> <input type="text" name="diagnostico">
 <label>Condición de egreso: </label>
 <div class="dr1"><label for=peticion> A petición</label><input class="rd" type="radio"  name="condicion" value="peticion"></div>
	<div class="dr1"><label for=grave> Grave</label><input class="rd" type="radio"  name="condicion" value="grave"></div>


<label>Traslado a:</label> <input type="text" name="centro">
<label>Cirugías Practicadas:</label> <input type="text" name="cirugias">


  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos" value="<?php echo $row['I_apellidos']; ?>" required>
  <label>Días de estadia hospitalaria: <input type="number" name="dias"></label>
    <label>Recomendaciones:</label> <input type="text" name="recomendaciones">
    <label>Motivo de traslado:</label> <input type="text" name="motivo">
     <label>Médico(a) responsable:</label> <input type="text" name="dr">

  </div>
				<input type="submit" src="#" name="">
				<input type="reset" src="#" name="">
</div>

</form>

</body>
</html>