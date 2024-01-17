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
$pdf->SetFont('Times', 'B', 11);
$pdf->MultiCell($w[$i], 6, "INFORME TÉCNICO  DE VIALIDAD PARA LA FIRMA DE CONVENIO DE COOPERACIÓN", 1, 'C');
$pdf->Ln(0);
$pdf->SetFillColor(173, 216, 230);
$pdf->Cell(190, 7, 'Datos Generales:', 1, 0, 'L', true);
$pdf->SetFont('','');
$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Times', '', 12);
$pdf->Ln();
$pdf->Cell(45, 7, 'No. de Informe', 1, 0, 'L', true);
$pdf->Cell(145, 7, '', 1, 0, 'L', true); // Cambiado el ancho de la segunda celda
$pdf->Ln();
// Primera fila
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 6, 'Nombre del IST ' . "\n" . 'requirente:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,12, '', 1, 'L', true);
$pdf->Ln(0);
//..............

// Segunda fila
$pdf->Cell(45, 7, 'Fecha:', 1, 0, 'L', true);
$pdf->Cell(145, 7, '', 1, 0, 'L', true); // Cambiado el ancho de la segunda celda
$pdf->Ln();
//..........

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(45, 16, 'Asunto:', 1, 'L', true);
$pdf->SetX($pdf->GetX() + 45);
$pdf->SetXY($x, $y);
// Ajustar la posición X para la segunda MultiCell en la misma fila
$pdf->SetX($pdf->GetX() + 45);
// Segunda MultiCell
$pdf->MultiCell(145,8, 'Informe técnico para la suscripción del convenio de cooperación  entre  ________________ y ________________________', 1, 'L', true);
$pdf->Ln(0);
//.........
$pdf->SetFillColor(173, 216, 230);
$pdf->SetFont('', 'B' );
$pdf->Cell(190, 7, 'ANALISIS TÉCNICO', 1, 0, 'L', true);
$pdf->SetFont('', '' );
$pdf->Ln();
$pdf->SetFillColor(255,255,255);

//........

$pdf->MultiCell(190, 6, '1. BASE LEGAL:

* El artículo 350 de la Constitución  de la República del Ecuador, dispone: “El sistema de educación superior tiene como finalidad la formación académica y profesional con visión científica y humanista; la investigación científica y tecnológica; la innovación, promoción, desarrollo y difusión de los saberes y las culturas; la construcción de soluciones para los problemas del país, en relación con los objetivos del régimen de desarrollo”;

* El artículo 352 de la Carta Suprema dispone: “El Sistema de Educación Superior estará integrado por universidades y escuelas politécnicas; institutos superiores técnicos, tecnológicos y pedagógicos; y, conservatorios superiores de música y artes, debidamente acreditados y evaluados. Estas instituciones, sean públicas o particulares, no tendrán fines de lucro”;

* El artículo 3 de la Ley Orgánica de Educación Superior, referente a los Fines de la Educación Superior señala: “La educación superior de carácter humanista, cultural y científica constituye un derecho de las personas y un bien público social que, de conformidad con la Constitución de la República, responderá al interés público y no estará al servicio de intereses individuales y corporativos”;

* El El literal a) del artículo 118 de la Ley Orgánica de Educación Superior, determina que el nivel técnico o tecnológico superior se encuentra: “(…) orientado al desarrollo de las habilidades y destrezas relacionadas con la aplicación, adaptación e innovación tecnológica en procesos relacionados con la producción de bienes y servicios; corresponden a este nivel los títulos profesionales de técnico superior, tecnólogo superior o su equivalente y tecnólogo superior universitario o su equivalente”.
', 1,  'L', true);
$pdf->Ln();
//..........
$pdf->AddPage();
$pdf->Ln(35);
//............
$pdf->MultiCell(190, 6, '* A través del Acuerdo No. 2012-065 publicado en el Registro Oficial 834 de 20 de noviembre de 2012, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, declaró a los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores de música públicos, como como entidades operativas desconcentradas de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (…); de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación. En dicho Acuerdo consta el Instituto Tecnológico Superior XXXXXXXXXXXXX..

* A través del Acuerdo No. 2020-048, de 15 de mayo de 2020, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, determinó a favor de los rectores y rectoras de los Institutos Superiores Técnicos, Tecnológicos, Pedagógicos, de Artes y los Conservatorios Superiores Públicos; entre otras atribuciones y obligaciones las siguientes: “(…)la suscripción, modificación y/o extinción de los convenios que tengan por objeto lo siguiente: 1. La realización de programas de pasantías y/o prácticas pre profesionales; 2. La implementación de carreras de modalidad dual que garanticen la gestión del aprendizaje práctico con tutorías profesionales y académicas integrales in situ; 3. El uso gratuito de instalaciones para beneficio de institutos públicos; 4. La implementación de proyectos de vinculación con la sociedad; 5. La cooperación entre los mencionados institutos y las diferentes personas naturales y jurídicas nacionales; y, 6. La conformación y la participación en redes académicas internacionales, previa aprobación del Consejo de Educación Superior, las cuales estarán dirigidas a proyectos académicos que contemplen programas académicos, investigación y educación continua, con la finalidad de fortalecer la educación técnica y tecnológica pública del Ecuador. El Consejo de Educación Superior será el encargado de  supervisar la ejecución de dichos proyectos.. (…) Artículo 5.- “Los rectores y rectoras de los institutos superiores públicos, deberán usar obligatoriamente las plantillas y modelos de convenios autorizadas por la Coordinación General de Asesoría  Jurídica de esta Secretaría de Estado, para la suscripción de los actos jurídicos mencionados en el artículo 1 del presente Acuerdo, los cuales deberán ser remitidos oportunamente a las Coordinaciones Zonales para su correspondiente actualización”.

* De conformidad con el Acuerdo No. 2020-048 de 15 de mayo de 2020, elaboración de memorando y emisión de aprobación o no aprobación por parte de Coordinación Zonal, al respecto en su artículo 4 señala: “Los rectores y rectoras de institutos superiores públicos, deberán remitir a la Coordinación Zonal respectiva, conforme las plantillas emitidas (…), un informe técnico de viabilidad de suscripción de los convenios, de uso gratuito de instalaciones, de cooperación y vinculación con la colectividad, descritos en el  artículo 1 del presente Acuerdo para su aprobación por las unidades técnicas responsables”.', 1,  'L', true);
$pdf->Ln();
//.............
$pdf->AddPage();
$pdf->Ln(35);
//...............

$pdf->MultiCell(190, 6, 'OBJETIVO DEL INFORME: Determinar la viabilidad de la suscripción de un convenio de Cooperación entre el Instituto Tecnológico Superior XXXXXXXXXXXXX y XXXXXXXXXX 

', 1,  'L', true);
$pdf->Ln(0);
//...............

$pdf->MultiCell(190, 6, '3. ANTECEDENTES:

El Instituto Tecnológico Superior XXXXXXXXXXXXX, ubicado en la ciudad  de XXXXXXXXXXXXX, Provincia de XXXXXXXXXXXXX es una Institución de Educación Superior Pública con registro institucional Nro. XXXXXXXXXXXXX;

Mediante acción de Personal No.XXXXXXXXXXX, de fecha XX de XXXX de 202X, la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, otorgó el nombramiento al XXXXXXXXXXXXXXXX, portador de la cédula de ciudadanía No. XXXXXXXXXX en calidad de Rector del Instituto Tecnológico Superior XXXXXXX, posesionado en sus funciones mediante acto administrativo por el periodo comprendido entre el 20XX y el 20XX;

El XXXXXXXXXXXXXXXXX, con Registro Único de Contribuyentes No.   XXXXXXXXXXX es una persona xxxxxxx (natural o jurídica); con domicilio tributario en el cantón xxxxxxx, Provincia de xxxxxxxxx, Parroquia xxxxxxx, Ciudadela xxxxxxxxxxxxx, Barrio xxxxxxxxxxx, Calle xxxxxxxxxxx , Número: xxxxxxxxxx, que se dedica entre otras actividades a: xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx desde el xx de xxxxxxx de 202X, bajo la razón social xxxxxxxxxxxxxxxxxxxxxxxx.;

XXXXXXXXXXXXXXXXXXX', 1,  'L', true);
$pdf->Ln(0);
//...........

$pdf->MultiCell(190, 6, '4. JUSTIFICACIÓN: (Fundamentar la pertinencia de la suscripción del convenio con la entidad como beneficiará a los estudiantes y/o al Instituto su ejecución)', 1,  'L', true);
$pdf->Ln(0);

//.............

$pdf->MultiCell(190, 6, '5. OBJETO DEL CONVENIO: (será el mismo texto que constará en el convenio a suscribir) 

Establecer mecanismos de coordinación, interacción, cooperación y reciprocidad entre las dos instituciones, promoviendo la realización de actividades de interés y beneficio mutuo a través de obligaciones conjuntas, con el propósito de desarrollar actividades que permitan  ampliar conocimientos e impulsar la formación de estudiantes de los Institutos Técnicos y Tecnológicos dentro del  ámbito de competencia tanto del INSTITUTO como de la COOPERANTE. 
', 1,  'L', true);
$pdf->Ln(0);


//............
$pdf->MultiCell(190, 10, '6. PLAZO: (en años) número y letras', 1,  'L', true);
$pdf->Ln(0);
//.............
$pdf->AddPage();
$pdf->Ln(35);
//.............

$pdf->MultiCell(190, 12, '10. ÁMBITO DE COOPERACIÓN: (será el mismo texto que constará en el convenio a suscribir)
(En el caso de que se planifique gestionar prácticas pre profesionales y/o proyectos de vinculación a través del presente convenio se deberá precisar que se ejecutarán a través de convenios específicos)
', 1,  'L', true);
$pdf->Ln(0);

//............
$pdf->MultiCell(190, 20, '8. OBLIGACIÓN DEL INSTITUTO: (será el mismo texto que constará en el convenio a suscribir)', 1,  'L', true);
$pdf->Ln(0);
//.............
$pdf->MultiCell(190, 20, '9. OBLIGACIONES DEL COOPERANTE: (será el mismo texto que constará en el convenio a suscribir)
', 1,  'L', true);
$pdf->Ln(10);
//.................


//............

$pdf->SetFillColor(173, 216, 230);
$pdf->SetFont('', 'B' );
$pdf->Cell(190, 7, '10. Conclusiones y Recomendaciones ', 1, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('', '' );
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

$pdf->AddPage();
$pdf->Ln(35);

$pdf->Ln(0);

$pdf->MultiCell($w[$i], 24, 'Aprobado por:'."\n" . '______________________________' . "\n" . 'Rector/a del Instituto' , 1, 'C');

//..............


$pdf->SetFillColor(173, 216, 230);
$pdf->SetFont('', 'B' );
$pdf->Cell(190, 7, ' ANEXOS I: Documentos habilitantes', 1, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('', '' );
//.....
$pdf->SetFillColor(255, 255, 255);
$pdf->SetFont('', 'I' );
$pdf->MultiCell(190, 7, 'Copia simple de los documentos que acrediten la calidad del Representante Legal/ delegado o apoderado. 
Nota: 
*Para el caso de la persona jurídica de derecho privado solicitará el nombramiento debidamente inscrito en el Registro Mercantil.
*Para el caso de la persona jurídica de derecho público solicitará el nombramiento, acción de personal o credencial para el caso de dignidades de elección popular.
* Para el caso de los delegados se presentará el documento que le acredite. (Acuerdo de Delegación Resolución, otros).
* Para el caso de los mandatarios, se deberá presentar el poder debidamente notariado.
', 1, 'L', true);
$pdf->Ln(0);
$pdf->SetFont('', '' );
//.........

$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 7, 'Copia simple de la cédula de identidad o pasaporte del representante legal/ delegado o apoderado legalmente facultado para suscribir convenios', 1, 'L', true);
$pdf->Ln(0);

//..............


$pdf->MultiCell(190, 7, 'Copia simple del Registro Único de Contribuyente (RUC)', 1,  'L', true);
$pdf->Ln(0);

//.............
$pdf->MultiCell(190, 7, 'Copia simple de la acción de personal del Rector vigente y debidamente legalizado', 1,  'L', true);
$pdf->Ln(0);
//............

$pdf->SetFont('', 'B', 12);
$pdf->MultiCell(190, 7, 'ANEXO II: Opcional: Registro fotográfico general de las instalaciones y equipamiento disponibles de ser posible ', 1,  'L', true);
$pdf->Ln(0);



$pdf->Ln();



$pdf->Output();




ob_end_flush();
  ?>