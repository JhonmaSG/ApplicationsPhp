<!DOCTYPE html >
<head>
    <meta charset="utf-8" />
    <title>Consultar Registros - Php</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" media="screen">
</head>
<body>
    <h3 class="centrar"> Consultar los registros de la tabla Clientes con Php</h3>
<center><div>
        <table border="1">
            <tr><th colspan="6">Listado de Clientes </th></tr>
            <tr>
                <th>Nit</th>
                <th>Empresa</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Fecha</th>
            </tr>
            <?php
            try {
                require("ConexionBDPDO.php");
                $consultar_registros = $conexion->prepare("select * from clientes");
                $consultar_registros->execute();
                $resultado = $consultar_registros->fetchAll();
                foreach ($resultado as $fila) {
                    echo ("<tr><td>" . $fila[0] . "</td>");
                    echo ("<td>" . $fila[1] . "</td>");
                    echo ("<td>" . $fila[2] . "</td>");
                    echo ("<td>" . $fila[3] . "</td>");
                    echo ("<td>" . $fila[4] . "</td>");
                    echo ("<td>" . $fila[5] . "</td></tr>");
                }
            } catch (PDOException $e) {
                echo "<script type=\"text/javascript\">
 confirm(\"Error al consultar los registros......\");
 </script>" . $e->getMessage();
            }
            //$conexion = null;
            ?>
        </table>
    </div></center>
</body>
</html>