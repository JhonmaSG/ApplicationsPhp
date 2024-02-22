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
         * current() :
         * next() : siguiente elemento
         * end(): invertir de un elemento o los elementos
         * prev():  de un elemento o los elementos
         */
        
        $colores[] = "Amarillo";
        $colores[] = "Azul";
        $colores[] = "Rojo";
        $colores[] = "Negro";
        $colores[] = "Verde";
        
        echo "<fieldset> <legend>Valores del array colores: </legend>";
        
        foreach ($colores as $elemento){
            echo $elemento." , ";            
        }
        echo "<br/>";
        echo "</fieldset>";
        ?>
        
    </body>
</html>
