<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Interfaces - Php</title>
        <link rel="stylesheet" href="estilos.css" type="text/css"/>
    </head>
    <body>
        <form method="post">
            <fieldset>
                <legend>Capturar información</legend>
                Digite primer número:<input type="number" name="primero" autofocus required value=
                                            "<?= isset($_POST['primero']) ? $_POST['primero'] : '' ?>"><br/>
                Digite segundo número:<input type="number" name="segundo" required value=
                                             "<?= isset($_POST['segundo']) ? $_POST['segundo'] : '' ?>"><br/>
                <input type="submit" name="suma" value="Sumar">
                <input type="submit" name="resta" value="Restar">
                <input type="submit" name="multiplicacion" value="Multiplicar">
                <input type="submit" name="division" value="Dividir">
            </fieldset>
        </form>
        <?php
        include("Poli_Interfaces.php");
        if (isset($_POST['suma'])) {
            $objeto = new Sumar($_POST['primero'], $_POST['segundo']);
            echo "<h3><fieldset><legend>Operación</legend>";
            echo "<br/>La suma es: " . $objeto->operacion() . "<br/>";
            echo "</fieldset></h3>";
        }
        if (isset($_POST['resta'])) {
            $objeto = new Restar($_POST['primero'], $_POST['segundo']);
            echo "<h3><fieldset><legend>Operación</legend>";
            echo "<br/>La resta es: " . $objeto->operacion() . "<br/>";
            echo "</fieldset></h3>";
        }
        if (isset($_POST['multiplicacion'])) {
            $objeto = new Multiplicar($_POST['primero'], $_POST['segundo']);
            echo "<h3><fieldset><legend>Operación</legend>";
            echo "<br/>La multiplicación es: " . $objeto->operacion() . "<br/>";
            echo "</fieldset></h3>";
        }
        if (isset($_POST['division'])) {
            $objeto = new Dividir($_POST['primero'], $_POST['segundo']);
            echo "<h3><fieldset><legend>Operación</legend>";
            echo "<br/>La división es: " . $objeto->operacion() . "<br/>";
            echo "</fieldset></h3>";
        }
        ?>
    </body>
</html>