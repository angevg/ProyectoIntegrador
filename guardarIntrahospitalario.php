<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$cedula = $_POST['cedula'];
$tel=$_POST['telefono'];
$nacionalidad = $_POST['nacionalidad'];
$fechaN = $_POST['fecha-nacimiento'];
$direccion = $_POST['direccion'];
$seguro = isset($_POST['seguro']) ? $_POST['seguro'] :  null;
$nAfiliado = isset($_POST['n-afiliado']) ? $_POST['n-afiliado'] : null;
$centro = $_POST['centro'];
$dr = $_POST['dr'];
$diagnostico = $_POST['diagnostico'];
$motivo = $_POST['m-traslado'];
$estado = $_POST['estado'];
$cEmergencia = $_POST['c-emergencia'];
$tEmergencia = $_POST['t-emergencia'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];


$sql = "INSERT INTO tingresointrahospitalario (I_nombre, I_apellidos, I_sexo, I_edad, I_nacionalidad, I_telefono, I_cedula, I_fechaN, I_direccion, I_tipoSeguro, I_afiliadoNumero,I_centro, I_dr, I_diagnoticoI, I_motivo, I_estado, I_NombreE, I_telefonoE, I_horaI, I_fechaI) VALUES ('$nombre', '$apellidos', '$sexo', '$edad', '$nacionalidad','$tel', '$cedula', '$fechaN', '$direccion', '$seguro', '$nAfiliado', '$centro', '$dr', '$diagnostico', '$motivo', '$estado', '$cEmergencia', '$tEmergencia', '$hora', '$fecha')";                  
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


 <a style="padding: 10px; position: absolute; background: #07497B; color: #FFFFFF; text-decoration: none; border-radius: 4px;" href="consultaIntrahospitalario.php" id="n-registro"><span class="icon-spinner11"></span> Regresar</a>

</div>

</body>
</html>