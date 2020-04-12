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
	<!--INICIO DE MENU-->
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
				<li><a href="FormProgramado.php"><span class="icon-calendar"></span>Ingreso por Citas</a></li>
				<li><a href="FormIntrahospitalario.php"><span class="icon-clipboard"></span>Ingreso Intrahospitalario</a></li>
				<li><a href="FormEmergencia.php"><span class="icon-aid-kit"></span>Emegencias</a></li>	
				<li><a href="FormEgreso.php"><span class="icon-user-check"></span> Egreso</a></li>	
				<li><a href="FormTraslado.php"><span class="icon-upload"></span> Traslado</a></li>
				<li><a href="FormDefuncion.php"><span class="icon-folder-upload"></span> Defuncion</a></li>				
				</ul>
			</li>



			<li class="submenu">
				<a href="#"><span class="icon-stats-bars"></span> Consultas <span class=" caret icon-circle-down"></span></a>
					<ul class="children">
				<li><a href="consulta.php"><span class="icon-calendar"></span>Ingreso por Citas</a></li>
				<li><a href="#"><span class="icon-clipboard"></span>Ingreso Intrahospitalario</a></li>
				<li><a href="#"><span class="icon-aid-kit"></span>Emegencias</a></li>	
				<li><a href="#"><span class="icon-user-check"></span> Egreso</a></li>	
				<li><a href="#"><span class="icon-upload"></span> Traslado</a></li>
				<li><a href="#"><span class="icon-folder-upload"></span> Defuncion</a></li>	
				</ul>
			</li>

			<li class="submenu">
				<a href="#"><span class="icon-paste"></span> Reportes <span class=" caret icon-circle-down"></span></a>
					<ul class="children">
				<li><a href="FormProgramado.php"><span class="icon-calendar"></span>Ingreso por Citas</a></li>
				<li><a href="FormIntrahospitalario.php"><span class="icon-clipboard"></span>Ingreso Intrahospitalario</a></li>
				<li><a href="FormEmergencia.php"><span class="icon-aid-kit"></span>Emegencias</a></li>	
				<li><a href="FormEgreso.php"><span class="icon-user-check"></span> Egreso</a></li>	
				<li><a href="FormTraslado.php"><span class="icon-upload"></span> Traslado</a></li>
				<li><a href="FormDefuncion.php"><span class="icon-folder-upload"></span> Defuncion</a></li>	
				</ul>
			</li>

		</ul>
	</nav>
	<!--FIN DE MENU-->
</header>

<div class="programado-form">
<form action="guardarProgramado.php" method="POST">

<h2>Ingreso programado</h2>
<div class="left">
  
  <label>Nombre:</label> <input type="text" name="nombre">
 <label>Sexo: </label>
 <div class="dr1"><label for=masculino> M</label><input class="rd" type="radio"  name="sexo" value="masculino"checked> </div>
	
<div class="dr1"><label for=femenino> F</label><input class="rd" type="radio"  name="sexo" value="femenino"></div>

<label>Nacionalidad: <input type="text" name="nacionalidad"></label>
<label>Teléfono: <input type="number" name="telefono"></label>
	<label>Dirección: <input type="text" name="direccion"></label>
<label>Tipo de seguro:</label>

<div class="dr1"><label for=ars> ARS</label><input class="rd" type="radio"  name="seguro" value="ars"checked> </div>
	
<div class="dr1"><label for=privado> Privado</label><input class="rd" type="radio"  name="seguro" value="privado"></div>
<label>Hora de ingreso: <input class="date" type="time" name="hora"></label>
  <label>Fecha de ingreso: <input class="date" type="date" name="fecha"></label>
  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="apellidos">
    <label>Edad: <input type="number" name="edad"></label>
  <label>Cédula: <input type="number" name="cedula"></label>
	<label>Fecha de nacimiento: <input class="date" type="date" name="fecha-nacimiento"></label>
<label>No. Afiliado: <input type="number" name="n-afiliado"></label>
<label>Contacto de emergencia: <input type="text" name="c-emergencia"></label>
<label>Teléfono emergencia: <input type="number" name="t-emergencia"></label>
  </div>
				<input type="submit" name="">
				<input type="reset" name="">
</div>

</form>

</body>
</html>