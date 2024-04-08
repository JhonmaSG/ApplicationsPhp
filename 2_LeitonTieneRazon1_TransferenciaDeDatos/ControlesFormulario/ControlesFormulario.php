<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formularios - Php</title>
    </head>
    <body>
        <div>
            <form method="post" action="ProcesarControles.php">
                <fieldset>
                    <legend>Información</legend>
                    <p>Digite su usuario:<input type="text" name="usuario" size="20" /></p>
                    <p>Digite su contraseña:<input type="password" name="clave" size="20" /></p>
                    <input type="hidden" name="oculto" value="123456" />
                    <p>Sus comentarios:<textarea name="area" rows="4" cols="50"></textarea></p>
                    <p><input type="submit" name="enviar" value="Enviar">
                        <input type="reset" name="limpiar" value="Reestablecer"></p>
                </fieldset>
            </form>
        </div>
    </body>
</html>