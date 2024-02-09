<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
           
            <?php
                echo ('<h3><br/>');
                $numeros = 80;
                $texto = "ejemplo php";
                $logica = true;
                $decimal = 13.1416;
                $cadena = "hola...";
                
                echo ('variable numerica : '.$numeros."; tipo de dato : ". gettype($numeros)."<br/>");
                echo ('variable tipo caracter : '.$texto."; tipo de dato : ". gettype($texto)."<br/>");
                echo ('variable booleana : '.$logica."; tipo de dato : ". gettype($logica)."<br/>");
                echo ('variable flotante : '.$decimal."; tipo de dato : ". gettype($decimal)."<br/>");
                settype($numeros, "double");
                echo ("<i> cambiar el tipo de dato de una variable con settype() </i><br/>");
                echo ("nuevo tipo de la variable integer: ". gettype($numeros)."; y su valor es : ".$numeros);
            ?>
        
    </body>
</html>
