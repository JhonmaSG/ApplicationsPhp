<!doctype html>
<!-- Crear las clases NumeroBinario, NumeroOctal y NumeroDecimal, 
que hereden de una clase llamada Numero, que contenga el método operacionnumeros. 
Se deben capturar un valor y retornar el número en la base especificada.   -->
<!doctype html>
<html>
    <head>
        <title>Ejercicio #2 - Bases de numeros</title>
    </head>
    <body>

        <form method="post">
            <fieldset>
                <legend>Volumen de un cilindro</legend>
                Digite un numero: <input type="number" name="numero" 
                                                      required><br/>
                <input type="submit" name="enviar" value="Enviar"><br/>

            </fieldset>
        </form>

        <?php
        include("Conversion.php");
        if (isset($_POST['enviar'])) {
            $numero = $_POST['numero'];

            $numDecimal = new NumeroDecimal($numero);
            $numBinario = new NumeroBinario($numero);
            $numOctal = new NumeroOctal($numero);
            echo "<h3> <fieldset><legend>Informacion recibida</legend>";
            echo "Numero Decimal: " . $numDecimal->operacionNumeros() . "<br/>";
            echo "Numero Binario: " . $numBinario->operacionNumeros() . "<br/>";
            echo "Numero Octal: " . $numOctal->operacionNumeros() . "<br/>";
            echo "</fieldset> </h3>";
        }
        ?>

    </body>
</html>

