<!doctype html>

<html>
    <head>
        <title>Excercise 9</title>
    </head>
    <body>
        <!-- Escribir un programa que capture un número
        e imprima en texto por medio de una función
        si es primo o no.-->
        <form method="post">
            <h2>Número Primo</h2>
            Digite el Número: <input type="text" name="numero" autofocus/> <br><br>
            <input type="submit" name="enviar" value="Calcular"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $numero = $_POST['numero'];
            
            echo "<br>Número Digitado: ".$numero."<br/>";
            echo "<br>Resultado: ".esPrimo($numero);
        }
        /*Numero Primo:
        5 % 2 == 0*/
        function esPrimo($numero) {
            $contador=0;
            for($i=1;$i<=$numero;$i++){
                if( ($numero % $i) == 0 ){
                    $contador++;
                }
            }
            if( $contador == 2){
                return "Es Primo";
            }else{
                return "No es Primo";
            }
        }
        ?>
    </body>
</html>

