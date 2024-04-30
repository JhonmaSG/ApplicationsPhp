<?php

include ("../fpdf186/fpdf.php");

class PDF extends FPDF {

    function Header() {
// descargar una imagen, en formato jpg, llamarla koala.jpg y guardarla en htdocs   
        //$this->Image('../koala.jpg', 20, 15, 15, 15, 'JPG');
        $this->SetFont('Arial', 'B', 12);
        $this->Multicell(0, 12, "Registro de informacion" . "\n Generado en un archivo PDF", 1, 'C');
        $this->Ln(3);
        $this->Line(0, 35, 300, 35); //impresión de linea 
        $this->Ln(5);
    }

    function Footer() {
        $this->SetY(-10);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Pagina :' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'B', 14);
$pdf->Write(7, "Informacion Basica");
$pdf->Ln();
$pdf->Cell(0, 7, "Nombres: " . $_POST['nombres'], 1, 0, 'L');
$pdf->Ln();
if (empty($_POST['genero']))
    $pdf->Cell(0, 7, "No selecciono género", 1, 0, 'L');
else
if ($_POST['genero'] == "M")
    $pdf->Cell(0, 7, "Genero: " . "Masculino", 1, 0, 'L');
else
    $pdf->Cell(0, 7, "Genero: " . "Femenino", 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(0, 7, "Fecha de nacimiento: " . $_POST['fecha'], 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(0, 7, "Ciudad de nacimiento: " . $_POST['ciudad'], 1, 0, 'L');
$pdf->Ln(10);
$pdf->SetFont('Times', 'B', 14);
$pdf->Write(7, "Informacion Complementaria");
$pdf->Ln();
$pdf->Cell(0, 7, "Aficiones favoritas: ", 1, 0, 'L');
$pdf->Ln();
if ($_POST['aficion']) {
    foreach ($_POST['aficion'] as $valor) {
        $pdf->Cell(0, 7, " " . $valor, 0, 0, 'C');
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 7, "No seleccionaste aficiones", 0, 0, 'C');
    $pdf->Ln();
}
$pdf->Ln(10);
$pdf->SetTextColor('255', '0', '0'); //para imprimir en rojo 
$pdf->Write(7, "Informacion de Estudios");
$pdf->Ln();
$pdf->SetTextColor('255', '100', '80'); //para imprimir en rojo 
$pdf->Cell(0, 7, "Nivel de estudios: " . $_POST['estudios'], 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(0, 7, "Segundo idioma que domina: " . $_POST['idioma'], 1, 0, 'L');
$pdf->Ln();
$pdf->Cell(0, 7, "Nivel de Inglés: " . $_POST['numero'], 1, 0, 'L');
$pdf->Ln(15);
$pdf->SetTextColor('26', '67', '1D');
$pdf->Cell(0, 7, "Comentarios: ", 1, 0, 'L');
$pdf->Ln();
if ($_POST['comentarios']) {
    $pdf->Multicell(0, 7, $_POST['comentarios'], 1, 'L');
    $pdf->Ln();
} else {
    $pdf->Multicell(0, 7, "\n no realizo comentarios", 1, 'C');
    $pdf->Ln();
}
$pdf->SetTextColor('0', '0', '0');
$pdf->Output("archivo.pdf", 'F');
echo "<script language='javascript'>window.open('archivo.pdf', '_self');</script>";
exit;
?>