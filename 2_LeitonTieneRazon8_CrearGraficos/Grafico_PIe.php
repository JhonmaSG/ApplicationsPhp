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
$plot->SetPlotType('pie');
$plot->SetDataType('text-data-single');
$plot->SetDataValues($datos);
//colores diferentes para cada dato
$plot->SetDataColors(array('red', 'green', 'blue', 'yellow', 'cyan', 'magenta', 'brown'));
$plot->SetTitle("Grafica Pie - ventas de frutas)");
// colocarle una leyenda a cada dato
foreach ($datos as $fila)
    $plot->SetLegend(implode(': ', $fila));
$plot->SetLegendPixels(5, 5);
$plot->DrawGraph();
?>