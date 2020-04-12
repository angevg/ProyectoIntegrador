<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$cedula = $_POST['cedula'];
$nacionalidad = $_POST['nacionalidad'];
$telefono = $_POST['telefono'];
$fechaN = $_POST['fecha-nacimiento'];
$direccion = $_POST['direccion'];
$seguro = isset($_POST['seguro']) ? $_POST['seguro'] :  0;
$nAfiliado = isset($_POST['n-afiliado']) ? $_POST['n-afiliado'] : null;
$cEmergencia = $_POST['c-emergencia'];
$tEmergencia = $_POST['t-emergencia'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];


$sql = "INSERT INTO tingresoprogramado (P_nombre, P_apellidos, P_sexo, P_edad, P_cedula, P_nacionalidad, P_telefono	, P_fechaN, P_direccion, P_tipoSeguro, P_afiliadoNumero, P_NombreE, P_telefonoE, P_horaI, P_fechaI) VALUES ('$nombre', '$apellidos', '$sexo', '$edad', '$cedula', '$nacionalidad', '$telefono', '$fechaN', '$direccion', '$seguro', '$nAfiliado', '$cEmergencia', '$tEmergencia', '$hora', '$fecha')";                  
$resultado = $mysqli->query($sql);
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

<div style="text-align: center;">
<?php
if ($resultado) { ?>
<h2>Registro Guardado</h2>
<?php } else { ?>
<h2>Error al Guardar</h2>
<?php } ?>


 <a style="padding: 10px; position: absolute; background: #07497B; color: #FFFFFF; text-decoration: none; border-radius: 4px;" href="ConsultaProgramado.php" id="n-registro"><span class="icon-spinner11"></span> Regresar</a>

</div>

</body>
</html>