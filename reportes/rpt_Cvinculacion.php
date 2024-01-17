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
$pdf->MultiCell($w[$i], 6, "VC- XXXXXXXXXX
CONVENIO DE VINCULACIÓN CON LA SOCIEDAD ENTRE INSTITUTO TECNOLÓGICO SUPERIOR XXXXX Y XXXXXXXXXXXXXXXXXXXXXXXXX ", 0, 'C');
$pdf->Ln(0);
$pdf->SetFont('','');


$pdf->MultiCell(185, 6, "
Comparecen a la celebración del presente Convenio, por una parte el INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXXXX, legalmente representado por el XXXXXXXXXXXXX, en su calidad de Rector, de conformidad con lo establecido en la Resolución No. XXXXX y Acción de Personal No. Xxx de xx de xxx de xxx; delegado del Secretario de Educación Superior, Ciencia, Tecnología e Innovación, para suscribir el presente instrumento conforme al Acuerdo No. 2020-048 de 15 de mayo de 2020, , a quien en adelante para los efectos del presente instrumento se denominará “INSTITUTO”; y, por otra parte la empresa XXXXXXXXXXXXXXXXXXX con RUC No. XXXXXXXXXXX, representada legalmente por XXXXXXXXX en calidad de Gerente General a quien en adelante y para los efectos del presente instrumento se denominará “ENTIDAD RECEPTORA”.
Las partes libre y voluntariamente, acuerdan celebrar el presente convenio al tenor de las siguientes cláusulas:
", 0, 'J');

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
$pdf->SetX($pdf->GetX() + 25);
$pdf->SetFont('Arial', 'I', 11);

$pdf->MultiCell(170, 5, "1. El artículo 26 de la Constitución de la República del Ecuador determina: “La educación es un derecho de las personas a lo largo de la vida y un deber ineludible e inexcusable del Estado. Constituye un área prioritaria de la política pública y de la inversión estatal, garantía de la igualdad e inclusión social y condición indispensable para el buen vivir; las personas, la familia y la sociedad tienen el derecho y la responsabilidad de participar en el proceso educativo”;

2. El artículo 28 de la Carta Suprema establece: “La educación responderá al interés público y no estará al servicio de intereses individuales y corporativos. Se garantizará el acceso universal, permanencia, movilidad y egreso sin discriminación alguna y la obligatoriedad en el nivel inicial, básico y bachillerato o su equivalente. Es derecho de toda persona y comunidad interactuar entre culturas y participar en una sociedad que aprende. El Estado promoverá el diálogo intercultural en sus múltiples dimensiones. El aprendizaje se desarrollará de forma escolarizada y no escolarizada. La educación pública será universal y laica en todos sus niveles, y gratuita hasta el tercer nivel de educación superior inclusive”;

3. El artículo 350 de la Constitución establece que: “El sistema de educación superior tiene como finalidad la formación académica y profesional con visión científica y humanista; la investigación científica y tecnológica; la innovación, promoción, desarrollo y difusión de los saberes y las culturas; la construcción de soluciones para los problemas del país, en relación con los objetivos del régimen de desarrollo”;
", 0, 'J');



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

$pdf->MultiCell(170, 5, "El artículo 352 de la Carta Suprema dispone que: “El sistema de educación superior estará integrado por universidades y escuelas politécnicas; institutos superiores técnicos, tecnológicos y pedagógicos; y, conservatorios de música y artes, debidamente acreditados y evaluados. / Estas instituciones, sean públicas o particulares, no tendrán fines de lucro”; 
5. El artículo 13 de la Ley Orgánica de Educación Superior determina como una de las funciones del Sistema de Educación Superior es: “a) Garantizar el derecho a la educación superior mediante la docencia, la investigación y su vinculación con la sociedad, y asegurar crecientes niveles de calidad, excelencia académica y pertinencia”;

6. El artículo 125 de la Ley Orgánica de Educación Superior establece que: “Las instituciones del Sistema de Educación Superior realizarán programas y cursos de vinculación  con las sociedad guiados por el personal académico (…)”;

7. El artículo 182 de la Ley Orgánica de Educación Superior dispone que: “La Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, es el órgano que tiene por objeto ejercer la rectoría de la política pública de educación superior y coordinar acciones entre la Función Ejecutiva y las instituciones del Sistema de Educación Superior. Estará dirigida por el Secretario Nacional de Educación Superior, Ciencia, Tecnología e Innovación de Educación Superior, designado por el Presidente de la República. Esta Secretaría Nacional contará con el personal necesario para su funcionamiento”;

8. Artículo 40 del Reglamento de Régimen Académico expedido por el Consejo de Educación Superior mediante Resolución RPC-SE-08-No.023-2022 vigente desde el 16 de septiembre de 2022, última reforma vigente desde el 10 de marzo del 2023 con Resolución RPC-SE-03-No. 008-2023, mediante el cual manifiesta que:” La vinculación con la sociedad hace referencia a la planificación, ejecución y difusión de actividades que garantizan la participación efectiva en la sociedad y la responsabilidad social de las instituciones del Sistema de Educación Superior con el fin de contribuir a la satisfacción de necesidades y la solución de problemáticas del entorno, desde el ámbito académico e investigativo. La vinculación con la sociedad deberá articularse al resto de funciones sustantivas, oferta académica, dominios académicos, investigación, formación y extensión de las IES en cumplimiento del principio de pertinencia. En el marco del desarrollo de la investigación científica o artística de las IES, se considerará como vinculación con la sociedad a las actividades de divulgación científica, a los aportes a la mejora y actualización de los planes de desarrollo local, regional y nacional, y a la transferencia de conocimiento y tecnología. La divulgación científica o artística consiste en transmitir resultados, avances, ideas, hipótesis, teorías, conceptos, productos artísticos y en general cualquier actividad científica, artística, tecnológica a la sociedad; utilizando los canales, recursos y lenguajes adecuados para que ésta los pueda comprender y asimilar la sociedad”.
", 0, 'J');

$pdf->Ln();
//...........


$pdf->AddPage();
$pdf->Ln(35);

//.........
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('Arial', 'I', 11);

$pdf->MultiCell(170, 5, "9. El artículo 41 del Reglamento de Régimen Académico establece en lo referente a la “Planificación de la vinculación con la sociedad.- “La planificación de la función de vinculación con la sociedad, podrá estar determinada en las siguientes líneas operativas: a) Educación continua. b) Prácticas preprofesionales; c) Proyectos y servicios especializados; d) Investigación; e) Divulgación y resultados de aplicación de conocimientos científicos o artísticos; f) Ejecución de proyectos de innovación; g) Ejecución de proyectos de servicios comunitarios o sociales; y h) Otras determinadas por la IES en correspondencia con su naturaleza y en ejercicio de su autonomía responsable. Las IES podrán crear instancias institucionales específicas, incorporar personal académico y establecer alianzas estratégicas de cooperación interinstitucional para gestionar  la vinculación con la sociedad”. 

10. A través de Acuerdo No. 2012-065, publicado en el Registro Oficial No. 834, de 20 de noviembre de 2012, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, declaró a: “(…) los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores de música públicos, como entidades operativas desconcentradas de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (…)”; entre los cuales consta el Instituto Tecnológico Superior xxxxxxxxx.

11. A través del Acuerdo No. 2020-048, de 15 de mayo de 2020, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, determinó a favor de los rectores y rectoras de los Institutos Superiores Técnicos, Tecnológicos, Pedagógicos, de Artes y los Conservatorios Superiores Públicos; entre otras atribuciones y obligaciones las siguientes: “(…)la suscripción, modificación y/o extinción de los convenios que tengan por objeto lo siguiente: 1. La realización de programas de pasantías y/o prácticas pre profesionales; 2. La implementación de carreras de modalidad dual que garanticen la gestión del aprendizaje práctico con tutorías profesionales y académicas integrales in situ; 3. El uso gratuito de instalaciones para beneficio de institutos públicos; 4. La implementación de proyectos de vinculación con la sociedad; 5. La cooperación entre los mencionados institutos y las diferentes personas naturales y jurídicas nacionales; y, 6. La conformación y la participación en redes académicas internacionales, previa aprobación del Consejo de Educación Superior, las cuales estarán dirigidas a proyectos académicos que contemplen programas académicos, investigación y educación continua, con la finalidad de fortalecer la educación técnica y tecnológica pública del Ecuador. El Consejo de Educación Superior será el encargado de  supervisar la ejecución de dichos proyectos. (…) Artículo 5.- “Los rectores y rectoras de los institutos superiores públicos, deberán usar obligatoriamente las plantillas y modelos de convenios autorizadas por la Coordinación General de Asesoría  Jurídica de esta Secretaría de Estado, para la suscripción de los actos jurídicos mencionados en el artículo 1 del presente Acuerdo, los cuales deberán ser remitidos oportunamente a las Coordinaciones Zonales para su correspondiente actualización”.
", 0, 'J');

$pdf->Ln();
//...........

$pdf->AddPage();
$pdf->Ln(35);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('Arial', '', 11);

$pdf->MultiCell(170, 5, "12. El Instituto Tecnológico Superior XXXXXXXX, ubicado en la provincia de XXXXXXXXX es una Institución de Educación Superior Pública con licencia de funcionamiento otorgada mediante Acuerdo No. XXX de fecha xx de xx de xx, conferido por xxxxxxxxxxxxx, que se dedica a la formación de profesionales de nivel tecnológico;


13. Mediante acción de personal No. XXXXXXXX, de fecha XX de XXXX, la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, otorgó el nombramiento al XXXXXXXXXXXXX, portador de la cédula de ciudadanía No. XXXXXXXXXXX en calidad de Rector del Instituto Tecnológico Superior XXXXXXXXXXXX posesionado en sus funciones mediante acto administrativo por el periodo comprendido entre el 20XX y el 20XX.

14. El XXXXXXXXXXXXXXXXX, ubicado en la ciudad de xxxxxxxxx, provincia de xxxxxxx, es una Institución de Educación Superior Pública, con licencia de funcionamiento otorgada mediante Acuerdo Nro. Xxx y registro institucional Nro. Xxxxx conferido por el Consejo de Educación Superior CONESUP, que se dedica a la formación de profesionales de nivel tecnológico.;

15. Mediante Informe Técnico Académico de Viabilidad para la firma de Convenio No. Xxxxxx de fecha xx de xxxxxxxx de 202x, se concluye que: “Conclusiones y Recomendaciones:”.

16. Mediante memorando No. SENESCYT-xx-202X-xxxxx-M del xx de xxxxxxxxx del 202x, el xxxxxxxxxx, Coordinador/a Zonal aprueba el Informe Técnico Nro. XXXXXXXXXXXXXX de xx de xxxxxxxxx  de 202x, para la suscripción del Convenio entre el XXXXXXXXXXXXXXX y el Instituto Tecnológico Superior XXXXXXXXXXX.

17. Con los antecedentes expuestos, el Instituto Tecnológico Superior xxxxxx y el  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx, acuerdan suscribir el presente convenio referente a la implementación de un programa de vinculación con la colectividad que versará sobre el proyecto que tiene como objetivo:”xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx”, por parte de las carreras  de xxxxxxxxxxxxxxxxxxxxxx. 

", 0, 'J');

$pdf->Ln();
//...........
//............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SEGUNDA. - OBJETO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);
$pdf->SetFont('','');
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "Por medio del presente convenio, las partes, en el ámbito de sus competencias, se comprometen a realizar la implementación del proyecto de vinculación con la colectividad propuesto por el INSTITUTO, referente a (NOMBRE DEL PROYECTO). ", 0, 'J');

$pdf->Ln(8);
//...............
$pdf->AddPage();
$pdf->Ln(35);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA TERCERA.- OBLIGACIONES DE LAS PARTES:', 0, 0, 'L', true);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 6);
$pdf->SetX($pdf->GetX() + 0);
$pdf->SetFont('','B');
$pdf->MultiCell(185, 6, "3.1 DEL INSTITUTO:", 0, 'J');

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 2);
$pdf->SetX($pdf->GetX() + 0);
$pdf->SetFont('','');
$pdf->MultiCell(185, 6, "Son obligaciones del INSTITUTO: ", 0, 'J');

$pdf->SetFont('', '');
$pdf->Ln(8);

//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 6, "a) Designar a los Estudiantes del Instituto Tecnológico Superior xxxxxxx  a fin de que accedan a las actividades de vinculación del xxxxxxxxxxx (entidad receptora), remitiendo para el efecto la base de datos con la información que acuerden las partes.

b) Asegurar que la unidad de vinculación puedan desarrollar los distintos programas y actividades en las instalaciones existentes del xxxxxxxxxxx (entidad receptora),

c) Cumplir a cabalidad las horas establecidas para el proyecto. 

d) xxxxxxxxxxxx
", 0, 'J');

$pdf->Ln(10);
//................

$pdf->SetFont('','B');
$pdf->Cell(145, 6, '3.2  DE LA ENTIDAD RECEPTORA:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->SetFont('','');
$pdf->Ln();

//................
$pdf->SetFont('','');
$pdf->Cell(145, 6, 'Son obligaciones de la ENTIDAD RECEPTORA  las siguientes:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "a) Permitir que los estudiantes del Instituto Tecnológico Superior xxxxxxxxx efectúen actividades de vinculación en las instalaciones de acuerdo a los lineamientos pedagógicos establecidos. 

b) Vincular a los estudiantes a las áreas relacionadas con la carrera que se encuentran cursando la correspondiente actividad de vinculación en sus instalaciones, de acuerdo a las necesidades de la (nombre de la entidad receptora), y de conformidad a la normativa vigente.

c) Otorgar el apoyo necesario para el desarrollo de los estudiantes y sus actividades, además de evaluar el desarrollo de las actividades que se asignen a los estudiantes dentro de las actividades de vinculación a realizarse en (nombre de la entidad receptora).

d) xxxxxxxxxxxx
", 0, 'J');

$pdf->Ln(5);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA CUARTA.- PLAZO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "El plazo total para la ejecución del presente Convenio es de xxxxx (x) años contados a partir de la fecha de suscripción, mismo que podrá ser renovado previo consentimiento de las partes de manera escrita con un mínimo de quince (15) días de anticipación a la fecha de terminación, para lo cual las partes deberán suscribir el instrumento pertinente prorrogando el mismo y estableciendo, de existir, las nuevas condiciones.", 0, 'J');
$pdf->Ln(0);
//................

$pdf->AddPage();
$pdf->Ln(35);

//................
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA QUINTA.- RÉGIMEN FINANCIERO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Debido a la naturaleza del Convenio, el presente convenio no generará obligaciones financieras recíprocas, erogación alguna ni transferencias de recursos económicos entre las partes; las erogaciones generadas por las acciones ejecutadas por el cumplimiento de las obligaciones contraídas en el presente instrumento serán asumidas con cargo a la Institución que las ejecute.", 0, 'J');
$pdf->Ln(3);

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SEXTA.- MODIFICACIONES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Los términos de este convenio podrán ser modificados, ampliados o reformados de mutuo acuerdo durante su vigencia, siempre que dichas modificaciones no alteren la naturaleza ni el objeto del convenio y sean justificadas técnica, legal o académicamente; para cuyo efecto, las PARTES suscribirán el instrumento jurídico pertinente.
Ninguna modificación podrá ir en detrimento de los derechos de los estudiantes que se encuentren vinculados en la ENTIDAD RECEPTORA. 
", 0, 'J');
$pdf->Ln(3);

//..............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SÉPTIMA.- ADMINISTRADOR DEL CONVENIO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Para realizar la coordinación, ejecución y seguimiento del presente convenio, las partes designan a los funcionarios que a continuación se detallan para que actúen en calidad de administradores, quienes velarán por la cabal y oportuna ejecución de todas y cada una de las obligaciones derivadas del mismo, así como de su seguimiento y coordinación, debiendo informar por escrito a la máxima autoridad del INSTITUTO y al/la representante de la ENTIDAD RECEPTORA, mediante informes semestrales por cada ciclo académico respecto del cumplimiento del objeto del presente instrumento:

    Por el INSTITUTO se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)
    Por la ENTIDAD RECEPTORA se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)
     
Los Administradores del Convenio a la conclusión del plazo, presentarán un informe consolidado sobre la  ejecución del Convenio.
En caso de presentarse cambios del personal asignado para la administración, serán designados con la debida antelación, notificando a la parte contraria de manera inmediata y sin que sea necesaria la modificación del texto convencional, a fin de no interrumpir la ejecución y el plazo del convenio; para lo cual el o los administradores salientes deberán presentar un informe de su gestión y la entrega recepción de actividades.
 ", 0, 'J');
$pdf->Ln(3);

//................
//..............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA OCTAVA.- TERMINACIÓN DEL CONVENIO: ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "El presente Convenio terminará por una de las siguientes causas:", 0, 'J');
$pdf->Ln(0);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "1. Por vencimiento del plazo;", 0, 'J');
$pdf->Ln(0);

//................
$pdf->AddPage();
$pdf->Ln(34);

//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "  2. Por mutuo acuerdo de las partes, siempre que se evidencie que no pueda continuarse su ejecución por motivos técnicos, económicos, legales, sociales o físicos para lo cual celebrarán una acta de terminación por mutuo acuerdo. La parte que por los motivos antes expuestos no pudiere continuar con la ejecución del presente Convenio, deberá poner en conocimiento de su contraparte su intención de dar por terminado el convenio por mutuo con al menos treinta (30) días de antelación a la fecha de terminación del convenio;
  2. Por terminación unilateral por incumplimiento de una de las partes, lo cual deberá ser técnicamente y legalmente justificado por quien lo alegaré; y, 
  4. Por fuerza mayor o caso fortuito debidamente justificado por la parte que lo alegare, y notificado dentro del plazo de cuarenta y ocho (48) horas de ocurrido el hecho. En estos casos, se suscribirá la respectiva acta de terminación en el que se determinarán las causas descritas como causales de terminación del Convenio. Se considerarán causas de fuerza mayor o caso fortuito las establecidas en el artículo 30 del Código Civil.
", 0, 'J');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "La terminación del presente convenio, por cualquiera de las causales antes señaladas, generará la obligación de las partes a suscribir un acta de finiquito; sin embargo, no afectará la conclusión del objeto y las obligaciones que las partes hubieren adquirido y que se encuentren ejecutando en ese momento, salvo que éstas lo acuerden de otra forma. No obstante, la terminación del presente convenio no implicará el pago de indemnización alguna ni entre las partes ni entre éstas y los estudiantes o terceros.", 0, 'J');
$pdf->Ln(3);

//..............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA NOVENA. -INEXISTENCIA DE RELACIÓN LABORAL: ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(2);

//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Por la naturaleza del presente Convenio, se entiende que ninguna de las partes comparecientes, adquieren relación laboral ni de dependencia respecto del personal de la otra institución que trabaje en el cumplimiento de este instrumento.

De igual manera, la ENTIDAD RECEPTORA no tendrá relación laboral ni obligaciones laborales  con los estudiantes que se vinculen a ella, ni éstos tendrán subordinación ni dependencia laboral para con la ENTIDAD RECEPTORA, se aclara que la relación estudiante-entidad receptora es  únicamente de formación académica.

", 0, 'J');
$pdf->Ln(3);
//.............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA DÉCIMA.- CONTROVERSIAS: ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(2);

//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Basándose en la buena fe como fundamental para la ejecución de este convenio para el caso de controversias derivadas de su interpretación, aplicación, ejecución o terminación, las partes aceptan solucionarlas de manera amistosa a través de las máximas autoridades de las instituciones comparecientes; de no ser posible una solución amistosa, las controversias producto del presente Convenio se ventilarán ante el Centro de Mediación de la Procuraduría General del Estado, con sede en la ciudad de xxxxxx., provincia de xxxxxxx; y, a la falta de acuerdo se ventilarán las controversias de conformidad con lo establecido en el Código Orgánico General de Procesos (COGEP); siendo ", 0, 'J');
$pdf->Ln(5);


//.............
$pdf->AddPage();
$pdf->Ln(35);
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "competente para conocer dichas controversias el/la Tribunal de lo Contencioso Administrativo o la Unidad Judicial de lo Contencioso Administrativo.
", 0, 'J');
$pdf->Ln(3);

//.............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA DÉCIMA PRIMERA.- DOCUMENTOS HABILITANTES:
 ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(2);

//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Forman parte integrante del convenio los siguientes documentos: ", 0, 'J');
$pdf->Ln(0);
//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "a) Los que acreditan la calidad y capacidad de los comparecientes; y,
b) Los documentos a que se hace referencia en la cláusula de antecedentes.
", 0, 'J');
$pdf->Ln(3);
//.............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA DÉCIMA SEGUNDA.- COMUNICACIONES Y NOTIFICACIONES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(2);

//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Todas las comunicaciones y notificaciones entre las partes, se realizarán por escrito y serán entregadas a las siguientes direcciones: ", 0, 'J');
$pdf->Ln(5);
//...........


//.............
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "INSTITUTO TECNOLÓGICO SUPERIOR “XXXXXXXXXXXX”: ", 0, 'J');

$pdf->Ln(5);
//.................


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dirección:                XXXXXXXXXXXXXXXX.", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Ciudad-Provincia:   XXXXXXXXXX", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Teléfono:                  XXXXXXXX", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Mail:                          XXXXXXXXXXXXXXXXXXXX", 0, 'J');

$pdf->Ln(15);
//.................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "(NOMBRE DE LA PERSONA NATURAL O JURÍDICA) XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX:", 0, 'J');

$pdf->Ln(5);

//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dirección: 		XXXXXXXXXXXX", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Ciudad-Provincia: 	XXXXXXXXXXX", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Teléfono: 		XXXXXXXXXXXX", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Mail:			XXXXXXXXXXXXXX", 0, 'J');

$pdf->Ln(5);
$pdf->SetFont('','');
//..................
$pdf->AddPage();
$pdf->Ln(35);
//.................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA DECIMA TERCERA.- ACEPTACIÓN:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);
//.................
//.................

//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Libre y voluntariamente, previo el cumplimiento de los requisitos de Ley, los comparecientes expresan su aceptación a todo lo convenido en el presente instrumento, a cuyas estipulaciones se someten, por convenir a sus legítimos intereses institucionales, en fe de lo cual proceden a suscribirlo en cuatro (4) ejemplares de igual tenor y valor jurídico.", 0, 'J');

$pdf->Ln(10);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dado, en la ciudad de xxxxxxxx a los XXX días del mes de XXX de 202X.  ", 0, 'J');

$pdf->Ln(5);
//.................
//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);
$pdf->SetFont('','B');
$pdf->MultiCell(70, 5, "Por delegación del Secretario de Educación Superior, Ciencia, Tecnología en Innovación”:", 0, 'J');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 100);
$pdf->MultiCell(115, 15, 'Por la Entidad Receptora:', 0, 'L');
$pdf->Ln(20);
//.............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);
$pdf->SetFont('','B');
$pdf->MultiCell(70, 5, "Mgs. XXXXXXXXXX.", 0, 'J');
$pdf->MultiCell(70, 5, "RECTOR", 0, 'J');
$pdf->MultiCell(70, 5, "INSTITUTO TECNOLÓGICO SUPERIOR ", 0, 'J');
$pdf->MultiCell(70, 5, "XXXXXXXXXX ", 0, 'J');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 100);
$pdf->MultiCell(115, 15, 'Sr. XXXXXXXXXX', 0, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 5);
$pdf->SetX($pdf->GetX() + 100);

$pdf->MultiCell(115, 15, 'RUC: XXXXXXXXXX ', 0, 'L');

$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 10);
$pdf->SetX($pdf->GetX() + 100);
$pdf->MultiCell(115, 15, 'EMPRESA XXXXXXXXXX', 0, 'L');

$pdf->Ln(20);

//.............

//.............

//.............

//.............

//.............

//.............








$pdf->Output();




ob_end_flush();
  ?>