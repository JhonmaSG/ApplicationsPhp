<!doctype html>

<html>
    <head>
        <title>Excercise 9</title>
    </head>
    <body>
        <!-- Hacer un programa que capture un número
        e imprima por medio de una funcion la tabla de
        multiplicar de ese número.
        Por ejemplo: para el 3 deberá llegar desde
        3x0=0 hasta 3x10 = 30-->
        <form method="post">
            <h2>Tablas de Multiplicar</h2>
            Digite el Número: <input type="text" name="numero"/> <br><br>
            <input type="submit" name="enviar" value="Calcular"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $numero = $_POST['numero'];
            
            echo "<br>Tabla del ".$numero."<br/>";
            Resultado($numero);
        }

        function Resultado($numero) {
            for($i = 1; $i <= 10; $i++){
                echo $numero." x ".$i." = ".$numero*$i."<br>";
            }
        }
        ?>
    </body>
</html>

