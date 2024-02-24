<!doctype html>

<html>
    <head>
        <title>Excercise 6</title>
    </head>
    <body>
        <!-- Elaborar un programa que capture una palabra
        y por medio de una funcion imprima cuántas
        vocales contiene.
        Por ejemplo: "Aurora" tiene 4 vocales-->
        <form method="post">
            <h2>No. vocales de una Palabra</h2>
            Digite una palabra: <input type="text" name="oracion"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $palabra = $_POST['oracion'];
            echo "Palanra Original: ".$palabra."<br/>";
            echo "No. Vocales: ".vocales($palabra)."<br/>";
        }

        function vocales($palabra) {
            $vocales=0;
            $longitud = strlen($palabra);
            for($i=0; $i<$longitud;$i++){
                if( $palabra[$i] == 'a' or 
                    $palabra[$i] == 'e' or 
                    $palabra[$i] == 'i' or 
                    $palabra[$i] == 'o' or 
                    $palabra[$i] == 'u' ){
                    $vocales++;
                }
            }
            return $vocales;
        }
        ?>
    </body>
</html>

