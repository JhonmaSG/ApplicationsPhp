<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funciones con paámetros</title>
    </head>
    <body>
        <h2>Ejemplo funciones con parámetros que retorna - Php</h2>
        <h3>
            <form method="POST">
                <fieldset>
                    <legend>Valores</legend>
                    Digite número inicial:<input type="text" autofocus name="inicio"/><br/>
                    Digite número final:<input type="text" name="final" /><br/>
                    <input type="submit" name="enviar" value="Ejecutar"><br/>
                </fieldset>
            </form>
        </h3>
        <?php
        /*!er ERROR: seguir mostrando los numeros ingresados despues de sarle al boton y que no se pierdan

         * 2do ERROR: que al ingresar el primer numero mayor y despues menor el siguiente, no funciona         */
        if (isset($_POST['enviar'])) {
            $v_inicial = $_POST['inicio'];
            $v_final = $_POST['final'];
            $resultado = funcion_retorna_datos($v_inicial, $v_final);
            echo "<div id='centrado'>";
            echo "<fieldset><legend>Resultados Funcion sin parametros</legend>";
            echo "La potencia de los numeros es : "."<input type='text' value=$resultado".">";
            echo "</fieldset>";
            echo "</div>";
        }

        function funcion_retorna_datos($v_inicial, $v_final) {
            return pow($v_inicial,$v_final);
        }
            ?>
    </body>
</html>
