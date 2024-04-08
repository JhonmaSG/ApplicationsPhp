<!DOCTYPE html>
<html>
    <head>
        <title>Polimorfismo Herencia</title>
    </head>
    <body>
        <h3>Convertir Decimal a Binario-Hexadecimal-Binario</h3>
        <form method="post">
            Digite un número decimal:
            <input type="numbre" name="numero"  value="<?= isset($_POST['numero']) ? $_POST['numero'] : '' ?>"><br/>
            <button type="submit" name="btndb">Decimal/Binario</button>
            <button type="submit" name="btndh">Decimal/Hexadecimal</button>
            <button type="submit" name="btndo">Decimal/Octal</button>
        </form>
        <?php
        include("Poli_Herencia.php");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $numero = $_POST['numero'];
            echo "<br/>El número digitado fue:" . $numero . "<br/>";
            if (isset($_POST['btndb'])) {
                //echo "<br/><br/>Convertido a:";
                $objeto = new OperacionDecBin();
                $objeto->setDecimal($numero);
                echo "<br/><strong>" . $objeto->operacion() . "</strong>";
            } if (isset($_POST['btndh'])) {
                $objeto = new OperacionDecHex();
                $objeto->setDecimal($numero);
                echo "<br/><strong>" . $objeto->operacion() . "</strong>";
            } if (isset($_POST['btndo'])) {
                $objeto = new OperacionDecOct();
                $objeto->setDecimal($numero);
                echo "<br/><strong>" . $objeto->operacion() . "</strong>";
            }
        }
        ?>
    </body>
</html>