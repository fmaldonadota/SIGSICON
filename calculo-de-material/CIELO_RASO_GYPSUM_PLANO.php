<?php



$name=$_GET['name'];
$ingreso=$_GET['ingresol'];
$cira_primarios=$_GET['cira_primariosl'];
$cira_secundarios=$_GET['cira_secundariosl'];
$cira_angulo=$_GET['cira_angulol'];
$cira_tor_estructura=$_GET['cira_tor_estructural'];
$cira_num_planchas=$_GET['cira_num_planchasl'];
$cira_tor_plancha=$_GET['cira_tor_planchal'];
$cira_masilla=$_GET['cira_masillal'];
$cira_tape=$_GET['cira_tapel'];
$cira_clavo_negro=$_GET['cira_clavo_negrol'];
$cira_clavo_verde=$_GET['cira_clavo_verdel'];

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
$pdf->Cell(60,6,"Perfiles Primarios: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cira_primarios,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Perfiles Secundario : ",1,0,'L',$fill);
$pdf->Cell(20,6,$cira_secundarios,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,utf8_decode("Ángulo Galvanizado: "),1,0,'L',$fill);
$pdf->Cell(20,6,$cira_angulo,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Tornillos Estructura : ",1,0,'L',$fill);
$pdf->Cell(20,6,$cira_tor_estructura,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,utf8_decode("Número de Planchas: "),1,0,'L',$fill);
$pdf->Cell(20,6,$cira_num_planchas,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Masilla Caneca: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cira_masilla,1,0,'R',$fill);


$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Tape de Papel (250 PL) rollo: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cira_tape,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Clavo 1/2 Negro: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cira_clavo_negro,1,0,'R',$fill);



$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Clavo de Impacto Verde: ",1,0,'L',$fill);
$pdf->Cell(20,6,$cira_clavo_verde,1,0,'R',$fill);


$fill=!$fill;
$pdf->Output();
?>
