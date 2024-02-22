<!doctype html>

<html>
    <head>
        <title>Excercise 2</title>
    </head>
    <body>
        <!-- Crea una funcion llamada mayordetres, que reciba tres números 
        y devuelva el valor del mayor de ellos, Por ejemplo, 
        para los números 5, 7 y 5. devuelva el valor 7
        Por ejemplo: "Hola, tú" se escribiria "H o l a, t u"-->
        <form method="post">
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
            echo "Numero1: ".$numero1;
            echo "Numero2: ".$numero2;
            echo "Numero3: ".$numero3;
            mayordetres($numero1, $numero2, $numero3);
        }

        function mayordetres($numero1, $numero2, $numero3) {

            for ($i = 0; $i < $longitud; $i++) {
                $letras = $letras . $cadena[$i] . " ";
            }
            echo "<br>Con letras: " . $letras;
        }
        ?>
    </body>
</html>

