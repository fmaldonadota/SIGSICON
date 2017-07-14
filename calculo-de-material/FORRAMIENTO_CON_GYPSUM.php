<?php



$name=$_GET['name2'];
$ingreso=$_GET['ingresol5'];
$fogy_num_planchas=$_GET['fogy_num_planchasl'];
$fogy_masilla=$_GET['fogy_masillal'];
$fogy_tape=$_GET['fogy_tapel'];
$fogy_pegamento=$_GET['fogy_pegamentol'];




require('lib/fpdf181/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
// T�tulos de las columnas

// Carga de datos



$pdf->SetFont('Arial','',11);
$pdf->Cell(40,10,'');
$pdf->Image('img/Logo.jpg' , 50 ,22, 110 , 38,'JPG');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Ln();
$pdf->Cell(50);
$pdf->Cell(90,10,utf8_decode('Cálculo de Material SICON'),1,1,'C'); 
$pdf->Ln();
$pdf->Cell(50);
$pdf->Cell(90,10,utf8_decode($name),1,1,'C');
$pdf->Ln();


$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$pdf->SetFont('Arial','',9);
// Datos
$fill = false;
$pdf->Cell(55);
$pdf->Cell(35,6,utf8_decode("Área de Instalación: "),1,0,'C',$fill);
$pdf->Cell(45,6,$ingreso." metros cuadrados",1,0,'C',$fill);

$pdf->Ln();
$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Materiales",1,0,'C',$fill);
$pdf->Cell(20,6,"Cantidad",1,0,'C',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,utf8_decode("Número de Planchas: "),1,0,'L',$fill);
$pdf->Cell(20,6,$fogy_num_planchas,1,0,'L',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,utf8_decode("Masilla de Caneca : "),1,0,'L',$fill);
$pdf->Cell(20,6,$fogy_masilla,1,0,'L',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Tape de Papel (250 PL) Rollo : ",1,0,'L',$fill);
$pdf->Cell(20,6,$fogy_tape,1,0,'L',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Pegamento : ",1,0,'L',$fill);
$pdf->Cell(20,6,$fogy_pegamento,1,0,'L',$fill);


$fill=!$fill;
$pdf->Output();
?>
