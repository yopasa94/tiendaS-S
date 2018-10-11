<?php
//incluye la clase Libro y CrudLibro
require_once('controller/ClienteCRUD.php');
require_once('model/Cliente.php');
 
$clienteCRUD= new ClienteCRUD();
$cliente= new Cliente();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$cliente->setNombre($_POST['nombre']);
		$cliente->setApellidos($_POST['apellidos']);
                $cliente->setTelefono($_POST['telefono']);
                $cliente->setEmail($_POST['email']);
                $cliente->setMensaje ($_POST['mensaje']);
		//llama a la función insertar definida en el crud
		$clienteCRUD->insertar($cliente);
                //header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}
?>