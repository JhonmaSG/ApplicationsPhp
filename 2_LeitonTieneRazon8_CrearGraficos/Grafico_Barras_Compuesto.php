<?php

require_once '../phplot-6.2.0/phplot.php';
$datos = array(
    array('Manzanas', 40, 22, 34), array('Curuba', 30, 35, 74), array('Banano', 20, 42, 34),
    array('Piña', 10, 25, 74), array('Uva', 13, 26, 34), array('Naranja', 17, 27, 14),
    array('Mandarina', 10, 18, 54), array('Melon', 25, 19, 54)
);
$plot = new PHPlot(800, 600);
$plot->SetImageBorderType('plain');
$plot->SetPlotType('bars');
$plot->SetDataType('text-data');
$plot->SetDataValues($datos);
$plot->SetTitle('Grafico de barras con un conjunto de 3 datos');
$plot->SetLegend(array('Enero', 'Febrero', 'Marzo'));
$plot->SetXTitle('Frutas');
$plot->SetYTitle('Cantidad');
$plot->DrawGraph();
?>
