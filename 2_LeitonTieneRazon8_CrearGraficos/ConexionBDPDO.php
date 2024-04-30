<?php

try {
    $conexion = new PDO("mysql:host=127.0.0.1:3307;dbname=Comercial;charset=utf8", "root",
            "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo (" La conexión es Exitosa ");
} catch (PDOException $e) {
    echo (" Problemas con la conexión con el servidor o la base de datos: " . $e->getMessage());
}
?> 