<?php
require 'conexion.php';
$where ="";
if (!empty($_POST)) {
$valor = $_POST['campo'];

if (!empty($valor)) {
	$where = "WHERE I_nombre LIKE '%$valor%'";
}

}

$sql = "SELECT * FROM tingresointrahospitalario $where";
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
<div class="consulta-div">

<h2>Consulta de Ingresos Intrahospitalarios</h2>

 <a style="padding: 10px; background: #435B4A; color: #FFFFFF; text-decoration: none; border-radius: 4px;" href="FormIntrahospitalario.php" id="n-registro"><span class="icon-plus"></span> Nuevo Registro</a>

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
				<th>Fecha de nacimiento</th>
				<th>Tipo de seguro</th>
				<th>N. Afiliado</th>
				<th>Centro transferido</th>
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
	<td><?php echo $row['Id_intrahospitalario']; ?></td>
	<td><?php echo $row['I_nombre']; ?></td>
	<td><?php echo $row['I_apellidos']; ?></td>
	<td><?php echo $row['I_sexo']; ?></td>
	<td><?php echo $row['I_edad']; ?></td>
	<td><?php echo $row['I_cedula']; ?></td>
	<td><?php echo $row['I_fechaN']; ?></td>
	<td><?php echo $row['I_tipoSeguro']; ?></td>
	<td><?php echo $row['I_afiliadoNumero']; ?></td>
	<td><?php echo $row['I_centro']; ?></td>
	<td><?php echo $row['I_NombreE']; ?></td>
	<td><?php echo $row['I_telefonoE']; ?></td>
	<td><?php echo $row['I_horaI']; ?></td>
	<td><?php echo $row['I_fechaI']; ?></td>
					<td style="width:3%;"><a href="ModificarIntrahospitalario.php?Id_intrahospitalario=<?php echo $row['Id_intrahospitalario']; ?>"><span class="icon-pencil" style="color: #FFFFFF;"></span></a></td>

				<td style="width:3%;"><a href="#" data-href="EliminarProgramado.php?Id_intrahospitalario=<?php echo $row['Id_intrahospitalario']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="icon-bin" style="color: #FFFFFF;"></span></a></td>
</tr>
	<?php } ?>
</tbody>
	</table>
</body>
</html>