<!doctype html>
<html>
    <head>
        <title>Ejercicio #1 - Volumen de un cilindro</title>
    </head>
    <body>

        <form method="post">
            <fieldset>
                <legend>Volumen de un cilindro</legend>
                Digite la altura del cilindro: <input type="number" name="altura" 
                                           required>
                <br/>
                
                Digite el radio del cilindro: <input type="number" required 
                                                     name="radio"><br/>

                <input type="submit" name="enviar" value="Enviar"><br/>

            </fieldset>
        </form>

        <?php
        include("Cilindro.php");
        if (isset($_POST['enviar'])) {
            $radio =$_POST['radio'];
            $altura = $_POST['altura'];
            
            $cilindro = new Cilindro($radio, $altura);
            $volumen = $cilindro->calcularVolumen();
            echo "<h3> <fieldset><legend>Informacion recibida</legend>";
            echo "Altura: ".$altura . "<br/>";
            echo "Radio: ".$radio . "<br/>";
            echo "El volumen es: ".$volumen. " cm3<br/>";
            echo "</fieldset> </h3>";
        }
        ?>

    </body>
</html>


