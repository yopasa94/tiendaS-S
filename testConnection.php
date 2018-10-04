<?php
 

try {
     require_once 'core/Conectar.php';
            $conectar= new Conectar();
            $conexionDb=$conectar->conexion();
            echo "Resultado ".$conexionDb->host_info.$conexionDb->connect_error;
            echo "<br>";
    echo "Connected successfully"; 
    
			$nombre="Si";
                        $id="Yopias";
			$insert=$conexionDb->prepare('INSERT INTO perro values(?,?)');
			$insert->bind_param('ss',$nombre , $id);
                        /*$insert->bind_param("s","yopasa");*/
                        $result=$insert->execute();
                        echo $result;
    } catch(PDOException $e) {    
    echo "Connection failed: " . $e->getMessage();
    }
?>