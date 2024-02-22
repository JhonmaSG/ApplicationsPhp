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
        <h2 align="center">Ejemplo arrays asociativos en php</h2>

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
         * arrays asociativos, se asocia un indice a un valor, cada indice no debe ser nesesariamente un numero
         * ejemplo indice => valor === "bogota" => "cundinamarca"
         */

        $capitales = array(
            "bogota" => "cundinamarca",
            "medellin" => "antioquia",
            "manizales" => "caldas",
            "armenia" => "quindio",
            "villavicencio" => "meta"
        );

        echo "<fieldset> <legend>Valores iniciales del array capitales: </legend>";
        // foreach($capitales = array($ciudad => $departamento)) : bogota => cundinamarca
        foreach ($capitales as $ciudad => $departamento) {
            echo "<b>" . $ciudad . "</b> es capital de: <b>" . $departamento . "</b><br/>";
        }

        echo "</fieldset>";

        //------------------------------añadir un elemento
        $capitales["quibdo"] = "choco";

        echo "<fieldset> <legend>valor añadido al array capitales: </legend>";
        // foreach($capitales = array($ciudad => $departamento)) : bogota => cundinamarca
        foreach ($capitales as $ciudad => $departamento) {
            echo "<b>" . $ciudad . "</b> es capital de: <b>" . $departamento . "</b><br/>";
        }

        echo "</fieldset>";

        //------------------------------eliminar un elemento
        //unset = eliminar valor por indice
        unset($capitales["armenia"]);

        echo "<fieldset> <legend>valor añadido al array capitales: </legend>";
        // foreach($capitales = array($ciudad => $departamento)) : bogota => cundinamarca
        foreach ($capitales as $ciudad => $departamento) {
            echo "<b>" . $ciudad . "</b> es capital de: <b>" . $departamento . "</b><br/>";
        }
        echo "</fieldset>";
        ?>

    </body>
</html>
