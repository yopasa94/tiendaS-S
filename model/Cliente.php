<?php
	class Cliente{
		private $nombre;
                private $apellidos;
                private $telefono;
                private $email;
                private $mensaje;
                
                
                function __construct() {
                    
                }
                function getNombre() {
                    return $this->nombre;
                }

                function getApellidos() {
                    return $this->apellidos;
                }

                function getTelefono() {
                    return $this->telefono;
                }

                function getEmail() {
                    return $this->email;
                }

                function getMensaje() {
                    return $this->mensaje;
                }

                function setNombre($nombre) {
                    $this->nombre = $nombre;
                }

                function setApellidos($apellidos) {
                    $this->apellidos = $apellidos;
                }

                function setTelefono($telefono) {
                    $this->telefono = $telefono;
                }

                function setEmail($email) {
                    $this->email = $email;
                }

                function setMensaje($mensaje) {
                    $this->mensaje = $mensaje;
                }



	}
?>