<!doctype html>

<html>
    <head>
        <title>Excercise 5</title>
    </head>
    <body>
        <!-- Diseñar un programa que capture una
        palabra y por medio de una funcion imprima
        la palabra invertida.
        Por ejemplo: "Nacho" se imprimiría ohcaN-->
        <form method="post">
            <h2>Inversión de una Palabra</h2>
            Digite una palabra: <input type="text" name="oracion"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $oracion = $_POST['oracion'];
            echo "Palanra Original: ".$oracion."<br/>";
            echo "Palabra Invertida: ".inversion($oracion)."<br/>";
        }

        function inversion($oracion) {
            return strrev($oracion);
        }
        ?>
    </body>
</html>

