<?php

if (!isset($_GET["nit"])) {
    exit("No existe el NIT.....");
}
include_once "ConexionBD.php";
$objdb = new ConexionBDPDO();
$conexion = $objdb->conectar();
$nit = $_GET["nit"];
$consultasql = "Select * FROM clientes where nit='" . $nit . "'";
$resultado = $conexion->prepare($consultasql);
$resultado->execute();
if ($resultado) {
    $eliminar = $conexion->prepare("DELETE FROM clientes WHERE nit = ?");
    $registro = $eliminar->execute([$nit]);
}
header("Location: Index.php");
?>