<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<style>
		table{
			/*border: 3px solid black;*/
			background-color: rgba(31, 188, 205, 0.8);
			text-align: center;
			border-radius: 30px;


		}

		body{
			background-image: url("img/tile.png");
			font-family: 'Yanone Kaffeesatz', sans-serif;
			font-size: 26px;
			padding-top: 0;

			display: flex;
	flex-direction: column;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
	align-content: center;
		}

		a{
			color: black;
			text-decoration: none;
		}

		#editar{
			color: green;
		}

		#borrar{
			color: red;
		}

		td{
			padding: 15px;
		}

		h3{
			height: 31px;
			background-color: rgba(255, 255, 255, 0.8);
			border-radius: 30px;
			width: 220px;
			text-align: center;
		}

		h1{
			height: 51px;
			background-color: rgba(218, 78, 204, 0.8);
			width: 369px;
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
	<h1>Listado de usuarios</h1>
	<h3><a href="/DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=createUser">Crear nuevo Usuario</a></h3>
	<h3><a href="/DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=createAdmin">Crear nuevo Admin</a></h3>
	
	<table>
		<td>Nombre</td>
		<td>Apellidos</td>
		<td>Usuario</td>
		<td>Rol</td>
		<td>Contraseña</td>
		<td>Email</td>

		<?php 
		foreach ($datos as $item) {
		?>

		<tr>
			<td><?=$item->getNombre();?></td>
			<td><?=$item->getApellidos();?></td>
			<td><?=$item->getUsuario();?></td>
			<td><?=$item->getRol();?></td>
			<td><?=$item->getPass();?></td>
			<td><?=$item->getEmail();?></td> 
			<td><a href="/DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=editUser&idus=<?= $item->getIdUs()?>"><i class="fas fa-edit" id="editar"></i>
</a></td>
			<td><a href="/DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=deleteUser&idus=<?= $item->getIdUs()?>"><i class="fas fa-trash-alt" id="borrar"></i>
</a></td>
		</tr>

		<?php
		}
		 ?>
	</table>
	<form action="../proyecto/index.php">
		<input type="hidden" name="mod" value="usuario">
		<input type="hidden" name="ope" value="logout">
		<button>Cerrar Sesion</button>
	</form>
</body>
</html>