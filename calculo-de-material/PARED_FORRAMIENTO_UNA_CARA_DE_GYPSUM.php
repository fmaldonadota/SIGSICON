<?php



$name=$_GET['name2'];
$ingreso=$_GET['ingresol4'];
$altura=$_GET['altural2'];
$pado_perimetro=$_GET['pafo_perimetrol'];
$pado_planchas=$_GET['pafo_planchasl'];
$pado_stud=$_GET['pafo_studl'];
$pado_track=$_GET['pafo_trackl'];
$pado_cla_impacto=$_GET['pafo_cla_impactol'];
$pado_tor_plancha=$_GET['pafo_tor_planchal'];
$pado_tor_estructura=$_GET['pafo_tor_estructural'];
$pado_masilla=$_GET['pafo_masillal'];
$pado_tapel=$_GET['pafo_tapel'];


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
$pdf->Cell(35,6,utf8_decode("Altura: "),1,0,'C',$fill);
$pdf->Cell(45,6,$altura,1,0,'C',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(35,6,utf8_decode("Perímetro: "),1,0,'C',$fill);
$pdf->Cell(45,6,$pado_perimetro,1,0,'C',$fill);


$pdf->Ln();
$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Materiales",1,0,'C',$fill);
$pdf->Cell(20,6,"Cantidad",1,0,'C',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Planchas : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_planchas,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Stud : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_stud,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Track : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_track,1,0,'R',$fill);


$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Clavo de Impacto : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_cla_impacto,1,0,'R',$fill);



$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Tornillo de Plancha : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_tor_plancha,1,0,'R',$fill);


$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Tornillo de Estructura : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_tor_estructura,1,0,'R',$fill);

$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Masilla : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_masilla,1,0,'R',$fill);


$pdf->Ln();
$pdf->Cell(55);
$pdf->Cell(60,6,"Tape de Papel 250 p.l. : ",1,0,'L',$fill);
$pdf->Cell(20,6,$pado_tapel,1,0,'R',$fill);


$fill=!$fill;
$pdf->Output();
?>
