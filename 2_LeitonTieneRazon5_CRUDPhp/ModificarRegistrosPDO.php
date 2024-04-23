<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Modificar registros - Php</title>
    <link rel="stylesheet" type="text/css" href="estilos.css" media="screen">
</head>
<body>
    <h3 class="centrar">Modificar registro - tabla Clientes</h3>
    <div>
        <fieldset style="width:30%;background-color:#dfdfdf;margin: 0 auto;">
            <legend>Búsqueda de registro</legend>
            <form name ="formulario" method="post" action="ModificarRegistrosPDO.php">
                Nit a buscar: <input type="text" name="nit" autofocus required size="20"><br/><br>
                <div class="centrar">
                    <input type="submit" name="enviar" value="Buscar registro">
                    <input type="reset" name="limpiar" value="Reestablecer">
                </div>
            </form>
        </fieldset>
    </div>
    <?php
    try {
        if (isset($_POST['enviar'])) {
            require("ConexionBDPDO.php");
/// escribir el código faltante
            $nit = $_POST['nit'];
            $buscar_registro = "SELECT * FROM clientes where nit ='" . $nit . "';";
            echo '<br>';
            $consultar_registros = $conexion->prepare($buscar_registro);
            $consultar_registros->execute();
            $registro = $consultar_registros->fetch();
            if ($registro) {
                echo "<form method=post >";
                echo ("<input type=hidden name=nit value=" . $registro[0] . ">");
                echo "<table border='1'>";
                echo "<tr><th><h4>Registro a Modificar</h4></th></tr>";
                echo "<tr><th>Nit :" . $registro[0] . "</th></tr>";
                echo ("<tr><td>Empresa :<input type=text name=empresa value=\"" . $registro[1] . "\"size=30></td></tr>");
                echo ("<tr><td>Direccion :<input type=text name=direccion value=\"" . $registro[2] . "\"size=30></td></tr>");
                echo ("<tr><td>Telefono :<input type=text name=telefono value=\"" . $registro[3] . "\"size=30></td></tr>");
                echo ("<tr><td>Ciudad :<input type=text name=ciudad value=\"" . $registro[4] . "\"size=30></td></tr>");
                echo ("<tr><td>Credito :<input type=text name=fechaing value=\"" . $registro[5] . "\"size=30></td></tr>");
                echo "</table>";
                echo "<br><center><input type=submit name=modificar value=Modificar></center>";
                echo "</form>";
            } else 
                echo "<h3 style='text-align:center'>Registro No EXISTE</h3>";
            }
            if (isset($_POST['modificar'])) {
                $empresa = $_POST['empresa'];
                $direccion = $_POST['direccion'];
                $telefono = $_POST['telefono'];
                $ciudad = $_POST['ciudad'];
                $fecha = $_POST['fechaing'];
                $nit = $_POST['nit'];
                require("ConexionBDPDO.php");
/// escribir el código faltante
                $sentencia = $conexion->prepare("UPDATE clientes set empresa=?,direccion=?,telefono=?,ciudad=?,fecha=? where nit=?");
                $modificar_registro = $sentencia->execute([$empresa, $direccion, $telefono, $ciudad, $fecha, $nit]);
                echo '<h3 style = "text-align:center">Registro MODIFICADO</h3>';
            }
        
    } catch (PDOException $e) {
        echo "<script type=\"text/javascript\">
confirm(\"Error al modificar el Registro......\"); </script>" . $e->getMessage();
    }
    ?>