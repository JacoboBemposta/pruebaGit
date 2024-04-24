<?php 
namespace Control;
@session_start();
use Modelo\Logeado;
use Modelo\Virus;
use Modelo\Paciente;
use Modelo\Contaxio;

    



/**
 * Clase C_logeado
 * @author Jacobo
 * Esta clase maneja las acciones que un usuario logeado puede realizar en el sistema.
 */
class C_logeado{
     /**
     * @var string $opcion La opción seleccionada por el usuario.
     */
    var $opcion;

    /**
     * Muestra el formulario de contacto.
     *
     * @return void
     */
    function contacto(){
        $login=new Logeado();
        $login->contacto();
    }
    /**
     * Realiza el alta de un virus.
     *
     * @return void
     */
    function AltaV(){
        $login=new Logeado();
        $login->AltaV();
    }
     /**
     * Realiza el alta de un paciente.
     *
     * @return void
     */
    function AltaP(){
        $paciente=new Logeado();
        $paciente->AltaP();
    }
    /**
     * Realiza el alta de un contagio.
     *
     * @return void
     */
    function AltaC(){
        $contaxio=new Logeado();
        $contaxio->AltaC();
    }
     /**
     * Elimina un virus existente.
     *
     * @return void
     */
    function EliminarV(){
        $login=new Logeado();
        $login->EliminarV();
    }
    /**
     * Elimina un paciente existente.
     *
     * @return void
     */
    function EliminarP(){
        $paciente=new Logeado();
        $paciente->EliminarP();
    }
    /**
     * Elimina un contacto existente.
     *
     * @return void
     */
    function EliminarC(){
        $contaxio=new Logeado();
        $contaxio->EliminarC();
    }
    /**
     * Modifica un virus existente.
     *
     * @return void
     */
    function ModificarV(){
        $login=new Logeado();
        $login->ModificarV();
    }
    /**
     * Modifica un paciente existente.
     *
     * @return void
     */
    function ModificarP(){
        $paciente=new Logeado();
        $paciente->ModificarP();
    }
    /**
     * Modifica un contacto existente.
     *
     * @return void
     */
    function ModificarC(){
        $contaxio=new Logeado();
        $contaxio->ModificarC();
    }
    /**
     * Muestra la lista de virus.
     *
     * @return void
     */
    function VerV(){
        $login=new Logeado();
        $login  ->VerV();
    }
    /**
     * Muestra la lista de pacientes.
     *
     * @return void
     */
    function VerP(){
        $paciente=new Logeado();
        $paciente->VerP();
    }
    /**
     * Muestra la lista de contactos.
     *
     * @return void
     */
    function VerC(){
        $contaxio=new Logeado();
        $contaxio->VerC();
    }
}

?>