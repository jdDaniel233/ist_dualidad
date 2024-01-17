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
$pdf->MultiCell($w[$i], 6, "PP- XXX-XXX-XXXX
CONVENIO DE PRÁCTICAS PREPROFESIONALES ENTRE EL INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXX Y XXXXXXXXXXXX.
", 0, 'C');
$pdf->Ln(0);
$pdf->SetFont('','');


$pdf->MultiCell(185, 6, "Comparecen a la celebración del presente Convenio, por una parte el INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXXXX, legalmente representado por el XXXXXXXXXXXXX , en su calidad de Rector, de conformidad con lo que establecido en la Resolución No. XXXXX y Acción de Personal No. Xxx de xx de xxx de xxx; delegado por el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, para suscribir el presente instrumento conforme al Acuerdo No. 2020-048 de 15 de mayo de 2020, a quien en adelante para los efectos del presente instrumento se denominará  “INSTITUTO”; y, por otra parte la XXXXXXX, con RUC No. XXXXXXXXXXX, representada legalmente por XXXXXXXXXXXXXXXXXXX en calidad de Gerente General de XXXXXXXXX, a quien en adelante y para los efectos del presente instrumento se denominará “ENTIDAD RECEPTORA”.
Las partes convienen en celebrar el presente Convenio de Prácticas Preprofesionales libre y voluntariamente, por sus propios y personales derechos y obligaciones y por los que representan, en pleno uso de su capacidad legal para contratar y obligarse, al tenor de las siguientes cláusulas:
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

$pdf->MultiCell(170, 5, "1. El artículo 350 de la Constitución de la República del Ecuador, establece que: “El sistema de educación superior tiene como finalidad la formación académica y profesional con visión científica y humanista; la investigación científica y tecnológica; la innovación, promoción, desarrollo y difusión de los saberes y las culturas; la construcción de soluciones para los problemas del país, en relación con los objetivos del régimen de desarrollo”;

2. El artículo 352 de la Carta Suprema dispone que: El sistema de educación superior estará integrado por universidades y escuelas politécnicas; institutos superiores técnicos, tecnológicos y pedagógicos; y, conservatorios de música y artes, debidamente acreditados y evaluados. Estas instituciones, sean públicas o particulares, no tendrán fines de lucro”;

3. El artículo 3 de la Ley Orgánica de Educación Superior, referente a los fines de la Educación Superior señala: “La educación superior de carácter humanista, intercultural y científica constituye un derecho de las personas y un bien público social que, de conformidad con la Constitución de la República, responderá al interés público y no estará al servicio de intereses individuales y corporativos”;

4. El artículo 87 de la Ley Orgánica de Educación Superior, determina como requisito previo a la obtención del grado académico “los y las estudiantes deberán acreditar servicios a la comunidad mediante programas, proyectos de vinculación con la 
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

$pdf->MultiCell(170, 5, "sociedad, prácticas o pasantías pre profesionales con el debido acompañamiento pedagógico, en los campos de su especialidad”;
 
5. El artículo 182 de la Ley Orgánica de Educación Superior dispone que: “La Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, es el órgano que tiene por objeto ejercer la rectoría de la política pública de educación superior y coordinar acciones entre la Función Ejecutiva y las instituciones del Sistema de Educación Superior. Estará dirigida por el Secretario Nacional de Educación Superior, Ciencia, Tecnología e Innovación de Educación Superior, designado por el Presidente de la República. Esta Secretaría Nacional contará con el personal necesario para su funcionamiento”;

6. Artículo 42 del Reglamento de Régimen Académico expedido por el Consejo de Educación Superior mediante Resolución RPC-SE-08-No.023-2022 vigente desde el 16 de septiembre de 2022, última reforma vigente desde el 10 de marzo del 2023 con Resolución RPC-SE-03-No. 008-2023, mediante el cual se determina que “Las prácticas preprofesionales en las carreras de tercer nivel son actividades de aprendizaje orientadas a la aplicación de conocimientos y/o al desarrollo de competencias profesionales. Estas prácticas se realizarán en entornos organizacionales, institucionales, empresariales, comunitarios u otros relacionados al ámbito profesional de la carrera, públicos o privados, nacionales o internacionales.
", 0, 'J');

$pdf->Ln();


//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 25);

$pdf->MultiCell(160, 5, "Las prácticas preprofesionales se subdividen en dos (2) componentes:
  a) Prácticas laborales, de naturaleza profesional en contextos reales de                                     aplicación; y,
  b) Prácticas de servicio comunitario, cuya naturaleza es la atención a personas, grupos o contextos de vulnerabilidad.

 Las prácticas preprofesionales podrán realizarse a lo largo de toda la formación de la carrera, de forma continua o no; mediante planes, programas y/o proyectos cuyo alcance será definido por la IES. Las prácticas deberán ser coherentes con los resultados de aprendizaje y el perfil de egreso de las carreras; y, cada IES, en ejercicio de su autonomía responsable, determinará los mecanismos y requerimientos para su registro y evaluación.
Las prácticas preprofesionales no generan ningún vínculo u obligación laboral. La experiencia laboral podrá ser reconocida como práctica preprofesional, incluidas las horas de servicios a la comunidad, siempre y cuando las actividades realizadas resulten pertinentes al perfil de egreso, lo cual debe ser validado por evidencias definidas por las IES.
Cuando las prácticas preprofesionales se realicen bajo la figura de pasantías serán reguladas por la normativa aplicable a las pasantías, sin modificar el carácter y los efectos académicos de las mismas”.
", 0, 'J');

$pdf->Ln();

//.........
$pdf->AddPage();
$pdf->Ln(35);
//...........

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5.4, "7. El artículo 44 del mencionado Reglamento establece para la realización de las prácticas preprofesionales o pasantías que: “Los planes, programas y/o proyectos para las prácticas preprofesionales de cada carrera podrán ser desarrollados contando con la participación de los diferentes sectores de la sociedad, según los mecanismos establecidos por cada IES. Las prácticas preprofesionales pueden realizarse dentro o fuera de la IES, siempre que sean de carácter formativo y supongan la aplicación o integración de conocimientos o competencias profesionales desarrollados a lo largo del proceso de enseñanza - aprendizaje. La institución receptora emitirá un informe periódico o final sobre la ejecución de las prácticas. Cuando las prácticas sean académicas, estas requerirán de un responsable, para lo cual la IES mantendrá un convenio u otros instrumentos con la entidad receptora. En el caso de que el proceso de prácticas en la institución receptora no se ajuste a lo establecido en el plan de trabajo, la IES deberá establecer los correctivos correspondientes. Los planes, programas y/o proyectos de prácticas preprofesionales (incluyendo las de servicio comunitario) deberán ser coordinados, monitoreados o evaluados por personal académico o personal de apoyo académico, de acuerdo con la planificación de la IES”.
", 0, 'J');

$pdf->Ln();

//............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->SetFont('','');
$pdf->MultiCell(170, 5.4, "8. A través de Acuerdo No. 2012-065 publicado en el Registro Oficial No. 834 de 20 de noviembre de 2012, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, declaró a:“(…) los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores de música públicos, como entidades operativas desconcentradas, de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (…)”; entre las cuales consta el Instituto Tecnológico Superior XXXXXXXXX;

9. A través del Acuerdo No. 2020-048, de 15 de mayo de 2020, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, determinó a favor de los rectores y rectoras de los Institutos Superiores Técnicos, Tecnológicos, Pedagógicos, de Artes y los Conservatorios Superiores Públicos; entre otras atribuciones y obligaciones las siguientes: “(…)la suscripción, modificación y/o extinción de los convenios que tengan por objeto lo siguiente: 1. La realización de programas de pasantías y/o prácticas pre profesionales; 2. La implementación de carreras de modalidad dual que garanticen la gestión del aprendizaje práctico con tutorías profesionales y académicas integrales in situ; 3. El uso gratuito de instalaciones para beneficio de institutos públicos; 4. La implementación de proyectos de vinculación con la sociedad; 5. La cooperación entre los mencionados institutos y las diferentes personas naturales y jurídicas nacionales; y, 6. La conformación y la participación en redes académicas internacionales, previa aprobación del Consejo de Educación Superior, las cuales estarán dirigidas a proyectos académicos que contemplen programas académicos, investigación y educación continua, con la finalidad de fortalecer la educación técnica y tecnológica pública del Ecuador. El Consejo de Educación Superior será el encargado de  supervisar la ejecución de dichos proyectos. (…) Artículo 5.- “Los rectores y rectoras de los institutos superiores 
", 0, 'J');

$pdf->Ln();
//............
//............
//............
$pdf->AddPage();
$pdf->Ln(34);
//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 4.8, "públicos, deberán usar obligatoriamente las plantillas y modelos de convenios autorizadas por la Coordinación General de Asesoría  Jurídica de esta Secretaría de Estado, para la suscripción de los actos jurídicos mencionados en el artículo 1 del presente Acuerdo, los cuales deberán ser remitidos oportunamente a las Coordinaciones Zonales para su correspondiente actualización”.

10. El Instituto Tecnológico Superior XXXXXXXX, ubicado en la provincia de XXXXXXXXX es una Institución de Educación Superior Pública con licencia de funcionamiento otorgada mediante Acuerdo No. XXX de fecha xx de xx de xx, conferido por xxxxxxxxxxxx, que se dedica a la formación de profesionales de nivel tecnológico;

11. Mediante Acción de Personal No. XXXXXXXXXXX, de fecha XX de XXXX de 202X, la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación, otorgó el nombramiento a XXXXXXXXXXXXXXXX, portador de la cédula de ciudadanía No. XXXXXXXXXX en calidad de Rector(a) del Instituto Tecnológico Superior XXXXXXX, posesionado en sus funciones mediante acto administrativo por el periodo comprendido entre el 20XX y el 20XX;

12. El XXXXXXX (Nombre de la empresa/ persona natural), con Registro Único de Contribuyentes No. XXXXXXXXXXX es una persona xxxxxxx (natural o jurídica); con domicilio tributario en el cantón xxxxxxx, Provincia de xxxxxxxxx, Parroquia xxxxxxx, Ciudadela xxxxxxxxxxxxx, Barrio xxxxxxxxxxx, Calle xxxxxxxxxxx , Número: xxxxxxxxxx, que se dedica entre otras actividades a: xxxxxxxxxxxxxxxxx desde el xx de xxxxxxx de 202X, bajo la razón social xxxxxxxxxxxxxxxxxxxxxxxx;

13. Mediante documento No. XXXXXX-xx-2020-xxxxx-M de fecha xx de xxxxxxxxx del 2020, el Rector del Instituto Tecnológico Superior Xxxxxxxxx, remitió para aprobación del Órgano Colegiado Superior, el Informe Técnico de Viabilidad No. xxxxxxxxxxxxxxxxx de fecha xx de xxxxxxx de 2020, cuyas conclusiones y recomendaciones son las siguientes: xxxxxxxxxxxxxxxxxxxxxxxxxxxx.
0
14. Mediante Informe Técnico - Académico de Viabilidad para la firma de Convenio Nro. XXX-XXX-XXX-XXX-XXX de fecha XX de XXX de XXX, se recomienda que: “XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX”

15. Mediante Resolución/Acta No. XXXX-xx-2020-xxxxx-M de fecha xx de xxxxxxxxx del 2020, del Órgano Colegiado Superior (OCS) del Instituto Tecnológico Superior Xxxxxxxxx, aprobó el informe técnico de viabilidad No. xxxxxxxxxxxxxxxxx  de  prácticas preprofesionales.

16. Con los antecedentes expuestos, el INSTITUTO y la ENTIDAD RECEPTORA acuerdan suscribir el presente Convenio para viabilizar que los estudiantes de las carreras de Tecnología Vigentes, realicen sus prácticas preprofesionales, de conformidad a lo determinado en el artículo 87 de la Ley Orgánica de Educación Superior vigente.
", 0, 'J');

$pdf->Ln();

//............
$pdf->AddPage();
$pdf->Ln(35);
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

$pdf->MultiCell(185, 6, "El objeto del presente Convenio es viabilizar las prácticas preprofesionales a los estudiantes de la(s) carrera(s) de Tecnología en xxxxxxxxxxx, ofertada(s) por el INSTITUTO, en las instalaciones de la ENTIDAD RECEPTORA de conformidad a lo determinado en el artículo 87 de la Ley Orgánica de Educación Superior, con la finalidad de que cumplan con el requisito de titulación exigido por la normativa de educación superior vigente.", 0, 'J');

$pdf->Ln(8);

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA TERCERA. - OBLIGACIÓN CONJUNTA:', 0, 0, 'L', true);
$pdf->SetFont('', '');

$pdf->SetFont('','');
$pdf->Ln(8);

//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "Las partes de común acuerdo diseñarán un plan de actividades académicas que desarrollarán los estudiantes que se vinculen a la ENTIDAD RECEPTORA de acuerdo al número de horas prácticas establecidas en la malla curricular de la(s) carrera(s) de Tecnología en xxxxxxxxxxx, dicho plan cubrirá la aplicación de conocimientos, desarrollo de destrezas y habilidades que se consideren necesarias para un adecuado desempeño de su futura profesión.", 0, 'J');

$pdf->Ln(10);
//................

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA CUARTA. - OBLIGACIONES DE LAS PARTES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->SetFont('','');
$pdf->Ln();

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, '4.1 DEL INSTITUTO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "a) Designar a los estudiantes de las carreras de Tecnología en xxxxxxxxx, a fin de que accedan a las prácticas preprofesionales en las instalaciones donde ejerza su actividad económica la ENTIDAD RECEPTORA remitiendo para el efecto la base de datos con la información que acuerden las partes;
b) Planificar, monitorear, y evaluar las prácticas preprofesionales en coordinación con el tutor que designe la ENTIDAD RECEPTORA;
c) Designar un tutor académico de prácticas preprofesionales para realizar el debido seguimiento a los estudiantes que acoja la ENTIDAD RECEPTORA; 
d) Velar para que los estudiantes de la(s) carrera (s) de Tecnología xxxxxxxxxxx, que realicen sus prácticas preprofesionales se sometan a las políticas, directrices, reglamentos e instrucciones del INSTITUTO y de la ENTIDAD RECEPTORA;
f) Registrar el informe de evaluación y el certificado cumplimiento de las prácticas preprofesionales en el portafolio académico de los estudiantes que se vinculen a la ENTIDAD RECEPTORA; 
g) Custodiar y archivar los planes de actividades académicas que deben cumplir los estudiantes de prácticas preprofesionales en la ENTIDAD RECEPTORA en la unidad de prácticas preprofesionales para su debido seguimiento.
", 0, 'J');

$pdf->Ln(5);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, '4.2 DE LA ENTIDAD RECEPTORA:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "a) El número de estudiantes que acoja la ENTIDAD RECEPTORA se determinará cada inicio del ciclo académico según su capacidad;", 0, 'J');
$pdf->Ln(0);
//................

$pdf->AddPage();
$pdf->Ln(35);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "b) Garantizar que los estudiantes de la(s) carrera(s) de Tecnología en xxxxxxxxxxx, efectúen sus prácticas preprofesionales en las distintas unidades de la ENTIDAD RECEPTORA conforme al plan de actividades académicas que diseñen las partes;
c) Emitir un informe de evaluación a los estudiantes que acoja para que el Instituto lo incorpore en su portafolio académico;

d) Emitir los certificados correspondientes a los estudiantes que hayan cumplido exitosamente con el periodo de prácticas preprofesionales en sus instalaciones; y,
e) Si uno de los estudiantes que se encuentre cursando sus práctica preprofesionales en la ENTIDAD RECEPTORA, actúa con negligencia, dolo, falta de probidad, conducta inmoral, inoperancia, cometiera actos ilícitos o infracciones, y que por ellos la ENTIDAD RECEPTORA, podría verse de alguna forma perjudicada; esta, podrá solicitar la separación inmediata del estudiante para evitar mayores riesgos o perjuicios, remitiendo para el efecto un informe con los hechos acontecidos y las pruebas pertinentes. El debido proceso disciplinario se realizará en el INSTITUTO.
", 0, 'J');
$pdf->Ln(5);

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA QUINTA. - PLAZO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(7);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5.8, "El plazo total para la ejecución del presente Convenio es de xxxxx (x) años contados a partir de la fecha de suscripción, mismo que podrá ser renovado previo consentimiento de las partes de manera escrita con un mínimo de quince (15) días de anticipación a la fecha de terminación, para lo cual las partes deberán suscribir el instrumento pertinente prorrogando el mismo y estableciendo, de existir, las nuevas condiciones.", 0, 'J');

$pdf->Ln(7);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SEXTA.- RÉGIMEN FINANCIERO:', 0, 0, 'L', true);
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
$pdf->Cell(145, 7, 'CLÁUSULA SÉPTIMA. - MODIFICACIONES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);


//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5.8, "Los términos de este convenio podrán ser modificados, ampliados o reformados de mutuo acuerdo durante su vigencia, siempre que dichas modificaciones no alteren su objeto ni desnaturalicen su contenido; y, sean justificadas técnica, legal o académicamente; para cuyo efecto las PARTES suscribirán el instrumento jurídico pertinente.

Ninguna modificación podrá ir en detrimento de los derechos de los estudiantes que se encuentren vinculados en la ENTIDAD RECEPTORA. 
", 0, 'J');

$pdf->Ln(8);
//................

$pdf->AddPage();
$pdf->Ln(35);

//...............

$pdf->SetFont('','B');
$pdf->Cell(145, 7, '
CLÁUSULA OCTAVA. - ADMINISTRACIÓN DEL CONVENIO', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Para realizar la coordinación, ejecución y seguimiento del presente convenio, las partes designan a los funcionarios que a continuación se detallan para que actúen en calidad de administradores, quienes velarán por  la cabal y oportuna ejecución de todas y cada una de las obligaciones derivadas del mismo, así como de su seguimiento y coordinación, debiendo informar por escrito a la máxima  autoridad del INSTITUTO y al representante de la ENTIDAD RECEPTORA, mediante informes semestrales por cada ciclo académico respecto al cumplimiento del objeto del presente instrumento:

Por el INSTITUTO se designa a xxxxxxxxxxxxxxxxxx (de preferencia designar al cargo y no a la persona)
Por la ENTIDAD RECEPTORA se designa a xxxxxxxxxxxxxxxx(de preferencia designar al cargo y no a la persona)
    
Los Administradores del Convenio a la conclusión del plazo, presentarán un informe de ejecución del Convenio.
En caso de presentarse cambios del personal asignado para la administración, estos serán designados con la debida antelación, notificando a la parte contraria de manera inmediata, y sin que sea necesaria la modificación del texto convencional; a fin de no interrumpir la ejecución y el plazo del convenio; para lo cual el o los administradores salientes deberán presentar un informe de su gestión y la entrega recepción de actividades.
    ", 0, 'J');

$pdf->Ln(5);
//................


$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA NOVENA. - TERMINACIÓN DEL CONVENIO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(5);


//................

$pdf->Cell(145, 6, 'El presente Convenio terminará por una de las siguientes causas:', 0, 0, 'L', true);
$pdf->Ln(8);

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);
$pdf->MultiCell(170, 5, "1. Por vencimiento del plazo;
2. Por cumplimiento del objeto del convenio;
3. Por mutuo acuerdo de las partes, siempre que se evidencie que no pueda continuar su ejecución por motivos técnicos, económicos, legales, sociales o físicos para lo cual celebrarán una acta de terminación por mutuo acuerdo. La parte que por los motivos antes expuestos no pudiere continuar con la ejecución del presente Convenio, deberá poner en conocimiento de la contraparte su intención de dar por terminado el convenio por mutuo acuerdo con treinta (30) días de antelación a la fecha en que desee dejar sin efecto el mismo;
4. Por terminación unilateral por incumplimiento de una de las partes, lo cual deberá ser técnicamente y legalmente justificado por quien lo alegaré; y, 
5. Por fuerza mayor o caso fortuito debidamente justificado por la parte que lo alegare, y notificado dentro del plazo de cuarenta y ocho (48) horas de ocurrido el hecho. En estos casos, se suscribirá la respectiva acta de terminación en el que se determinarán las causas descritas como causales de terminación del Convenio. Se considerarán causas de fuerza mayor o caso fortuito las establecidas en el artículo 30 del Código Civil.
", 0, 'J');

//................
$pdf->AddPage();
$pdf->Ln(35);
//................


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "La terminación del presente Convenio, por cualquiera de las causales antes señaladas, no afectará la conclusión del objeto y las obligaciones que las partes hubieren adquirido y que se encuentren ejecutando en ese momento, salvo que éstas lo acuerden de otra forma. No obstante, la terminación del presente convenio no implicará el pago de indemnización alguna ni entre las partes ni entre éstas y los estudiantes o terceros.", 0, 'J');

$pdf->Ln(5);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA.- INEXISTENCIA DE RELACIÓN LABORAL:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);


//................


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Por la naturaleza del presente Convenio, se entiende que ninguna de las partes comparecientes, adquieren relación laboral ni de dependencia respecto del personal de la otra institución que trabaje en el cumplimiento de este instrumento.
De igual manera, la ENTIDAD RECEPTORA no tendrá relación laboral ni obligaciones laborales con los estudiantes que se vinculen a ella, ni éstos tendrán subordinación ni dependencia laboral para con la ENTIDAD RECEPTORA, se aclara que la relación estudiante-entidad receptora es únicamente de formación académica.
", 0, 'J');

$pdf->Ln(5);


//................

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA PRIMERA.- CONTROVERSIAS: ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);

//.................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Basándose en la buena fe como fundamental para la ejecución de este convenio para el caso de controversias derivadas de su interpretación, aplicación, ejecución o terminación, las partes aceptan solucionarlas de manera amistosa a través de las máximas autoridades de las instituciones comparecientes; de no ser posible una solución amistosa, las controversias producto del presente Convenio se ventilarán ante el Centro de Mediación de la Procuraduría General del Estado, con sede en la ciudad de xxxxxx., provincia de xxxxxxx; y, a la falta de acuerdo se ventilarán las controversias de conformidad con lo establecido en el Código Orgánico General de Procesos (COGEP); siendo competente para conocer dichas controversias el/la Tribunal de lo Contencioso Administrativo o la Unidad Judicial de lo Contencioso Administrativo.", 0, 'J');

$pdf->Ln(5);

//.................

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA SEGUNDA. - DOCUMENTOS HABILITANTES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);
//.................
$pdf->Cell(145, 6, 'Forman parte integrante del convenio los siguientes documentos:', 0, 0, 'L', true);
$pdf->Ln(5);
//.................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(185, 5, "a) Los que acreditan la calidad y capacidad de los comparecientes; y,
b) Los documentos a que se hace referencia en la cláusula de antecedentes.
", 0, 'J');

$pdf->Ln(5);


//.................


$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA TERCERA. - COMUNICACIONES Y NOTIFICACIONES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);
//.................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Las partes fijan las siguientes direcciones como su domicilio para notificaciones y recepción documentación:", 0, 'J');


//.................
$pdf->AddPage();
$pdf->Ln(35);
//.................

//.............
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "INSTITUTO TECNOLÓGICO SUPERIOR XX", 0, 'J');

$pdf->Ln(5);
//.................


$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dirección: xxxxxxxxx", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Ciudad-Provincia: xxxxxx - xxxxx", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Teléfono: xxxxxxxxxxxxxx ext: xxxxx", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Mail: xxxxxxxxxx", 0, 'J');

$pdf->Ln(10);
//.................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Xxxxxxxxxxxxxxxxxx (Nombre de la Persona Natural o empresa)", 0, 'J');

$pdf->Ln(5);

//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dirección: xxxxxxxxx", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Ciudad-Provincia: xxxxxx - xxxxx", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Teléfono: xxxxxxxxxxxxxx ext: xxxxx", 0, 'J');

$pdf->Ln(5);
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Mail: xxxxxxxxxx", 0, 'J');

$pdf->Ln(5);
$pdf->SetFont('','');
//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Las partes están obligadas a notificar el cambio de domicilio.", 0, 'J');

$pdf->Ln(10);
//.................

$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "CLÁUSULA DÉCIMA CUARTA. - ACEPTACIÓN:", 0, 'J');

$pdf->Ln(5);
$pdf->SetFont('','');

//.................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Libre y voluntariamente, previo el cumplimiento de los requisitos de Ley, los comparecientes expresan su aceptación a todo lo convenido en el presente instrumento, a cuyas estipulaciones se someten, por convenir a sus legítimos intereses institucionales, en fe de lo cual proceden a suscribirlo en cuatro (4) ejemplares de igual tenor y valor jurídico.", 0, 'J');

$pdf->Ln(5);
//.............
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Dado, en la ciudad de xxxxxxxx a los XXX días del mes de XXX de 202X.  ", 0, 'J');

$pdf->Ln(5);
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
$pdf->AddPage();
$pdf->Ln(35);
//............

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