<?php
namespace Modelo;
use Modelo\Conexion;
/**
 * Clase Usario
 * 
 * Esta clase maneja las operaciones relacionadas <br>
 * con los usuarios no registrados en el sistema.
 */
class Usuario{
    /**
     * @var string $nombre nombre del usuario
     */
    public $nombre;
    /**
     * @var string $password contraseña del usuario
     */
    public $password;

    /**
     * Agrega un nuevo usuario a la base de datos.
     *
     * @param string $nombre El nombree del usuario
     * @param string $password La contraseña del usuario
     * @return bool true si se agrega con éxito, false si falla.
     */
    function Rexistro($nombre,$password){
        
        $this->nombre=$nombre;
        $this->password=$password;
        
        $conexion=new Conexion();
        $sql="INSERT INTO usuarios (`nombre`, `password`) VALUES ('$this->nombre', '$this->password')";
        $query=$conexion->conectar->query($sql);
        $conexion->conectar->close();
    }

    /**
     * Comprueba el login de un usuario en la base de datos
     *
     * @param string $nombre El nombree del usuario
     * @param string $password La contraseña del usuario
     * @return bool true si el usuario y la contraseña son correctos.
     */
      static function comprobar($nombre,$password){
        $user=false;
        $conexion=new Conexion();
        $sql="SELECT * from usuarios where nombre='$nombre'";
        $query=$conexion->conectar->query($sql);
        $conexion->conectar->close();

        if(empty($query)) $user=false;
        else {
          while($fila=$query->fetch_object()){
            if($fila->nombre==$nombre && $fila->password==$password) {
              $user=true;
              break;
            }
          }
        }
        
        return $user;
      }
    /**
     * Muestra la lista de virus registrados en el sistema
     *
     * @param Virus $virus Un objeto de la clase virus
     * @param array $datos Lista de virus
     */
    function VerV(){
        $virus=new Virus();
        $datos=$virus->VerV();
        
        require('Vista/Ver_Virus.php');
    }
}
?>