<!doctype html>

<html>
    <head>
        <title>Separar letras</title>
    </head>
    <body>
        <form method="post">
            Digite una oracion: <input type="text" name="oracion" size="50"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
            Letras de la oracion<br><br>
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $cadena = $_POST['oracion'];
            $palabras = explode(" ", $cadena);
            f_generica($palabras);
        }

        function f_generica($palabras) {
            $laspalabras = "";
            foreach ($palabras as $palabra) {
                $laspalabras = $laspalabras . $palabra . "\n";
            }
            echo "<textarea cols='30' rows='8' name='resultado'>" . $laspalabras . "</textarea>";
        }
        ?>

    </body>
</html>

