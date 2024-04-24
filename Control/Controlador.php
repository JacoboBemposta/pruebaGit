<?php
namespace Control;
/**
 * Clase Controlador
 * @author Jacobo
 * Esta clase maneja las acciones de los usuarios (logeados y no logeados).
 */
class Controlador{
    public $user;
    public $opcion;

    public function capturar_opcion(){
    
        $user='Invitado';
        $opcion="home";
        
        if(isset($_GET["user"])){
            $this->user=$_GET["user"];
        
        }
        if(isset($_GET["opcion"])){
            $this->opcion=$_GET["opcion"];
        }
      }

      

}



?>