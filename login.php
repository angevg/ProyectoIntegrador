

<?php
session_start();
	$incorrecto = false;

if (empty($_SESSION) and isset($_POST['usuario'])){
	include ('conexion.php');
	/* con esto evitamos caracteres extraños para evitar ataques maliciosos por ejemplo, aunque en próximos
	 * posts veremos msqli->prepare para evitar mejor aun el sql injection */
	$nombre_de_usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
	$contraseña_introducida=$_POST['password'];
	//se hará la consulta a la base de datos
	$consulta='select * from tuser where U_username="'.$nombre_de_usuario.'"';
	//si hubo un resultado
	if ($ejecución_de_la_consulta=$conexion->query($consulta)){
		//se obtiene la contraseña registrada
		$datos_consulta=$ejecución_de_la_consulta->fetch_assoc();
		//se compara la contraseña
		$verificar_contraseña=password_verify($contraseña_introducida,$datos_consulta['password']);
		//si el resultado de la comparación ha sido verdadero
		if ($verificar_contraseña){
			//se asigna la sesión y redirecciona
			$_SESSION['usuario']=$nombre_de_usuario;
			$_SESSION['tipo-usuario']=$datos_consulta['admin'];
                        // Redirigimos al archivo home.php si todo va bien
			header ('index.php');
			echo "correcto";
		}//si la contraseña es incorrecta
		else{
			$incorrecto = true;
		}
	}//si el usuario no está registrado

	else{
		$incorrecto = true;
	}
}
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<style>
			body{


	  background-image: url("img/fondo.jpg");
			}

		.login-form {
			width: 300px;
			margin: 150px auto;
			padding: 10px;
			font-family: Tahoma, Geneva, sans-serif;
			background-color: rgba(23, 32, 42,.2);
						border-radius: 5px;

		}
		.login-form h1 {
			text-align: center;
			color: #17202A ;
			font-size: 24px;
	
		}
		.login-form input[type="password"],
		.login-form input[type="text"] {
			
			width: 100%;
			padding: 15px;
			border: 1px solid #dddddd;
			margin-bottom: 15px;
			box-sizing:border-box;
			border: 3px solid rgba(23, 32, 42,.5);
			border-radius: 5px;
		}
		.login-form input[type="submit"] {


			width: 100%;
			padding: 15px;
			background-color: #17202A ;
			border: 0;
			box-sizing: border-box;
			cursor: pointer;
			font-weight: bold;
			color: #ffffff;
			border-radius: 5px;
		}
			.login-form input[type="submit"]:hover {

			background-color: #34495E ;
		}
		</style>
	</head>
	<body>
		<div class="login-form">
			<h1>Login</h1>
			<form action="auth" method="POST">
				<input type="text" name="usuario" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit">
			</form>
		</div>
	</body>
</html>