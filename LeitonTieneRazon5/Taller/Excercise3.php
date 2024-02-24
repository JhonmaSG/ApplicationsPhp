<!doctype html>

<html>
    <head>
        <title>Excercise 3</title>
    </head>
    <body>
        <!-- Crea una funcion llamada mayordetres, que reciba tres números 
        y devuelva el valor del mayor de ellos, Por ejemplo, 
        para los números 5, 7 y 5. devuelva el valor 7
        -->
        <form method="post">
            <h2>Mayor de tres</h2>
            Digite el primer número: <input type="text" name="numero1"/> <br><br>
            Digite el segundo número: <input type="text" name="numero2"/> <br><br>
            Digite el tercer número: <input type="text" name="numero3"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $numero3 = $_POST['numero3'];
            echo "Numero1: ".$numero1."<br/>";
            echo "Numero2: ".$numero2."<br/>";
            echo "Numero3: ".$numero3."<br/>";
            echo "El número mayor es: ".mayordetres($numero1, $numero2, $numero3)."<br/>";
        }

        function mayordetres($numero1, $numero2, $numero3) {
            return max($numero1, $numero2, $numero3);
        }
        ?>
    </body>
</html>

