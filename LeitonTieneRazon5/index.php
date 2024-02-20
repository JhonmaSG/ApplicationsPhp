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
        <form method="POST">
            Digite oracion:<input type="text" name="oracion"><br/>
            <input type="submit" name="enviar" value="Ejecutar"><br/>
        </form>
        <?php
        if (isset($_POST['enviar'])) {
            /* ------------------Digite una oracion y la imprime rapidamente */
            $cadena = $_POST['oracion'];
            echo "<br/>La oracion digitada fue:<i>" . $cadena . "</i><br/>";
            echo "<br/>Imprimir cada palanra de la oracion por fila<br/>";
            $separar = explode(" ", $cadena);    //explode, separa las cadenas por un delimitador (" "): separas[0] = "palabra1"
            /* separas[0] = "palabra1"
              separas[1] = "palabra2"
             * separas[2] = "palabra3"
             * separas[3] = "palabra4"                 */
            foreach ($separar as $palabra) { //(variable as objeto)
                echo ("<b>" . $palabra . "</b><br/>");
            }
            echo "<br/><i>Longitud de la oracion: <i>". strlen($cadena);
            //strbrk: encuentra la posicion de dicha letra hacia adelante
            echo "<br/><i>Imprimir la oracion desde el primer caracter L<i>:". strpbrk($cadena,'l');
            //strpos: Encuentra la posicion de dicha letra
            echo "<br/><i>Imprimir la posicion de la primera letra O: ". strpos($cadena, "o");
            echo "<br/><br/><b>Funcion substr</b>";
            //substr($cadena, 1) quita el primer caracter de la oracion
            echo "<br/><i>Quitar el primer carater de la oracion:</i> ". substr($cadena, 1);
            //imprime el ultimo caracter substr($cadena, -1)
            echo "<br/><i>Imprimir el ultimo caracter de la oracion:</i> ". substr($cadena, -1);
            echo "<br/><i>Imprimir desde el elemento 1 hasta el elemento 3:</i> ". substr($cadena, 1 , 3);
            echo "<br/><i>Imprimir desde el elemento 0 hasta el elemento 4:</i> ". substr($cadena, 0 , 4);
            echo "<br/><i>Imprimir desde el elemento 0 hasta el ultimo elemento que encuentre:</i> ". substr($cadena, 0 , 30);            
            echo "<br/><i>Imprimir desde el elemento -4 hasta los dos elementos siguientes:</i> ". substr($cadena, -4 , 2);
        }
        ?>
    </body>
</html>
