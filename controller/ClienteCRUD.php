<?php

	class ClienteCRUD{
		// constructor de la clase
		public function __construct(){
                  
                }
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($persona){  
                        require_once 'core/Conectar.php';
                        $conectar= new Conectar();
			$conexionDb=$conectar->conexion();
			$insert=$conexionDb->prepare('INSERT INTO persona values (?,?,?,?,?)');
                        $types="sssss";
			$insert->bind_param($types,$persona->getNombre(),$persona->getApellidos(),$persona->getTelefono(),$persona->getEmail(),$persona->getMensaje());
                        $result= $insert->execute();
                        
                        if ($result) {
                                            echo "Registro Insertado";
                        } else {
                                        echo "Error en insercion";    
                        }

                          
		}
 
	
	}
?>