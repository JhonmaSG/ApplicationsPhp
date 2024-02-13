<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sentencia if-else - Php</title>
        <link rel="stylesheet" href="estilos.css" type="text/css"/>
    </head>
    <body>
        <h2>Imprimir el mayor y el menor de tres numeros<br/></h2>
        <h3>
            <form name="numeros" method="POST">
                <fieldset>
                    <legend>Valores a Enviar</legend>
                    Digite el primer número :<input type="number" name="n1" autofocus/><br/>
                    Digite el segundo número :<input type="number" name="n2"/><br/>
                    Digite el tercero número :<input type="number" name="n3"/><br/>
                    <input type="submit" name="enviar" value="Enviar"/>
                </fieldset>
            </form>
        </h3>
        
            <!--
                Structure control: Ingreso de 3 números
                Verifica quien es el mayor y menor
            -->
            <?php
                if(isset($_POST['enviar'])){
                    $num1 = $_POST['n1'];
                    $num2 = $_POST['n2'];
                    $num3 = $_POST['n3'];
                    
                    echo "los numeros digitados fueron: ".$num1. " , ".$num2." y ".$num3."<br>";
                    echo "<fieldset><legend>Resultados</legend>";
                    
                    /*Realizar un if general para que muestre reciba solo numeros*/
                    if($num1 == $num2 and $num1==$num3){
                        $my=$num1;
                        $mn=$num1;
                    }
                    
                    if($num1 > $num2 and $num1>$num3){
                        $my=$num1;
                        if($num2 > $num3){
                            $mn=$num3;
                        }else{
                            $mn=$num2;
                        }  
                    }
                    
                    if($num2 > $num1 and $num2>$num3){
                        $my=$num2;
                        if($num1 > $num3){
                            $mn=$num3;
                        }else{
                            $mn=$num1;
                        }  
                    }
                    
                    if($num3 > $num2 and $num3>$num1){
                        $my=$num3;
                        if($num2 > $num1){
                            $mn=$num1;
                        }else{
                            $mn=$num2;
                        }  
                    }
                            
                    if($num1 == $num2 && $num1==$num3){
                        echo "los tres numeros son iguales<br/>";
                    }else{
                    echo "El mayor es:<input type=text value=$my"."><br/>";
                    echo "El menor es: <input type=text value=$mn"."><br/>";
                    }
                    echo "</fieldset>";
                    
                }
            ?>
        
    </body>
</html>
