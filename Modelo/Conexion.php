<?php
	namespace Modelo;
	/**
	 * Clase Conexion
	 * 
	 * Esta clase maneja la conexión a la base de datos MySQL.
	 */

	class Conexion{	
		/**
		 * @var \mysqli $conectar La conexión MySQL.
		 */
		public $conectar;
	
		/**
		 * Constructor de la clase.
		 * 
		 * Establece la conexión a la base de datos.
		 *
		 * @return void
		 */
		public function __construct(){

			$this->conectar=new \mysqli('localhost','root','','covid');


		}

	}	

?>