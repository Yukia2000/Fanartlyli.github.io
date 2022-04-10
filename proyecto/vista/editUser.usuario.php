<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>editar usuario</title>
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<style>
		.form{
			width: 300px;
			height: 450px;
			display: flex;
	flex-direction: row;
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

	background-image: url("img/tile7.png");
		}

		a{
			color: black;
			text-decoration: none;
		}

		h3{
			height: 31px;
			background-color: rgba(255, 255, 255, 0.8);
			border-radius: 30px;
			width: 125px;
			text-align: center;
		}

		h1{
			height: 51px;
			background-color: rgba(218, 78, 204, 0.8);
			width: 206px;
			text-align: center;
			border-radius: 30px;
		}

		button{
			background-color: rgb(150, 38, 198);
			width: 136px;
			height: 43px;
			border-radius: 30px;
			font-family: 'Yanone Kaffeesatz', sans-serif;
			font-size: 21px;
		}
	</style>
</head>
<body>
	<h1>Editar notas</h1>
	<h3><a href="/DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser">Volver atras</a></h3>
	<div class="form">
	<form action="/DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=editUser&idus=<?= $id?>" method="get">

		<input type="hidden" name="mod" value="usuario" />
		<input type="hidden" name="ope" value="editUser" />
		<input type="hidden" name="idus" value="<?= $id ; ?>" />
		<label for="">Nombre:</label><br><br>
		<input type="text" name="nom" id="nom" value="<?= $nombre;?>"><br>
		<label for="">Apellidos:</label><br><br>
		<input type="text" name="ape" id="ape" value="<?= $apellidos;?>"><br>
		<label for="">Usuario:</label><br><br>
		<input type="text" name="usr" id="usr" value="<?= $usuario;?>"><br>
		<label for="">Email:</label><br><br>
		<input type="text" name="email" id="email" value="<?= $email;?>"><br>
		<label for="">Contraseña:</label><br><br>
		<input type="password" name="pass" id="pass" value="<?= $pass;?>"><br><br>
		<button type="submit">Cambiar</button>
	</form>
</div>
</body>
</html>