<?php

	class PerroCRUD{
		// constructor de la clase
		public function __construct(){
                  
                }
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($perro){  
                        require_once 'core/Conectar.php';
                        $conectar= new Conectar();
			$conexionDb=$conectar->conexion();
			$insert=$conexionDb->prepare('INSERT INTO perro values(?,?)');
			$insert->bind_param("ss",$perro->getId(),$perro->getNombre());
                        $result=$insert->execute();
                          
		}
 
	
	}
?>