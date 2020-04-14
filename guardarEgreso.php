<?php
require 'conexion.php';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$diagnostico = $_POST['diagnostico'];
$idprogramado = $_POST['id'];
$condicion = $_POST['condicion'];
$tratamiento = $_POST['tratamiento'];
$dias = $_POST['dias'];
$cirugias = $_POST['cirugias'];
$recomendaciones = $_POST['recomendaciones'];
$dr = $_POST['dr'];


$sql = "INSERT INTO tegreso (Eg_nombre, Eg_apellidos, Eg_estado, Eg_dias, Eg_condicion, Eg_recomendaciones, Eg_tratamiento, Eg_medico, Eg_cirugias, Id_programado) VALUES ('$nombre', '$apellidos', '$diagnostico', '$dias', '$condicion', '$recomendaciones', '$tratamiento', '$dr', '$cirugias', '$idprogramado')";                  
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


 <a style="padding: 10px; position: absolute; background: #07497B; color: #FFFFFF; text-decoration: none; border-radius: 4px;" href="lista.php" id="n-registro"><span class="icon-spinner11"></span> Regresar</a>

</div>

</body>
</html>