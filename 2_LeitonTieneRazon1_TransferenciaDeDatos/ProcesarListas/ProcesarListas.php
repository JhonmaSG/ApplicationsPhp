<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formularios</title>
    </head>
    <body>
        <div>
            <?php
            if (isset($_GET['enviar'])) {
                echo "<h3>";
                echo "<fieldset> <legend> Informacion recibida </legend>";
                echo "La profesion que mas le gusta es: " . $_GET['profesion'] . "</br>";
                echo "Y te gustaria estudiar en la : " . $_GET['universidad'] . "</br>";
                echo "Y el sector en el que desearia trabajar es:" . $_GET['sector'] . "<br/> <br/>";
                echo "</h3>";
            }
            echo "</fieldset>";
            echo "<h4> <a href='FormulariosListas.php'> Volver al Formulario </a> </h4";
            ?>
        </div>
    </body>
</html>