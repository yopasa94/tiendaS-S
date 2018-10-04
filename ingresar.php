<html>
<head>
	<title> Ingresar Libro</title>
</head>
<header>
Ingresa los datos del Libro
</header>
<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<td>Nombre libro:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Id:</td>
			<td><input type='text' name='id' ></td>
		</tr>
                <input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
 
</html>

