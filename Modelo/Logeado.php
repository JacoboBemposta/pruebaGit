<?php 
namespace Modelo;

use Modelo\Virus;
/**
 * Clase Logeado
 * 
 * Esta clase maneja las acciones relacionadas <br>
 * con los usuarios logeados en el sistema.
 */
class Logeado{
    /**
     * @var string $opcion La accion a realizar.
     */
    public $opcion;
    /**
     * Visualiza los contactos
     */
    function contacto(){
        require('Vista/Contacto.html');
    }

    /**
     * Realiza el alta de un virus.
     *
     * @return void
     */
    function AltaV(){
        require('Vista/altavirus.html');
        if(isset($_POST["id"])){
            $id=$_POST["id"];
            $tipo=$_POST["tipo"];
            $incubacion=$_POST["inc"];
            $virus=new Virus();
            $engadido=$virus->AltaV($id,$tipo,$incubacion);
            if($engadido) require('Vista/V_success.html');
            else require('Vista/V_error.html');
        }
        
    }
    /**
     * Realiza el alta de un paciente.
     *
     * @return void
     */
    function AltaP(){
        require('Vista/altapaciente.html');
        if(isset($_POST["codigo"])){
            $codigo=$_POST["codigo"];
            $nome=$_POST["nome"];
            $idade=$_POST["idade"];
            $paciente=new Paciente();
            $engadido=$paciente->AltaP($codigo,$nome,$idade);
            if($engadido) require('Vista/V_success.html');
            else require('Vista/V_error.html');
        }
        
    }
     /**
     * Realiza el alta de un contacto de contagio.
     *
     * @return void
     */
    function AltaC(){
        $paciente=new Paciente();
        $pacientes=$paciente->VerP();
        $vir=new Virus();
        $virus=$vir->VerV();
        require('Vista/altacontaxio.php');
        if(isset($_POST["seleccionvirus"])){
            $id_contaxio=$_POST["cod"];
            $id_virus=$_POST["seleccionvirus"];
            $nome=$_POST["seleccionpaciente"];
            $deteccion=$_POST["detec"];
            $fecha_fin=$_POST["fin"];
            $contaxio=new Contaxio();
            $engadido=$contaxio->AltaC($id_contaxio,$id_virus,$nome,$deteccion,$fecha_fin);
            if($engadido) require('Vista/V_success.html');
            else require('Vista/V_error.html');
        }
        
    }

    /**
     * Modifica un virus existente.
     *
     * @return void
     */
    function ModificarV(){
        $virus=new Virus();
        $datos=$virus->VerV();   
        require('Vista/Buscar_virus.php');
        if(isset($_POST["seleccion"])){
            $id=$_POST["seleccion"];
            $tipo=$_POST["tipo"];
            $incubacion=$_POST["incubacion"];
            $virus=new Virus();
            $modificado=$virus->ModificarV($id,$tipo,$incubacion);
            if($modificado)require('Vista/V_success.html');
            else require('Vista/V_error.html');
            }
        }

        /**
     * Modifica un paciente existente.
     *
     * @return void
     */
        function ModificarP(){

            $paciente=new Paciente();
            $pacientes=$paciente->VerP();   
            require('Vista/Buscar_paciente.php');
            if(isset($_POST["seleccionpaciente"])){
                $codigo=$_POST["seleccionpaciente"];
                $nome=$_POST["nome"];
                $idade=$_POST["idade"];
                $paciente=new Paciente();
                $modificado=$paciente->ModificarP($codigo,$nome,$idade);
                if($modificado)require('Vista/V_success.html');
                else require('Vista/V_error.html');
                }
            }

            /**
         * Modifica un virus contagio.
         *
         * @return void
         */
        function ModificarC(){

                $contaxio=new Contaxio();
                $contaxios=$contaxio->VerC();   
                require('Vista/Buscar_contaxio.php');
                if(isset($_POST["seleccioncontaxio"])){
                    $id_contaxio=$_POST["seleccioncontaxio"];
                    $id_virus=$_POST["id"];
                    $nome=$_POST["nome"];
                    $deteccion=$_POST["det"];
                    $fecha_fin=$_POST["fin"];
                    $contaxio=new Contaxio();
                    $modificado=$contaxio->ModificarC($id_contaxio,$id_virus,$nome,$deteccion,$fecha_fin);
                    if($modificado)require('Vista/V_success.html');
                    else require('Vista/V_error.html');
                    }
                }
        
    /**
     * Elimina un virus existente.
     *
     * @return void
     */   
    function EliminarV(){
        $virus=new Virus();
        $datos=$virus->VerV();   
        require('Vista/Eliminar_virus.php');

        if(isset($_POST["seleccion"])){
            $virus=new Virus();
            
            $encontrado=$virus->Baja($_POST["seleccion"]);
            if($encontrado) require('Vista/V_success.html');
            else require('Vista/V_error.html');
        }
    }

    /**
     * Elimina un Paciente existente.
     *
     * @return void
     */
        function EliminarP(){
            $paciente=new Paciente();
            $pacientes=$paciente->VerP();   
            require('Vista/Eliminar_paciente.php');
    
            if(isset($_POST["seleccion"])){
                $paciente=new Paciente();
                
                $encontrado=$paciente->EliminarP($_POST["seleccion"]);
                if($encontrado) require('Vista/V_success.html');
                else require('Vista/V_error.html');
                
            }
        }
       /**
         * Elimina un contagio existente.
         *
         * @return void
         */
        function EliminarC(){
            $contaxio=new Contaxio();
            $datos=$contaxio->VerC();   
            require('Vista/Eliminar_contaxio.php');
    
            if(isset($_POST["seleccion"])){
                $contaxio=new Contaxio();
                
                $encontrado=$contaxio->EliminarC($_POST["seleccion"]);
                if($encontrado) require('Vista/V_success.html');
                else require('Vista/V_error.html');
                
            }
    }
        
    /**
     * Muestra la lista de virus de contagio.
     *
     * @return void
     */
    function VerV(){
        $virus=new Virus();
        $datos=$virus->VerV();
        require('Vista/Ver_Virus.php');
    }

    /**
     * Muestra la lista de pacientes de contagio.
     *
     * @return void
     */
    function VerP(){
        $paciente=new Paciente();
        $datos=$paciente->VerP();
        require('Vista/Ver_Pacientes.php');
    }

    /**
     * Muestra la lista de contagios de contagio.
     *
     * @return void
     */
    function VerC(){
        $contaxio=new Contaxio();
        $contaxios=$contaxio->VerC();
        require('Vista/Ver_Contaxios.php');
    }
}

?>