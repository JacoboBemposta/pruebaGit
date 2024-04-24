<?php
namespace Modelo;
use Modelo\Conexion;
/**
 * Clase Contaxio
 * 
 * Esta clase maneja las operaciones relacionadas <br>
 * con los contagio del sistema.
 */
class Contaxio{
    /**
     * @var int $id_contaxio El ID del contagio.
     */
    public $id_contaxio;
    /**
     * @var int $id_virus El ID del virus asociado al paciente de contagio.
     */
    public $id_virus;
    /**
     * @var string $nome El nombre del paciente de contagio.
     */
    public $nome;
    /**
     * @var string $deteccion La fecha de detección del contagio.
     */
    public $deteccion;
    /**
     * @var string $fecha_fin La fecha de fin del contagio.
     */
    public $fecha_fin;
    
    /**
     * Agrega un nuevo contagio a la base de datos.
     *
     * @param int $id_contaxio El ID del contacto de contagio.
     * @param int $id_virus El ID del virus asociado al contacto de contagio.
     * @param string $nome El nombre del contacto de contagio.
     * @param string $deteccion La fecha de detección del contagio.
     * @param string $fecha_fin La fecha de fin del contagio.
     * @return bool true si se agrega con éxito, false si falla.
     */
    function AltaC($id_contaxio,$id_virus,$nome,$deteccion,$fecha_fin){
        $engadido=false;
        $conexion=new Conexion();
        $sql="INSERT INTO contaxios (`id_contaxio`,`id_virus`, `nome`, `deteccion`, `fecha_fin`) VALUES ('$id_contaxio', '$id_virus', '$nome', '$deteccion', '$fecha_fin')";

        $query=$conexion->conectar->query($sql);
        
        if($query){
            $engadido=true;
        }
        $conexion->conectar->close();
        return $engadido;
    }

    /**
     * Modifica un contagio existente en la base de datos.
     *
     * @param int $id_contaxio El ID del contacto de contagio.
     * @param int $id_virus El ID del virus asociado al contacto de contagio.
     * @param string $nome El nombre del contacto de contagio.
     * @param string $deteccion La fecha de detección del contagio.
     * @param string $fecha_fin La fecha de fin del contagio.
     * @return bool true si se modifica con éxito, false si falla.
     */
      function ModificarC($id_contaxio,$id_virus,$nome,$deteccion,$fecha_fin){
        $engadido=false;
        $conexion=new Conexion();
        $sql="UPDATE contaxios SET id_contaxio = '$id_contaxio' , id_virus = '$id_virus' ,
        nome = '$nome', deteccion = '$deteccion' , fecha_fin = '$fecha_fin' 
        WHERE id_contaxio = '$id_contaxio'";
        $query=$conexion->conectar->query($sql);
        print($sql);
        
          if($query){
              $engadido=true;
          }
          $conexion->conectar->close();
          return $engadido;
      }

      /**
       * Elimina un contagio de la base de datos.
       *
       * @param int $id_contaxio El ID del  contagio a eliminar.
       * @return bool true si se elimina con éxito, false si falla.
       */
      function EliminarC($id_contaxio){
        $engadido=false;
        $conexion=new Conexion();
        $sql="DELETE from contaxios WHERE id_contaxio='$id_contaxio'";
        $query=$conexion->conectar->query($sql);
        
          if($query){
              $engadido=true;
          }
          $conexion->conectar->close();
        return $engadido;
      }

      /**
       * Obtiene la lista de todos los  contagio de la base de datos.
       *
       * @return array La lista de  contagio.
       */
      function VerC(){
        $sql="SELECT * from contaxios";
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
}
?>