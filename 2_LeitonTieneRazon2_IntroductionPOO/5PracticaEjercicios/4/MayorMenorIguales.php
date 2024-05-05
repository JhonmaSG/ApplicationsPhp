<!doctype html>
<!-- Construir una clase llamada Relaciones que contenga los 
siguientes métodos esmayor, esmenor, esigual. 
Se debe poder capturar dos números (A, B) e imprimir cual es 
el mayor, el menor o si son iguales.  -->
<html>
    <head>
        <title>Ejercicio #4 - Es mayor, igual o menor</title>
    </head>
    <body>

        <form method="POST">
            <fieldset>
                <legend>Numeros A y B</legend>
                Número A: <input type="number" name="numeroA" 
                                 value="<?php echo isset($_POST['numeroA']) ? htmlspecialchars($_POST['numeroA']) : ''; ?>" required><br>
                Número B: <input type="number" name="numeroB" 
                                 value="<?php echo isset($_POST['numeroB']) ? htmlspecialchars($_POST['numeroB']) : ''; ?>" required><br>
                
                <input type="submit" name="enviar" value="Enviar"><br/>
            </fieldset>
        </form>

        <?php
        include("Relaciones.php");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['enviar'])) {
                $numeroA = $_POST['numeroA'];
                $numeroB = $_POST['numeroB'];
                
                $relaciones = new Relaciones($numeroA, $numeroB);
                echo $relaciones->esmayor()."</br>";
                echo $relaciones->esmenor()."</br>";
                echo $relaciones->esigual()."</br>";                

            }
        }
        ?>

    </body>
</html>