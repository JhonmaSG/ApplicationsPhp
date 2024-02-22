<!doctype html>

<html>
    <head>
        <title>Excercise 1</title>
    </head>
    <body>
        <!-- Crear una función llamada cantidaddedivisores que
        reciba un número entero y devuelva la cantidad de 
        divisores (por ejemplo, para el número 16, 
        sus divisores son 1, 2, 4, 8, 16.
        Por lo que la respuesta deberia ser 5) -->
        <form method="post">
            Digite un número: <input type="text" name="numero"/> <br><br>
            <input type="submit" name="enviar" value="Procesar"><br><br> 
            Divisores:<br><br>
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $numero= $_POST['numero'];
            echo "Cantidad de divisores: ".cantidaddedivisores($numero)."<br/>"; 
        }
        
        function cantidaddedivisores($numero) {
            $numdivisores = 0;
            $conjuntoDiv = array();
            for($i=1; $i <= $numero; $i++){
                if( ( $numero % $i) == 0 ){
                    $numdivisores++;
                }
            }
            return $numdivisores;
        }
        ?>
    </body>
</html>

