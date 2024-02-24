<!doctype html>

<html>
    <head>
        <title>Excercise 4</title>
    </head>
    <body>
        <!-- Realiza un programa que calcule la raiz cuadrada
        de un número entero positivo digitado por el usuario.
        Se repetirá el proceso hasta que digite un 
        numero 0 (cero).
        Si digita un valor negativo, se deberá mosrar un 
        aviso en vez de intentar calcular si raiz, se debe 
        crear una función para ternornar la raíz cuadrada-->
        <form method="post">
            <h2>Raíz Cuadrada de un Número</h2>
            Digite un número: <input type="text" name="numero"/> <br><br>
            <input type="submit" name="enviar" value="Calcular"><br><br> 
        </form>

        <?php
        if (isset($_POST['enviar'])) {
            $numero = $_POST['numero'];
            do{
                $resultado = raizCuadrada($numero);
                echo "Resultado: ".$resultado."<br/>";
            }while( $numero == 0 );
            
        }

        function raizCuadrada($numero) {
            if( $numero < 0 ){
                $resultado = "No se puede sacar la raíz de un número Negativo"; 
                return $resultado;
            }else{
                return sqrt($numero);
            }
        }
        ?>
    </body>
</html>

