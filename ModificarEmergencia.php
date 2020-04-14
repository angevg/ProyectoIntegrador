<?php
require 'conexion.php';
$id = $_GET['Id_emergencia'];
$sql = "SELECT * FROM tingresoemergencia WHERE Id_emergencia ='$id' ";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	  <meta name="theme-color" content="#000000">
  <meta name="author" content="Ana Angelica VG">
	<title>Ingreso</title>
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
<form action="EditarEmergencia.php" method="POST">

<h2>Ingreso por emergencia</h2>
<div class="left">
    <input type="hidden" id="id" name="id" value="<?php echo $row['Id_emergencia']; ?>" required>

  <label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $row['E_nombre'] ?>" required>
 <label>Sexo: </label>
 <div class="dr1"><label for=masculino> M</label><input class="rd" type="radio"  name="sexo" value="M"> </div>
	
<div class="dr1"><label for=femenino> F</label><input class="rd" type="radio"  name="sexo" value="F"></div>

<label>Nacionalidad: <input type="text" name="nacionalidad" value="<?php echo $row['E_nacionalidad'] ?>" required></label>
<label>Teléfono: <input type="number" name="telefono" value="<?php echo $row['E_telefono'] ?>" required></label>
	<label>Dirección: <input type="text" name="direccion" value="<?php echo $row['E_direccion'] ?>" required></label>
<label>Tipo de seguro:</label>

<div class="dr1"><label for=ars> ARS</label><input class="rd" type="radio"  name="seguro" value="ARS"> </div>
	
<div class="dr1"><label for=privado> Privado</label><input class="rd" type="radio"  name="seguro" value="Privado"></div>
<label>Hora de ingreso: <input class="date" type="time" name="hora" value="<?php echo $row['E_horaI'] ?>" required></label>
  <label>Fecha de ingreso: <input class="date" type="date" name="fecha" value="<?php echo $row['E_fechaI'] ?>" required></label>
  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos" value="<?php echo $row['E_apellidos'] ?>" required>
    <label>Edad: <input type="number" name="edad" value="<?php echo $row['E_edad'] ?>" required></label>
  <label>Cédula: <input type="number" name="cedula" value="<?php echo $row['E_cedula'] ?>" required></label>
	<label>Fecha de nacimiento: <input class="date" type="date" name="fecha-nacimiento" value="<?php echo $row['E_fechaN'] ?>" required></label>
<label>No. Afiliado: <input type="number" name="n-afiliado" value="<?php echo $row['E_afiliadoNumero'] ?>" required></label>
 <label>Diagnóstico de ingreso:</label> <input type="text" name="diagnostico" value="<?php echo $row['E_diagnoticoI'] ?>" required>
<label>Contacto de emergencia: <input type="text" name="c-emergencia" value="<?php echo $row['E_NombreE'] ?>" required></label>
<label>Teléfono emergencia: <input type="number" name="t-emergencia" value="<?php echo $row['E_telefonoE'] ?>" required></label>
  </div>
				<input type="submit" name="">
				<input type="reset" name="">
</div>

</form>

</body>
</html>