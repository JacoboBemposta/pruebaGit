<?php 
namespace Modelo;
use Modelo\Conexion;
/**
 * Clase Paciente
 * 
 * Esta clase maneja las operaciones relacionadas <br>
 * con los pacientes registrados en el sistema.
 */
class Paciente{
    /**
     * @var string $codigo codigo del paciente
     */
    public $codigo;
    /**
     * @var string $nome Nombre del paciente
     */
    public $nome;
    /**
     * @var int $idade Edad del paciente
     */
    public $idade;
    
    /**
     * Agrega un nuevo paciente a la base de datos.
     *
     * @param string $codigo El ID del paciente
     * @param string $nome EEl nombre del paciente
     * @param int $idade La edad del paciente
     * @return bool true si se agrega con éxito, false si falla.
     */
    function AltaP($codigo,$nome,$idade){
        $engadido=false;
        $sql="INSERT INTO pacientes (cod,nome,idade)
        VALUES ('$codigo','$nome',$idade)";
        $conexion=new Conexion();
        $query=$conexion->conectar->query($sql);
        if($query){
            $engadido=true;
        }
        $conexion->conectar->close();
        return $engadido;
    }
    /**
     * Muestra la lista de pacientes registrados en el sistema
     *
     * @return array lista de pacientes registrados.
     */
    function VerP(){
        $sql="SELECT * from pacientes";
        $conexion=new Conexion();
        $query=$conexion->conectar->query($sql);
        $result=array();
        $i=0;
        while($fila=$query->fetch_object()){
            $result[$i]=$fila;
            $i++;
        }   
        return $result;
    }
    /**
     * Agrega un nuevo paciente a la base de datos.
     *
     * @param string $codigo El ID del paciente
     * @param string $nome EEl nombre del paciente
     * @param int $idade La edad del paciente
     * @return bool true si se modifica con éxito, false si falla.
     */
    function ModificarP($codigo,$nome,$idade){
        $encontrado=false;
        $sql="UPDATE pacientes SET nome = '$nome', idade = $idade
        WHERE codigo = '$codigo'";
        $conexion=new Conexion();
        $query=$conexion->conectar->query($sql);
        $encontrado=$query;
    
        return $encontrado;
    }
    /**
     * elimina un paciente de la base de datos.
     *
     * @param string $codigo El ID del paciente
     * @return bool true si se elimina con éxito, false si falla.
     */
    function EliminarP($codigo){
        $encontrado=false;
        $sql="DELETE from pacientes WHERE codigo='$codigo'";
        $conexion=new Conexion();
        $query=$conexion->conectar->query($sql);
        if($query){
            $encontrado=true;
        }
        return $encontrado;
    }
}
?>