<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Iniciar Sesión</title>
    </head>
    <body>
    <center>
        <h1>Iniciar Sesión</h1>
        <form name = "formulario" action="../Acceso/Validar_Login.php" method="POST">
            <table cellspacing="10" border=2>
                <tr>
                    <td>Usuario:</td>
                    <td><input type="text" name="correo" autofocus="autofocus" required  placeholder="Digite correo electronico"></td>
                </tr>
                <tr>
                    <td>Clave:</td>
                    <td><input type="password" name="clave" required  placeholder="Digite clave"></td></tr> <tr><td colspan="2" align="center">
                        <input class="boton" type="submit"  value="Iniciar"></td>
                </tr>
            </table>
        </form>
        <h3>
            <p><a href="Crear_Usuario.php">Registrarse en el Sistema</a></p>
        </h3>
    </center>
</body>
</html> 