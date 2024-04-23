<!doctype html>
<head>
    <meta charset="utf-8" /> <title>Filtrar Registros - Php</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" media="screen">
</head>
<body>
    <h3 class="centrar">Filtrar registros de la tabla Clientes</h3>
    <div>
        <fieldset style="width:66%;background-color:#dfdfdf;margin: 0 auto;">
            <legend>Opciones de filtrado</legend>
            <form name ="formulario" method="post" action="">
                Filtrar por el campo: <input type="text" list="campos" name="campos" />
                <datalist id="campos">
                    <option>nit
                    <option>empresa
                    <option>direccion
                    <option>telefono
                    <option>ciudad
                    <option>fecha
                </datalist>
                Operador: <select name="operador" size=1>
                    <option>=</option>
                    <option>></option>
                    <option>>=</option>
                    <option>< </option>
                    <option><=</option>
                    <option> like </option>
                </select>
                Criterio :<input type="text" name="criterio" size="20"><br/><br/>
                <div class="centrar">
                    <input type ="submit" name="enviar" value="Filtrar"/>
                    <input type ="reset" name="limpiar" value="Reestablecer"/>
                </div>
            </form>
        </fieldset>
    </div>
    <?php
    try {
        if (isset($_POST['enviar'])) {
            require("ConexionBDPDO.php");
            $campo = $_POST['campos'];
            $operador = $_POST['operador'];
            $criterio = $_POST['criterio'];
// escribir el código faltante
            $busqueda = "SELECT * FROM clientes WHERE " . $campo . "" . $operador . "" . "'" . $criterio . "';";
            $consultar_registros = $conexion->prepare($busqueda);
            $consultar_registros->execute();
            echo '<p style = "text-align:center">Cunsulta ejecutada' . $busqueda . '</p>';
            $resultado = $consultar_registros->fetchAll();
            echo '<table style = color:Blue>';
            echo '<tr><th colspan=6>Lista de Clientes </th></tr>';
            echo '<tr><th>Nit</th><th>Empresa</th><th>Direccion</th><th>Telefono</th><th>Ciudad</th><th>Fecha</th></tr>';
            foreach ($resultado as $fila) {
                echo ("<tr><td>" . $fila[0] . "</td>");
                echo ("<td>" . $fila[1] . "</td>");
                echo ("<td>" . $fila[2] . "</td>");
                echo ("<td>" . $fila[3] . "</td>");
                echo ("<td>" . $fila[4] . "</td>");
                echo ("<td>" . $fila[5] . "</td></tr>");
            }
            echo '</table>';
        }
    } catch (PDOException $e) {
        echo "<script type=\"text/javascript\">confirm(\"Error al consultar los registros......\"); </script>" . $e->getMessage();
    }
    ?>
</body>
</html>



