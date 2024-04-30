<?php

try {
    $conexion = new PDO("mysql:host=127.0.0.1:3307;dbname=Comercial;charset=utf8", "root",
            "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo (" Conexión con el servidor Exitoso: ");
} catch (PDOException $e) {
    echo (" Problemas con la conexión con el servidor o la base de datos: " . $e->getMessage());
}

try {

    $tabla_clientes = "USE Comercial; CREATE TABLE IF NOT EXISTS clientes ("
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
