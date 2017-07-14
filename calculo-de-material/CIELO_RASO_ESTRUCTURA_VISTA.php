<?php



$name=$_GET['name2'];
$ingreso=$_GET['ingresol2'];
$selTamanol=$_GET['selTamanol'];
$cies_planchas=$_GET['cies_planchasl'];
$cies_tee12=$_GET['cies_tee12l'];
$cies_tee4=$_GET['cies_tee4l'];
$cies_tee2=$_GET['cies_tee2l'];
$cies_angulo=$_GET['cies_angulol'];
$cies_alambre=$_GET['cies_alambrel'];
$cies_cla_impacto=$_GET['cies_cla_impactol'];
$cies_cla_negro=$_GET['cies_cla_negrol'];

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
$pdf->Cell(55);
$pdf->Cell(35,6,utf8_decode("Tamaño: "),1,0,'C',$fill);
$pdf->Cell(45,6,$selTamanol,1,0,'C',$fill);


$pdf->Ln();
$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Materiales",1,0,'C',$fill);
$pdf->Cell(20,6,"Cantidad",1,0,'C',$fill);


$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Cantidad de Planchas: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cies_planchas,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Cantidad de TEE - 12 : ",1,0,'L',$fill);
$pdf->Cell(20,6,$cies_tee12,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,utf8_decode("Cantidad de TEE - 4: "),1,0,'L',$fill);
$pdf->Cell(20,6,$cies_tee4,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Cantidad de TEE - 2 : ",1,0,'L',$fill);
$pdf->Cell(20,6,$cies_tee2,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,utf8_decode("Catidad de Ángulo Blanco: "),1,0,'L',$fill);
$pdf->Cell(20,6,$cies_angulo,1,0,'R',$fill);


$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Alabre #16 libras : ",1,0,'L',$fill);
$pdf->Cell(20,6,$cies_alambre,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Clavo de Impacto: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cies_cla_impacto,1,0,'R',$fill);



$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Clavo Negro de Acero: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cies_cla_negro,1,0,'R',$fill);


$fill=!$fill;
$pdf->Output();
?>
