<?php

if (isset($_POST['enviarnit'])) {
    $nit = $_POST['nit'];
    $seleccion = "Select * from Clientes where nit=" . $nit;
} else {
    $seleccion = "Select * from Clientes ORDER BY nit";
}
require('../fpdf186/fpdf.php');
include("ConexionBDPDO.php");

class PDF extends FPDF {

    function Header() {
        //$this->Image('../koala.jpg', 20, 15, 20, 15, 'JPG');
        $this->SetFont('Arial', 'B', 20);
        $this->Multicell(0, 12, "Reporte Clientes" . "\n Generado en un archivo PDF", 1, 'C');
        $this->Ln(3);
        $this->Line(0, 35, 300, 35); //impresión de linea 
        $this->Ln(5);
    }

    function Footer() {
        $this->SetY(-10);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, utf8_decode('Página:') . $this->PageNo(), 0, 0, 'C');
    }

}

$pdf = new PDF();
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();

$valor_inicial_eje_y = 40;
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY($valor_inicial_eje_y);
$pdf->SetX(10);
$pdf->Cell(20, 6, 'NIT', 1, 0, 'L', 1);
$pdf->Cell(50, 6, 'EMPRESA', 1, 0, 'L', 1);
$pdf->Cell(40, 6, 'DIRECCION', 1, 0, 'L', 1);
$pdf->Cell(25, 6, 'TELEFONO', 1, 0, 'L', 1);
$pdf->Cell(25, 6, 'CIUDAD', 1, 0, 'L', 1);
$pdf->Cell(30, 6, 'FECHA', 1, 0, 'L', 1);
$eje_y = 46;
$i = 0;
$max = 25;
$altura_fila = 6;

$consultar_registros = $conexion->prepare($seleccion);
$consultar_registros->execute();
$resultado = $consultar_registros->fetchAll();
foreach ($resultado as $fila) {
    if ($i == $max) {
        $pdf->AddPage();
        $pdf->SetY($valor_inicial_eje_y);
        $pdf->SetX(10);
        $pdf->Cell(20, 6, 'NIT', 1, 0, 'L', 1);
        $pdf->Cell(50, 6, 'EMPRESA', 1, 0, 'L', 1);
        $pdf->Cell(40, 6, 'DIRECCION', 1, 0, 'L', 1);
        $pdf->Cell(25, 6, 'TELEFONO', 1, 0, 'L', 1);
        $pdf->Cell(25, 6, 'CIUDAD', 1, 0, 'L', 1);
        $pdf->Cell(30, 6, 'FECHA', 1, 0, 'L', 1);
        $eje_y = $eje_y + $altura_fila;
        $i = 0;
    }
    $pdf->SetY($eje_y);
    $pdf->SetX(10);
    $pdf->Cell(20, 6, $fila[0], 1, 0, 'L', 0);
    $pdf->Cell(50, 6, utf8_decode($fila[1]), 1, 0, 'L', 0);
    $pdf->Cell(40, 6, $fila[2], 1, 0, 'L', 0);
    $pdf->Cell(25, 6, $fila[3], 1, 0, 'L', 0);
    $pdf->Cell(25, 6, utf8_decode($fila[4]), 1, 0, 'L', 0);
    $pdf->Cell(30, 6, $fila[5], 1, 0, 'L', 0);
    $eje_y = $eje_y + $altura_fila;
    $i = $i + 1;
}

//$conexion=null; 
$pdf->Output("reporte_clientes.pdf", 'F');
echo "<script language='javascript'>window.open('reporte_clientes.pdf','_self'); 
</script>";
?>