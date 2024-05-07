<?php

session_start();
include "../ConfiguracionBD/ConexionBD.php";
$usuario = $_POST['correo'];
$clave = $_POST['clave'];
$clave = sha1(md5($clave));
$objdb = new ConexionBDPDO();
$conexion = $objdb->conectar();
$consultasql = $conexion->prepare("Select * from usuarios where correo=:usuario and  clave=:clave");
$consultasql->bindParam(':usuario', $usuario, PDO::PARAM_INT);
$consultasql->bindParam(':clave', $clave, PDO::PARAM_INT);
$consultasql->execute();
$resultado = $consultasql->fetchAll();
if ($resultado) {
    $_SESSION['usuario'] = $usuario;
    header("Location:../Index.php");
} else {
    session_destroy();
    echo "<center><h2>Usuario o Clave Incorrectos</h2>";
    echo "<p><a href=../Acceso/Login.php>Volver a Inicio de Sesión</a></p></center>";
}
?> 