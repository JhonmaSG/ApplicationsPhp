<?php

if (!isset($_GET["nit"])) {
    exit("No existe el NIT.....");
}
include_once "ConexionBD.php";
$objdb = new ConexionBDPDO();
$conexion = $objdb->conectar();
$nit = $_GET["nit"];
// escribir código faltante
$llamar_procedimiento = "call Eliminar_Registro('$nit')";
$sentenciasql = $conexion->prepare($llamar_procedimiento);
$sentenciasql->execute();
header("Location: Index.php");
?>