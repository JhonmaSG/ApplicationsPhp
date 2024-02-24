<!doctype html>

<html>
    <head>
        <title>Excercise 7</title>
    </head>
    <body>
        <!-- Crear un programa que capture una frase
        y con una función imprima cuántas palabras
        contiene. -->
        <form method="post">
            <h2>No. Palabras de una Frase</h2>
            Digite una palabra: <input type="text" name="oracion"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $oracion = $_POST['oracion'];
            $palabras = explode(" ", $oracion);
            echo "Frase Original: ".$oracion."<br/>";
            echo "No. Palabras: ".palabras($palabras)."<br/>";
        }

        function palabras($oracion) {
            $palabras=0;
            foreach($oracion as $palabra){
                $palabras++;
            }
            return $palabras;
        }
        ?>
    </body>
</html>

