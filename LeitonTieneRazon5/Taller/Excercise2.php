<!doctype html>

<html>
    <head>
        <title>Excercise 2</title>
    </head>
    <body>
        <!-- Crea una funcion llamada escribirespacio, que recoiba como
        parametro un texto y le escriba con un espacio adicional tras
        cada letra.
        Por ejemplo: "Hola, tú" se escribiria "H o l a, t u"-->
        <form method="post">
            Digite una frase: <input type="text" name="oracion"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $cadena = $_POST['oracion'];
            echo "Oracion inicial: ".$cadena;
            escribirespacio($cadena);
        }

        function escribirespacio($cadena) {
            $longitud = strlen($cadena);
            $letras = "";

            for ($i = 0; $i < $longitud; $i++) {
                $letras = $letras . $cadena[$i] . " ";
            }
            echo "<br>Con letras: " . $letras;
        }
        ?>
    </body>
</html>

