<?php
include_once "Encabezado.php";
include_once "ConexionBD.php";
// escribir código faltante
$objdb = new ConexionBDPDO();
$conexion = $objdb->conectar();
$llamar_procedimiento = "call Listar_Registros()";
$consultasql = $conexion->prepare($llamar_procedimiento);
$consultasql->execute();
$resultados = $consultasql->fetchAll();
?>
<div class="row">
    <div class="col-12">
        <h3 style="text-align: center">Listado de Clientes</h3>
    </div>
    <div class="col-12">
        <a class="btn btn-primary" href="Insertar.php">Agregar nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>NIT</th>
                    <th>EMPRESA</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>CIUDAD</th>
                    <th>FECHA INGRESO</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultados as $cliente) { ?>
                    <tr>
                        <td><?php echo $cliente["nit"] ?></td>
                        <td><?php echo $cliente["empresa"] ?></td>
                        <td><?php echo $cliente["direccion"] ?></td>
                        <td><?php echo $cliente["telefono"] ?></td>
                        <td><?php echo $cliente["ciudad"] ?></td>
                        <td><?php echo $cliente["fecha"] ?></td>
                        <td>
                            <a href="Editar.php?nit=<?php echo $cliente["nit"] ?>"
                               class="btn btn-warning">Editar</a>
                        </td>
                        <td>
                            <a href="Eliminar.php?nit=<?php echo $cliente["nit"] ?>"
                               class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "Pie.php" ?>
