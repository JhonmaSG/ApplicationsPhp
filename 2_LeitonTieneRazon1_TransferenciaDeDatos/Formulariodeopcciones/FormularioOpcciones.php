<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Formularios - Php</title>
    </head>
    <body>
        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <fieldset>
                    <legend>Información</legend>
                    Seleciona tus aficiones:<br/>
                    <blockquote><!-- identa -->
                        Bailar: <INPUT type="checkbox" name="aficion[]" value="Bailar"><br/>
                        Cantar: <INPUT type="checkbox" name="aficion[]" value="Cantar"><br/>
                        Dormir: <INPUT type="checkbox" name="aficion[]" value="Dormir"><br/>
                        Leer: <INPUT type="checkbox" name="aficion[]" value="Leer"><br/>
                    </blockquote>
                    
                    Selecciona tu color favorito:<br/>
                    <blockquote>
                        verde <INPUT type="radio" name="color" value="verde" CHECKED>
                        amarillo <INPUT type="radio" name="color" value="amarillo">
                        azul <INPUT type="radio" name="color" value="azul">
                        rojo <INPUT type="radio" name="color" value="rojo">
                    </blockquote>
                    
                    <br/><br/><input type="submit" name="enviar" value="Enviar">
                </fieldset>
            </form>
        </div>
        <?php
        if (isset($_POST['enviar'])) {

            echo "<h3> <fieldset style = 'width: 55%;'> <legend> Informacion recibida</legend>";
            if (isset($_POST['aficion'])) {
                echo "<ul> Las aficciones que elegiste fueron: <br>";
                foreach ($_POST['aficion'] as $valor) {
                    echo "<li>" . $valor . "<br></li>";
                }
            } else {
                echo "<br> No seleccionaste aficiones.\n";
            }
            echo "<br>El color que elegiste fue: " . $_POST['color'] . "<br/><br/>";
            echo "</fieldset></h3>";
            $formulario = $_SERVER['PHP_SELF'];
            echo "<br> <a href ='formulario'> Volver al formulario </a>";
        } else {
            
        }
        ?>
    </body>
</html>