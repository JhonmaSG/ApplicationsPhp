<?php

require('../fpdf186/fpdf.php');
require('./ConexionBDPDO.php');

class PDF extends FPDF {

    function Header() {
        //$this->Image('../koala.jpg', 20, 15, 15, 15, 'JPG');
        $this->SetFont('Arial', 'B', 20);
        $this->Multicell(0, 12, "Informacion de Clientes" . "\n Generado en un archivo PDF", 1, 'C');
        $this->Ln(3);
        $this->Line(0, 35, 300, 35); //impresión de linea 
        $this->Ln(5);
    }

    function Footer() {
        $this->SetY(-10);
        $this->SetFont('Arial', 'I', 8);
        $this->AliasNbPages();
        $this->Cell(0, 10, 'Pagina :' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

$pdf = new PDF();
$pdf->SetAutoPageBreak(false);
$pdf->AddPage();
$eje_y = 40;
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetY($eje_y);
$pdf->SetX(15);
$pdf->Cell(20, 6, 'NIT', 1, 0, 'L', 1);
$pdf->Cell(50, 6, 'EMPRESA', 1, 0, 'L', 1);
$pdf->Cell(40, 6, 'DIRECCION', 1, 0, 'L', 1);
$pdf->Cell(30, 6, 'TELEFONO', 1, 0, 'L', 1);
$pdf->Cell(30, 6, 'CIUDAD', 1, 0, 'L', 1);
$eje_y = 46;
$seleccion = "select nit,empresa,direccion,telefono,ciudad from Clientes ORDER BY nit";
$consultar_registros = $conexion->prepare($seleccion);
$consultar_registros->execute();
$resultados = $consultar_registros->fetchAll();
$i = 0;
$max = 25;
$altura_fila = 6;
foreach ($resultados as $fila) {
    if ($i == $max) {
        $pdf->AddPage();
        $pdf->SetY($valor_inicial_eje_y);
        $pdf->SetX(15);
        $pdf->Cell(20, 6, 'NIT', 1, 0, 'L', 1);
        $pdf->Cell(50, 6, 'EMPRESA', 1, 0, 'L', 1);
        $pdf->Cell(40, 6, 'DIRECCION', 1, 0, 'L', 1);
        $pdf->Cell(30, 6, 'TELEFONO', 1, 0, 'L', 1);
        $pdf->Cell(30, 6, 'CIUDAD', 1, 0, 'L', 1);
        $eje_y = $eje_y + $altura_fila;
        $i = 0;
    }
    $nit = $fila[0];
    $empresa = utf8_decode($fila[1]);
    $direccion = $fila[2];
    $telefono = $fila[3];
    $ciudad = utf8_decode($fila[4]);
    $pdf->SetY($eje_y);
    $pdf->SetX(15);
    $pdf->Cell(20, 6, $nit, 1, 0, 'L', 0);
    $pdf->Cell(50, 6, $empresa, 1, 0, 'L', 0);
    $pdf->Cell(40, 6, $direccion, 1, 0, 'L', 0);
    $pdf->Cell(30, 6, $telefono, 1, 0, 'L', 0);
    $pdf->Cell(30, 6, $ciudad, 1, 0, 'L', 0);
    $eje_y = $eje_y + $altura_fila;
    $i = $i + 1;
}
$conexion = null;
$pdf->Output("archivo.pdf", 'F');
echo "<script language='javascript'>window.open('archivo.pdf','_self');</script>";
?>