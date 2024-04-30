<?php

try {
    require("ConexionBDPDO.php");
    $tabla_frutas = "CREATE TABLE IF NOT EXISTS frutas (nombre VARCHAR(15) NOT NULL,  
                         cantidad INT NOT NULL)";
    $conexion->exec($tabla_frutas);
    echo ("Sentencia ejecutada (PDO):<br/>" . $tabla_frutas);
    $insertar_registro = $conexion->prepare("insert into frutas(nombre,cantidad) values(?,?);");
    $insertar_registro->bindValue(1, 'Manzana');
    $insertar_registro->bindValue(2, 30);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Manzana');
    $insertar_registro->bindValue(2, 10);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Manzana');
    $insertar_registro->bindValue(2, 12);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Naranjas');
    $insertar_registro->bindValue(2, 21);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Naranjas');
    $insertar_registro->bindValue(2, 40);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Naranjas');
    $insertar_registro->bindValue(2, 21);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Peras');
    $insertar_registro->bindValue(2, 15);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Peras');
    $insertar_registro->bindValue(2, 18);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Bananos');
    $insertar_registro->bindValue(2, 25);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Bananos');
    $insertar_registro->bindValue(2, 17);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Mandarinas');
    $insertar_registro->bindValue(2, 16);
    $insertar_registro->execute();
    $insertar_registro->bindValue(1, 'Mandarinas');
    $insertar_registro->bindValue(2, 22);
    $insertar_registro->execute();
} catch (PDOException $e) {
    echo "Error....." . $e->getMessage();
}
//$conexion = null;
?> 