<?php
	@session_start();
	require_once('Autoload.php');
	require_once('Control/Controlador.php');
	require_once('Inicio/menu.php');
	use Control\Controlador;
	use Control\C_Usuario;
	use Control\C_logeado;
	//comprobamos si é a primeira vez que entramos no index
	$url=$_SERVER['REQUEST_URI'];
	$archivo = basename($url);
	if($archivo=='index.php'|| $archivo=='Covid'){
		
        require_once('Inicio/home.html');
    }
	

	$ruta=new Controlador();
	$ruta->capturar_opcion();

	if($ruta->user=="Invitado"){
		
		$usuario=new C_Usuario();
		switch ($ruta->opcion) {
			case 'login':
				$usuario->Login();
				$_SESSION["usuario"]=$usuario;

				break;
			case 'rexistro':
				$usuario->Rexistrar();
					break;
			case 'virus':
				$usuario->VerV();
					break;		
			default:
				# code...
				break;
		}
	}else{
		if(isset($_SESSION["nombre"])){
		$logeado=new C_logeado();
		$paciente=new C_logeado();
		$contaxio=new C_logeado();
		switch ($ruta->opcion) {
			case 'contacto':
				require('Vista/Contacto.html');
				break;
			case 'altaV':
				$logeado->AltaV();
				break;
			case 'eliminarV':		
				$logeado->EliminarV();
				break;
			case 'modificarV':
				$logeado->ModificarV();
				break;
			case 'verV':
				$logeado->VerV();
				break;

			case 'altaP':
				$paciente->AltaP();
				break;
			case 'eliminarP':
				$paciente->EliminarP();
				break;
			case 'modificarP':
				$paciente->ModificarP();
				break;
			case 'verP':
				$paciente->VerP();
				break;
			default:
				# code...
				break;
			case 'altaC':
				$contaxio->AltaC();
				break;
			case 'modificarC':
				$contaxio->ModificarC();
				break;
			case 'eliminarC':
				$contaxio->EliminarC();
				break;
			case 'verC':
				$contaxio->VerC();
				break;
		}
	}else header('index.php');
	}
?>