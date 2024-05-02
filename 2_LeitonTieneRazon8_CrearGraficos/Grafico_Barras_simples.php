<?php

require_once '../phplot-6.2.0/phplot.php';
$datos = array(
    array('Manzana', 33),
    array('Banano', 54),
    array('Curuba', 78),
    array('Uva', 18),
    array('Melon', 29),
    array('Naranja', 63),
    array('Fresa', 77)
);
$plot = new PHPlot(800, 600);
$plot->SetImageBorderType('plain');
$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($datos);
$plot->SetDataColors('red');
$plot->SetPrecisionY(0);
$plot->SetTitle('Grafica de barras - ventas de frutas');
$plot->SetXTitle('Frutas');
$plot->SetYTitle('Cantidad');
$plot->DrawGraph();
?>

