<?php
//incluye la clase Libro y CrudLibro
require_once('controller/PerroCRUD.php');
require_once('model/Perro.php');
 
$crud= new PerroCRUD();
$perro= new Perro();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$perro->setNombre($_POST['nombre']);
		$perro->setId($_POST['id']);
		//llama a la función insertar definida en el crud
		$crud->insertar($perro);
                echo 'paso';   
                header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}
?>