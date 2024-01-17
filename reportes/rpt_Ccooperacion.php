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
$pdf->SetFont('Arial','B',11);
$pdf->Ln(35);

$pdf->SetFont('','B');
$pdf->MultiCell($w[$i], 6, "CI- XXXXXXXXXX

CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE EL INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXX Y XXXXXXXXXXXXX PARA EJECUTAR
", 0, 'C');
$pdf->Ln(0);
$pdf->SetFont('','');
$pdf->Ln(0);
//................
$pdf->SetFillColor(255,255,255);

$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'COMPARECIENTES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln();
//............

$pdf->MultiCell(185, 6, "Comparecen a la celebración del presente Convenio, por una parte el INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXXXX, legalmente representado por el XXXXXXXXXXXXX , en su calidad de Rector, de conformidad con lo que establecido en la Resolución No. XXXXX y Acción de Personal No. Xxx de xx de xxx de xxx; delegado del Secretario de Educación Superior, Ciencia, Tecnología e Innovación, para suscribir el presente instrumento conforme al Acuerdo No. 2020-048 de 15 de mayo de 2020, a quien en adelante para los efectos del presente instrumento se denominará  “INSTITUTO”; y, por otra parte, la XXXXX con RUC No. XXXXXXXXXXX, representada legalmente por XXXXXXXX en calidad de Gerente General a quien en adelante y para los efectos del presente instrumento se denominará “COOPERANTE”.

A los comparecientes se les podrá denominar como “LAS PARTES” cuando actúen o se denominen en forma conjunta, quienes, libre y voluntariamente, acuerdan por así convenir a sus mutuos y recíprocos intereses:", 0, 'J');

$pdf->SetFillColor(255,255,255);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Ln();
//..............

// Primera fila
$pdf->Cell(145, 7, 'CLÁUSULA PRIMERA. - ANTECEDENTES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln();
//...............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('Arial', 'I', 11);

$pdf->MultiCell(170, 5, "1. El artículo 350 de la Constitución  de la República del Ecuador, dispone: “El sistema de educación superior tiene como finalidad la formación académica y profesional con visión científica y humanista; la investigación científica y tecnológica; la innovación, promoción, desarrollo y difusión de los saberes y las culturas; la construcción de soluciones para los problemas del país, en relación con los objetivos del régimen de desarrollo”;

2. El artículo 352 de la Carta Suprema dispone: “El Sistema de Educación Superior estará integrado por universidades y escuelas politécnicas; institutos superiores técnicos, tecnológicos y pedagógicos; y, conservatorios superiores de música y artes, debidamente acreditados y evaluados. Estas instituciones, sean públicas o particulares, no tendrán fines de lucro”;

3. El artículo 3 de la Ley Orgánica de Educación Superior, referente a los Fines de la Educación Superior señala: “La educación superior de carácter humanista, cultural y científica constituye un derecho de las personas y un bien público social que, de conformidad con la Constitución de la República, responderá al interés público y no estará al servicio de intereses individuales y corporativos”;
", 0, 'J');

$pdf->Ln();

//.................

$pdf->AddPage();
$pdf->Ln(35);

//.........

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('Arial', 'I', 11);
$pdf->MultiCell(170, 5, "4. El  literal a) del artículo 118 de la Ley Orgánica de Educación Superior, determina que el nivel técnico o tecnológico superior se encuentra: “(…) orientado al desarrollo de las habilidades y destrezas relacionadas con la aplicación, adaptación e innovación tecnológica en procesos relacionados con la producción de bienes y servicios; corresponden a este nivel los títulos profesionales de técnico superior, tecnólogo superior o su equivalente y tecnólogo superior universitario o su equivalente”.

5. A través del Acuerdo No. 2012-065 publicado en el Registro Oficial 834 de 20 de noviembre de 2012, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, declaró a los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores de música públicos, como como entidades operativas desconcentradas de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (…); de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación. En dicho Acuerdo consta el Instituto Tecnológico Superior XXXXXXXXXXXXX.

6. A través del Acuerdo No. 2020-048, de 15 de mayo de 2020, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, determinó a favor de los rectores y rectoras de los Institutos Superiores Técnicos, Tecnológicos, Pedagógicos, de Artes y los Conservatorios Superiores Públicos; entre otras atribuciones y obligaciones las siguientes: “(…)la suscripción, modificación y/o extinción de los convenios que tengan por objeto lo siguiente: 1. La realización de programas de pasantías y/o prácticas pre profesionales; 2. La implementación de carreras de modalidad dual que garanticen la gestión del aprendizaje práctico con tutorías profesionales y académicas integrales in situ; 3. El uso gratuito de instalaciones para beneficio de institutos públicos; 4. La implementación de proyectos de vinculación con la sociedad; 5. La cooperación entre los mencionados institutos y las diferentes personas naturales y jurídicas nacionales; y, 6. La conformación y la participación en redes académicas internacionales, previa aprobación del Consejo de Educación Superior, las cuales estarán dirigidas a proyectos académicos que contemplen programas académicos, investigación y educación continua, con la finalidad de fortalecer la educación técnica y tecnológica pública del Ecuador. El Consejo de Educación Superior será el encargado de  supervisar la ejecución de dichos proyectos.. (…) Artículo 5.- “Los rectores y rectoras de los institutos superiores públicos, deberán usar obligatoriamente las plantillas y modelos de convenios autorizadas por la Coordinación General de Asesoría  Jurídica de esta Secretaría de Estado, para la suscripción de los actos jurídicos mencionados en el artículo 1 del presente Acuerdo, los cuales deberán ser remitidos oportunamente a las Coordinaciones Zonales para su correspondiente actualización”.
", 0, 'J');

$pdf->Ln();
//...............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('Arial', '', 11);
$pdf->MultiCell(170, 5, "7.  El Instituto Tecnológico Superior XXXXXXXXXXXXX, ubicado en la ciudad  de XXXXXXXXXXXXX, Provincia de XXXXXXXXXXXXX es una Institución de Educación Superior Pública con registro institucional Nro. XXXXXXXXXXXXX;", 0, 'J');

$pdf->Ln();
//...................
$pdf->AddPage();
$pdf->Ln(35);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('Arial', '', 11);
$pdf->MultiCell(170, 5, "8. Mediante acción de Personal No.XXXXXXXXXXX, de fecha XX de XXXX de 202X, la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, otorgó el nombramiento al XXXXXXXXXXXXXXXX, portador de la cédula de ciudadanía No. XXXXXXXXXX en calidad de Rector del Instituto Tecnológico Superior XXXXXXX, posesionado en sus funciones mediante acto administrativo por el periodo comprendido entre el 20XX y el 20XX;

9. El XXXXXXXXXXXXXXXXX, con Registro Único de Contribuyentes No.   XXXXXXXXXXX es una persona xxxxxxx (natural o jurídica); con domicilio tributario en el cantón xxxxxxx, Provincia de xxxxxxxxx, Parroquia xxxxxxx, Ciudadela xxxxxxxxxxxxx, Barrio xxxxxxxxxxx, Calle xxxxxxxxxxx , Número: xxxxxxxxxx, que se dedica entre otras actividades a: xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx desde el xx de xxxxxxx de 202X, bajo la razón social xxxxxxxxxxxxxxxxxxxxxxxx.

10. Mediante memorando No. SENESCYT-xx-202X-xxxxx-M de fecha xx de xxxxxxxxx del 202X, el Rector del Instituto Tecnológico Superior Xxxxxxxxx, remitió a la Coordinación Zonal  de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, el Informe Técnico de Viabilidad No. xxxxxxxxxxxxxxxxx de fecha xx de xxxxxxx de 202X, cuyas conclusiones y recomendaciones son las siguientes: xxxxxxxxxxxxxxxxxxxxxxxxxxxx.

11. Mediante memorando No. SENESCYT-xx-202X-xxxxx-M de fecha xx de xxxxxxxxx del 202X, la Coordinación Zonal xx de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, aprobó el informe técnico de viabilidad No. xxxxxxxxxxxxxxxxx de cooperación interinstitucional.

12. Con los antecedentes expuestos, el Instituto Tecnológico Superior xxxxxxxx y la xxxxxxxx acuerdan suscribir el presente Convenio de Cooperación Interinstitucional para la realización de acciones conjuntas con la finalidad de viabilizar la implementación de carreras de tercer nivel técnico, tecnológico.
", 0, 'J');

//............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SEGUNDA.- OBJETO DEL CONVENIO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);
$pdf->SetFont('','');
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "El presente convenio tiene por objeto establecer mecanismos de coordinación, interacción, cooperación y reciprocidad entre las dos instituciones, promoviendo la realización de actividades de interés y beneficio mutuo a través de obligaciones conjuntas, con el propósito de desarrollar actividades que permitan  ampliar conocimientos e impulsar la formación de estudiantes de los Institutos Técnicos y Tecnológicos dentro del  ámbito de competencia tanto del INSTITUTO como de la COOPERANTE. ", 0, 'J');

$pdf->Ln(8);
//................

$pdf->AddPage();
$pdf->Ln(35);

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA TERCERA.- ÁMBITO DE LA COOPERACIÓN:', 0, 0, 'L', true);
$pdf->SetFont('', '');

$pdf->SetFont('','');
$pdf->Ln(6);


//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "El INSTITUTO y la COOPERANTE, en beneficio recíproco, se comprometen a intervenir en las áreas o campos de acción que se detallan a continuación:", 0, 'J');

$pdf->Ln(10);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 20);

$pdf->MultiCell(170, 6, "3.1.  XXXXXXXXXXX
3.2.  XXXXXXXXXXX
3.3.  XXXXXXXXXXX
3.4.  XXXXXXXXXXX
3.5.  XXXXXXXXXXX
3.6.  XXXXXXXXXXX
3.7.  XXXXXXXXXXX
", 0, 'J');

//...................

$pdf->Ln(7);
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA CUARTA.- OBLIGACIONES DE LAS PARTES:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(7);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "Para el cumplimiento del objeto del presente Convenio de Cooperación Interinstitucional, las partes convienen establecer las siguientes obligaciones: ", 0, 'J');

$pdf->Ln(7);
//.................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "4.1.- OBLIGACIONES CONJUNTAS:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(7);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "LAS PARTES, en el marco del presente Convenio, se comprometen a lo siguiente:", 0, 'J');

$pdf->Ln(7);
//.................
//.................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 20);

$pdf->MultiCell(170, 6, "a.  XXXXXXXXXXX
b.  XXXXXXXXXXX
c.  XXXXXXXXXXX
d.  XXXXXXXXXXX
e.  XXXXXXXXXXX
f.  XXXXXXXXXXX
g.  XXXXXXXXXXX
", 0, 'J');

$pdf->Ln(7);
//.....................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "4.2.- OBLIGACIONES DEL INSTITUTO:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(7);


//...................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 20);

$pdf->MultiCell(170, 6, "a.  XXXXXXXXXXX
b.  XXXXXXXXXXX
c.  XXXXXXXXXXX
 ", 0, 'J');

//...................

$pdf->AddPage();
$pdf->Ln(35);
//..................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 20);

$pdf->MultiCell(170, 6, "d.  XXXXXXXXXXX
f.  XXXXXXXXXXX
g.  XXXXXXXXXXX
", 0, 'J');
$pdf->Ln(7);
//................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "4.3.- OBLIGACIONES DEL COOPERANTE:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(7);


//...................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 20);

$pdf->MultiCell(170, 6, "a.  XXXXXXXXXXX
b.  XXXXXXXXXXX
c.  XXXXXXXXXXX
d.  XXXXXXXXXXX
e.  XXXXXXXXXXX
f.  XXXXXXXXXXX
g.  XXXXXXXXXXX
", 0, 'J');
$pdf->Ln(7);
//..................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA QUINTA.- PLAZO:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(7);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "5.1 El presente Convenio tendrá un plazo de (XX) años, contados a partir de la fecha de su suscripción.

5.2. El Convenio podrá ser renovado por voluntad de LAS PARTES, para lo cual, al menos con treinta (30) días antes del vencimiento del plazo, la parte interesada deberá presentar la solicitud de renovación por escrito. La renovación deberá formalizarse dentro de un plazo de quince (15) días, mediante el instrumento legal correspondiente, de no suscribirse dentro del plazo, se entenderá como no renovado.
", 0, 'J');

$pdf->Ln(7);

//................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA SEXTA.- ADMINISTRACIÓN DEL CONVENIO ", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(7);
//.................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "5.1 El presente Convenio tendrá un plazo de (XX) años, contados a partir de la fecha de su suscripción.

5.2. El Convenio podrá ser renovado por voluntad de LAS PARTES, para lo cual, al menos con treinta (30) días antes del vencimiento del plazo, la parte interesada deberá presentar la solicitud de renovación por escrito. La renovación deberá formalizarse dentro de un plazo de quince (15) días, mediante el instrumento legal correspondiente, de no suscribirse dentro del plazo, se entenderá como no renovado.
", 0, 'J');

$pdf->Ln(7);

//................

$pdf->AddPage();
$pdf->Ln(35);
//.................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA SEXTA.- ADMINISTRACIÓN DEL CONVENIO ", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);

//...................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "LAS PARTES designan a los funcionarios que a continuación se detallan para que actúen en calidad de administradores, quienes velarán por el cabal y la oportuna ejecución de todas y cada una de las obligaciones derivadas del presente Convenio, así como de su seguimiento y coordinación, debiendo informar por escrito a las máximas autoridades de las instituciones comparecientes o a sus delegados, mediante informe semestral conforme al objeto del presente instrumento:

    Por el INSTITUTO se designa a XXXXX (de preferencia designar al cargo y no a la persona). 
    
    Por la CONFEDERACIÓN se designa a XXXX (de preferencia designar al cargo y no a la persona). 
    
Los Administradores del Convenio a la conclusión del plazo o en caso de la terminación del Convenio, presentarán un informe de ejecución del mismo, a sus máximas autoridades, en un plazo no mayor a diez (10) días.
    
En caso de presentarse cambios del personal asignado para la administración, serán designados con la debida antelación para lo cual bastará la sola notificación de la Máxima Autoridad de cada parte o su delegado, sin que sea necesaria la modificación del texto convencional; para lo cual el o los administradores salientes deberán presentar un informe de su gestión y la entrega recepción de actividades, para que el o los nuevos delegados continúen con las mismas.
    ", 0, 'J');

$pdf->Ln(5);
//...................

$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA SÉPTIMA.-  RÉGIMEN FINANCIERO", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);

//...................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "Debido a la naturaleza del Convenio, el presente instrumento jurídico no generará obligaciones financieras recíprocas, erogación alguna ni transferencias de recursos económicos entre las partes; las erogaciones generadas por las acciones ejecutadas por el cumplimiento de las obligaciones contraídas en el presente instrumento serán asumidas con cargo a la Institución que las ejecute.  ", 0, 'J');

$pdf->Ln(5);
//...................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA OCTAVA- MODIFICACIONES:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);

//...................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "8.1. Los términos de este convenio pueden ser modificados, ampliados o reformados de mutuo acuerdo durante su vigencia, siempre que los mismos no alteren su objeto ni desnaturalicen su contenido; y, sean justificados técnica o legalmente, según sea el caso; para cuyo efecto, las PARTES suscribirán el instrumento jurídico pertinente.", 0, 'J');

$pdf->Ln(7);
//...................

$pdf->AddPage();
$pdf->Ln(35);
//...................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA NOVENA.- TERMINACIÓN DEL CONVENIO:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);

///..................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, " El presente Convenio podrá terminar por cualquiera de las siguientes causales: ", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 6, " 1. Por vencimiento del plazo;
2. Por incumplimiento de las obligaciones
3. Por mutuo acuerdo de las partes, siempre que se evidencie que no pueda continuarse su ejecución por motivos técnicos, económicos, legales o sociales, para lo cual celebrarán un acta de terminación por mutuo acuerdo. La parte que por los motivos antes expuestos no pudiere continuar con la ejecución del presente Convenio, deberá notificar con su intención de dar por terminado el presente convenio a su contraparte con al menos treinta (30) días de antelación a la fecha de terminación del presente instrumento. 
4. Por terminación unilateral por incumplimiento de una de las partes, lo cual deberá ser técnicamente y legalmente justificado por quien lo alegare. En caso de terminación unilateral, la parte interesada notificará por escrito a la parte que haya incumplido con las obligaciones, incluyéndose además la motivación para dar por terminado el Convenio, adjuntando la documentación correspondiente; y, la otra Parte tendrá el plazo de diez (10) días, para justificar o remediar el incumplimiento. De no remediarse o justificarse el incumplimiento, la parte interesada notificará a la otra parte con la resolución de terminación unilateral del Convenio; y, 
5. Por fuerza mayor o caso fortuito debidamente justificado por la parte que lo alegare, y notificado dentro del plazo de 48 horas de ocurrido el hecho. En estos casos, se suscribirá la respectiva acta de terminación en el que se determinarán las causas descritas como causales de terminación del Convenio. Se considerarán causas de fuerza mayor o caso fortuito las establecidas en el artículo 30 del Código Civil.
", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, " La terminación del presente Convenio, por cualquiera de las causales antes señaladas, no afectará la conclusión del objeto y las obligaciones que las partes hubieren adquirido y que se encuentren ejecutando en ese momento, salvo que éstas lo acuerden de otra forma. No obstante, la terminación del Convenio no implicará el pago de indemnización alguna ni entre LAS PARTES ni con terceros.", 0, 'J');

$pdf->Ln(5);
//...............
$pdf->AddPage();
$pdf->Ln(35);

//...................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA DÉCIMA.- RELACIÓN LABORAL Y CONTRACTUAL:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);
//......................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "10.1. LAS PARTES acuerdan que este Convenio no podrá interpretarse de manera alguna como constitutivo de cualquier tipo de asociación o vínculo de carácter laboral entre LAS PARTES, sus servidores, ni relación contractual alguna. Las relaciones laborales y de seguridad social se mantendrán en todos los casos entre la parte contratante y sus respectivos servidores, aún en los casos de los trabajos realizados conjuntamente y que se desarrollen en las instalaciones o con equipos de cualquiera de LAS PARTES.  

10.2. En ningún caso podrá considerarse a la otra parte como patrón sustituto, solidario o por intermediación, quedando fuera de toda responsabilidad en asuntos relacionados con dicho personal, debiendo la parte que contrató al trabajador o servidor público, liberar de toda responsabilidad a la otra en caso de conflictos laborales provocados por su personal.", 0, 'J');

$pdf->Ln(5);

//...................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA DÉCIMA PRIMERA.- CONTROVERSIAS:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);



//...................


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "11.1. En el caso de presentarse alguna controversia, discrepancia o reclamación que surja de la interpretación y aplicación relacionada con este convenio o posteriores enmiendas del mismo, o de cualquier cuestión no contractual relacionada con el convenio, será resuelta de forma directa y amigable por los representantes legales de las partes en un plazo no mayor a treinta (30) días.

11.2. De no existir dicho acuerdo directo, podrán someter la controversia al proceso de mediación para lo cual LAS PARTES convienen en acudir al Centro de Mediación de la Procuraduría General del Estado con sede en la ciudad de XXXXXXXXX, provincia de XXXXXXX. El proceso de mediación estará sujeto a lo establecido a la Ley de Arbitraje y Mediación, y al Reglamento de Funcionamiento del Centro de Mediación de la Procuraduría General del Estado.

De no existir acuerdo, las partes suscribirán la respectiva Acta de Imposibilidad de Acuerdo, y la controversia se ventilará de conformidad con lo que establece el Código Orgánico General de Procesos siendo competente para el efecto la Unidad Judicial de lo Contencioso Administrativo o Tribunal de lo Contencioso Administrativo.", 0, 'J');

$pdf->Ln(5);


//...................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA DÉCIMA SEGUNDA.- DOCUMENTOS HABILITANTES:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);

//.....................



$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "Forman parte integrante del convenio los siguientes documentos: ", 0, 'J');

$pdf->Ln(5);

//.....................
$pdf->AddPage();
$pdf->Ln(35);


//....................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "a) Los que acreditan la calidad y capacidad de los comparecientes; y,
b) Los documentos a que se hace referencia en la cláusula de antecedentes. ", 0, 'J');

$pdf->Ln(5);
//....................

$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA DÉCIMA TERCERA.- DOMICILIO Y NOTIFICACIONES:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);
//....................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "Para todos los efectos legales, las partes fijan su domicilio en el Cantón XXXX, provincia de XXXX.

Las partes fijan las siguientes direcciones como su domicilio para notificaciones y recepción documentación:
", 0, 'J');

$pdf->Ln(5);
//....................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 30);

$pdf->MultiCell(72, 6, "INSTITUTO TECNOLÓGICO SUPERIOR XX
Dirección: xxxxxxxxx
Ciudad-Provincia: xxxxxx - xxxxx
Teléfono: xxxxxxxxxxxxxx 
ext: xxxxx
Mail: xxxxxxxxxx
", 1, 'J');
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 102);
$pdf->MultiCell(70, 6, "Xxxxxxxxxxxxxxxxxx (Nombre de la Persona Natural o empresa)
Dirección: xxxxxxxxx
Ciudad-Provincia: xxxxxx - xxxxx
Teléfono: xxxxxxxxxxxxxx 
ext: xxxxx
Mail: xxxxxxxxxx
", 1, 'J');
$pdf->Ln(5);
//....................
$pdf->SetFont('','');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "Para la ejecución del Convenio, las notificaciones serán realizadas por correo electrónico (e-mail), por escrito o cualquier otro medio que permita dejar constancia de la notificación o en su caso, de su recepción. Las partes están obligadas a notificar el cambio de domicilio.
", 0, 'J');

$pdf->Ln(5);
//........................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "CLÁUSULA DÉCIMA CUARTA.- ACEPTACIÓN DE LAS PARTES:", 0, 'J');
$pdf->SetFont('','');
$pdf->Ln(5);
//....................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Las partes declaran estar de acuerdo con el contenido de todas y cada una de las cláusulas materia de este Convenio, por así convenir a sus respectivos intereses, por lo que las aceptan y se ratifican en ellas. En virtud de lo cual, las partes suscriben este instrumento en cuatro (4) ejemplares, de igual contenido y valor jurídico.", 0, 'J');

$pdf->Ln(5);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dado en la ciudad de XXXXXXX, a los XX días del mes de XXXXX de 202X.", 0, 'J');

$pdf->Ln(10);
//.................

$pdf->AddPage();
$pdf->Ln(35);
//............
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 8);
$pdf->SetX($pdf->GetX() + 20);

$pdf->MultiCell(72, 6, "“Por delegación del Secretario de Educación Superior, Ciencia, Tecnología en Innovación:”




Mgs. XXXXXXXXXX.
RECTOR
INSTITUTO TECNOLÓGICO 
SUPERIOR XXXXXXXXXX
", 0, 'J');
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 8);
$pdf->SetX($pdf->GetX() + 102);
$pdf->MultiCell(70, 7.2 ,"Por la entidad receptora:





Sr. XXXXXXXXXX
REPRESENTANTE LEGAL
RUC: XXXXXXXXXX 
EMPRESA XXXXXXXXXX
", 0, 'J');

//.............

//.............

//.............

//.............

//.............

//.............








$pdf->Output();




ob_end_flush();
  ?>