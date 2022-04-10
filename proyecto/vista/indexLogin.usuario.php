<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<style>
		.form{
			width: 300px;
			height: 225px;
			display: flex;
	flex-direction: column;
	flex-wrap: nowrap;
	justify-content: center;
	align-items: center;
	align-content: stretch;

	background-color: rgba(31, 188, 205, 0.8);
	border-radius: 30px;
	font-size: 21px;
		}

		body{
			font-family: 'Yanone Kaffeesatz', sans-serif;

			display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	align-content: center;

	background-image: url("img/tile2.jpg");
	background-image: url("../img/tile2.jpg");
		}

		#entrar{
			background-color: rgb(150, 38, 198);
			width: 97px;
			height: 34px;
			border-radius: 30px;
			font-family: 'Yanone Kaffeesatz', sans-serif;
			font-size: 21px;
		}

		#register{
			background-color: rgb(217, 210, 87);
			width: 119px;
			height: 29px;
			border-radius: 30px;
			font-family: 'Yanone Kaffeesatz', sans-serif;
			font-size: 21px;
		}

		h1{
			height: 51px;
			background-color: rgba(218, 78, 204, 0.8);
			width: 152px;
			text-align: center;
			border-radius: 30px;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<div class="form">
	<form action="../index.php">
		<input type="hidden" name="mod" value="usuario" />
		<input type="hidden" name="ope" value="compruebaUser"/><br>
		<label>Usuario:</label><br>
		<input type="text" name="usr" id="usr"><br>
		<label>Contraseña:</label><br>
		<input type="password" name="pass" id="pass">
		<button type="submit" id="entrar">Acceder</button>
	</form>
	<form action="../index.php">
		<input type="hidden" name="mod" value="usuario">
		<input type="hidden" name="ope" value="register"><br>
		<button id="register">Registrarse</button>
	</form>
	</div>
</body>
</html>