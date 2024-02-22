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
        <h2 align="center">Ejemplo operaciones con arrays en php</h2>
        
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
        
        $agenda = array(
            "datos"=> array("nombres"=>"Jose Martinez" , "domicilio"=>"Cra 7 43234")
            
        );
        echo "<fieldset> <legend>Valores iniciales del array</legend>";
        $profesiones = array("abogada" , "ingeniera" , "doctora" , "periodista");
        $nombres=array("Martha" , "Rocio" , "Sonia" , "Claudia");
        
        
        foreach ($nombres as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        //Añadir elementos
        echo "<fieldset> <legend>El array nombres con elementos adicionados</legend>";
        array_push($nombres, "Mary" , "Leonor" , "Mirian");
        foreach($nombres as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        
        //Elimina elementos especificos de N a M
        echo "<fieldset> <legend>El array nombres con elementos adicionados</legend>";
        $salida = array_slice($nombres, 2, 4);
        foreach($salida as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        
        //Elimina elementos especificos
        echo "<fieldset><legend>Quitar el primer valor (Martha) del array \$nombres</legend>";
        $salida = array_shift($nombres);
        foreach($nombres as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        
        //Elimina el ultimo elemento
        echo "<fieldset><legend>Quitar el primer valor (Martha) del array \$nombres</legend>";
        $salida = array_pop($nombres);
        foreach($nombres as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        
        //Ordena de la z a la a
        echo "<fieldset><legend>valores ordenados (Z-A) del array \$nombres</legend>";
        rsort($nombres);
        foreach($nombres as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        
        //Ordena de la a a la z
        echo "<fieldset><legend>valores ordenados (A-Z) del array \$nombres</legend>";
        $invertir = array_reverse($nombres);
        foreach($invertir as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        
        //Uniendo vectores
        echo "<fieldset><legend>Uniendo dos vectores</legend>";
        $salida = array_merge($nombres , $profesiones);
        foreach($salida as $elemento){
            echo $elemento." , ";            
        }
        echo "</fieldset>";
        ?>
        
    </body>
</html>
