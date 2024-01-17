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
$pdf->MultiCell($w[$i], 6, "FD- XXXXXXXXXX
CONVENIO DE FORMACIÓN DUAL ENTRE EL INSTITUTO TECNOLÓGICO SUPERIOR XXXXXXXXXX Y LA EMPRESA XXXXXXXXXXXXXX
", 0, 'C');
$pdf->Ln(0);
$pdf->SetFont('','');


$pdf->MultiCell(185, 6, "Comparecen a la celebración del presente Convenio, por una parte, el Instituto Tecnológico Superior XXXXXXXXXXXX, legalmente representado por el XXXXXXXXXXXXXX, en su calidad de Rector, de conformidad con lo establecido en la Resolución No. SENESCYT-XXXXXXXXXXXXXXXXXXXX, de XXXXXXXXXX y en la Acción de Personal No. XXXXXXXX, de XXXXXXXXXX, delegado por el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, para suscribir el presente instrumento, conforme determina el conforme Acuerdo No. 2020-048 de 15 de mayo de 2020, a quién en adelante y para los fines del presente instrumento se denominará como el “INSTITUTO”; y, por otra parte la XXXXXXXXXX, con RUC No. XXXXXXXXX, representada legalmente por XXXXXXXXXXXXXX en calidad de XXXXXXXXXX, a quien en adelante y para los fines del presente instrumento se denominará “ENTIDAD RECEPTORA”.

Las partes convienen en celebrar el presente Convenio de Formación Dual, libre y voluntariamente, por sus propios y personales derechos y obligaciones y por los que representan, en pleno uso de su capacidad legal para contratar y obligarse, al tenor de las siguientes cláusulas: 
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
$pdf->SetY($pdf->GetY() + 3);
$pdf->SetX($pdf->GetX() + 25);
$pdf->SetFont('Arial', 'I', 11);

$pdf->MultiCell(160, 5, "1. El artículo 350 de la Constitución establece que: “El sistema de educación superior tiene como finalidad la formación académica y profesional con visión científica y humanista; la investigación científica y tecnológica; la innovación, promoción, desarrollo y difusión de los saberes y las culturas; la construcción de soluciones para los problemas del país, en relación con los objetivos del régimen de desarrollo”.

2. El artículo 352 de la Carta Suprema dispone que el Sistema de Educación Superior estará integrado por universidades y escuelas politécnicas; institutos superiores técnicos, tecnológicos y pedagógicos; y, conservatorios superiores de música y artes, debidamente acreditados y evaluados. Estas instituciones, sean públicas o particulares, no tendrán fines de lucro.

3. El artículo 3 de la Ley Orgánica de Educación Superior, referente a los fines de la Educación Superior, señala: “La educación superior de carácter humanista, intercultural y científica constituye un derecho de las personas y un bien público social que, de conformidad con la Constitución de la República, responderá al interés público y no estará al servicio de intereses individuales y corporativos”.", 0, 'J');

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

$pdf->MultiCell(170, 5, "4. El literal a) del artículo 118 de la Ley Orgánica de Educación Superior, determina que el nivel técnico o tecnológico superior se encuentra: “(…) orientado al desarrollo de las habilidades y destrezas relacionadas con la aplicación, adaptación e innovación tecnológica en procesos relacionados con la producción de bienes y servicios; corresponden a este nivel los títulos profesionales de técnico superior, tecnólogo superior o su equivalente y tecnólogo superior universitario o su equivalente”.

5. El artículo 182 de la Ley Orgánica de Educación Superior dispone que: “La Secretaría Nacional de Educación Superior, Ciencia, Tecnología e Innovación, es el órgano que tiene por objeto ejercer la rectoría de la política pública de educación superior y coordinar acciones entre la Función Ejecutiva y las instituciones del Sistema de Educación Superior. Estará dirigida por el Secretario Nacional de Educación Superior, Ciencia, Tecnología e Innovación de Educación Superior, designado por el Presidente de la República. Esta Secretaría Nacional contará con el personal necesario para su funcionamiento”.

6. El artículo 63 del Reglamento de Régimen Académico – expedido mediante Resolución RPC-SE-08-No.023-2022 vigente desde el 16 de septiembre de 2022, última reforma vigente desde el 10 de marzo del 2023 con Resolución RPC-SE-03-No. 008-2023, determina: “La modalidad dual es aquella en la que el proceso formativo se realiza de forma sistemática y secuencial/continua en dos entornos de aprendizaje: el académico y el laboral. La formación de carácter teórico se realiza en la institución educativa (mínimo 30%- máximo 50%) en cualquier modalidad prevista en este Reglamento, en tanto que la formación práctica se realiza en un entorno laboral específico, que puede ser creado por la IES o provisto por una entidad receptora formadora (mínimo 50%-máximo 70%), de manera complementaria y correspondiente. En caso de que la IES no cuente con laboratorios y entornos de aprendizaje específicos para la implementación de la carrera, podrá realizar convenios con empresas formadoras que proveerán los mismos en sus entornos laborales (empresa). Todo lo referente a la modalidad dual se encontrará contenido en la normativa correspondiente”.

7. El artículo 1 del Acuerdo Interinstitucional No. MDT-SENESCYT-2015-0003, de 09 de abril de 2015, suscrito entre el Ministerio del Trabajo y la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación determina: “Artículo 1.- Del Objeto.- la presente Norma tiene por objeto regular el vínculo de las y los estudiantes de los institutos superiores tecnológicos públicos con las entidades receptoras para la aplicación de la modalidad dual de formación en las carreras técnicas y tecnológicas que impartan dichos institutos.”. Asimismo, el mencionado Acuerdo norma los procedimientos a seguir para la implementación de la modalidad dual.
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

$pdf->MultiCell(170, 5, "8. El artículo 8 del Acuerdo Interinstitucional No. MDT-SENESCYT-2015-0003, en mención dispone: “(…) En los convenios específicos, los institutos superiores tecnológicos públicos y las entidades receptoras, de común acuerdo, establecerán los mecanismos adecuados para establecer la compensación a las y los estudiantes en formación dual, que podrán ser: transporte, alimentación, sistemas de becas, subsidios y beneficios adicionales. La compensación se entregará directamente al estudiante que contará con un respaldo en un documento similar a un rol de pago. Respecto a la provisión de uniformes y el equipo mínimo de protección personal, la entrega será obligatoria por parte de la entidad receptora.”.

9. El artículo 10 del Acuerdo ibídem establece que: “(…) Por la naturaleza de la modalidad educativa de formación dual, el vínculo entre las y los estudiantes con las entidades receptoras no genera ningún tipo de relación de dependencia laboral, por lo tanto no existen obligaciones de índole laboral entre las y los estudiantes de formación dual y las entidades receptoras.”.

10. A través del Acuerdo No. 2012-065 publicado en el Registro Oficial 834, de 20 de noviembre de 2012, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, declaró a: “(…) los institutos superiores técnicos, tecnológicos, pedagógicos, de artes y conservatorios superiores de música públicos, como entidades operativas desconcentradas, de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación (…)”, entre los cuales consta el Instituto Tecnológico Superior XXXXXXXXXX.

11. A través del Acuerdo No. 2020-048, de 15 de mayo de 2020, el Secretario de Educación Superior, Ciencia, Tecnología e Innovación, determinó a favor de los rectores y rectoras de los Institutos Superiores Técnicos, Tecnológicos, Pedagógicos, de Artes y los Conservatorios Superiores Públicos; entre otras atribuciones y obligaciones las siguientes: “(…)la suscripción, modificación y/o extinción de los convenios que tengan por objeto lo siguiente: 1. La realización de programas de pasantías y/o prácticas pre profesionales; 2. La implementación de carreras de modalidad dual que garanticen la gestión del aprendizaje práctico con tutorías profesionales y académicas integrales in situ; 3. El uso gratuito de instalaciones para beneficio de institutos públicos; 4. La implementación de proyectos de vinculación con la sociedad; 5. La cooperación entre los mencionados institutos y las diferentes personas naturales y jurídicas nacionales; y, 6. La conformación y la participación en redes académicas internacionales, previa aprobación del Consejo de Educación Superior, las cuales estarán dirigidas a proyectos académicos que contemplen programas académicos, investigación y educación continua, con la finalidad de fortalecer la educación técnica y tecnológica pública del Ecuador. El Consejo de Educación Superior será el encargado de  supervisar la ejecución de dichos proyectos.. (…) Artículo 5.- “Los rectores y rectoras de los institutos superiores públicos, deberán usar obligatoriamente las plantillas y modelos de convenios autorizadas por la Coordinación General de Asesoría  Jurídica de esta Secretaría de Estado, para la suscripción de los actos jurídicos mencionados en el artículo 1 del presente Acuerdo, los cuales deberán ser remitidos oportunamente a las Coordinaciones Zonales para su correspondiente actualización”.", 0, 'J');

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

$pdf->MultiCell(170, 5, "12. El Instituto Tecnológico Superior XXXXXXXXXX, ubicado en la ciudad de XXXXXXXX, Provincia de XXXXXXXXXX, fue registrado en el XXXXXXXX, con el No. XXXX, de xx de xxxx de xxxx, es una institución de Educación Superior Pública que se dedica a la formación de profesionales de nivel técnico superior y tecnológico.

13. Mediante Acción de Personal Nº XXXXXXXXXX, de XX de XXXX de XXXX, la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación otorgó el nombramiento al XXXXXXXXXX XXXXXXXXXX, portador de la cédula de ciudadanía N° XXXXXXXXXX, en calidad de Rector/a del Instituto Tecnológico Superior “XXXXXXXXXX”, por un período de XXXX años. 

14. El señor XXXXXXXXXX XXXXXXXXXX, con Registro Único de Contribuyentes No. XXXXXXXXXX, es una persona natural, con domicilio tributario en el cantón XXXX, provincia de XXXXXXXX, que se dedica a las actividades de XXXXXXXXXX, desde el año XXXXXXXXXX, bajo la denominación comercial de XXXXXXXXXX XXXXXXXXXX.

15. Mediante Informe Técnico – Académico de Viabilidad para la firma de Convenio No. XXX-XXXXXXXXXX, de XX de XXXX de XXXXXXXXXX, se recomienda que: “De acuerdo a los criterios desarrollados, es conveniente, para el INSTITUTO, la firma del convenio con la ENTIDAD RECEPTORA, pues cuenta con los elementos académicos, condiciones e infraestructuras suficientes para la formación profesional de los estudiantes.”.

16. Mediante documento No. XXXXXX-xx-202X-xxxxx-M de fecha xx de xxxxxxxxx del 2020, el Rector del “INSTITUTO”, solicitó al Órgano Colegiado Superior, “la aprobación del Informe Técnico - Académico de Viabilidad No. xxxxxxxxxxxxxxxxx de fecha xx de xxxxxxx de 2020 para la formación dual de la XXXXX, previo la firma del convenio (…)”. 

17. Mediante Resolución/Acta No. XXXX-xx-202X-xxxxx-M de fecha xx de xxxxxxxxx del 2020, del Órgano Colegiado Superior (OCS) del “INSTITUTO”, aprueba el Informe Técnico – Académico de Viabilidad para la firma del Convenio específico de Formación Dual con la Compañía XXXXX.

18. Con los antecedentes expuestos, el “INSTITUTO” y la “ENTIDAD RECEPTORA” acuerdan suscribir el presente Convenio de Formación Dual para viabilizar que los estudiantes de la Carrera de Tecnología Superior en XXXXXXXXXX del “INSTITUTO” realicen su formación dual.
", 0, 'J');

$pdf->Ln();
//...........

$pdf->AddPage();
$pdf->Ln(35);

//............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA SEGUNDA.- DEFINICIONES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(10);
$pdf->SetFont('','');
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "2.1 Entidades receptoras: Son las personas naturales o jurídicas, de naturaleza privada, pública o de economía mixta, que se dediquen al desarrollo de actividades de producción, comercio o servicios que con posterioridad a la suscripción de un convenio con un Instituto Tecnológico Superior Público, reciben a estudiantes en formación dual y se constituyen como un ambiente de aprendizaje para realizar la transferencia de conocimientos prácticos, de conformidad al Plan Marco de Formación de cada carrera técnica o tecnológica. 

Estas entidades deberán contar obligatoriamente con tutores acreditados vinculados a dicha entidad que posean el conocimiento y experiencia suficiente sobre uno o varios procesos productivos o de servicios, a fin de transferir sus conocimientos y orientar a los/las estudiantes a lo largo de su formación práctica en dicha entidad, de acuerdo al objeto de cada convenio.
 ", 0, 'J');

$pdf->Ln(5);
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "2.2 Instituto: Es la institución de educación superior pública debidamente registrada en el Sistema Nacional de Información de la Educación Superior del Ecuador de la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación que oferta carreras técnicas y tecnológicas en modalidad dual.
", 0, 'J');

$pdf->Ln(5);
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "2.3 Estudiantes en formación dual: Son aquellos estudiantes legalmente matriculados en una carrera o programa impartido en modalidad de formación dual por una IES.
", 0, 'J');

$pdf->Ln(5);
//............

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 6, "2.4 Documento similar a un rol de pagos: De conformidad a lo determinado en el Acuerdo Interinstitucional No. MDT-SENESCYT-2015-0003, de 09 de abril de 2015, este documento se refiere al símil establecido que será utilizado para referirse al documento empleado por la “ENTIDAD RECEPTORA” para el registro y detalle de la compensación a recibir por el estudiante en formación dual por cada hora de formación práctica in situ efectivamente realizada, que deberá ser firmado por el estudiante en formación dual y la “ENTIDAD RECEPTORA” para justificar la recepción de la misma.", 0, 'J');

$pdf->Ln(5);
//...............

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA CUARTA.- OBLIGACIÓN CONJUNTA:', 0, 0, 'L', true);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 6);
$pdf->SetX($pdf->GetX() + 0);
$pdf->SetFont('','B');
$pdf->MultiCell(185, 6, "", 0, 'J');

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 2);
$pdf->SetX($pdf->GetX() + 0);
$pdf->SetFont('','');
$pdf->MultiCell(185, 6, "Las partes de común acuerdo trabajarán en conjunto los siguientes puntos a lo largo de la carrera dual:", 0, 'J');

$pdf->SetFont('', '');

$pdf->AddPage();
$pdf->Ln(35);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 0);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 6, "- Implementación y Actualización de la malla curricular y el plan marco de formación según necesidades del sector profesional de la “ENTIDAD RECEPTORA” con el objetivo de articular la formación en entornos institucionales educativos y entornos laborales reales de manera adecuada para el proceso de formación dual.
- Diseñar y ejecutar, el examen teórico-práctico intermedio y el examen teórico-práctico final.
", 0, 'J');

$pdf->Ln(5);
//................
//............
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA QUINTA.- OBLIGACIONES DE LAS PARTES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(5);
$pdf->SetFont('','');

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, '5.1 DEL INSTITUTO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "a) Contar con personal académico suficiente para la formación teórico-práctica de los estudiantes en cada periodo académico de la modalidad de formación dual.
b) Proponer a la “ENTIDAD RECEPTORA” en lo posible al menos una terna de estudiantes de la carrera de Tecnología Superior en XXXXXXXXXX, a fin de que esta realice su proceso de selección remitiendo para el efecto las hojas de vida correspondientes con la información que acuerden las partes como notas y/o cartas de motivación, etc.
c) Designar un (1) tutor académico por carrera para realizar el debido seguimiento a los estudiantes que acoja la “ENTIDAD RECEPTORA”.
d) Gestionar con la Secretaría de Educación Superior, Ciencia, Tecnología e Innovación la provisión de un seguro en los términos descritos en el Acuerdo Interinstitucional No. MDT-SENESCYT-2015-0003, de 09 de abril de 2015, para los estudiantes en formación dual desde el primer día en que realicen su formación práctica in situ con la “ENTIDAD RECEPTORA”.
e) Enviar a la “ENTIDAD RECEPTORA”, las calificaciones parciales y finales de cada uno de los estudiantes en formación dual cada semestre, para que la “ENTIDAD RECEPTORA” pueda conocer el grado de avance del estudiante.
f) Asegurar que los docentes del “INSTITUTO” asignados para dictar las clases a los estudiantes en formación dual, cuenten con la suficiente experiencia, conocimientos y credenciales para garantizar una enseñanza de calidad orientada hacia la práctica empresarial.
g) Coordinar con la “ENTIDAD RECEPTORA” la implementación y actualización de la malla curricular en formación dual.
h) Analizar, en el plazo establecido para el efecto, el reporte de evaluación final remitido por la “ENTIDAD RECEPTORA”.
i) Velar para que los estudiantes en formación dual se sometan a las políticas, directrices, reglamentos e instrucciones del “INSTITUTO” y de la “ENTIDAD RECEPTORA” incluyendo suscripción y cumplimiento del acuerdo de confidencialidad entre estudiante y “ENTIDAD RECEPTORA”.
j) Analizar, tramitar y resolver, de manera oportuna, las denuncias del desempeño de los estudiantes en modalidad de formación dual, de los profesores y de los tutores académicos.
k) Diseñar el sistema y los instrumentos para la evaluación del desempeño de los estudiantes en formación dual, de los profesores y de los tutores académicos.
", 0, 'J');
//............
$pdf->AddPage();
$pdf->Ln(35);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "l) Evaluar al estudiante en formación dual, a los profesores y a los tutores académicos.
m) Registrar las calificaciones obtenidas por el estudiante en el entorno institucional educativo y en el entorno laboral real.
n) Diseñar y ejecutar, en coordinación con la entidad receptora formadora, el examen teórico-práctico intermedio y el examen teórico-práctico final.
", 0, 'J');
$pdf->Ln(3);
//................

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, '5.2 DE LA ENTIDAD RECEPTORA:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "a) Planificar y ejecutar el proceso de formación en el entorno laboral real del estudiante o los estudiantes en modalidad de formación dual durante toda su carrera formativa, conforme a lo establecido en el Reglamento de Formación Dual y el plan marco de formación de la carrera.
b) Elaborar, suscribir y ejecutar, en coordinación con la IES, los instrumentos para la implementación de la modalidad de formación dual (p.ej. Plan de Formación Práctica y Rotación).
c) Designar a los tutores requeridos teniendo en cuenta las diferentes áreas o procesos.
d) Capacitar a sus tutores a través del curso para tutores empresariales en formación dual.
e) Contar al menos con un tutor capacitado conforme al convenio suscrito para formación dual.
f) Evaluar el desempeño de los estudiantes en modalidad de formación dual sobre la base de los objetivos planteados en el plan de aprendizaje práctico.
g) Remitir a la IES los reportes de evaluación parcial y final del período académico sobre el rendimiento de los estudiantes en su fase de formación en el entorno laboral real.
h) Notificar a la IES las faltas disciplinarias cometidas por el estudiante dentro de la “ENTIDAD RECEPTORA” y emitir el correspondiente informe escrito, a efectos que la IES pueda iniciar el proceso disciplinario correspondiente.
i) Determinar el número de estudiantes duales nuevos que acoja la “ENTIDAD RECEPTORA” a inicio de cada ciclo académico.
j) Garantizar que los estudiantes suscriban un código de conducta y un convenio de confidencialidad, en el entorno laboral donde realicen su práctica de formación dual, de acuerdo al Plan Marco de Formación y Plan de Rotación de la carrera, cumpliendo con las normas y reglamentos internos de la “ENTIDAD RECEPTORA”, sobre todo en lo que se refiere a normas de seguridad y código de conducta. 
k) Observar el Código Orgánico de la Economía Social de los Conocimientos, referente a los derechos de las obras creadas en las instituciones de educación superior y centros educativos en el Art. 114 y a las Obras bajo relación de dependencia y por encargo descrito en el Art. 115, reconociendo a los estudiantes los derechos morales respecto al trabajo definido como consecuencia de su formación dual.
l) Otorgar el apoyo necesario para el desarrollo de las actividades de aprendizaje de los estudiantes en formación dual y contribuir a la transferencia de conocimientos y tecnologías (saber hacer), así como evaluar el desarrollo de las actividades que se asignen a los estudiantes dentro de la fase de formación práctica en el entorno laboral real.
", 0, 'J');

//................
$pdf->AddPage();
$pdf->Ln(35);

//................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "m) Entregar a cada estudiante en formación dual el equipo mínimo de protección personal para el cumplimiento de su formación en entorno laboral real. Proporcionar a los estudiantes los equipos e insumos pertinentes a efectos de evitar accidentes laborales y enfermedades ocupacionales y orientarles adecuadamente acerca de su utilización.
n) Designar al menos un (1) tutor empresarial principal y un (1) suplente por cada carrera para llevar a cabo, monitorear y evaluar el proceso de formación práctica de los estudiantes en formación dual.
o) Emitir un informe de evaluación a los estudiantes al fin de cada período o ciclo académico y enviar al “INSTITUTO”, para que incorpore la calificación en su récord académico.
p) Permitir que los estudiantes evalúen a los tutores en lo que respecta al cumplimiento de sus deberes en el proceso de formación en el entorno laboral real.
q) Entregar a la IES la documentación correspondiente de la formación práctica cumplida (horas y actividades según plan marco de formación y plan de formación práctica) del estudiante en caso de que el mismo sea desvinculado por cualquier motivo justificado.
r) Permitir que sus tutores se capaciten a través de cursos de formación continua y de actualización profesional
s) Si uno de los estudiantes que se encuentre cursando su formación dual en la “ENTIDAD RECEPTORA” actúa con negligencia, dolo, falta de probidad, conducta inmoral, inoperancia, cometiera actos ilícitos o infracciones, y que por ellos la “ENTIDAD RECEPTORA” podría verse de alguna forma perjudicada; esta, podrá solicitar la separación inmediata del estudiante para evitar mayores riesgos o perjuicios, remitiendo para el efecto un informe con los hechos acontecidos y las pruebas pertinentes. El debido proceso disciplinario se realizará en el “INSTITUTO”. 
", 0, 'J');

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA SEXTA.- COMPENSACIÓN:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "La Entidad Receptora otorgará a modo de compensación a las y los estudiantes en formación dual, beneficios que podrán ser: transporte, alimentación, sistemas de becas, subsidios y beneficios adicionales.

Dicha compensación se entregará directamente al estudiante que contará con un respaldo en un documento similar a un rol de pago.
", 0, 'J');
$pdf->Ln(3);
//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA SÉPTIMA.- RÉGIMEN FINANCIERO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Debido a la naturaleza del Convenio, la presente cooperación no generará obligaciones financieras recíprocas, erogación alguna, ni transferencias de recursos económicos entre las partes; las erogaciones generadas por las acciones ejecutadas por el cumplimiento de las obligaciones contraídas en el presente instrumento, serán asumidas con cargo a la Institución / Entidad que las ejecute.", 0, 'J');

//................

$pdf->AddPage();
$pdf->Ln(35);


//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA OCTAVA.- PLAZO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(5);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "El plazo total para la ejecución del presente Convenio es de XXXXX (X) años contados a partir de la fecha de suscripción, mismo que podrá ser renovado previo consentimiento de las partes de manera escrita con al menos treinta (30) días de anticipación a la fecha de terminación del convenio, para lo cual las partes deberán suscribir el instrumento jurídico pertinente prorrogando el mismo y estableciendo las nuevas condiciones, de existir.
", 0, 'J');
$pdf->Ln(5);
//.....

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA NOVENA.- MODIFICACIONES: ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(5);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Los términos de este convenio pueden ser modificados, ampliados o reformados de mutuo acuerdo durante su vigencia, siempre que dichas modificaciones no alteren la naturaleza ni el objeto del convenio; y, sean justificadas técnica, legal o académicamente; para cuyo efecto las PARTES suscribirán el instrumento jurídico pertinente.

Ninguna modificación podrá ir en detrimento de los derechos de los estudiantes que se encuentren vinculados en la “ENTIDAD RECEPTORA”. 
", 0, 'J');
$pdf->Ln(5);
//................

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA.- ADMINISTRACIÓN DEL CONVENIO: ', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Para realizar la coordinación, ejecución y seguimiento del presente Convenio y del proceso de formación dual, las partes designan a los funcionarios que a continuación se detallan para que actúen en calidad de administradores, quienes velarán por la cabal y oportuna ejecución de todas y cada una de las obligaciones derivadas del mismo, así como de su seguimiento y coordinación, debiendo informar por escrito a la máxima autoridad del “INSTITUTO” y al representante legal de la “ENTIDAD RECEPTORA”, mediante informes semestrales por cada ciclo académico respecto al cumplimiento del objeto del presente instrumento:

Por el “INSTITUTO” se designa al XXXXXXXXXX

Por la “ENTIDAD RECEPTORA” se designa al XXXXXXXXXX.
En caso de presentarse cambios del personal asignado para la administración, serán designados con la debida antelación, notificando a la parte contraria de manera inmediata, y sin que sea necesaria la modificación del texto convencional, a fin de no interrumpir la ejecución y el plazo del convenio; para lo cual el o los administradores salientes deberán presentar un informe de su gestión y la entrega recepción de actividades.

Los Administradores del Convenio a la conclusión del plazo, presentarán un informe consolidado sobre la ejecución del Convenio.
", 0, 'J');
$pdf->Ln(3);
//................
$pdf->AddPage();
$pdf->Ln(35);

//.........
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA PRIMERA.- TERMINACIÓN DEL CONVENIO:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);

//................
$pdf->SetFont('','');
$pdf->Cell(145, 6, 'El presente Convenio terminará por una de las siguientes causas:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "1. Por vencimiento del plazo;
2. Por cumplimiento del objeto del Convenio;
3. Por mutuo acuerdo de las partes, siempre que se evidencie que no pueda continuarse su ejecución por motivos técnicos, económicos, legales, sociales o físicos para lo cual celebrarán un acta de terminación por mutuo acuerdo. La parte que por los motivos antes expuestos no pudiere continuar con la ejecución del presente Convenio, deberá poner en conocimiento de su contraparte su intención de dar por terminado el convenio por mutuo con al menos treinta (30) días de antelación a la fecha de terminación del presente instrumento;
4. Por terminación unilateral por incumplimiento de una de las partes, lo cual deberá ser técnicamente y legalmente justificado por quien lo alegare; y, 
5. Por fuerza mayor o caso fortuito debidamente justificado por la parte que lo alegare, y notificado dentro del plazo de cuarenta y ocho (48) horas de ocurrido el hecho. En estos casos, se suscribirá la respectiva acta de terminación en el que se determinarán las causas descritas como causales de terminación del Convenio. Se considerarán causas de fuerza mayor o caso fortuito las establecidas en el artículo 30 del Código Civil.
", 0, 'J');
$pdf->Ln(3);
//.....................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "La terminación del presente Convenio, por cualquiera de las causales antes señaladas, no afectará la conclusión del objeto y las obligaciones que las partes hubieren adquirido y que se encuentren ejecutando en ese momento, salvo que éstas lo acuerden de otra forma. No obstante, la terminación del presente convenio no implicará el pago de indemnización alguna ni entre las partes ni entre éstas y los estudiantes o terceros.", 0, 'J');
$pdf->Ln(3);

//........................

$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA SEGUNDA.- INEXISTENCIA DE RELACIÓN LABORAL:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(8);
//.......................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Por la naturaleza del presente Convenio, se entiende que ninguna de las partes comparecientes, adquieren relación laboral ni de dependencia respecto del personal de la otra institución que trabaje en el cumplimiento de este instrumento.

De igual manera, la “ENTIDAD RECEPTORA” no tendrá relación laboral ni obligaciones laborales ni de seguridad social con los estudiantes en formación dual que se vinculen a ella, ni éstos tendrán subordinación ni dependencia laboral con la “ENTIDAD RECEPTORA”, en los términos establecidos en el Acuerdo No. MDT-SENESCYT-2015-0003, de 09 de abril de 2015.
", 0, 'J');
$pdf->Ln(3);
//...........................
$pdf->AddPage();
$pdf->Ln(35);

//..........................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA TERCERA.- PROPIEDAD INTELECTUAL:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln();

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'OPCIÓN A:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//.....................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Los derechos patrimoniales de autor sobre los productos que se generan en el proceso de formación dual, que realice el estudiante en virtud del presente Convenio corresponden de forma compartida al “INSTITUTO” y a la “ENTIDAD RECEPTORA” de conformidad con lo establecido en el Código Orgánico de la Economía Social de los Conocimientos y en el artículo 9 de la Decisión de la Comunidad Andina No. 351.

La propiedad material de aquello que se produzca durante la ejecución del proceso de formación dual objeto de este Convenio corresponderá de forma compartida al “INSTITUTO” y a la “ENTIDAD RECEPTORA”, el estudiante podrá referirse a ellos o citarlos como antecedentes de su actividad educativa y se le reconocerá los derechos morales correspondientes.
", 0, 'J');
$pdf->Ln(3);
//........................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'OPCIÓN B:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//.....................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "El estudiante dual desarrollará proyectos empresariales en cada periodo académico de su formación práctica en entorno laboral real los cuales podrán ser:", 0, 'J');
$pdf->Ln(2);
//...................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5,"1) Todos los productos, proyectos y tareas que hacen los estudiantes en las fases prácticas en el entorno laboral real de la ENTIDAD RECEPTORA durante toda su carrera.
2) Proyectos de tesis como trabajo de titulación.
3) Examen complexivo para la titulación: en las carreras duales, el examen complexivo consiste en 50% un examen teórico escrito, y 50% un examen práctico. En algunas carreras, el examen práctico es un proyecto práctico dentro de la ENTIDAD RECEPTORA.
", 0, 'J');
$pdf->Ln(2);
//..................

$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, " Cualquiera de estos, son iniciativa y responsabilidad de la ENTIDAD RECEPTORA y es así que los derechos intelectuales, de autor y patrimoniales sobre estas obras, pertenecen de manera exclusiva a la ENTIDAD RECEPTORA, que es el productor del proyecto.

Las partes acuerdan que estos proyectos no serán considerados lo que el código Ingenios define como “en colaboración” (Art. 112 Código Ingenios), “divisibles” o “indivisibles” (Art 113 Código Ingenios), o “colectivas” ni que son “por encargo”. El estudiante renuncia y cede todo derecho de autor que podría tener, como lo permite el Código Ingenios (Art. 115, 164, 165)). El estudiante tendrá los derechos morales sobre las partes del proyecto que fueron trabajados netamente por el pero no podrá explotar las obras de ninguna manera para sus propios fines.

El estudiante recibe apoyo puntual en aspectos académicos del INSTITUTO para el desarrollo de sus aportes a los proyectos empresariales. Sin embargo el INSTITUTO no tendrá ningún derecho patrimonial sobre estas obras y proyectos y velara por el trato confidencial de la información contenida tanto por parte del INSTITUTO como por parte del estudiante asegurando que no serán divulgados contenidos y datos sensibles de la ENTIDAD RECEPTORA y toda su actividad económica. 

", 0, 'J');
$pdf->Ln(3);
//.......................
$pdf->AddPage();
$pdf->Ln(35);
//.......................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Bajo acuerdo por escrito entre la ENTIDAD RECEPTORA y el INSTITUTO se podrá acordar en cada proyecto y tesis, si el documento estará disponible para la investigación científica y fines de estudio. En casos de programas de software por ejemplo, se podrá acordar la cesión de una licencia gratuita de uso.", 0, 'J');
$pdf->Ln(3);
//.....................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'OPCIÓN B:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//......................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Basándose en la buena fe como fundamental para la ejecución de este convenio para el caso de controversias derivadas de su interpretación, aplicación, ejecución o terminación, las partes aceptan solucionarlas de manera amistosa a través de las máximas autoridades de las instituciones comparecientes; de no ser posible una solución amistosa, las controversias producto del presente Convenio se ventilarán ante el Centro de Mediación de la Procuraduría General del Estado, con sede en la ciudad de XXXXX, provincia de XXXXXXX; y, a la falta de acuerdo se ventilarán las controversias de conformidad con lo establecido en el Código Orgánico General de Procesos (COGEP); siendo competente para conocer dichas controversias el Tribunal de lo Contencioso Administrativo o la Unidad Judicial de lo Contencioso Administrativo.", 0, 'J');
$pdf->Ln(3);
//.........................
//.....................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA QUINTA.- DOCUMENTOS HABILITANTES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//......................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Forman parte integrante del Convenio, los siguientes documentos: ", 0, 'J');
$pdf->Ln(3);
//.......................

$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 5);
$pdf->SetX($pdf->GetX() + 15);

$pdf->MultiCell(170, 5, "a) Los que acreditan la calidad y capacidad de los comparecientes; y,
b) Los documentos a que se hace referencia en la cláusula de antecedentes.
 ", 0, 'J');
$pdf->Ln(3);

//.....................
$pdf->SetFont('','B');
$pdf->Cell(145, 6, 'CLÁUSULA DÉCIMA SEXTA.- COMUNICACIONES Y NOTIFICACIONES:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(0);
//........................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 0);

$pdf->MultiCell(185, 5, "Todas las comunicaciones y notificaciones entre las partes, se realizarán por escrito a las siguientes direcciones: ", 0, 'J');
$pdf->Ln(5);
//.......................

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

//......................
$pdf->AddPage();
$pdf->Ln(35);

//..............

//................
$pdf->SetFont('','B');
$pdf->Cell(145, 7, 'CLÁUSULA DÉCIMA SÉPTIMA.- ACEPTACIÓN:', 0, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Ln(3);
//................
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 7);
$pdf->SetX($pdf->GetX() + 2);

$pdf->MultiCell(185, 5, "Libre y voluntariamente, previo el cumplimiento de los requisitos de Ley, los comparecientes expresan su aceptación a todo lo convenido en el presente instrumento, a cuyas estipulaciones se someten, por convenir a sus legítimos intereses institucionales, en fe de lo cual proceden a suscribirlo en cuatro (4) ejemplares de igual tenor y valor jurídico.

Dado, en la ciudad de XXXXX a los XXXX días del mes de XXXXX de 202X.
", 0, 'J');
$pdf->Ln(3);

//...................
$pdf->SetFont('','B');
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 8);
$pdf->SetX($pdf->GetX() + 30);

$pdf->MultiCell(72, 6, "“Por delegación del Secretario de Educación Superior, Ciencia, Tecnología en Innovación:”




Mgs. XXXXXXXXXX.
RECTOR
INSTITUTO TECNOLÓGICO 
ext: xxxxx
SUPERIOR XXXXXXXXXX
", 1, 'J');
$pdf->SetXY($x, $y);
$pdf->SetY($pdf->GetY() + 8);
$pdf->SetX($pdf->GetX() + 102);
$pdf->MultiCell(70, 7.2 ,"Por la entidad receptora:






Sr. XXXXXXXXXX
RUC: XXXXXXXXXX 
XXXXXXXXXX
", 1, 'J');






$pdf->Output();




ob_end_flush();
  ?>