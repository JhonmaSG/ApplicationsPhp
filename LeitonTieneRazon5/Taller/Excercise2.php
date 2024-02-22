<!doctype html>

<html>
    <head>
        <title>Excercise 2</title>
    </head>
    <body>
        <!-- Crea una funcion llamada escribirespacio, que recoiba como
        parametro un texto y le escriba con un espacio adicional tras
        cada letra. Por ejemplo: "Hola, tú" se escribiria "H o l a, t u"-->
        <form method="post">
            Digite una frase: <input type="text" name="oracion"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $numero= $_POST['oracion'];
            echo "Frase Separada: ".cantidaddedivisores($numero)."<br/>"; 
        }
        
        function cantidaddedivisores($numero) {
            $laspalabras = "";
            foreach ($palabras as $palabra) {
                $laspalabras = $laspalabras . $palabra . "\n";
            }
            echo "Resultado: " . $letrase;
        }
        ?>
    </body>
</html>

