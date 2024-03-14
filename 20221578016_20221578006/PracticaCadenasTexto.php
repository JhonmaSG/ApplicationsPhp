<!doctype html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Separar letras</title>
    </head>
    <body>
        <form method="post">
            <h3>palabras</h3>
            Digite una oracion: <input type="text" name="oracion" size="80"/>
            <input type="submit" name="Ejecutar" value="Ejecutar"><br><br> 
        </form>

        <?php
        if (isset($_POST['Ejecutar'])) {
            $cadena = $_POST['oracion'];
            inversion($cadena);
            antepenultima($cadena);
        }

        function inversion($cadena) {
            $laspalabras = "";
            $palabras = explode(" ", $cadena);
            sort($palabras); //Ordenar los elementos de un array
            echo"Palabras invertidas y ordenadas alfabeticamente"
            . "de la operacion que contenga la silaba ON o la letra T";
            foreach ($palabras as $palabra) {
                $stringInvertido = strrev($palabra);
                for($i = 0; $i < strlen($palabra); $i++) {
                    if ($palabra[$i] === 't' || $palabra[$i] === 'T') {
                        $laspalabras = $laspalabras . $stringInvertido."\n";
                    }
                }
                if( strpos($stringInvertido, 'on') !== false
                    || strpos($stringInvertido, 'ON') !== false ){
                    $laspalabras = $laspalabras.$stringInvertido."\n";
                }
            }
            echo "<textarea cols='30' rows='8' name='resultado'>"
            . $laspalabras . "</textarea>";
        }

        function antepenultima($cadena) {
            $lasOtrasPalabras = "";
            $palabras = explode(" ", $cadena);
            echo"Palabras de la oracion, donde la antepenultima"
            . "letra NO sea una I (i)";
            foreach( $palabras as $palabra ) {
                if ( (substr($palabra, -3, -4) != 'i') ) {
                    $lasOtrasPalabras = $lasOtrasPalabras . $palabra."\n";
                }
            }
            echo "<textarea cols='30' rows='8' name='resultado'>"
            . $lasOtrasPalabras . "</textarea>";
        }
        ?>

    </body>
</html>