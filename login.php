<!DOCTYPE html>
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
			<form action="logueo.php" method="POST">
				<input type="text" name="username" placeholder="Username" required>
				<input type="password" name="password" placeholder="Password" required>
				<input type="submit" value="Ingresar">
			</form>
		</div>
	</body>
</html>