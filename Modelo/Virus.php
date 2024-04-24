<?php 
namespace Modelo;
use Modelo\Conexion;
/**
 * Clase Virus
 * 
 * Esta clase maneja las operaciones relacionadas <br>
 * con los virus registrados en el sistema.
 */
class Virus{
    /**
     * @var string $id Id del virus.
     */
    public $id;
    /**
     * @var string $tipo tipo de virus.
     */
    public $tipo;
    /**
     * @var date $incubacion tiempo de incubacion del virus.
     */
    public $incubacion;

    /**
     * Agrega un nuevo virus a la base de datos.
     *
     * @param string string $id Id del virus.
     * @param string $tipo tipo de virus.
     * @param date $incubacion
     * @return bool true si se agrega con éxito, false si falla.
     */
    function AltaV($id,$tipo,$incubacion){
        $engadido=false;
        $sql="INSERT INTO virus (id,tipo,incubacion)
        VALUES ('$id','$tipo','$incubacion')";
        $conexion=new Conexion();
        $query=$conexion->conectar->query($sql);
        if($query){
            $engadido=true;
        }
        return $engadido;
    }
    /**
     * Muestra la lista de virus registrados en el sistema
     *
     * @param array $result Lista de virus
     */
    function VerV(){
        $sql="SELECT * from virus";
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
     * Modifica un virus de la base de datos.
     *
     * @param string string $id Id del virus.
     * @param string string $tipo tipo de virus.
     * @param date $incubacion tiempo de incubacion del virus.
     * @return bool true si se modifica con éxito, false si falla.
     */
    function ModificarV($id,$tipo,$incubacion){
        $encontrado=false;
        $sql="UPDATE virus SET tipo = '$tipo', incubacion = $incubacion
        WHERE id = '$id'";
        $conexion=new Conexion();
        $query=$conexion->conectar->query($sql);
        $encontrado=$query;
    
        return $encontrado;
    }
    /**
     * Elimina un virus de la base de datos.
     *
     * @param string string $id Id del virus..
     * @return bool true si se elimina con éxito, false si falla.
     */
    function BajaV($id){
        $encontrado=false;
        $sql="DELETE from virus WHERE id='$id'";
        $conexion=new Conexion();
        $query=$conexion->conectar->query($sql);
        if($query){
            $encontrado=true;
        }
        return $encontrado;
    }
}
?>