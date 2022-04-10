<?php 

require_once "modelo/Usuario.php";

class controllerUsuario{

	public function __construct()
	{

	}

public function indexAdminUser(){

	if (isset($_SESSION['rol'])) {

		if ($_SESSION['rol']=='admin') {

	$datos= Usuario::getAllUsers();
	require_once "vista/indexAdminUser.usuario.php";
		} elseif($_SESSION['rol']=='usuario'){
			require_once "vista/indexUser.usuario.php";
		}else{
			header("Location: vista/indexLogin.usuario.php") ;
		}
	} else{
		header("Location: vista/indexLogin.usuario.php") ;
	}
}



public function createUser(){

	if(isset($_GET['usr'])):
	$usr = new Usuario();
	$usr->setNombre($_GET['nom']);
	$usr->setApellidos($_GET['ape']);
	$usr->setUsuario($_GET['usr']);
	$usr->setPass($_GET['pass']);
	$usr->setEmail($_GET['email']);
	$usr->insertUser();

	header("Location: /DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser") ;
else:
	require_once "vista/crearUser.usuario.php";
endif;
}

public function register(){

	if(isset($_GET['usr'])):
	$usr = new Usuario();
	$usr->setNombre($_GET['nom']);
	$usr->setApellidos($_GET['ape']);
	$usr->setUsuario($_GET['usr']);
	$usr->setPass($_GET['pass']);
	$usr->setEmail($_GET['email']);
	$usr->insertUser();

	header("Location: vista/indexLogin.usuario.php") ;
else:
	require_once "vista/register.usuario.php";
endif;
}

public function createAdmin(){

	if(isset($_GET['usr'])):
	$usr = new Usuario();
	$usr->setNombre($_GET['nom']);
	$usr->setApellidos($_GET['ape']);
	$usr->setUsuario($_GET['usr']);
	$usr->setPass($_GET['pass']);
	$usr->setEmail($_GET['email']);
	$usr->insertAdmin();

	header("Location: /DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser") ;
else:
	require_once "vista/crearAdmin.usuario.php";
endif;
}

public function editUser(){

	$id=$_GET['idus']??"";

if(!empty($id)):
	$usr= Usuario::getUser($id);
	if(isset($_GET['usr'])):

		$usr->setNombre($_GET['nom']);
		$usr->setApellidos($_GET['ape']);
		$usr->setUsuario($_GET['usr']);
		$usr->setPass($_GET['pass']);
		$usr->setEmail($_GET['email']);
		$usr->updateUser();
		header("Location: /DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser") ;

	else:
		$nombre=$usr->getNombre();
		$apellidos=$usr->getApellidos();
		$usuario=$usr->getUsuario();
		$pass=$usr->getPass();
		$email=$usr->getEmail();
		require_once "vista/editUser.usuario.php";
	endif;

else:
	header("Location: /DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser") ;
endif;
}

public function deleteUser(){
	if(isset($_GET['idus'])):
	 Usuario::deleteUser($_GET['idus']);
	header("Location: /DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser") ;
else:
	header("Location: /DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser") ;
endif;
}

public function compruebaUser(){

	$usr = $_GET["usr"] ;
	if(!empty($usr)):

		if($usr=Usuario::getUserByName($usr)):

			$rol= $usr->getRol();
		
			if(isset($_GET['usr'])):
				if(Usuario::compruebaUser($_GET['usr'], $_GET['pass'])):
				
					if($rol=='admin'):
					$_SESSION['rol']='admin';
					header("Location: /DWES/NO DUAL/proyecto/index.php?mod=usuario&ope=indexAdminUser") ;
				
					else:
						$_SESSION['rol']='usuario';
						require_once "vista/indexUser.usuario.php";
					
					endif;
				else:
				header("Location: vista/indexLogin.usuario.php") ;
				echo "El usuario y/o la contraseña son incorrectos";
				endif;
			else:
			header("Location: vista/indexLogin.usuario.php") ;
			echo "El usuario y/o la contraseña son incorrectos";
			endif;
		else:
		header("Location: vista/indexLogin.usuario.php") ;
		echo "El usuario y/o la contraseña son incorrectos";
		endif;
	endif;
}

public function indexLogin(){
	 header("Location: vista/indexLogin.usuario.php") ;
}


public function logout(){
	session_destroy();
	$_SESSION=array();

	header("Location: vista/indexLogin.usuario.php") ;
}
}

 ?>