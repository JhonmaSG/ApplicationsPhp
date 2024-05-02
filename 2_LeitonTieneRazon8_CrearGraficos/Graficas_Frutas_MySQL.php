<!DOCTYPE html>
<html>
    <head>
        <title>Formulario para generar Gráficos - Php</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h3 style="text-align:center">
            <br/>Generación Gráficos estadisticos - Clientes <br/><br/>
            <form name="formulario" action="Generar_Graficas_Frutas_MySQL.php" method="post">
                <fieldset style="width:50%;margin: auto;background-color:#dfdfdf">
                    <legend>Tipo de Gráfico</legend>
                    <input type="submit" name="graficolinea" value="Gráfico de líneas"/>
                    <input type="submit" name="graficoarea" value="Gráfico de Area"/>
                    <input type="submit" name="graficobarra" value="Gráfico de Barras"/>
                    <input type="submit" name="graficopie" value="Gráfico Pie"/>
                </fieldset>
            </form>
        </h3>

    </body>
</html>
