<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<!--
PARCIAL 1 - Aplicaciones para Internet

1. Palabras ordenadas de la oracion donde la antepenultima
letra es una I(i)O terminan con una letra S

2. Palabras ordenadas de la oracion donde la antepenultima
letra es una ID(id) O terminan con una letra A
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Parcial Individual - 302 - A</title>
    </head>
    <body>
        <h1 style="text-align: center">Parcial Individual - 302 - A</h1>
        <form method="POST">
            <fieldset>
                <legend>Capturar Información</legend>
                <label>Digite una oración: </label>
                <input style="width: 500px" type="text" name="oracion">
                <button type="submit" name="ejecutar" value="ejecutar">Ver resultados</button>
            </fieldset>
            <br><br>
        </form>
        <?php
        if (isset($_POST['ejecutar'])) {
            $cadena = $_POST['oracion'];
            //orden de tablas:
            //<table><thead>
            //<tr> : Fila nueva
            //<th> : celda nuevea en negrilla o <td> celda sin negrilla
            //</th> : celda nuevea en negrilla o <td> celda sin negrilla
            //</tr> : Fila nueva
            //</table></thead>
            
            echo "<center><table style='text-align:center;' border='1'><thead>";
            //colspan='2': Indica cuantas celdas de la fila tomara dicha celda
            //en este caso, 2 filas la oracion.
            echo "<tr><td colspan='2'><b>Oración digitada:</b> $cadena</td>";
            echo "<tr><td><p style='text-align:left;'>Palabras ordenadas de la oracion<br><br>"
            . "donde la antepenultima letra es una I(i)<br><br>"
            . "O terminan con una letra S</p></td>";

            echo "<td><p style='text-align:left;'>Palabras ordenadas de la oracion<br><br>"
            . "donde la antepenultima letra es una ID(id)<br><br>"
            . "O terminan con una letra A</p></td></tr>";

            antepenultima($cadena);
            inversion($cadena);

            echo "<thead></table></center>";
        }

        function antepenultima($cadena) {
            $lasPalabras = "";
            $palabras = explode(" ", $cadena);  //separa la cadena de texto en array por espacios
            sort($palabras);    //Ordena alfabeticamente el array
            foreach ($palabras as $palabra) {   //itera entre palabra y palabra del array
                //substr($palabra, -3, -2) = ($palabra, antepenultima letra, penultima letra)
                if ((substr($palabra, -3, -2) == 'I') || (substr($palabra, -3, -2) == 'i')) {
                    $lasPalabras = $lasPalabras . $palabra . "\n";
                    //substr($palabra, -1) = ($palabra, ultima letra)
                } elseif ((substr($palabra, -1) == 'S') || (substr($palabra, -1) == 's')) {
                    $lasPalabras = $lasPalabras . $palabra . "\n";
                }
            }
            echo "<tr><td><textarea col='40' rows='10' name='resultado'>" . $lasPalabras . "</textarea></td>";
        }

        function inversion($cadena) {
            $lasOtrasPalabras = "";
            $palabras = explode(" ", $cadena);  //separa la cadena de texto en array por espacios
            foreach ($palabras as $palabra) {   //itera entre palabra y palabra del array
                $stringInvertido = strrev($palabra);    //Invierte el array con su contenido
                if ((substr($stringInvertido, 1, 1) == 'A') || (substr($stringInvertido, 1, 1) == 'a')) {
                    $lasOtrasPalabras = $lasOtrasPalabras . $stringInvertido . "\n";
                }
                //strpos($stringInvertido, 'ID') !== false : busca en la palabra si existe 'ID'
                //Arroja true si la encuentra, False sino
                if ((strpos($stringInvertido, 'ID') !== false) || (strpos($stringInvertido, 'id') !== false) ) {
                    $lasOtrasPalabras = $lasOtrasPalabras . $stringInvertido . "\n";
                }
            }
            echo "<td><textarea col='40' rows='10' name='resultado'>" . $lasOtrasPalabras . "</textarea></td></tr>";
        }
        ?>
    </body>
</html>
