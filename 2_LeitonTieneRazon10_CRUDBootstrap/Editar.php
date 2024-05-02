<?php
include_once "Encabezado.php";
include_once "ConexionBD.php";
$objdb = new ConexionBDPDO();
$conexion = $objdb->conectar();
$nit = $_GET["nit"];
$sentenciasql = ("SELECT * FROM clientes WHERE nit='" . $nit . "';");
$resultado = $conexion->prepare($sentenciasql);
$resultado->execute();
$registro = $resultado->fetch();
if (!$registro) {
    exit("Nit no existe.........");
}
?> 
<div class="row"> 
    <div class="col-12"> 
        <h3>Actualizar Cliente</h3> 
        <form action="" method="POST"> 
            <input type="hidden" name="nit" value="<?php echo $registro["nit"] ?>"> 
            <div class="form-group"> 
                <label for="empresa">EMPRESA</label> 
                <input value="<?php echo $registro["empresa"] ?>" class="form-control" type="text"  
                       name="empresa" id="empresa" required> 
            </div> 
            <div class="form-group"> 
                <label for="direccion">DIRECCIÓN</label> 
                <input value="<?php echo $registro["direccion"] ?>" class="form-control" type="text"  
                       name="direccion" id="direccion" required> 
            </div> 
            <div class="form-group"> 
                <label for="telefono">TELÉFONO</label> 
                <input value="<?php echo $registro["telefono"] ?>" class="form-control" type="text"  
                       name="telefono" id="telefono" required> 
            </div> 
            <div class="form-group"> 
                <label for="ciudad">CIUDAD</label> 
                <input value="<?php echo $registro["ciudad"] ?>" class="form-control" type="text"  
                       name="ciudad" id="ciudad" required> 
            </div> 
            <div class="form-group"> 
                <label for="fecha">FECHA INGRESO</label> 
                <input value="<?php echo $registro["fecha"] ?>" class="form-control" type="text"  
                       name="fecha" id="fecha" required> 
            </div> 
            <div class="form-group"> 
                <button class="btn btn-success">Modificar Registro</button> 
                <a class="btn btn-info" href="Index.php">Volver</a> 
            </div> 
        </form> 
    </div> 
</div> 
<?php include_once "Pie.php"; ?> 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once "conexionBDPDO.php";
    $nit = $_POST["nit"];
    $empresa = $_POST["empresa"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $ciudad = $_POST["ciudad"];
    $fecha = $_POST["fecha"];
    $sentenciasql = $conexion->prepare("UPDATE clientes set empresa=?,  
direccion=?,telefono=?,ciudad=?,fecha=? where nit=?");
    $modificar_registro = $sentenciasql->execute([$empresa, $direccion,
        $telefono, $ciudad, $fecha, $nit]);
    header("Location: Index.php");
}
?>