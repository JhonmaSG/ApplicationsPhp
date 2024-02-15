<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funciones sin paámetros</title>
    </head>
    <body>
        <h2>Ejemplo funciones sin parámetros - Php</h2>
        <h3>
            <form method="POST">
                <fieldset>
                    <legend>Valores</legend>
                    Digite número inicial:<input type="text" autofocus name="inicio" /><br/>
                    Digite número final:<input type="text" name="final" /><br/>
                    <input type="submit" name="enviar" value="Ejecutar"><br/>
                </fieldset>
            </form>
        </h3>
        <?php
        if (isset($_POST['enviar'])) {
            echo "<div id='centrado'>";
            echo "<fieldset><legend>Resultados Funcion sin parametros</legend>";
            funcion_sin_parametros();
            funcion_sin_parametros2();
            echo "</fieldset>";
            echo "</div>";
        }
        function funcion_sin_parametros(){
            $v_inicial=$_POST['inicio'];
            $v_final=$_POST['final'];
            echo "<h3>Numeros pares entre ".$v_inicial." y ".$v_final." </h3>";
            for($i=$v_inicial;$i <= $v_final ; $i++){
                if( $i%2 == 0 ){
                    echo "".$i.",";
                }
            }
        }
        function funcion_sin_parametros2(){
            $v_inicial=$_POST['inicio'];
            $v_final=$_POST['final'];
            echo "<h3>Numeros impares entre ".$v_inicial." y ".$v_final." </h3>";
            for($i=$v_inicial;$i <= $v_final ; $i++){
                if( $i%2 == 1 ){
                    echo "".$i.",";
                }
            }
        }
        ?>
    </body>
</html>
