<?php

try {
    require("ConexionBDPDO_1.php");
    $crearbd = 'CREATE DATABASE IF NOT EXISTS Comercial_1';
    $conexion->exec($crearbd);
//$conexion->query($crearbd);
    //$conexion->commit();
    echo ("Se ha ejecutado la consulta :" . $crearbd);
    echo "<h4>Se ha creado la base de datos <i>Comercial</i></h4><br/>";
} catch (PDOException $e) {
    echo "Error al intentar conectarse con la base de datos"
    . "<i>Comercial</i>.<br/>" . $e->getMessage();
}
//$conexion = null;
?>

