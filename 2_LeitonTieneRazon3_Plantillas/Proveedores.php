<?php
    if($_SESSION['usuario']==null){
    header("Location;./Acceso/Login.php");}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Plantilla base PHP</title>
        <link rel="stylesheet" href="css/style.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <header id="encabezado">
            <?php
            include 'Encabezado.php';
            ?>
        </header>
        <nav id="navegacion">
            <?php
            include 'navegacion.php';
            ?>
        </nav>
        <aside id="lado">
            <?php
            include 'Lado.php';
            ?>
        </aside>
        
        <main id="principal">
            <img src="https://pbs.twimg.com/media/GFCzKLjXYAA5xS7.jpg" alt="alt" height="500"/>
        </main>
        
        <footer id="pie">
            <?php
            include 'Pie.php';
            ?>
        </footer>
    </body>
</html>
