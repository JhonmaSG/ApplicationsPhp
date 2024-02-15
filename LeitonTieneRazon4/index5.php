<!DOCTYPE html>
<html>
    <head>
        <title>Funciones matematicas</title>
    </head>
    <body>
        <?php
        echo "<h3>";
        $numero = 125.35;
        echo "<br/> El valor de la variable $numero es: " . $numero;
        echo "<br/> Redondear un numero al entero superior: " . ceil($numero);
        echo "<br/> Redondear un numero al entero inferior: " . floor($numero);
        echo "<br/> El maximo de dos numeros (9 , 12): ".max(9,12);
        echo "<br/> El minimo de dos numeros (9 , 12): ".min(9,12);
        echo "<br/> Elevar un numero a la potencia N: ".pow(5,3);
        echo "<br/> La raiz cuadrada de un numero: ".sqrt(3);
        echo "<br/> Redondeo de un numero:". round(12.5);
        echo "<br/> Redondeo de un numero:". round(12.4);
        echo "<br/> Seno de un número: ".sin(1.0);
        echo "<br/> Coseno de un número: ".cos(1.0);
        echo "<br/> tangente de un número: ".tan(1.0);
        echo "<br/> Generar números aleatorios: ".rand(); //Numeros entre 0 y casi 1
        echo "<br/> Generar números aleatorios entre 1 y 10: ".rand(1,10);
        ?>
    </body>
</html>
