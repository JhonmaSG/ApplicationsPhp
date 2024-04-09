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
            <iframe width="700" height="400" src="https://www.youtube.com/embed/Qot9VvLDQuw?si=KC10Szqw5zwaWOZQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </main>
        
        <footer id="pie">
            <?php
            include 'Pie.php';
            ?>
        </footer>
    </body>
</html>
