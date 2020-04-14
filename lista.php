<?php
require 'conexion.php';
$where ="";

if (!empty($_POST)) {
$valor = $_POST['campo'];

if (!empty($valor)) {
	$where = "WHERE P_nombre LIKE '%$valor%'";
}

}
$sql = "SELECT * FROM tingresoprogramado $where";
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	  <meta name="theme-color" content="#000000">
  <meta name="author" content="Ana Angelica VG">
	<title>Consulta</title>
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

<h2>Registros</h2>

<div align="right">
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		<B> Nombre: </B><input type="text" id="campo" name="campo" style="padding: 5px;border-radius: 4px;"  >
		<input type="submit" name="" id="enviar"  name="enviar" value="Buscar" style="padding: 5px; background:#1B515F ; color: #FFFFFF; text-decoration: none; border:none; border-radius: 4px;" >
	</form>
</div>
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

			</tr>
		</thead>
<tbody>
	<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) 
	{ ?>

<tr>
		<td><?php echo $row['Id_programado']; ?></td>
	<td><?php echo $row['P_nombre']; ?></td>
	<td><?php echo $row['P_apellidos']; ?></td>
	<td><?php echo $row['P_sexo']; ?></td>
	<td><?php echo $row['P_edad']; ?></td>
	<td><?php echo $row['P_cedula']; ?></td>
	<td><?php echo $row['P_telefono']; ?></td>
	<td><?php echo $row['P_fechaN']; ?></td>
	<td><?php echo $row['P_tipoSeguro']; ?></td>
	<td><?php echo $row['P_afiliadoNumero']; ?></td>
	<td><?php echo $row['P_NombreE']; ?></td>
	<td><?php echo $row['P_telefonoE']; ?></td>
	<td><?php echo $row['P_horaI']; ?></td>
	<td><?php echo $row['P_fechaI']; ?></td>
					<td style="width:3%;"><a href="FormEgreso.php?Id_programado=<?php echo $row['Id_programado']; ?>"><span class="icon-pencil" style="color: #FFFFFF;"></span></a></td>
</tr>
	<?php } ?>
</tbody>
	</table>
</body>
</html>