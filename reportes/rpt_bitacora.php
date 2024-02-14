<?php
header('Content-Type: text/html; charset=utf-8');
//activamos almacenamiento en el buffer
ob_start();
if (strlen(session_id())<1) 
  session_start();

if (!isset($_SESSION['usu_nombre'])) {
  echo "debe ingresar al sistema correctamente para visualizar el reporte";
}else{


if (1==1 ){

	require('PDF_MC_Table.php');
$pdf = new PDF_MC_Table('L', 'mm', 'letter');
$pdf->AddPage();

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);

// Dividir el rectángulo en cuatro partes
$rectWidth = 150;
$rectHeight = 30;
$partWidth = $rectWidth / 3;

// Dibujar la primera celda
$pdf->Rect(65, 10, $partWidth, $rectHeight);

// Dibujar la segunda celda
$pdf->Rect(65 + $partWidth, 10, $partWidth, $rectHeight);
// Agregar texto a la segunda celda
$texto = "REGISTRO ESTUDIANTIL";
$pdf->setXY(65 + $partWidth, 10);
$pdf->MultiCell($partWidth, $rectHeight, $texto, 0, 'C');

// Dibujar la tercera celda
$pdf->Rect(65 + 2 * $partWidth, 10, $partWidth, $rectHeight);
	
// Textos para las subdivisiones horizontales en la última celda
$textos = array("AREA: ", 
  "CODIGO: 12-REG-04", 
  "VERSION: 01", 
  "UBICACION: Sede Yachay e Ibarra", 
  "N PAGINAS:");

// Modificar el tamaño de las subdivisiones horizontales en la última celda
$divisionWidth = $rectHeight / count($textos);
$pdf->SetFont('Arial', '', 8); // ajusta el tamaño de fuente según sea necesario

for ($i = 0; $i < count($textos); $i++) {
  $pdf->Rect(65 + 2 * $partWidth, 10 + $i * $divisionWidth, $partWidth, $divisionWidth);
  $pdf->setXY(65 + 2 * $partWidth, 10 + $i * $divisionWidth);
  $pdf->MultiCell($partWidth, $divisionWidth, $textos[$i], 0, 'C');
}


//Segunda Celda
$pdf->Rect(13, 41, 10, 16);

$pdf->Rect(23, 41, 40, 16);

$pdf->Rect(63, 41, 153, 16);
$texto_bitacora = "BITACORA";
$pdf->SetFont('Arial', '', 15);
$pdf->MultiCell(253, 18, $texto_bitacora, 0, 'C');

$pdf->Rect(216, 41, 50, 16);

$pdf->SetFillColor(162, 255, 0); 

// Dibujar el rectángulo con color de relleno
$pdf->Rect(13, 57.8, 253, 1, 'F');



//ENCABEZADO
$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(13, 59.8, 63, 7, 'FD');

$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 59.8);
$pdf->MultiCell(110, 7, "ESTUDIANTE:", 0, 'C');
$pdf->Rect(76, 59.8, 94, 7);
// Agregar texto al Rectángulo 2
$pdf->setXY(76, 59.8);
$pdf->MultiCell(94, 7, "", 0, 'C');



$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(13, 66.9, 63, 7, 'FD');
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 66.9);
$pdf->MultiCell(100, 7, "APOYO ACADEMICO:", 0, 'C');
$pdf->Rect(76, 66.9, 94, 7);
$pdf->setXY(76, 60);
$pdf->MultiCell(70, 23, "ffffffffffff", 0, 'C');


$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(13, 74, 63, 7, 'FD');
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 74);
$pdf->MultiCell(98, 7, "ENTIDAD BENEFICIARIA:", 0, 'C');
$pdf->Rect(76, 74, 94, 7);
$pdf->setXY(76, 74);
$pdf->MultiCell(13, 22, "fffffffffffff", 0, 'C');



$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(13, 80.9, 63, 7, 'FD');
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 80.9);
$pdf->MultiCell(82, 7, "C00RDINADOR ENTIDAD BENEFICIARIA:", 0, 'C');
$pdf->Rect(76, 80.9, 94, 7);
$pdf->setXY(76, 80.9);
$pdf->MultiCell(70, 44, "", 0, 'C');


$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(170, 59.8, 38, 7, 'FD');
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(170, 59.8);
$pdf->MultiCell(63, 7, "CARRERA:", 0, 'C');
$pdf->Rect(208, 59.8, 58, 7);
$pdf->setXY(76, 59.8);
$pdf->MultiCell(290, 7, "FFFF", 0, 'C');

$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(170, 66.9, 38, 7, 'FD');
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(170, 66.9);
$pdf->MultiCell(55, 7, "CICLO/SEMESTRE:", 0, 'C');
$pdf->Rect(208, 66.9, 58, 7);
$pdf->setXY(76, 60);
$pdf->MultiCell(290, 23, "FFFF", 0, 'C');


$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(170, 74, 38, 7, 'FD');
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(170, 74);
$pdf->MultiCell(63, 7, "JORNADA:", 0, 'C');
$pdf->Rect(208, 74, 58, 7);
$pdf->setXY(76, 60);
$pdf->MultiCell(290, 37, "FFFF", 0, 'C');



$pdf->SetFillColor(153, 154, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(170, 80.9, 38, 7, 'FD');
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(170, 80.9);
$pdf->MultiCell(50, 7, "PERIODO ACADEMICO:", 0, 'C');
$pdf->Rect(208, 80.9, 58, 7);
$pdf->setXY(76, 64);
$pdf->MultiCell(290, 44, "FFFF", 0, 'C');



$pdf->Rect(13, 88.8, 9, 15);
$pdf->SetFont('Arial', '', 9);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 88.8);
$pdf->MultiCell(10, 15, "N:", 0, 'C');
$pdf->Rect(22, 88.8, 33, 15);
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(22, 88.8);
$pdf->MultiCell(34, 15, "FECHA", 0, 'C');
$pdf->Rect(55, 88.8, 20, 15);
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(55, 88.8);
$pdf->MultiCell(20, 6, "HORA DE INGRESO", 5, 'C');
$pdf->Rect(75, 88.8, 74, 15);
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(75, 88.8);
$pdf->MultiCell(74, 15, "ACTIVIDES REALIZADAS", 0, 'C');
$pdf->Rect(149, 88.8, 18, 15);
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(149, 88.8);
$pdf->MultiCell(18, 6, "HORA DE\nSALIDA", 0, 'C');
$pdf->Rect(167, 88.8, 20, 15);
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(167, 88.8);
$pdf->MultiCell(19, 15, "TOTAL", 0, 'C');
$pdf->Rect(187, 88.8, 30, 15);
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(187, 88.8);
$pdf->MultiCell(30, 15, "FIRMA/SELLO", 0, 'C');
$pdf->Rect(217, 88.8, 49, 15);
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(217, 88.8);
$pdf->MultiCell(50, 15, "OBSERVACIONES", 0, 'C');


//CUERPO
$pdf->Rect(13, 103.9, 9, 12);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 103.9);
$pdf->MultiCell(10, 15, "1", 0, 'C');
$pdf->Rect(22, 103.8, 33,12);
$pdf->Rect(55, 103.8, 20, 12);
$pdf->Rect(75, 103.8, 74, 12);
$pdf->Rect(149, 103.8, 18, 12);
$pdf->Rect(167, 103.8, 20, 12);
$pdf->Rect(187, 103.8, 30, 12);
$pdf->Rect(217, 103.8, 49, 12);

$pdf->Rect(13, 116, 9, 12);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 116);
$pdf->MultiCell(10, 15, "2", 0, 'C');
$pdf->Rect(22, 116, 33, 12);
$pdf->Rect(55, 116, 20, 12);
$pdf->Rect(75, 116, 74, 12);
$pdf->Rect(149, 116, 18, 12);
$pdf->Rect(167, 116, 20, 12);
$pdf->Rect(187, 116, 30, 12);
$pdf->Rect(217, 116, 49, 12);

$pdf->Rect(13, 127.9, 9, 12);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 127.9);
$pdf->MultiCell(10, 15, "3", 0, 'C');
$pdf->Rect(22, 127.9, 33, 12);
$pdf->Rect(55, 127.9, 20, 12);
$pdf->Rect(75, 127.9, 74, 12);
$pdf->Rect(149, 127.9, 18, 12);
$pdf->Rect(167, 127.9, 20, 12);
$pdf->Rect(187, 127.9, 30, 12);
$pdf->Rect(217, 127.9, 49, 12);

$pdf->Rect(13, 140, 9, 12);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 140);
$pdf->MultiCell(10, 15, "4", 0, 'C');
$pdf->Rect(22, 140, 33, 12);
$pdf->Rect(55, 140, 20, 12);
$pdf->Rect(75, 140, 74, 12);
$pdf->Rect(149, 140, 18, 12);
$pdf->Rect(167, 140, 20, 12);
$pdf->Rect(187, 140, 30, 12);
$pdf->Rect(217, 140, 49, 12);

$pdf->Rect(13, 152, 9, 12);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(13, 152);
$pdf->MultiCell(10, 15, "5 ", 0, 'C');
$pdf->Rect(22, 152, 33, 12);
$pdf->Rect(55, 152, 20, 12);
$pdf->Rect(75, 152, 74, 12);
$pdf->Rect(149, 152, 18, 12);
$pdf->Rect(167, 152, 20, 12);
$pdf->Rect(187, 152, 30, 12);
$pdf->Rect(217, 152, 49, 12);

$pdf->SetFillColor(153, 152, 156);
$pdf->SetDrawColor(0, 0, 0);
$pdf->Rect(149, 164, 18, 5, 'FD');
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(135, 159);
$pdf->MultiCell(50, 15, "TOTAL H:", 0, 'C');

$pdf->Rect(167, 164, 20, 5);




//FIRMAS
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(80, 168);
$pdf->MultiCell(50, 15, " APROBADO POR:", 0, 'C');
$pdf->setXY(80, 173);
$pdf->MultiCell(59, 15, " NOMBRE:", 0, 'C');
$pdf->setXY(80, 178);
$pdf->MultiCell(60, 15, " CARGO:", 0, 'C');
$pdf->setXY(107, 178);
$pdf->MultiCell(60, 15, " Coordinador academico - Tutor", 0, 'C');
$pdf->SetDrawColor(0, 0, 0); // Establecer el color del contorno de la línea (en RGB)
$pdf->Line(160, 178, 120, 178); // Coordenadas (x1, y1, x2, y2)

// Línea horizontal 2
$pdf->SetFont('Arial', '', 7);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(150, 168);
$pdf->MultiCell(50, 15, " APROBADO POR:", 0, 'C');
$pdf->setXY(150, 173);
$pdf->MultiCell(59, 15, " NOMBRE:", 0, 'C');
$pdf->setXY(150, 178);
$pdf->MultiCell(60, 15, " CARGO:", 0, 'C');
$pdf->setXY(170, 178);
$pdf->MultiCell(100, 15, " Gestor local Practicas Sociales - Desarrollo de Software", 0, 'C');
$pdf->SetDrawColor(0, 0, 0); // Establecer el color del contorno de la línea (en RGB)
$pdf->Line(240, 178, 190, 178); // Coordenadas (x1, y1, x2, y2)




$pdf->Rect(64, 188, 46, 12);
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(47, 186);
$pdf->MultiCell(82, 7, "Fecha de expedicion: 28 de agosto de 2019", 0, 'C');
$pdf->Rect(110, 188, 46, 12);
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(68, 186);
$pdf->MultiCell(130, 7, "Fecha de actualizacion: 4 de enero de 2022", 0, 'C');
$pdf->Rect(156, 188, 34, 12);
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(105, 186);
$pdf->MultiCell(130, 7, "Elaborado por: Coordinacion", 0, 'C');
$pdf->setXY(104.4, 188);
$pdf->MultiCell(130, 7, "de Gestoria de Vinculacion", 0, 'C');

$pdf->Rect(190, 188, 36, 12);
$pdf->SetFont('Arial', '', 6);
$pdf->SetTextColor(0, 0, 0); // Establecer el color del texto (en RGB)
$pdf->setXY(135, 186);
$pdf->MultiCell(144, 7, "APROBADO POR: RESOLUCION", 0, 'C');
$pdf->setXY(136, 188);
$pdf->MultiCell(144, 7, "IST-17-J-OCS-2022-SEO-001-R007", 0, 'C');
// Configurar el número de páginas en el pie de página
$pdf->AliasNbPages();

// Función para el pie de página
$pdf->Footer();

$pdf->setXy(220, 20);
ob_end_clean();
$pdf->Output();




$pdf->Output();

}else{
echo "No tiene permiso para visualizar el reporte";
}

}

ob_end_flush();
  ?>