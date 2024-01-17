<?php 
//activamos almacenamiento en el buffer
ob_start();



//incluimos a la clase PDF_MC_Table
require('PDF_MC_Table.php');


//instanciamos la clase para generar el documento pdf
$pdf=new PDF_MC_Table();
$pdf=new PDF();

//agregamos la primera pagina al documento pdf
$pdf->AddPage();

//seteamos el inicio del margen superior en 25 pixeles
$y_axis_initial=25;

$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Ln(30);
$pdf->Cell(200,6,'SUBSECRETARIA DE INSTITUCIONES DE EDUCACION SUPERIOR',0,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Times', '', 11);
$pdf->MultiCell($w[$i], 6, "INFORME TECNICO - ACADEMICO DE VIABILIDAD\nPARA LA FIRMA DE CONVENIO DE PRACTICAS PREPROFESIONALES", 1, 'C');
$pdf->Ln(0);
$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, 'Datos Generales:', 1, 0, 'L', true);

$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Times', '', 12);
$pdf->Ln();
// Primera fila
$pdf->Cell(45, 7, 'No. de Informe', 1, 0, 'L', true);
$pdf->Cell(145, 7, '', 1, 0, 'L', true); // Cambiado el ancho de la segunda celda
$pdf->Ln();

// Segunda fila
$pdf->Cell(45, 7, 'Fecha:', 1, 0, 'L', true);
$pdf->Cell(145, 7, '', 1, 0, 'L', true); // Cambiado el ancho de la segunda celda
$pdf->Ln();

$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, 'Datos de la Entidad Receptora:', 1, 0, 'L', true);

$pdf->Ln();
$pdf->SetFillColor(255,255,255);

//......
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Nombre de la Entidad' . "\n" . 'Receptora:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,12, '', 1, 'L', true);
$pdf->Ln(0);

//.....
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Naturaleza de gestion de' . "\n" . 'la Entidad Receptora:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->Cell(39, 12, 'Publica:', 1, 0, 'L', true);
$pdf->Cell(10, 12, '', 1, 0, 'L', true);
$pdf->Cell(38, 12, 'Privada:', 1, 0, 'L', true);
$pdf->Cell(10, 12, '', 1, 0, 'L', true);
$pdf->Cell(38, 12, 'Mixta', 1, 0, 'L', true);
$pdf->Cell(10, 12, '', 1, 0, 'L', true);
$pdf->Ln();

//..........
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Nombre de la persona' . "\n" . 'autorizada legalmente'. "\n" . 'para la suscripcion del'. "\n" . 'Convenio:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 12, 'Numero de RUC:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,12, '', 1, 'L', true);
$pdf->Ln(0);

//..........
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Actividad economica' . "\n" .'que consta en el RUC:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,12, '', 1, 'L', true);
$pdf->Ln(0);

//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Plazo de vigencia del ' . "\n" .'convenio:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,12, '', 1, 'L', true);
$pdf->Ln(0);

//.......
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'N° de estudiantes que' . "\n" . 'recibiria inicialmente la'. "\n" .'Entidad Receptora:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->Cell(42, 18, 'No      Estudiantes ', 1, 0, 'L', true);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(61, 6,'Total de estudiantes proyectados'. "\n" .' que recibira la Entidad Receptora'. "\n" .'durante la vigencia del convenio:', 1, 0, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 61);
$pdf->Cell(42, 18, 'Total      estudiantes ', 1, 0, 'L', true);
$pdf->Ln();

//......
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 15, 'Datos:  Tutor' . "\n" . 'Academico', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell

$pdf->SetXY($x, $y);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(50, 15,'Nombres completos:', 1, 0, 'L');
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 15);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(50, 15,'Número de Contacto:', 1, 0, 'L');


$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 95);
$pdf->MultiCell(45, 15, 'Datos:  Tutor' . "\n" . 'Empresarial', 1, 'L');

// Mover la posición X para estar al lado del Cell
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell

$pdf->SetXY($x, $y);
$pdf->SetX($pdf->GetX() + 140);
$pdf->Cell(50, 15,'Nombres completos:', 1, 0, 'L');
$pdf->SetY($pdf->GetY() + 15);
$pdf->SetX($pdf->GetX() + 140);
$pdf->Cell(50, 15,'Número de Contacto:', 1, 0, 'L');
$pdf->Ln();
//..................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 8, 'Correo electrónico de la empresa:' , 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->Cell(50, 16, '', 1, 0, 'L', true);
$pdf->SetXY($x, $y);
$pdf->SetX($pdf->GetX() + 95);
$pdf->Cell(45, 16, 'Número de contacto:', 1, 0, 'L', true);
$pdf->MultiCell(50, 8, 'Nombre: '."\n".'Contacto:', 1, 'L', true);

$pdf->Ln();


//.............
$pdf->AddPage();
$pdf->Ln(35);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 45, 'Dirección Matriz:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell

$pdf->SetXY($x, $y);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(30, 15,'Provincia:', 1, 0, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 75);
$pdf->MultiCell(115, 15, '', 1, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 15);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(30, 15,'Cantón:', 1, 0, 'L');


$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 15);
$pdf->SetX($pdf->GetX() + 75);
$pdf->MultiCell(115, 15, '', 1, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 30);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(30, 15,'Dirección: ', 1, 0, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 30);
$pdf->SetX($pdf->GetX() + 75);
$pdf->MultiCell(115, 15, '', 1, 'L');

//..................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 45, 'Dirección Sucursal:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell

$pdf->SetXY($x, $y);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(30, 15,'Provincia:', 1, 0, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 75);
$pdf->MultiCell(115, 15, '', 1, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 15);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(30, 15,'Cantón:', 1, 0, 'L');


$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 15);
$pdf->SetX($pdf->GetX() + 75);
$pdf->MultiCell(115, 15, '', 1, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 30);
$pdf->SetX($pdf->GetX() + 45);
$pdf->Cell(30, 15,'Dirección: ', 1, 0, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 30);
$pdf->SetX($pdf->GetX() + 75);
$pdf->MultiCell(115, 15, '', 1, 'L');


//.............


$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, 'Criterios Generales', 1, 0, 'L', true);
$pdf->Ln();

//..........

$pdf->SetFillColor(255,255,255);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 35, 'Objeto:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,5, 'Viabilizar las prácticas pre profesionales a los estudiantes de la(s) carrera(s) de Tecnología  en XXXXXXXXXXX, ofertada(s) por el INSTITUTO Nombre completo de IST (matriz o sede),en las instalaciones de la ENTIDAD RECEPTORA Nombre de la Entidad de con formidad a lo determinado en el artículo 87 de la Ley Orgánica de Educación Superior, con la finalidad de que cumplan con el requisito de titulación exigido por la normativa de educación superior vigente.', 1, 'L', true);
$pdf->Ln(0);

//...............
$pdf->SetFont('times', 'I', 12); 
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 8.4, 'Ley Orgánica de Educación Superior - LOES ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,5, 'Art. 87.- Requisitos previos a la obtención del grado académico.- Como requisito previo a la obtención del grado académico, los y las estudiantes deberán acreditar servicios a la comunidad mediante programas, proyectos de vinculación con la sociedad, prácticas o pasantías pre profesionales con el debido acompañamiento pedagógico, en los campos de su especialidad.', 1, 'L', true);
$pdf->Ln(0);

//................



$pdf->AddPage();
$pdf->Ln(35);
//color y letra
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Times', '', 12);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 35, 'Obligaciones Conjuntas:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,5, 'Las partes de común acuerdo diseñarán un plan de actividades académicas que desarrollarán los estudiantes en la ENTIDAD RECEPTORA de acuerdo al número de horas prácticas establecidas en el proyecto de carrera y malla curricular de la(s) carrera(s) de Tecnología en xxxxxxxxxxx, dicho plan de actividades complementará el aprendizaje y la aplicación de conocimientos, desarrollo de destrezas y habilidades que se consideren necesarias para un adecuado desempeño de su futura profesión.', 1, 'L', true);
$pdf->Ln(0);

//...........

$pdf->SetFillColor(255,255,255);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 81, 'Obligaciones de las partes:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, 'Del Instituto:
a) Determinar el número de  estudiantes participantes en la realización de las prácticas pre profesionales conforme a las áreas y espacios definidos por la entidad receptora 
b) Considerar el número de horas determinados para la realización de prácticas preprofesionales  conforme al proyecto de carrera y/o ciclo académico 
c) Definir las actividades para la realización de las prácticas preprofesionales acorde al perfil de la carrera 
d) Designar a los estudiantes de las carreras de Tecnología en xxxxxxxxx, a fin de que accedan a las prácticas pre profesionales en las instalaciones donde ejerza su actividad económica la ENTIDAD RECEPTORA remitiendo para el efecto la base de datos con la información que acuerden las partes;
f) Planificar, monitorear, y evaluar las prácticas pre profesionales en coordinación con el tutor que designe la ENTIDAD RECEPTORA;
g) Designar un tutor académico de prácticas pre profesionales para realizar el debido seguimiento a los estudiantes que acoja la ENTIDAD RECEPTORA; 
h) Velar para que los estudiantes de la(s) carrera (s) de Tecnología xxxxxxxxxxx, que realicen sus prácticas pre profesionales se sometan a las políticas, directrices, reglamentos e instrucciones del INSTITUTO y de la ENTIDAD RECEPTORA;
i) Registrar el informe de evaluación y el certificado cumplimiento de las prácticas pre profesionales en el portafolio académico de los estudiantes que se vinculen a la ENTIDAD RECEPTORA; 
j) Custodiar y archivar los planes de actividades académicas que deben cumplir los estudiantes de prácticas pre profesionales en la ENTIDAD RECEPTORA en la unidad de prácticas pre profesionales para su debido seguimiento.
 ', 1, 'L', true);
$pdf->Ln(0);

//.............

$pdf->AddPage();
$pdf->Ln(35);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 132, '', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, 'De la entidad receptora:
a)   Definir el número de  estudiantes participantes en la realización de las prácticas pre profesionales conforme a las áreas, espacios y/o actividad económica  de la  entidad receptora 
b)   El número de estudiantes que acoja la ENTIDAD RECEPTORA se determinará cada inicio del ciclo académico según su capacidad;
c)   Garantizar que los estudiantes de la(s) carrera(s) de Tecnología en xxxxxxxxxxx, efectúen sus prácticas pre profesionales en las distintas unidades de la ENTIDAD RECEPTORA conforme al plan de actividades académicas que diseñen las partes;
d)   Emitir un informe de evaluación a los estudiantes que acoja para que el Instituto lo incorpore en su portafolio académico;
e)   Emitir los certificados correspondientes a los estudiantes que hayan cumplido exitosamente con el periodo de prácticas pre profesionales en sus instalaciones; y,
f)   Si uno de los estudiantes que se encuentre cursando sus práctica pre profesionales en la ENTIDAD RECEPTORA, actúa con negligencia, dolo, falta de probidad, conducta inmoral, inoperancia, cometiera actos ilícitos o infracciones, y que por ellos la ENTIDAD RECEPTORA, podría verse de alguna forma perjudicada; esta, podrá solicitar la separación inmediata del estudiante para evitar mayores riesgos o perjuicios, remitiendo para el efecto un informe con los hechos acontecidos y las pruebas pertinentes. El debido proceso disciplinario se realizará en el INSTITUTO.
', 1, 'L', true);
$pdf->Ln(0);

//...............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Administradores de' . "\n" . 'convenio:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->Cell(39, 12, 'Por el Instituto:', 1, 0, 'L', true);
$pdf->Cell(34, 12, '', 1, 0, 'L', true);
$pdf->Cell(38, 12, 'Por le Entidad Receptora:', 1, 0, 'L', true);
$pdf->Cell(34, 12, '', 1, 0, 'L', true);
$pdf->Ln();

//....................
$pdf->SetTextColor(255, 0, 0);
$pdf->Cell(190, 9, '
Nota: Los administradores y/o delegados del convenio no podrán ser los mismos suscribientes 
', 1, 0, 'L', true);
$pdf->Ln();
$pdf->SetTextColor(0, 0, 0);
//.............. 

$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, 'Criterios Académicos', 1, 0, 'L', true);
$pdf->Ln();

//..............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 24, 'Justificación:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 12, 'Documento de creación del IST: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//................

$pdf->AddPage();
$pdf->Ln(35);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 12, 'Nombre del Rector/a del IST: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 12, 'No. De acción de personal del Rector/a del IST: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 12, 'Nombre de la/s carrera/s: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 8, 'No. Resolución de aprobación, de cada carrera:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//...................

$pdf->SetFillColor(182,149, 192);
$pdf->Cell(190, 7, 'Prácticas Pre profesionales', 1, 0, 'L', true);
$pdf->Ln();
//............

$pdf->SetFillColor(255, 255, 255);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 12, 'Actividades que realizará el o los estudiantes dentro de la organización: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);


//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 8, 'Número de tutores por parte de la Entidad Receptora: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(10);


//............

$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, 'Conclusiones y Recomendaciones ', 1, 0, 'L', true);
$pdf->Ln();

//..........

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 24, 'Conclusiones: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(0);

//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 24, 'Recomendaciones:  ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,24, '', 1, 'L', true);
$pdf->Ln(10);

//..............

$pdf->AddPage();
$pdf->Ln(35);



$pdf->MultiCell($w[$i], 24, 'Elaborado y Revisado por:' . "\n" . '______________________________' . "\n" . '............. del Instituto Superior Tecnológico XXXXXXXXXXXXX', 1, 'C');
$pdf->Ln(0);
// Agregar el segundo texto centrado

//........


$pdf->Ln(0);

$pdf->MultiCell($w[$i], 24, 'Aprobado por:'."\n" . '______________________________' . "\n" . 'Rector/a del Instituto' , 1, 'C');

//..............


$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, ' ANEXOS I: Documentos habilitantes', 1, 0, 'L', true);
$pdf->Ln();
//.....
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 7, 'Copia simple de los documentos que acrediten la calidad del Representante Legal/ delegado o apoderado. ' . "\n" . '
Nota: 
*Para el caso de la persona jurídica de derecho privado solicitará el nombramiento debidamente inscrito en el Registro Mercantil.
*Para el caso de la persona jurídica de derecho público solicitará el nombramiento, acción de personal o credencial para el caso de dignidades de elección popular.
*Para el caso de los delegados se presentará el documento que le acredite. (Acuerdo de Delegación Resolución, otros).
*Para el caso de los mandatarios, se deberá presentar el poder debidamente notariado.
', 1, 'L', true);
$pdf->Ln(0);

$pdf->AddPage();
$pdf->Ln(35);
//.........

$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 7, 'Copia simple de la cédula de identidad o pasaporte del representante legal/ delegado o apoderado legalmente facultado para suscribir convenios', 1, 'L', true);
$pdf->Ln(0);

//..............


$pdf->MultiCell(190, 7, 'Copia simple del Registro Único de Contribuyente (RUC)', 1,  'L', true);
$pdf->Ln(0);

//............

$pdf->SetFont('', 'B', 12);
$pdf->MultiCell(190, 7, 'Del Instituto', 1,  'L', true);
$pdf->Ln(0);

//........

$pdf->SetFont('', '', 12);
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 7, 'Copia simple de la cédula de identidad o pasaporte del representante legal/ delegado o apoderado legalmente facultado para suscribir convenios', 1,  'L', true);
$pdf->Ln(0);

//................

$pdf->MultiCell(190, 7, 'Copia simple de la cédula de identidad del rector', 1,  'L', true);
$pdf->Ln(0);
//..............

$pdf->MultiCell(190, 7, 'Resolución de creación del Instituto', 1,  'L', true);
$pdf->Ln(0);
//...................

$pdf->MultiCell(190, 7, 'Resolución de aprobación, registro o regularización de la/s carrera/s expedido por el CES', 1,  'L', true);
$pdf->Ln(0);

$pdf->Ln();



$pdf->Output();




ob_end_flush();
  ?>