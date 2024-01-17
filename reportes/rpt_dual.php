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
PARA LA FIRMA DE CONVENIO DE FORMACIÓN DUAL
", 1, 'C');

$pdf->Ln(0);
$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, 'Datos Generales:', 1, 0, 'L', true);
$pdf->SetFont('','');
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
$pdf->MultiCell(145,7, 'Viabilizar la implementación de la modalidad de estudios en formación dual, para que los estudiantes de la Carrera de Tecnología Superior en XXXXXXXXXX del “INSTITUTO” realicen su formación práctica in situ en las instalaciones donde ejerza su actividad económica la “ENTIDAD RECEPTORA”.', 1, 'L', true);
$pdf->Ln(0);


//................



$pdf->AddPage();
$pdf->Ln(35);
//color y letra
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Times', '', 12);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 50, 'Obligaciones Conjuntas:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,5, 'Las partes de común acuerdo trabajaran en conjunto los siguientes puntos a lo largo de la carrera dual:

-Implementación y Actualización de la malla curricular y el plan marco de formación según necesidades del sector profesional de la “ENTIDAD RECEPTORA” con el objetivo de articular la formación en entornos institucionales educativos y entornos laborales reales de manera adecuada para el proceso de formación dual.
-Diseñar y ejecutar, el examen teórico-práctico intermedio y el examen teórico-práctico final.
', 1, 'L', true);
$pdf->Ln(0);

//...........

$pdf->SetFillColor(255,255,255);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 75, 'Obligaciones de las partes:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, 'Del Instituto:
a) Contar con personal académico suficiente para la formación teórico-práctica de los estudiantes en cada periodo académico de la modalidad de formación dual.
b) Proponer a la “ENTIDAD RECEPTORA” en lo posible al menos una terna de estudiantes de la(s) carrera(s) de Tecnología Superior en XXXXXXXXXX, a fin de que esta realice su proceso de selección remitiendo para el efecto las hojas de vida correspondientes con la información que acuerden las partes como notas y/o cartas de motivación, etc.
c) Designar un (1) tutor académico por carrera para realizar el debido seguimiento a los estudiantes que acoja la “ENTIDAD RECEPTORA”.
d) Gestionar con la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación la provisión de un seguro en los términos descritos en el Acuerdo Interinstitucional No. MDT-SENESCYT-2015-0003, de 09 de abril de 2015, para los estudiantes en formación dual desde el primer día en que realicen su formación práctica in situ con la “ENTIDAD RECEPTORA”.
e) Enviar a la “ENTIDAD RECEPTORA”, las calificaciones parciales y finales de cada uno de los estudiantes en formación dual cada semestre, para que la “ENTIDAD RECEPTORA” pueda conocer el grado de avance del estudiante.
f) Asegurar que los docentes del “INSTITUTO” asignados para dictar las clases a los estudiantes en formación dual, cuenten con la suficiente experiencia, conocimientos y credenciales para garantizar una enseñanza de calidad orientada hacia la práctica empresarial.
g) Coordinar con la “ENTIDAD RECEPTORA” la implementación y actualización de la malla curricular en formación dual.
', 1, 'L', true);
$pdf->Ln();

//.............
$pdf->AddPage();
$pdf->Ln(35);


$pdf->SetFillColor(255,255,255);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(46, 102, '', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, 'h) Analizar, en el plazo establecido para el efecto, el reporte de evaluación final remitido por la “ENTIDAD RECEPTORA”.
i) Velar para que los estudiantes en formación dual se sometan a las políticas, directrices, reglamentos e instrucciones del “INSTITUTO” y de la “ENTIDAD RECEPTORA” incluyendo suscripción y cumplimiento del acuerdo de confidencialidad entre estudiante y “ENTIDAD RECEPTORA”.
j) Analizar, tramitar y resolver, de manera oportuna, las denuncias del desempeño de los estudiantes en modalidad de formación dual, de los profesores y de los tutores académicos.
k) Diseñar el sistema y los instrumentos para la evaluación del desempeño de los estudiantes en formación dual, de los profesores y de los tutores académicos.
l) Evaluar al estudiante en formación dual, a los profesores y a los tutores académicos.
m) Registrar las calificaciones obtenidas por el estudiante en el entorno institucional educativo y en el entorno laboral real.
n) Diseñar y ejecutar, en coordinación con la entidad receptora formadora, el examen teórico-práctico intermedio y el examen teórico-práctico final.
', 1, 'L', true);
$pdf->Ln(0);

//................

$pdf->SetFillColor(255,255,255);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(46, 102, '', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, 'De la entidad receptora:

a) Planificar y ejecutar el proceso de formación en el entorno laboral real del estudiante o los estudiantes en modalidad de formación dual durante toda su carrera formativa, conforme a lo establecido en el Reglamento de Formación Dual y el plan marco de formación de la carrera.
b) Elaborar, suscribir y ejecutar, en coordinación con la IES, los instrumentos para la implementación de la modalidad de formación dual (p.ej. Plan de Formación Práctica y Rotación).
c) Designar a los tutores requeridos teniendo en cuenta las diferentes áreas o procesos.
d) Capacitar a sus tutores a través del curso para tutores empresariales en formación dual.
e) Contar al menos con un tutor capacitado conforme al  convenio suscrito para formación dual.
f) Evaluar el desempeño de los estudiantes en modalidad de formación dual sobre la base de los objetivos planteados en el plan de aprendizaje práctico.
', 1, 'L', true);
$pdf->Ln(0);



$pdf->AddPage();

$pdf->Ln(35);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 198, '', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, 'g) Remitir a la IES los reportes de evaluación parcial y final del período académico sobre el rendimiento de los estudiantes en su fase de formación en el entorno laboral real.
h) Notificar a la IES las faltas disciplinarias cometidas por el estudiante dentro de la “ENTIDAD RECEPTORA” y emitir el correspondiente informe escrito, a efectos que la IES pueda iniciar el proceso disciplinario correspondiente.
i) Determinar el número de estudiantes duales nuevos que acoja la “ENTIDAD RECEPTORA” a inicio de cada ciclo académico.
j) Garantizar que los estudiantes suscriban un código de conducta y un convenio de confidencialidad, en el entorno laboral donde realicen su práctica de formación dual, de acuerdo al Plan Marco de Formación y Plan de Rotación de la carrera, cumpliendo con las normas y reglamentos internos de la “ENTIDAD RECEPTORA”, sobre todo en lo que se refiere a normas de seguridad y código de conducta. 
k) Observar el Código Orgánico de la Economía Social de los Conocimientos, referente a los derechos de las obras creadas en las instituciones de educación superior y centros educativos en el Art. 114 y a las Obras bajo relación de dependencia y por encargo descrito en el Art. 115, reconociendo a los estudiantes los derechos morales respecto al trabajo definido como consecuencia de su formación dual.
l) Otorgar el apoyo necesario para el desarrollo de las actividades de aprendizaje de los estudiantes en formación dual y contribuir a la transferencia de conocimientos y tecnologías (saber hacer), así como evaluar el desarrollo de las actividades que se asignen a los estudiantes dentro de la fase de formación práctica en el entorno laboral real.
m) Entregar a cada estudiante en formación dual el equipo mínimo de protección personal para el cumplimiento de su formación en entorno laboral real. Proporcionar a los estudiantes los equipos e insumos pertinentes a efectos de evitar accidentes laborales y enfermedades ocupacionales y orientarles adecuadamente acerca de su utilización.
n) Designar al menos un (1) tutor empresarial principal y un (1) suplente por cada carrera para llevar a cabo, monitorear y evaluar el proceso de formación práctica de los estudiantes en formación dual.
', 1, 'L', true);
$pdf->Ln(0);
//............

$pdf->AddPage();

$pdf->Ln(35);
//...............


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 132, '', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,6, '
o) Emitir un informe de evaluación a los estudiantes al fin de cada período o ciclo académico y enviar al “INSTITUTO”, para que incorpore la calificación en su récord académico.
p) Permitir que los estudiantes evalúen a los tutores en lo que respecta al cumplimiento de sus deberes en el proceso de formación en el entorno laboral real.
q) Entregar a la IES la documentación correspondiente de la formación práctica cumplida (horas y actividades según plan marco de formación y plan de formación práctica) del estudiante en caso de que el mismo sea desvinculado por cualquier motivo justificado.
r) Permitir que sus tutores se capaciten a través de cursos de formación continua y de actualización profesional
s) Si uno de los estudiantes que se encuentre cursando su formación dual en la “ENTIDAD RECEPTORA” actúa con negligencia, dolo, falta de probidad, conducta inmoral, inoperancia, cometiera actos ilícitos o infracciones, y que por ellos la “ENTIDAD RECEPTORA” podría verse de alguna forma perjudicada; esta, podrá solicitar la separación inmediata del estudiante para evitar mayores riesgos o perjuicios, remitiendo para el efecto un informe con los hechos acontecidos y las pruebas pertinentes. El debido proceso disciplinario se realizará en el “INSTITUTO”.
', 1, 'L', true);
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
$pdf->MultiCell(45, 12, 'No. y tipo de Contrato del Rector/a del IST: ', 1, 'L', true);
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

$pdf->SetFillColor(245, 188, 169);
$pdf->Cell(190, 7, 'Formación Dual: ', 1, 0, 'L', true);
$pdf->Ln();
//............




//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(150, 11, '¿La Entidad Receptora compensará al estudiante?  ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 150);
$pdf->Cell(10, 11, 'SI', 1, 0, 'L', true);
$pdf->Cell(10, 11, '', 1, 0, 'L', true);
$pdf->Cell(10, 11, 'NO', 1, 0, 'L', true);
$pdf->Cell(10, 11, '', 1, 0, 'L', true);
$pdf->Ln();
//............


$pdf->Cell(190, 8, 'Especifique: ', 1, 0, 'L', true);
$pdf->Ln();
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(180, 9, '¿La entidad receptora estaría dispuesta a renovar el convenio?', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 180);
$pdf->Cell(10, 9, '', 1, 0, 'L', true);
$pdf->Ln();
//..............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Condiciones en las que recibirá a los estudiantes

La dotación de equipo mínimo de protección personal es indispensable según la naturaleza de la carrera.
', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(105, 6, '¿Se verificó que las normas de seguridad de la entidad receptora garantice la protección de los estudiantes durante su formación práctica?', 1, 'L', true);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 150);
$pdf->Cell(10, 18, 'SI', 1, 0, 'L', true);
$pdf->Cell(10, 18, '', 1, 0, 'L', true);
$pdf->Cell(10, 18, 'NO', 1, 0, 'L', true);
$pdf->Cell(10, 18, '', 1, 0, 'L', true);

$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 18);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(105, 6, '¿Se dotará de equipo mínimo de protección personal  al estudiante?', 1, 'L', true);
$pdf->SetXY($x, $y);

$pdf->SetY($pdf->GetY() + 18);
$pdf->SetX($pdf->GetX() + 150);
$pdf->Cell(10, 12, 'SI', 1, 0, 'L', true);
$pdf->Cell(10, 12, '', 1, 0, 'L', true);
$pdf->Cell(10, 12, 'NO', 1, 0, 'L', true);
$pdf->Cell(10, 12, '', 1, 0, 'L', true);

$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 30);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(145, 24, 'Detalle / Observaciones:', 1, 'L', true);

//................

$pdf->AddPage();
$pdf->Ln(35);
//................


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(45, 8, 'Ciclos que cubrirá el convenio:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,16, '', 1, 'L', true);
$pdf->Ln(0);

//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 24, 'Asignatura: ', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(45, 12, '(A) Resultados de aprendizaje', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 90);
$pdf->MultiCell(45, 8, '(B) Equipamiento o estructura de la Entidad Receptora', 1, 'L', true);

$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 135);
$pdf->MultiCell(55, 6, 'Elementos de similitud entre (A) y (B) para cumplir con los logros de aprendizaje de cada materia', 1, 'L', true);
$pdf->Ln(0);
//..............

$pdf->Cell(190, 7, 'Ciclo (X)', 1, 0, 'L', true);
$pdf->Ln();

//............... 

$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(55, 7, '', 1, 0, 'L', true);
$pdf->Ln();
//.................
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(55, 7, '', 1, 0, 'L', true);
$pdf->Ln();
//...........

$pdf->Cell(190, 7, 'Ciclo (X)', 1, 0, 'L', true);
$pdf->Ln();


//............... 

$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(55, 7, '', 1, 0, 'L', true);
$pdf->Ln();
//.................
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(55, 7, '', 1, 0, 'L', true);
$pdf->Ln();
//...........


$pdf->Cell(190, 7, 'Ciclo (X)', 1, 0, 'L', true);
$pdf->Ln();
//............... 

$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(55, 7, '', 1, 0, 'L', true);
$pdf->Ln();
//.................
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(45, 7, '', 1, 0, 'L', true);
$pdf->Cell(55, 7, '', 1, 0, 'L', true);
$pdf->Ln();
//...........


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 17.5, 'Estudiantes por escenario pedagógico:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(45, 7, 'No. de Estudiantes', 1, 'L', true);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 90);
$pdf->Cell(100, 7, 'Escenario pedagógico  en  la Entidad Receptora ', 1, 0, 'L', true);

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(45, 7, '', 1, 'L', true);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 90);

$pdf->Cell(100, 7, ' ', 1, 0, 'L', true);


$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 14);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(45, 7, '', 1, 'L', true);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetY($pdf->GetY() + 14);
$pdf->SetX($pdf->GetX() + 90);

$pdf->Cell(100, 7, ' ', 1, 0, 'L', true);


$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 21);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(45, 7, '', 1, 'L', true);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetY($pdf->GetY() + 21);
$pdf->SetX($pdf->GetX() + 90);

$pdf->Cell(100, 7, ' ', 1, 0, 'L', true);




$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 28);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(45, 7, '', 1, 'L', true);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetY($pdf->GetY() + 28);
$pdf->SetX($pdf->GetX() + 90);

$pdf->Cell(100, 7, ' ', 1, 0, 'L', true);
$pdf->Ln();

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45,7.8, 'Proceso de designación de estudiantes:
Acuerdos específicos consensuados con la Entidad Receptora con base en el Instructivo para la Selección de Estudiantes, si así lo requiere
' , 1, 'L', true);

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 45);
$pdf->MultiCell(60, 70, '', 1, 'L', true);

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 100);
$pdf->MultiCell(45, 14, 'Cantidad de tutores por parte de la Entidad Receptora: (acorde al Reglamento de Formación Dual)', 1, 'L', true);


$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 145);
$pdf->MultiCell(45, 70, '', 1, 'L', true);
//.............



$pdf->AddPage();
$pdf->Ln(35);

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
$pdf->Ln(0);

//..............


$pdf->MultiCell($w[$i], 24, 'Elaborado y Revisado por:' . "\n" . '______________________________' . "\n" . '............. del Instituto Superior Tecnológico XXXXXXXXXXXXX', 1, 'C');
$pdf->Ln(0);
// Agregar el segundo texto centrado

//........


$pdf->Ln(0);

$pdf->MultiCell($w[$i], 24, 'Aprobado por:'."\n" . '______________________________' . "\n" . 'Rector/a del Instituto' , 1, 'C');

//..............
$pdf->AddPage();
$pdf->Ln(35);

$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, ' ANEXOS I: Documentos habilitantes', 1, 0, 'L', true);
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

//..................

$pdf->MultiCell(190, 7, 'Certificado IESS de no tener mora patronal y documento que avale el cumplimiento con la legislación tributaria (no tener deudas impugnadas) conforme artículo 23 del Reglamento de Formación Dual, en caso de no presentar la información será consultada en la web en el portal institucional del IESS y SRI respectivamente.', 1,  'L', true);
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

$pdf->Ln();



$pdf->Output();




ob_end_flush();
  ?>