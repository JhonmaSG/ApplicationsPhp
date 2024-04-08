<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="estilos.css" type="text/css"/>
        <title>Formularios - Php</title>
    </head>
    <body>
        <div>
            <form action="ProcesarDatos.php" method="get">
                <fieldset><legend>REGISTRO DE INFORMACIÓN</legend>
                    <table border="1">
                        <tr>
                            <td>Dígite Nombres: </td>
                            <td><input type="text" size="50" autofocus required placeholder="Escriba sus nombres"
                                       name="nombres"></td>
                        </tr>
                        <tr>
                            <td>Fecha de nacimiento:</td>
                            <td><input type="date" name="fecha" /></td>
                        </tr>
                        <tr>
                            <td>Nivel de Inglés (Min=1, Max=10)</td>
                            <td><input type="number" name="ingles" min="1" max="10" value="1" /></td>
                        </tr>
                        <tr>
                            <td>Digite contraseña asignada:</td>
                            <td><input type="password" name="clave" /></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" name="enviar" value="Enviar">
                                <input type="reset" name="cancelar" value="Reestablecer">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </div>
    </body>
</html>