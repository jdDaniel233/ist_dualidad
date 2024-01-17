<?php 
//activamos almacenamiento en el buffer
ob_start();

//incluimos a la clase PDF_MC_Table
require('PDF_MC_Table.php');

//instanciamos la clase para generar el documento pdf
$pdf=new PDF_MC_Table();

//agregamos la primera pagina al documento pdf
$pdf->AddPage();

//seteamos el inicio del margen superior en 25 pixeles
$y_axis_initial=25;

$pdf->Ln(5);
$pdf->Image('../files/img/ist17j.png',25,15,14);
$pdf->Image('../files/img/umi.jpeg',170,15,22);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(200,6,'ACTA ENTREGA RECEPCION DE BIENES',0,0,'C');
$pdf->Ln();
$pdf->Cell(200,6,'ENTRE EL INSTITUTO SUPERIOR TECNOLOGICO',0,0,'C');
$pdf->Ln();
$pdf->Cell(200,6,'17 DE JULIO Y EL CUSTODIO FINAL',0,0,'C');
$pdf->Ln(20);

$pdf->SetFont('Arial','',8);

$pdf->Cell(20,6,'nombre',1,0,'L');
$pdf->Cell(40,6,'jose',1,0,'L');
$pdf->Ln();
$pdf->Cell(20,6,'apellido',1,0,'L');
$pdf->Ln();
$x=$pdf->getx();
$pdf->setxy($x+100,100);
$pdf->MultiCell(40, 4, 'cedula asfkgdfjkhjgfhjfkglfghjlfgjhklfghkj', 1, 'C',0);

$pdf->Ln(20);



$pdf->Output();


ob_end_flush();
  ?>
