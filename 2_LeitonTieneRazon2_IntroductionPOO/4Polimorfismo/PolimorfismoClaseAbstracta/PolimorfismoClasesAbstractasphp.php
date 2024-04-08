<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Clases abstractas - Php</title>
        <link rel="stylesheet" href="estilos.css" type="text/css"/>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Capturar información</legend>
                Digite base:<input type="text" name="base" autofocus required><br/>
                Digite altura:<input type="text" name="altura" required ><br/>
                <input type="submit" name="enviar" value="Enviar">
            </fieldset>
        </form>
        <?php
        if (isset($_POST['enviar'])) {
            include("Poli_Clases_Abstractas.php");
            $rectangulo = new Rectangulo($_POST['base'], $_POST['altura']);
            $triangulo = new Triangulo($_POST['base'], $_POST['altura']);
            echo "<h3><fieldset><legend>Areas</legend>";
            echo "<br/>El área del rectángulo es: " . $rectangulo->area() . "<br/>";
            echo "<br/>El área del triángulo es: " . $triangulo->area() . "<br/>";
            echo "</fieldset></h3>";
        }
        ?>
    </body>
</html>