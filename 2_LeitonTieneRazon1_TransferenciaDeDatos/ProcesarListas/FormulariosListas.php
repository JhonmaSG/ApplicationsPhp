<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formularios - Php</title>
    </head>
    <body>
        <div>
            <form method="get" action="ProcesarListas.php">
                <fieldset>
                    <legend>Información</legend>
                    <p>Seleccione la profesión que desea estudiar:
                        <input type="text" name="profesion" list="profesiones" autocomplete="on">
                        <datalist id="profesiones">
                            <option value="Ingenieria de Sistemas">
                            <option value="Ingenieria Mecánica">
                            <option value="Ingenieria Civil">
                            <option value="Ingenieria Electrónica">
                            <option value="Ingenieria Industrial">
                        </datalist></p>
                    <p>Universidad donde la desearía estudiar:
                        <select size="5" name="universidad">
                            <option selected value="Universidad Distrital">Universidad Distrital</option>
                            <option value="Universidad Nacional">Universidad Nacional</option>
                            <option value="Universidad Libre">Universidad Libre</option>
                            <option value="Universidad Incca">Universidad Incca</option>
                            <option value="Universidad Javeriana">Universidad Javeriana</option>
                        </select></p>
                    <p>En que sector le gustaria trabajar:
                        <select size="1" name="sector">
                            <option selected value="Educación">Educación</option>
                            <option value="Petrolero">Petrolero</option>
                            <option value="Comercial">Comercial</option>
                            <option value="Manufacturero">Manufacturero</option>
                            <option value="Financiero">Financiero</option>
                        </select></p>
                    <br/><input type="submit" name="enviar" value="Enviar">
                </fieldset>
            </form>
        </div>
    </body>
</html>
