<?php

include "../ConfiguracionBD/ConexionBD.php";
$identificacion = $_POST['identificacion'];
$nombres = $_POST['nombres'];
$correo = $_POST['correo'];
$clave_1 = $_POST['clave_1'];
$clave_2 = $_POST['clave_2'];
$fecha = date("d/m/y");
$nivel = $_POST['nivel'];
$objdb = new ConexionBDPDO();
$conexion = $objdb->conectar();
$consultasql = $conexion->prepare("Select * from usuarios where identificacion=" . $identificacion);
$consultasql->execute();
$resultado = $consultasql->fetchAll();
if ($resultado) {
    echo "El usuario ya existe en la Base de Datos";
} else {
    if ($clave_1 != $clave_2) {
        echo "Las claves no coinciden....";
    } else {
        $clave_1 = sha1(md5($clave_1));
        $sentenciasql = $conexion->prepare("Insert into usuarios  (identificacion,nombres,correo,clave,idrol,fecha) values(?,?,?,?,?,?);");
        $sentenciasql->bindParam(1, $identificacion);
        $sentenciasql->bindParam(2, $nombres);
        $sentenciasql->bindParam(3, $correo);
        $sentenciasql->bindParam(4, $clave_1);
        $sentenciasql->bindParam(5, $nivel);
        $sentenciasql->bindParam(6, $fecha);
        $sentenciasql->execute();
        if ($sentenciasql) {
            header("Location: ../Acceso/Login.php");
        } else {
            echo "Ocurrio un Error al digitar los Datos";
        }
    }
}
?> 