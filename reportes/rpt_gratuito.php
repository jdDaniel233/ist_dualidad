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

$pdf->SetFont('','B');
$pdf->MultiCell($w[$i], 6, "INFORME TÉCNICO - ACADÉMICO DE VIABILIDAD
PARA LA FIRMA DE CONVENIO DE USO GRATUITO DE INSTALACIONES", 1, 'C');
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

$pdf->SetFont('','B');
$pdf->Cell(190, 7, 'Datos de la Entidad Receptora:', 1, 0, 'L', true);
$pdf->SetFont('','');
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



//.......
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'No. de estudiantes que' . "\n" . 'recibiría la Entidad ' . "\n" .'Receptora:' , 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->Cell(45, 12, '', 1, 0, 'L', true);

$pdf->Cell(55, 12, 'Plazo de vigencia del convenio:', 1, 0, 'L', true);
$pdf->Cell(45, 12, '', 1, 0, 'L', true);

$pdf->Ln();

//......
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Correo electrónico de la empresa:' , 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->Cell(45, 12, '', 1, 0, 'L', true);

$pdf->Cell(55, 12, 'Número de contacto:', 1, 0, 'L', true);
$pdf->Cell(45, 12, '', 1, 0, 'L', true);

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

//........

$pdf->SetFillColor(173, 216, 230);
$pdf->SetFont('','B');
$pdf->Cell(190, 7, 'Criterios Generales', 1, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('','');
//..........

$pdf->SetFillColor(255,255,255);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 16, 'Objeto:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,8, 'Realizar acciones para viabilizar el uso de la infraestructura del xxxxxxxxxxxxxxxxxxxxxxxxxxxx a favor del INSTITUTO xxxxxxxxxxxxx', 1, 'L', true);
$pdf->Ln(0);
//..................

$pdf->SetFillColor(255,255,255);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 49.4, 'Obligaciones de las partes:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,4.5, 'Del Instituto:
3.1.1 Reportar a la Coordinación Zonal XXXXXX y  Subsecretaría de Instituciones de Educación Superior, los horarios y días de uso de las instalaciones que fueron consensuadas con la ENTIDAD RECEPTORA para su registro y seguimiento, en un plazo no mayor a cinco (5) días contados a partir del inicio de cada ciclo académico.
3.1.2 Velar para que los estudiantes se sometan a las políticas, directrices reglamentos e instrucciones de la ENTIDAD RECEPTORA y del Instituto.
3.1.3 Garantizar el buen uso de las instalaciones y equipamiento, que proporcione la ENTIDAD RECEPTORA.
3.1.4 En caso de producirse algún daño por el manejo negligente, responderá por los daños a los bienes entregados salvo fuerza mayor o caso fortuito.
3.1.5 Restituir los bienes muebles e inmuebles en las mismas condiciones determinadas en las matrices adjuntas al Informe Técnico-Académico de Viabilidad de Suscripción del Convenio No. XXXXXXXXX, de XX de XXXXXXX de 202X, considerándose para el efecto el deterioro natural de los bienes que podrían tener por el paso del tiempo.
3.1.6 Realizar el debido seguimiento a los estudiantes que se encuentren cumpliendo y desarrollando actividades de carácter teórico práctico en las instalaciones de la ENTIDAD RECEPTORA. 
3.1.7 XXXXXX
 ', 1, 'L', true);
$pdf->Ln(0);

//.............

$pdf->AddPage();
$pdf->Ln(35);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 96, '', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, 'De la entidad receptora:
3.1.1 Permitir el acceso de los estudiantes y docentes del INSTITUTO a las áreas: (recreativas y espacios verdes, bibliotecas, laboratorios/talleres etc).
3.1.2 Permitir el uso de (equipamiento/infraestructura/mobiliario, etc) que existe en las instalaciones descritas anteriormente para que se realicen talleres y/o laboratorios de las asignaturas teóricas prácticas y otras actividades inherentes al proceso de formación teórico-práctica con los estudiantes de la(s) carrera(s) de Tecnología xxxxxxxx del Instituto xxxxxxxxxxx
3.1.3 Coordinar a través de (cargo de la persona delegada por la entidad) la programación de horarios y control de actividades operativas  del uso de sus instalaciones con el docente/ tutor académico que asigne el INSTITUTO para cada ciclo académico.
3.1.4 Facilitar el uso de baterías sanitarias a los estudiantes y docentes en los horarios que establezcan las partes.
3.1.5 Facilitar el personal idóneo para que realice las tareas de limpieza y seguridad de las instalaciones que se usen en el marco del presente convenio.
', 1, 'L', true);
$pdf->Ln(0);
//.........
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


//...........
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'únicamente el cargo de ' . "\n" . 'los administradores', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);

// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->Cell(39, 12, '', 1, 0, 'L', true);
$pdf->Cell(34, 12, '', 1, 0, 'L', true);
$pdf->Cell(38, 12, '', 1, 0, 'L', true);
$pdf->Cell(34, 12, '', 1, 0, 'L', true);
$pdf->Ln();
//....................
$pdf->SetTextColor(255, 0, 0);
$pdf->Cell(190, 9, '
Nota: Los administradores y/o delegados del convenio no podrán ser los mismos suscribientes 
', 1, 0, 'L', true);
$pdf->Ln();
$pdf->SetTextColor(0, 0, 0);
//.........
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

//..............
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

$pdf->SetFillColor(144, 238, 144);
$pdf->Cell(190, 7, 'Uso Gratuito de Instalaciones', 1, 0, 'L', true);
$pdf->Ln();
//............

//............

$pdf->SetFillColor(255, 255, 255);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(60, 18, 'Que áreas serán utilizadas a través del convenio y cuál será la finalidad ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 60);
// Segunda MultiCell
$pdf->MultiCell(130,8, '', 1, 'L', true);
$pdf->Ln(0);
$pdf->SetX($pdf->GetX() + 60);
$pdf->MultiCell(130,8, '', 1, 'L', true);
$pdf->Ln(0);
$pdf->SetX($pdf->GetX() + 60);
$pdf->MultiCell(130,8, '', 1, 'L', true);
$pdf->Ln(0);
$pdf->SetX($pdf->GetX() + 60);
$pdf->MultiCell(130,8, '', 1, 'L', true);
$pdf->Ln(0);
$pdf->SetX($pdf->GetX() + 60);
$pdf->MultiCell(130,8, '', 1, 'L', true);
$pdf->Ln(0);
$pdf->SetX($pdf->GetX() + 60);
$pdf->MultiCell(130,8, '', 1, 'L', true);
$pdf->Ln(0);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 8, '', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,8, '', 1, 'L', true);
$pdf->Ln(0);

//.................
$pdf->AddPage();
$pdf->Ln(35);
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
//...................


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
$pdf->Ln(0);

//..............

$pdf->MultiCell($w[$i], 24, 'Elaborado y Revisado por:' . "\n" . '______________________________' . "\n" . '............. del Instituto Superior Tecnológico XXXXXXXXXXXXX', 1, 'C');
$pdf->Ln(0);
// Agregar el segundo texto centrado

//........


$pdf->Ln(0);

$pdf->MultiCell($w[$i], 24, 'Aprobado por:'."\n" . '______________________________' . "\n" . 'Rector/a del Instituto' , 1, 'C');
$pdf->Ln(0);

//.................
$pdf->AddPage();
$pdf->Ln(35);
//............


$pdf->SetFillColor(173, 216, 230);
$pdf->SetFont('','B');
$pdf->Cell(190, 7, ' ANEXOS I: Documentos habilitantes', 1, 0, 'L', true);
$pdf->SetFont('','');
$pdf->Ln();
//.....
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 7, 'Copia simple de los documentos que acrediten la calidad del Representante Legal/ delegado o apoderado. 
Nota: 
*Para el caso de la persona jurídica de derecho privado solicitará el nombramiento debidamente inscrito en el Registro Mercantil.
*Para el caso de la persona jurídica de derecho público solicitará el nombramiento, acción de personal o credencial para el caso de dignidades de elección popular.
* Para el caso de los delegados se presentará el documento que le acredite. (Acuerdo de Delegación Resolución, otros).
* Para el caso de los mandatarios, se deberá presentar el poder debidamente notariado.
', 1, 'L', true);
$pdf->Ln(0);

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
$pdf->MultiCell(190, 7, 'Copia simple de la acción de personal del Rector vigente y debidamente legalizado', 1,  'L', true);
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

//...............


$pdf->SetFont('', 'B', 12);
$pdf->MultiCell(190, 7, 'Adjunto al informe deberá presentar:', 1,  'L', true);
$pdf->Ln(0);
$pdf->SetFont('', '');

//..........
$pdf->MultiCell(190, 7, 'Matriz Evaluación de criterios técnicos Infraestructura  con firma de responsabilidad del rector
ANEXO II (Obligatorio Uso gratuito de Instalaciones): Registro fotográfico general de las instalaciones y equipamiento disponibles', 1,  'L', true);
$pdf->Ln(0);

//..................


$pdf->SetFillColor(173, 216, 230);
$pdf->SetFont('','B');
$pdf->MultiCell(190, 7, 'ANEXO II (Obligatorio Uso gratuito de Instalaciones): Registro fotográfico general de las instalaciones y equipamiento disponibles', 1, 'L', true);
$pdf->SetFont('','');
$pdf->Ln();




$pdf->Ln();








$pdf->Output();
ob_end_flush();
  ?>