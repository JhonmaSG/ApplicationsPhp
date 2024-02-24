<!doctype html>

<html>
    <head>
        <title>Excercise 8</title>
    </head>
    <body>
        <!-- Escribir un programa que capture la base 
        y la altura de un rectángulo y por medio de
        funciones imprima el área y el perimetro del
        rectángulo-->
        <form method="post">
            <h2>Area y perimetro de un Triangulo</h2>
            Base del triangulo: <input type="text" name="base"/> <br><br>
            Altura del triangulo: <input type="text" name="altura"/> <br><br>
            <input type="submit" name="enviar" value="Calcular"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            
            echo "Base: ".$base."<br/>";
            echo "Altura: ".$altura."<br/>";
            echo "Area: ".areaTriangulo($base, $altura)."<br/>";
            echo "Perimetro: ". perimetroTriangulo($base)."<br/>";
        }

        function areaTriangulo($base, $altura) {
            return ( ($base * $altura) /2 );
        }
        function perimetroTriangulo($base) {
            return $base*3;
        }
        ?>
    </body>
</html>

