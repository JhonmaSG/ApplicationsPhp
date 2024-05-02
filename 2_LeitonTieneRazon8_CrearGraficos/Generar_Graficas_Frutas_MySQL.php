<?php

include("../phplot-6.2.0/phplot.php");
include("ConexionBDPDO.php");
if (isset($_POST['graficolinea']))
    $tipo = 'lines';
elseif (isset($_POST['graficoarea']))
    $tipo = 'area';
elseif (isset($_POST['graficobarra']))
    $tipo = 'bars';
elseif (isset($_POST['graficopie']))
    $tipo = 'pie';
try {
    $seleccion = "Select nombre,sum(cantidad) as alias from frutas group by nombre";
    $consultar_registros = $conexion->prepare($seleccion);
    $consultar_registros->execute();
    $resultado = $consultar_registros->fetchAll();
    foreach ($resultado as $fila) {
        $datos[] = array($fila[0], $fila[1]);
    }
    $conexion = null;
} catch (PDOException $e) {
    echo ("Error....:" . $e->getMessage());
}
$plot = new PHPlot(900, 700);
$plot->SetImageBorderType('plain');
$plot->SetPlotType($tipo);
$plot->SetDataValues($datos);
$plot->SetTitle('Graficos estadisticos con Php - Ventas de frutas');
if ($tipo == 'pie') {
    $plot->SetDataType('text-data-single');
    foreach ($datos as $fila)
        $plot->SetLegend(implode(':', $fila));
} else {
    $plot->SetDataType('text-data');
    $plot->SetDataColors('gray');
    $plot->SetPrecisionY(0);
    $plot->SetXTitle('Frutas');
    $plot->SetYTitle('Cantidad');
}
$conexion = null;
$plot->DrawGraph();
?>

