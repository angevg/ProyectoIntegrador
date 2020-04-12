<?php
require 'conexion.php';
$where ="";
$sql = "SELECT * FROM tingresoemergencia";
$resultado = $mysqli->query($sql);
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
<link rel="stylesheet" type="text/css" href="css/consultastyle.css">
<link rel="stylesheet" type="text/css" href="fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/main.js"></script>
		<script src="js/jquery-3.5.0.min.js"></script>

</head>
<body>
<header>
	<!--Menu -->
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
<!--FIN de Menu -->

<div class="consulta-div">

<h2>Consulta de Egresados por Emergencia</h2>

 <a style="padding: 10px; background: #435B4A; color: #FFFFFF; text-decoration: none; border-radius: 4px;" href="FormProgramado.php" id="n-registro"><span class="icon-plus"></span> Nuevo Registro</a>

<div class="tb" align="center">

	<table class="tbregistros" border="1" bgcolor="#17202A" cellspacing="0">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Sexo</th>
				<th>Edad</th>
				<th>Cedula</th>
				<th>Tel.</th>
				<th>Fecha de nacimiento</th>
				<th>Tipo de seguro</th>
				<th>N. Afiliado</th>
				<th>Contacto de Emergencia</th>
				<th>Tel: de emergencia</th>
				<th>Hora de ingreso</th>
				<th>Fecha de ingreso</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) 
	{ ?>

<tr>
		<td><?php echo $row['Id_emergencia']; ?></td>
	<td><?php echo $row['E_nombre']; ?></td>
	<td><?php echo $row['E_apellidos']; ?></td>
	<td><?php echo $row['E_sexo']; ?></td>
	<td><?php echo $row['E_edad']; ?></td>
	<td><?php echo $row['E_cedula']; ?></td>
	<td><?php echo $row['E_telefono']; ?></td>
	<td><?php echo $row['E_fechaN']; ?></td>
	<td><?php echo $row['E_tipoSeguro']; ?></td>
	<td><?php echo $row['E_afiliadoNumero']; ?></td>
	<td><?php echo $row['E_NombreE']; ?></td>
	<td><?php echo $row['E_telefonoE']; ?></td>
	<td><?php echo $row['E_horaI']; ?></td>
	<td><?php echo $row['E_fechaI']; ?></td>
					<td style="width:3%;"><a href="ModificarEmergencia.php?Id_emergencia=<?php echo $row['Id_emergencia']; ?>"><span class="icon-pencil" style="color: #FFFFFF;"></span></a></td>

				<td style="width:3%;"><a href="#" data-href="EliminarProgramado.php?Id_emergencia=<?php echo $row['Id_emergencia']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="icon-bin" style="color: #FFFFFF;"></span></a></td>
</tr>
	<?php } ?>
</tbody>
	</table>
</body>
</html>