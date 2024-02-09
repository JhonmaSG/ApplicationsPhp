<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend>Resultado</legend>
            <?php
            /*·_GET[]*/
                $primer = (int) $_POST["primerNumero"];
                $segundo = (int) $_POST["segundoNumero"];
                echo("<h1>La suma es :".($primer+$segundo)."</h1>");
            ?>
            <input type="submit" value="Volver" onclick="history.back()">
        </fieldset>
        
    </body>
</html>
