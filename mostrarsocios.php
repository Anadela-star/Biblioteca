<?php 
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->Rect(0,0, 220, 30, 'F');
    $this->SetY(20);
    $this->SetFont('Arial', 'B', 30);
    $this->SetFillColor(79,78,77);
    $this->SetTextColor(255,255,255);
    $this->Write(5, 'ANZU');
}

// Pie de página
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->SetTextColor(213, 41,73);
    $this->Write(5, utf8_decode('Montería-Cordoba'));

    $this->Cell(0,4,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexao.php';

$consulta="SELECT * FROM socios";
$resultado= $mysqli->query($consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B','12');
$pdf->SetY(60);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(79,78,77);
$pdf->Cell(45, 10, utf8_decode('Código socio'), 0, 0, 'C', 1);
$pdf->Cell(45, 10, 'Nombre', 0, 0, 'C', 1);
$pdf->Cell(45, 10, utf8_decode('direccion'), 0, 0, 'C', 1);
$pdf->Cell(45, 10, 'Libros prestados', 0, 0, 'C', 1);
$pdf->Ln();

for ($i=0;$row=$resultado->fetch_array();$i++){
    $pdf->SetTextColor(255,124,134);
    $pdf->Cell(45, 10, $row['c_socio'], 0, 0, 'C', 0);    
    $pdf->Cell(45, 10, utf8_decode($row['nombre']), 0, 0,  'C', 0);
    $pdf->Cell(45, 10, utf8_decode($row['direccion']), 0, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['n_librosprestados'], 0, 1,'C', 0);
    $pdf->Ln();
    }

$pdf->Output();

?>