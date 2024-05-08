<!doctype html>
<!-- Realizar un programa utilizando herencia que decida si 
dos números son amigos.  Dos números son amigos si la suma 
de los divisores del primer número, excluido el, es igual al segundo número, 
y viceversa; es decir, si la suma de los divisores del segundo número, 
excluido el, es igual al primer número. .  -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verificación de Números Amigos</title>
    </head>
    <body>
        <h1>Verificación de Números Amigos</h1>
        <form method="post">
            <label for="numero1">Ingrese el primer número:</label>
            <input type="text" id="numero1" name="numero1">
            <br>
            <label for="numero2">Ingrese el segundo número:</label>
            <input type="text" id="numero2" name="numero2">
            <br>
            <input type="submit" value="Verificar">
        </form>

        <?php
        require_once 'Numeros.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $num1 = new Amigo($numero1);
            $num2 = new Amigo($numero2);

            if ($num1->sonAmigos($num2) && $num2->sonAmigos($num1)) {
                echo "<p>Los números $numero1 y $numero2 son amigos.</p>";
            } else {
                echo "<p>Los números $numero1 y $numero2 no son amigos.</p>";
            }
        }
        ?>
    </body>
</html>