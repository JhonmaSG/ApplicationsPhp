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
            f_generica($cadena);
        }

        function f_generica($cadena) {
            echo "Texto digitado: " . $cadena . "<br>";
            $palabras = explode(" ", $cadena);
            $palabraq = "";

            foreach ($palabras as $palabra) {
            if(substr( $palabra, 0, 1)=='q') {  //substr(palabra, pos0, pos1) = primera letra
                    $palabraq = $palabraq.$palabra."\n";
                }
            }
            echo "<textarea cols='30' rows='8' name='resultado'>" . $palabraq . "</textarea>";
        }
        ?>

    </body>
</html>

