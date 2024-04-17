<?php

try {
    require("ConexionBDPDO_1.php");
    $tabla_clientes = "USE Comercial_1; CREATE TABLE IF NOT EXISTS clientes ("
            . "nit VARCHAR(15), empresa VARCHAR(30),"
            . "direccion VARCHAR(20), telefono VARCHAR(15),"
            . "ciudad VARCHAR(20), fecha DATE, PRIMARY KEY (nit))";
    $conexion->exec($tabla_clientes);
    echo ("<br>Sentencia ejecuatada (PDO):<br/>" . $tabla_clientes);

    $tabla_pedidos = "CREATE TABLE IF NOT EXISTS pedidos ("
            . "nropedido INT(10) NOT NULL AUTO_INCREMENT, "
            . "nit VARCHAR(15), fechaentrega DATE,"
            . "comentario VARCHAR(50), PRIMARY KEY (nropedido))";
    $conexion->exec($tabla_pedidos);
    echo ("<br>Sentencia ejecuatada (PDO): <br/>" . $tabla_pedidos);
} catch (PDOException $e) {
    echo "Error al crear alguna de las tablas: <br/>" . $e->getMessage();
}
?>