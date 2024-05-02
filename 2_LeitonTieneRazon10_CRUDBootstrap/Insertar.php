<?php include_once "Encabezado.php"; ?> 
<div class="row"> 
    <div class="col-12"> 
        <h3>Adicionar Cliente</h3> 
        <form action="" method="POST"> 
            <div class="form-group"> 
                <label for="nit">NIT</label> 
                <input placeholder="Nit" class="form-control" type="text" name="nit" id="nit" required> 
            </div> 
            <div class="form-group"> 
                <label for="empresa">EMPRESA</label> 
                <input placeholder="Empresa" class="form-control" type="text" name="empresa"  
                       id="empresa" required> 
            </div> 
            <div class="form-group"> 
                <label for="direccion">DIRECCIÓN</label> 
                <input placeholder="Dirección" class="form-control" type="text" name="direccion"  
                       id="direccion" required> 
            </div> 
            <div class="form-group"> 
                <label for="telefono">TELÉFONO</label> 
                <input placeholder="Teléfono" class="form-control" type="text" name="telefono"  
                       id="telefono" required> 
            </div> 
            <div class="form-group"> 
                <label for="ciudad">CIUDAD</label> 
                <input placeholder="Ciudad" class="form-control" type="text" name="ciudad" id="ciudad"  
                       required> 
            </div> 
            <div class="form-group"> 
                <label for="fecha">FECHA INGRESO</label> 
                <input class="form-control" type="date" name="fecha" id="fecha" required> 
            </div>    
            <div class="form-group"><button class="btn btn-success">Guardar Registro</button> 
                <a class="btn btn-info" href="Index.php">Volver</a> 
            </div>         
        </form> 
    </div> 
</div> 
<?php include_once "pie.php"; ?> 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once "ConexionBD.php";
    $objdb = new ConexionBDPDO();
    $conexion = $objdb->conectar();
    $nit = $_POST["nit"];
    $empresa = $_POST["empresa"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $ciudad = $_POST["ciudad"];
    $fecha = $_POST["fecha"];
    $sentenciasql = $conexion->prepare("insert into clientes (nit,empresa,direccion,telefono, ciudad 
,fecha) values(?,?,?,?,?,?);");
    $sentenciasql->bindParam(1, $nit);
    $sentenciasql->bindParam(2, $empresa);
    $sentenciasql->bindParam(3, $direccion);
    $sentenciasql->bindParam(4, $telefono);
    $sentenciasql->bindParam(5, $ciudad);
    $sentenciasql->bindParam(6, $fecha);
    $sentenciasql->execute();
    header("Location: Index.php");
}
?>