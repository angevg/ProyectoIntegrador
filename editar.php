<?php
require 'conexion.php';
$id = $_GET['Id_programado'];
$sql = "SELECT * FROM tingresoprogramado WHERE Id_programado ='id' ";
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
<form action="guardarProgramado.php" method="POST">

<h2>Modificar ingreso programado</h2>
<div class="left">
  
  <label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $row['P_nombre'] ?>" required>
 <label>Sexo: </label>
 <div class="dr1"><label for=M> M</label><input class="rd" type="radio" id="sexo[]" name="sexo" value="M" 
 	<?php if(strpos($rows['sexo'], "M")!== false) echo 'checked'; ?>> </div>
	
<div class="dr1"><label for=F> F</label><input class="rd" type="radio" id="sexo" name="sexo" value="F" 
 	<?php  if(strpos($rows['sexo'], "F")!== false) echo 'checked';?>> </div>

<label>Nacionalidad: <input type="text" name="nacionalidad" value="<?php echo $row['P_nacionalidad'] ?>" required></label>
<label>Teléfono: <input type="number" name="telefono" value="<?php echo $row['P_telefono'] ?>" required></label>
	<label>Dirección: <input type="text" name="direccion"  value="<?php echo $row['P_direccion'] ?>" required></label>
<label>Tipo de seguro:</label>

<div class="dr1"><label for=ars> ARS</label><input class="rd" type="radio"  name="seguro" value="ars"checked> </div>
	
<div class="dr1"><label for=privado> Privado</label><input class="rd" type="radio"  name="seguro" value="privado"></div>
<label>Hora de ingreso: <input class="date" type="time" name="hora"  value="<?php echo $row['P_horaI'] ?>" required></label>
  <label>Fecha de ingreso: <input class="date" type="date" name="fecha"  value="<?php echo $row['P_fechaI'] ?>" required></label>
  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos" value="<?php echo $row['P_apellidos'] ?>" required>
    <label>Edad: <input type="number" name="edad" value="<?php echo $row['P_edad'] ?>" required></label>
  <label>Cédula: <input type="number" name="cedula" value="<?php echo $row['P_edula'] ?>" required></label>
	<label>Fecha de nacimiento: <input class="date" type="date" name="fecha-nacimiento" value="<?php echo $row['P_fechaN'] ?>" required></label>
<label>No. Afiliado: <input type="number" name="n-afiliado" value="<?php echo $row['P_afiliadoNumero'] ?>" required></label>
<label>Contacto de emergencia: <input type="text" name="c-emergencia" value="<?php echo $row['P_NombreE'] ?>" required></label>
<label>Teléfono emergencia: <input type="number" name="t-emergencia" value="<?php echo $row['P_telefonoE'] ?>" required></label>
  </div>
				<input type="submit" name="">
				<input type="reset" name="">
</div>

</form>

</body>
</html>