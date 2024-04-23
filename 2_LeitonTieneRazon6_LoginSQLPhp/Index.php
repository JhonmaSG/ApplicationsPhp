<!doctype html>
<html>
    <head>
        <title>Plantilla base Php</title>
        <meta charset="UTF-8">     <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/estilos.css" rel="stylesheet"/>
    </head>
    <body>
        <header id="encabezado">
            <?php include("encabezado.php"); ?>
        </header>     <nav id="navegacion">
            <?php include("navegacion.php"); ?>
        </nav>
        <aside id="lado">
            <?php include("lado.php"); ?>
        </aside>
        <main id="principal">
        </main>
        <footer id="pie">
            <?php include("pie.php"); ?>
        </footer>
    </body>
</html>