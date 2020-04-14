<?php
require 'conexion.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$estado = $_POST['diagnostico'];
$condicion = $_POST['condicion'];
$recomendaciones = $_POST['recomendaciones'];
$centro = $_POST['centro'];
$motivo = $_POST['motivo'];
$id = $_POST['id'];
$id2 = $_POST['id2'];
$dias = $_POST['dias'];
$cirugias = $_POST['cirugias'];
$dr = $_POST['dr'];        
    

$sql = "UPDATE ttraslado SET T_nombre='$nombre', T_apeliidos='$apellidos', T_estado='$estado', T_dias='$dias', T_condicion='$condicion', T_recomendaciones='$recomendaciones', T_centro='$centro', T_motivo='$motivo',T_medico='$dr', T_cirugias='$cirugias', id_intrahospitalario='$id' WHERE Id_traslado='$id2'"; 
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

<div class="MOV" style="text-align: center;">
<?php
if ($resultado) { ?>
<h2>Registro Modificado</h2>
<?php } else { ?>
<h2>Error al Modificar</h2>
<?php } ?>


 <a style="padding: 10px; position: absolute; background: #07497B; color: #FFFFFF; text-decoration: none; border-radius: 4px;" href="consultaTaslado.php" id="n-registro"><span class="icon-spinner11"></span> Regresar</a>

</div>

</body>
</html>