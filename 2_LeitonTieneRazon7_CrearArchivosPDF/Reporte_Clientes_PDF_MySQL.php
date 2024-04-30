<!doctype html> 
<html> 
    <head> 
        <title>Formulario para generar un archivo PDF</title> 
        <meta charset="utf-8" /> 
    </head> 
    <body> 
        <h3 style="text-align:center"> 
            <br/>Reporte de clientes <br/><br/> 
            <form name="formulario" action="Generar_Reporte_Clientes_PDF_MySQL.php"  
                  method="post">  
                <fieldset style="width:50%;margin: auto;background-color:#dfdfdf"> 
                    <legend>Generar reporte por cliente</legend> 
                    <br/>Digite el nit:<input type="text" name="nit" autofocus/> 
                    <input type="submit" name="enviarnit" value="Enviar nit"/> 
                </fieldset> 
                <br/> 
                <fieldset style="width: 50%;margin: auto; background-color:#EFECEB"> 
                    <legend>Generar reporte para todos los clientes</legend> 
                    <br/>Imprimir listado de clientes<input type="submit" name="enviartodos" value="Todos"/> 
                </fieldset> 
            </form>    
        </h3> 
    </body> 
</html> 