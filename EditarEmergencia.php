<?php
require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$sexo = $_POST['sexo'];
$edad = $_POST['edad'];
$cedula = $_POST['cedula'];
$nacionalidad = $_POST['nacionalidad'];
$telefono = $_POST['telefono'];
$fechaN = $_POST['fecha-nacimiento'];
$direccion = $_POST['direccion'];
$seguro = isset($_POST['seguro']) ? $_POST['seguro'] :  null;
$nAfiliado = isset($_POST['n-afiliado']) ? $_POST['n-afiliado'] : null;
$diagnostico = $_POST['diagnostico'];
$cEmergencia = $_POST['c-emergencia'];
$tEmergencia = $_POST['t-emergencia'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];            

$sql = "UPDATE tingresoemergencia SET E_nombre='$nombre', E_apellidos='$apellidos', E_sexo='$sexo', E_edad='$edad', E_nacionalidad='$nacionalidad', E_cedula='$cedula', E_telefono='$telefono', E_fechaN='$fechaN', E_direccion='$direccion', E_tipoSeguro='$seguro', E_afiliadoNumero='$nAfiliado', E_diagnoticoI='$diagnostico', E_NombreE='$cEmergencia', E_telefonoE='$tEmergencia', E_horaI='$hora', E_fechaI='$fecha' WHERE Id_emergencia='$id'";      
$resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	  <meta name="theme-color" content="#000000">
  <meta name="author" content="Ana Angelica VG">
	<title>Modificar</title>
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
<h2>Registro Modificado</h2>
<?php } else { ?>
<h2>Error al Modificar</h2>
<?php } ?>


 <a style="padding: 10px; position: absolute; background: #07497B; color: #FFFFFF; text-decoration: none; border-radius: 4px;" href="consultaEmergencia.php" id="n-registro"><span class="icon-spinner11"></span> Regresar</a>

</div>

</body>
</html>