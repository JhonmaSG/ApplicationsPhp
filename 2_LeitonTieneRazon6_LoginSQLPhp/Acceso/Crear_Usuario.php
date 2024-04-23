<!doctype html>
<html>
    <head>
        <title>Crear Usuario</title>
    </head>
    <body>
    <center>
        <h1> Información Nuevo Usuario</h1>
        <form name="formulario_usuario" action="../Acceso/Procesar_Usuario.php"  method="POST">
            <table border=2 cellspacing="10" bordercolor="#669933">
                <tr>
                    <td>Identificacion:</td>
                    <td><input type="text" name="identificacion" autofocus  required /></td>
                </tr>
                <tr>
                    <td>Nombre de Usuario:</td><td><input type="text" name="nombres"  required /></td>
                </tr>
                <tr>
                    <td>Correo electrónico: </td>
                    <td><input type="text" name="correo" required /></td>
                </tr>
                <tr>
                    <td>Contraseña: </td>
                    <td><input type="password" name="clave_1"  required/></td>
                </tr>
                <tr>
                    <td>Repita la Contraseña:</td>
                    <td><input type="password" name="clave_2" required /></td>
                </tr>
                <tr>
                    <td>Nivel del Usuario:</td>
                    <td>
                        <select name="nivel">
                            <?php
                            $consultasql = $conexion->prepare('SELECT * FROM rol');
                            $consultasql->execute();
                            $resultado = $consultasql->fetchAll();
                            foreach ($resultado as $fila) {
                                echo "<option value='" . $fila[0] . "'>" . $fila[1] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="crear" value="Crear Usuario"/>
                    </td>
                </tr>
            </table>
        </form>
        <h3><p><a href="../Acceso/Login.php">Iniciar Sesión</a></p></h3>
    </center>
</body>
</html> 