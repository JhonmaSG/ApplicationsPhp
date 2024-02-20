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
            $palabra_a = "";

            foreach ($palabras as $palabra) {
                $palabra_a=$palabra_a.substr( $palabra, -2, 1);    
            }
            echo "<textarea cols='30' rows='8' name='resultado'>" . $palabra_a . "</textarea>";
        }
        ?>

    </body>
</html>

