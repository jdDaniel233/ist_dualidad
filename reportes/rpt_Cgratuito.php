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
$pdf->MultiCell($w[$i], 6, "UGI- XXX-202X-XXeXX
CONVENIO DE USO GRATUITO DE INSTALACIONES ENTRE EL INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXX Y XXXXXXXXXXXXXXXX
", 0, 'C');
$pdf->Ln(0);
$pdf->SetFont('','');


$pdf->MultiCell(185, 6, "Comparecen a la celebración del presente Convenio, por una parte el INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXXXX, legalmente representado por el XXXXXXXXXXXXX, en su calidad de Rector, de conformidad con lo establecido en la Resolución No. XXXXX y Acción de Personal No. Xxx de xx de xxx de xxx; delegado del Secretario de Educación Superior, Ciencia, Tecnología e Innovación, para suscribir el presente instrumento conforme al Acuerdo No. 2020-048 de 15 de mayo de 2020, a quien en adelante para los efectos del presente instrumento se denominará “INSTITUTO”; y, por otra parte la empresa  XXXXXXXXXXXXXXXXXXX con RUC No. XXXXXXXXXXX, representada legalmente por XXXXXXXXX en calidad de Gerente General a quien en adelante y para los efectos del presente instrumento se denominará “ENTIDAD RECEPTORA”.

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
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('Arial', 'I', 11);

$pdf->MultiCell(170, 5, "1. El artículo 26 de la Constitución de la República del Ecuador determina: “La educación es un derecho de las personas a lo largo de la vida y un deber ineludible e inexcusable del Estado. Constituye un área prioritaria de la política pública y de la inversión estatal, garantía de la igualdad e inclusión social y condición indispensable para el buen vivir; las personas, la familia y la sociedad tienen el derecho y la responsabilidad de participar en el proceso educativo”;

2. El artículo 28 de la Carta Suprema establece: “La educación responderá al interés público y no estará al servicio de intereses individuales y corporativos. Se garantizará el acceso universal, permanencia, movilidad y egreso sin discriminación alguna y la obligatoriedad en el nivel inicial, básico y bachillerato o su equivalente. Es derecho de toda persona y comunidad interactuar entre culturas y participar en una sociedad que aprende. El Estado promoverá el diálogo intercultural en sus múltiples dimensiones. El aprendizaje se desarrollará de forma escolarizada y no escolarizada. La educación pública será universal y laica en todos sus niveles, y gratuita hasta el tercer nivel de educación superior inclusive”;

3. El artículo 350 de la Constitución establece que: “El sistema de educación superior tiene como finalidad la formación académica y profesional con visión científica y humanista; la investigación científica y tecnológica; la innovación, promoción, desarrollo y difusión de los saberes y las culturas; la construcción de soluciones para los problemas del país, en relación con los objetivos del régimen de desarrollo”;", 0, 'J');

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
$pdf->MultiCell(170, 5, "4. El artículo 352 de la Carta Suprema dispone que: el Sistema de Educación Superior estará integrado por universidades y escuelas politécnicas; institutos superiores técnicos, tecnológicos y pedagógicos; y, conservatorios superiores de música y artes, debidamente acreditados y evaluados. Estas instituciones, sean públicas o particulares, no tendrán fines de lucro;

5. El artículo 182 de la Ley Orgánica Educación Superior dispone que: “La Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, es el órgano que tiene por objeto ejercer la rectoría de la política pública de educación superior y coordinar acciones entre la Función Ejecutiva y las instituciones del Sistema de Educación Superior. Estará dirigida por el Secretario Nacional de Educación Superior, Ciencia, Tecnología e Innovación de Educación Superior, designado por el Presidente de la República. Esta Secretaría Nacional contará con el personal necesario para su funcionamiento”;

6. A través de Acuerdo No. 2012-065, publicado en el Registro Oficial No. 834, de 20 de noviembre de 2012, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, declaró a: “(…) los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores de música públicos, como entidades operativas desconcentradas de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (…)”; entre las cuales consta el Instituto Tecnológico Superior xxxxxxxxxxx;

7. A través del Acuerdo No. 2020-048, de 15 de mayo de 2020, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, determinó a favor de los rectores y rectoras de los Institutos Superiores Técnicos, Tecnológicos, Pedagógicos, de Artes y los Conservatorios Superiores Públicos; entre otras atribuciones y obligaciones las siguientes: “(…)la suscripción, modificación y/o extinción de los convenios que tengan por objeto lo siguiente: 1. La realización de programas de pasantías y/o prácticas pre profesionales; 2. La implementación de carreras de modalidad dual que garanticen la gestión del aprendizaje práctico con tutorías profesionales y académicas integrales in situ; 3. El uso gratuito de instalaciones para beneficio de institutos públicos; 4. La implementación de proyectos de vinculación con la sociedad; 5. La cooperación entre los mencionados institutos y las diferentes personas naturales y jurídicas nacionales; y, 6. La conformación y la participación en redes académicas internacionales, previa aprobación del Consejo de Educación Superior, las cuales estarán dirigidas a proyectos académicos que contemplen programas académicos, investigación y educación continua, con la finalidad de fortalecer la educación técnica y tecnológica pública del Ecuador. El Consejo de Educación Superior será el encargado de  supervisar la ejecución de dichos proyectos. (…) Artículo 5.- “Los rectores y rectoras de los institutos superiores públicos, deberán usar obligatoriamente las plantillas y modelos de convenios autorizadas por la Coordinación General de Asesoría  Jurídica de esta Secretaría de Estado, para la suscripción de los actos jurídicos mencionados en el artículo 1 del presente Acuerdo, los cuales deberán ser remitidos oportunamente a las Coordinaciones Zonales para su correspondiente actualización”.
", 0, 'J');

$pdf->Ln();
//..............
$pdf->AddPage();
$pdf->Ln(35);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 25);
$pdf->SetFont('Arial', '', 11);
$pdf->MultiCell(160, 5, "8. El Instituto Tecnológico Superior XXXXXXXX, ubicado en la provincia de XXXXXXXXX es una Institución de Educación Superior Pública con licencia de funcionamiento otorgada mediante Acuerdo No. XXX de fecha xx de xx de xx, conferido por xxxxxxxxxxxxxxx, que se dedica a la formación de profesionales de nivel tecnológico;

9. Mediante Acción de Personal No. XXXXXXXXXXX, de fecha XX de XXXX de 201X, la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, otorgó el nombramiento al XXXXXXXXXXXXXXXX, portador de la cédula de ciudadanía No. XXXXXXXXXX en calidad de Rector(a) del Instituto Tecnológico Superior XXXXXXX, posesionado en sus funciones mediante acto administrativo por el periodo comprendido entre el 20XX y el 20XX;

10. El XXXXXXX (Nombre de la empresa/ persona natural), con Registro Único de Contribuyentes No. XXXXXXXXXXX es una persona xxxxxxx (natural o jurídica); con domicilio tributario en el cantón xxxxxxx, Provincia de xxxxxxxxx, Parroquia xxxxxxx, Ciudadela xxxxxxxxxxxxx, Barrio xxxxxxxxxxx, Calle xxxxxxxxxxx, Número: xxxxxxxxxx, que se dedica entre otras actividades a: xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx desde el xx de xxxxxxx de 20XX, bajo la razón social xxxxxxxxxxxxxxxxxxxxxxxx;

11. Informe Técnico de Viabilidad de Suscripción del Convenio  
12. Dictamen Técnico de Inmobiliar 

13. Mediante  memorando No. SENESCYT-xx-202X-xxxxx-M de fecha xx de xxxxxxxxx del 2020, el Rector del Instituto Tecnológico Superior Xxxxxxxxx, remitió a la Coordinación Zonal xx  de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, el Informe Técnico de Viabilidad No. xxxxxxxxxxxxxxxxx de fecha xx de xxxxxxx de 202X, para revisión y aprobación.

14. Mediante memorando No. SENESCYT-xx-20XX-xxxxx-M de fecha xx de xxxxxxxxx del 202X, la Coordinación Zonal xx  de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, aprobó el informe técnico de viabilidad No. xxxxxxxxxxxxxxxxx de uso gratuito de instalaciones.

15. Con los antecedentes expuestos, el Instituto Tecnológico Superior xxxxxxxx y la xxxxxxxxxxxx, acuerdan suscribir el presente Convenio de Uso Gratuito de Instalaciones.  ", 0, 'J');

$pdf->Ln();
//............

//............

//............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SEGUNDA. - OBJETO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "En virtud del presente Convenio de Uso Gratuito de Instalaciones, las partes se comprometen a realizar acciones para viabilizar el uso de la infraestructura del xxxxxxxxxxxxxxxxxxxxxxxxxxxx a favor del INSTITUTO xxxxxxxxxxxxx", 0, 'J');
//.................

$pdf->AddPage();
$pdf->Ln(35);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA TERCERA - DERECHOS Y OBLIGACIONES DE LAS PARTES:', 0, 0, 'L', true);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 5);
$pdf->SetX($pdf->GetX() + 0);

$pdf->Cell(145, 7, '3.1  OBLIGACIONES del instituto', 0, 0, 'L', true);
$pdf->SetFont('', '');

$pdf->Ln(8);

//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "
EL INSTITUTO, en el marco de este Convenio se compromete a cumplir con las siguientes obligaciones:", 0, 'J');

$pdf->Ln(2);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "3.1.1  Reportar a la Coordinación Zonal XXXXXX y  Subsecretaría de Formación Técnica y Tecnológica de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, los horarios y días de uso de las instalaciones que fueron consensuadas con la ENTIDAD RECEPTORA para su registro y seguimiento, en un plazo no mayor a cinco (5) días contados a partir del inicio de cada ciclo académico.
3.1.2  Velar para que los estudiantes se sometan a las políticas, directrices reglamentos e instrucciones de la ENTIDAD RECEPTORA y del Instituto.
3.1.3  Garantizar el buen uso de las instalaciones y equipamiento, que proporcione la ENTIDAD RECEPTORA.
3.1.4  En caso de producirse algún daño por el manejo negligente, responderá por los daños a los bienes entregados salvo fuerza mayor o caso fortuito.
3.1.5  Restituir los bienes muebles e inmuebles en las mismas condiciones determinadas en las matrices adjuntas al Informe Técnico-Académico de Viabilidad de Suscripción del Convenio No. XXXXXXXXX, de XX de XXXXXXX de 2020, considerándose para el efecto el deterioro natural de los bienes que podrían tener por el paso del tiempo.
3.1.6  Realizar el debido seguimiento a los estudiantes que se encuentren cumpliendo y desarrollando actividades de carácter teórico práctico en las instalaciones de la ENTIDAD RECEPTORA. 
3.1.7  XXXXXX
", 0, 'J');

$pdf->Ln(5);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, '3.2 OBLIGACIONES DE LA ENTIDAD RECEPTORA:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(5);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "
XXXXXXX propietario de XXXXXXXXX en el marco de este convenio se compromete a cumplir con las siguientes obligaciones:", 0, 'J');

$pdf->Ln(2);

//............


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "3.2.1  Permitir el acceso de los estudiantes y docentes del INSTITUTO a las áreas: (recreativas y espacios verdes, bibliotecas, laboratorios/talleres etc ).
3.2.2  Permitir el uso de (equipamiento/infraestructura/mobiliario, etc) que existe en las instalaciones descritas anteriormente para que se realicen talleres y/o laboratorios de las asignaturas teóricas prácticas y otras actividades inherentes al proceso de formación teórico-práctica con los estudiantes de la(s) carrera(s) de Tecnología xxxxxxxx del Instituto xxxxxxxxxxx
3.2.3  Coordinar a través de (cargo de la persona delegada por la entidad) la programación de horarios y control de actividades operativas  del uso de sus instalaciones con el docente/ tutor académico que asigne el INSTITUTO para cada ciclo académico.
", 0, 'J');

$pdf->Ln(5);
//............

$pdf->AddPage();
$pdf->Ln(35);
//...........


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "3.2.4  Facilitar el uso de baterías sanitarias a los estudiantes y docentes en los horarios que establezcan las partes.
3.2.5  Facilitar el personal idóneo para que realice las tareas de limpieza y seguridad de las instalaciones que se usen en el marco del presente convenio.
", 0, 'J');

$pdf->Ln(5);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA CUARTA. - PLAZO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(7);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5.8, "El plazo total para la ejecución del presente Convenio es de xxx (x) años contados a partir de la fecha de suscripción, mismo que podrá ser renovado por consentimiento previo de las partes de manera escrita con al menos quince (15) días de anticipación a la fecha de terminación del convenio, para lo cual las partes suscribirán el instrumento pertinente prorrogando el mismo y estableciendo las nuevas condiciones de existir.", 0, 'J');

$pdf->Ln(7);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA QUINTA.- RÉGIMEN FINANCIERO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(7);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5.8, "Debido a la naturaleza del Convenio, la presente cooperación no generará obligaciones financieras recíprocas, erogación alguna ni transferencias de recursos económicos entre las partes; las erogaciones generadas por las acciones ejecutadas por el cumplimiento de las obligaciones contraídas en el presente instrumento serán asumidas con cargo a la Institución que las ejecute.", 0, 'J');

$pdf->Ln(7);
//................

$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SEXTA.- MODIFICACIONES ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);


//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5.8, "Los términos del presente Convenio podrán ser modificados, ampliados o reformados de mutuo acuerdo durante su vigencia, siempre que dichos cambios no alteren su objeto ni desnaturalicen su contenido, y que dichas modificaciones sean justificadas técnica, legal o académicamente; las cuales deben encontrarse ceñidas a la Constitución y la Ley, para lo cual, LAS PARTES, suscribirán los instrumentos que sean necesarios.

Ninguna modificación podrá ir en detrimento de los derechos de los estudiantes que se encuentren vinculados a la ENTIDAD RECEPTORA.
", 0, 'J');

$pdf->Ln(8);

//...............

$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SÉPTIMA.- ADMINISTRACIÓN DEL CONVENIO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Para realizar la coordinación, ejecución y seguimiento del presente Convenio,  las partes designan a los funcionarios que a continuación se detallan para que actúen en calidad de administradores, quienes velarán por el cabal y la oportuna ejecución de todas y cada una de las obligaciones derivadas del mismo, así como de su seguimiento y coordinación, debiendo informar por escrito a las máximas autoridades de las instituciones comparecientes mediante informes semestrales por cada ciclo académico respecto al cumplimiento del objeto del presente instrumento: ", 0, 'J');

$pdf->Ln(5);
//................
$pdf->AddPage();
$pdf->Ln(35);
//...........
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Por el INSTITUTO se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)
Por la ENTIDAD RECEPTORA se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)

Los administradores del presente convenio podrán ser cambiados en cualquier momento, bastando para ello la simple notificación de la máxima autoridad o su delegado y se cursará a las  partes la respectiva comunicación; sin que para el efecto, sea necesaria la modificación del texto convencional; para lo cual el o los administradores salientes deberán presentar un informe de su gestión dirigido a las máximas autoridades o sus delegados y la entrega recepción de actividades, para que el o los nuevos Administradores continúen con las mismas; informe que deberá ser presentado en un tiempo no mayor a 30 días.

Los Administradores del Convenio a la conclusión del plazo, presentarán un informe consolidado sobre la  ejecución del Convenio.

En caso de presentarse cambios del personal asignado para la administración, serán designados con la debida antelación, a fin de no interrumpir la ejecución y el plazo del convenio; para lo cual el o los administradores salientes deberán presentar un informe de su gestión y la entrega recepción de actividades para que el o los nuevos delegados continúen con las mismas.
 ", 0, 'J');

$pdf->Ln(1);
//..........

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA OCTAVA.- TERMINACIÓN DEL CONVENIO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(5);

//.........

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "El presente Convenio terminará por una de las siguientes causas:", 0, 'J');

$pdf->Ln(5);
//..........

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "1. Por vencimiento del plazo;
2. Por mutuo acuerdo de las partes, siempre que se evidencie que no pueda continuarse su ejecución por motivos técnicos, económicos, legales, sociales o físicos para lo cual celebrarán una acta de terminación por mutuo acuerdo. La parte que por los motivos antes expuestos no pudiere continuar con la ejecución del presente Convenio, deberá poner en conocimiento de su contraparte su intención de dar por terminado el convenio por mutuo  acuerdo con al menos  treinta (30) días de antelación a la fecha de terminación del convenio;
3. Por terminación unilateral por incumplimiento de una de las partes, lo cual deberá ser técnicamente y legalmente justificado por quien lo alegaré; y, 
4. Por fuerza mayor o caso fortuito debidamente justificado por la parte que lo alegare, y notificado dentro del plazo de cuarenta y ocho (48) horas de ocurrido el hecho. En estos casos, se suscribirá la respectiva acta de terminación en el que se determinarán las causas descritas como causales de terminación del Convenio. Se considerarán causas de fuerza mayor o caso fortuito las establecidas en el artículo 30 del Código Civil.

La terminación del presente convenio, por cualquiera de las causales antes señaladas, no afectará la conclusión del objeto y las obligaciones que las partes hubieren adquirido y que se encuentren ejecutando en ese momento, salvo que éstas lo acuerden de otra forma. No obstante, la terminación del presente convenio no implicará el pago de indemnización alguna ni entre las partes ni entre éstas y los estudiantes o terceros.
", 0, 'J');


//................

$pdf->AddPage();
$pdf->Ln(35);
//............

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA NOVENA.- INEXISTENCIA DE RELACIÓN LABORAL:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);

//............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Por la naturaleza del presente Convenio, se entiende que ninguna de las partes comparecientes, adquieren relación laboral ni de dependencia respecto del personal de la otra institución que trabaje en el cumplimiento de este instrumento.

De igual manera, la ENTIDAD RECEPTORA no tendrá relación laboral ni obligaciones laborales con los estudiantes que se vinculen a ella, ni éstos tendrán subordinación ni dependencia laboral para con la ENTIDAD RECEPTORA, se aclara que la relación estudiante-entidad receptora es únicamente de formación académica.", 0, 'J');

$pdf->Ln(5);
//............

//............

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA.- CONTROVERSIAS: ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(5);

//............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "
Basándose en la buena fe como fundamental para la ejecución de este convenio para el caso de controversias derivadas de su interpretación, aplicación, ejecución o terminación, las partes aceptan solucionarlas de manera amistosa a través de las máximas autoridades de las instituciones comparecientes; de no ser posible una solución amistosa, las controversias producto del presente Convenio se ventilarán ante el Centro de Mediación de la Procuraduría General del Estado, con sede en la ciudad de xxxxxx., provincia de xxxxxxxxx y  de persistir las controversias, las partes se someterán a lo establecido en el Código Orgánico General de Procesos siendo capaz para conocer las mismas xxxxxx.
", 0, 'J');

$pdf->Ln(5);
//............
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA PRIMERA.- DOCUMENTOS HABILITANTES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);

//............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Forman parte integrante del contrato los siguientes documentos:
1.  Los que acreditan la calidad y capacidad de los comparecientes; y,
2.  Los documentos a que se hace referencia en la cláusula de antecedentes.
", 0, 'J');

$pdf->Ln(5);
//............

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA SEGUNDA. - COMUNICACIONES Y NOTIFICACIONES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);

//............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "
Las partes fijan las siguientes direcciones como su domicilio para notificaciones y recepción documentación:", 0, 'J');

$pdf->Ln(5);

//................


//.............
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

//................

$pdf->AddPage();
$pdf->Ln(35);


//.................
$pdf->SetFont('','');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Para la ejecución del Convenio, las notificaciones serán realizadas por correo electrónico (e-mail), por escrito o cualquier otro medio que permita dejar constancia de la notificación o en su caso, de su recepción. Las partes están obligadas a notificar el cambio de domicilio.
", 0, 'J');

$pdf->Ln(5);
//.................

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA TERCERA.- RATIFICACIÓN:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);


//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Libre y voluntariamente, previo el cumplimiento de los requisitos de Ley, los comparecientes expresan su aceptación a todo lo convenido en el presente instrumento, a cuyas estipulaciones se someten, por convenir a sus legítimos intereses institucionales, en fe de lo cual proceden a suscribirlo en tres (3) ejemplares de igual tenor y valor.", 0, 'J');
$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dado en la ciudad de XXXXXXX, a los XX días del mes de XXXXX de 202X.", 0, 'J');
$pdf->Ln(5);
//.................

//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Las partes están obligadas a notificar el cambio de domicilio.", 0, 'J');

$pdf->Ln(10);

//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);
$pdf->SetFont('','B');
$pdf->MultiCell(70, 5, "POR DELEGACIÓN DEL SECRETARIO DE EDUCACIÓN SUPERIOR, CIENCIA, TECNOLOGÍA E INNOVACIÓN", 0, 'J');

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








$pdf->Output();




ob_end_flush();
  ?>