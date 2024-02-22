<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Arreglos - Php</title>
    </head>
    <body>
        <h2 align="center">Ejemplo creacion de arrays en php</h2>
        
        <?php
        /*
        $nombre_array = array([indice1]=>"valor1",[indice2]=>"valor2",....,[indiceN]=>"ValorN");
         * $nombre_array = array(0=>"valor1",1=>"valor2",....,2=>"ValorN");
         * reset() : me lleva al primer elemento
         * key( : poscion especifica
         * current() : obtengo el valor de sa posicion
         * next() : siguiente elemento
         * end(): invertir de un elemento o los elementos
         * prev():  de un elemento o los elementos
         * |  sd  |   |   |   | sd  |   |   |   |   |  asd |   |   |   
         */
        
        $carros[10] = "Renault";
        $carros[15] = "Mazda";
        $carros[28] = "Chevrolet";
        $carros[9] = "Hyundai";
        $carros[2] = "Fiat";
        
        echo "<fieldset> <legend>Valores del array colores: </legend>";
        reset($carros);
        do{
            $indice = key($carros);
            $elemento=current($carros);
            echo ("Posicion [".$indice."] : ".$elemento."<br/>");
        }while(next($carros));
        
        echo "</fieldset>";
        ?>
        
    </body>
</html>
