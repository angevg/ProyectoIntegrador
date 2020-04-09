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
</head>
<body>
<header>
	<div class="menu_bar">
		
<a href="#" class="bt-menu"><span class="icon-menu"></span> Menu</a>

	</div>

	<nav>
		<ul>

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
<form action="POST">

<h2>Ingreso intrahospitalario</h2>
<div class="left">
  
  <label>Nombre:</label> <input type="text" name="">
   <label>Centro que lo refiere:</label> <input type="text" name="">
<label>Sexo: </label>
 <div class="dr1"><label for=masculino> M</label><input class="rd" type="radio"  name="sexo" value="masculino"checked> </div>
	
<div class="dr1"><label for=femenino> F</label><input class="rd" type="radio"  name="sexo" value="femenino"></div>

<label>Nacionalidad: <input type="text" name=""></label>
<label>Teléfono: <input type="number" name=""></label>
	<label>Dirección: <input type="text" name=""></label>
<label>Tipo de seguro:</label>

<div class="dr1"><label for=ars> ARS</label><input class="rd" type="radio"  name="seguro" value="ars"checked> </div>
	
<div class="dr1"><label for=privado> Privado</label><input class="rd" type="radio"  name="seguro" value="privado"></div>
 <label>Motivo de traslado:</label> <input type="text" name="">
<label>Hora de ingreso: <input class="date" type="time" name=""></label>
  <label>Fecha de ingreso: <input class="date" type="date" name=""></label>
  </div>
  

  <div class="right">
    <label>Apellidos:</label> <input type="text" name="">
     <label>Doctor (a):</label> <input type="text" name="">
 <label>Edad: <input type="number" name=""></label>
  <label>Cédula: <input type="number" name=""></label>
	<label>Fecha de nacimiento: <input class="date" type="date" name=""></label>
<label>No. Afiliado: <input type="number" name=""></label>
 <label>Diagnóstico de ingreso:</label> <input type="text" name="">
  <label>Estado del paciente:</label> <input type="text" name="">
<label>Contacto de emergencia: <input type="text" name=""></label>
<label>Teléfono emergencia: <input type="number" name=""></label>
  </div>
				<input type="submit" name="">
				<input type="reset" name="">
</div>

</form>

</body>
</html>