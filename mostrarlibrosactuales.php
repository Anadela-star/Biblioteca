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
    $this->SetFillColor(243,245,243);
    $this->SetTextColor(255,255,255);
    $this->Write(4, 'ANZU');
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

$consulta="SELECT * FROM libro";
$resultado= $mysqli->query($consulta);

$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B','12');
$pdf->SetY(60);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(79,78,77);
$pdf->Cell(45, 10, utf8_decode('Código libro'), 0, 0, 'C', 1);
$pdf->Cell(45, 10, utf8_decode('Categoría'), 0, 0, 'C', 1);
$pdf->Cell(45, 10, utf8_decode('Título'), 0, 0, 'C', 1);
$pdf->Cell(45, 10, utf8_decode('Stock'), 0, 0, 'C', 1);

$pdf->Ln();
for ($i=0;$row=$resultado->fetch_array();$i++){
    $pdf->SetTextColor(255,124,134);
    $pdf->Cell(45, 10, $row['codigo'], 0, 0, 'C', 0);    
    $pdf->Cell(45, 10, $row['id_cate'], 0, 0,  'C', 0);
    $pdf->Cell(45, 10, utf8_decode($row['titulo']), 0, 0, 'C', 0);
    $pdf->Cell(45, 10, utf8_decode($row['stock']), 0, 0, 'C', 0);

    $pdf->Ln();
    }
$pdf->Output();
?>