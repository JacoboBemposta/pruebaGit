<?php
namespace Control;
@session_start();
use Modelo\Usuario;
use Modelo\Virus;
/**
 * Clase C_Usuario
 * @author Jacobo
 * Esta clase maneja las acciones que un usuario no logeado puede realizar en el sistema.
 */
class C_Usuario{
    /**
     * @var string $opcion La opción seleccionada por el usuario.
     */
    var $opcion;

    /**
     * Registra un usuario en el sistema
     *
     * @return void
     */
    function Rexistrar(){

        require('Vista/formulario.html');
    
        if (!empty($_POST['nombre']) && !empty($_POST['password']) ){
            $nombre = $_POST['nombre'];
            $password = $_POST['password'];
    
            $usuario=new Usuario();
    
            $user=$usuario->comprobar($nombre,$password);
    
            if(!$user){
                $usuario->Rexistro($nombre,$password);
                $_SESSION["nombre"]=$nombre;
                require_once('Vista/V_success.html');
                
                }else require_once('Vista/V_error.html');
            }
        
        }



/**
     * Logea un usuario en el sistema
     *
     * @return void
     */
function Login(){
    $user=null;
    require_once('Vista/formulario.html');

    if (!empty($_POST['nombre']) && !empty($_POST['password']) ){
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        
        $usuario=new Usuario();

        $user=$usuario->comprobar($nombre,$password);


        if($user){
            $usuario->nombre=$nombre;
            $usuario->password=$password;    
            $_SESSION["nombre"]=$nombre;

            require_once('Vista/V_success.html');
            }else {
                require_once('Vista/V_error.html');
            }
        }
    
    }

  /**
     * Muestra la lista de virus.
     *
     * @return void
     */
function VerV(){
    $usuario=new Usuario();
    $usuario->VerV();
}
}
?>