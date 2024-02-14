
<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['Escritorio']==1) {
 ?>
    <div class="content-wrapper">
    <!-- Main content -->
<section class="content">

      <!-- Default box -->
  <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="card text-center">
                                <h1>FICHA DE EVALUACIÓN <?php
$id = $_GET['id'];
//$nombre = $_GET['nombre'];
//echo  $id;
?> </h1>
                            </div>
<!--box-header-->
<!--centro-->

<div class="panel-body" id="formularioregistros">
                              <form method="POST" id="resumen2" enctype="multipart/form-data">
                                <div class="table table-bordered col-lg-12">
                                    <table class="table">
                                        <tr>
                                          <th>N°</th>
                                            <th><span class="text-center">Criterio de evaluación </span></th>
                                            <th>Nivel de dominio/ Validación sobre 10</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        <tr>
                                          <td>1</td>
                                            <td>Comprende los conceptos teóricos generales y logra aplicarlos en el entorno real según las necesidades demandadas por la entidad formadora </td>
                                            <td><input class="form-control" type="text" id="criterio1" name="criterio1"></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                            <td>
                                                <div dir="ltr">
                                                  <div spellcheck="false">
                                                    <div tabindex="0" role="combobox" contenteditable="false" docs-unhandledkeys="ctrl+shift+z,ctrl+y,ctrl+z" id="waffle-rich-text-editor" dir="ltr" g_editable="true" aria-autocomplete="list" aria-label="B19">Cumple con las normas de seguridad y lineamientos de la entidad formadora durante el desarollo de las actividades prácticas<br>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div></div></td>
                                            <td><input class="form-control" type="text" id="criterio2" name="criterio2"></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                            <td>
                                                <p>Plantea soluciones acertadas ante los problemas laborales reales acorde a su perfil profesional </p>
                                            </td>
                                            <td><input class="form-control" type="text" id="criterio3" name="criterio3"></td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr>
                                          <td>4</td>
                                            <td>Se comunica efectivamente de manera oral, escrita y digital </td>
                                            <td><input class="form-control" type="text" id="criterio4" name="criterio4"></td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr>
                                          <td>5</td>
                                            <td>
                                                <div dir="ltr">
                                                  <div spellcheck="false">
                                                    <div tabindex="0" role="combobox" contenteditable="false" docs-unhandledkeys="ctrl+shift+z,ctrl+y,ctrl+z" id="waffle-rich-text-editor2" dir="ltr" g_editable="true" aria-autocomplete="list" aria-label="B21">
                                                      <div dir="ltr">
                                                        <div spellcheck="false">
                                                          <div tabindex="0" role="combobox" contenteditable="false" docs-unhandledkeys="ctrl+shift+z,ctrl+y,ctrl+z" id="waffle-rich-text-editor3" dir="ltr" g_editable="true" aria-autocomplete="list" aria-label="B22">Utiliza herramientas tecnológicas como aporte en el desarrollo académico/laboral real<br>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div><br>
                                                    </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              <div></div></td>
                                            <td><input class="form-control" type="text" id="criterio5" name="criterio5"></td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr>
                                          <td>6</td>
                                          <td>Propone soluciones útiles e innovadoras acorde a las necesidades demandadas por la entidad formadora</td>
                                          <td><input class="form-control" type="text" id="criterio6" name="criterio6"></td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>7</td>
                                          <td>Participa, organiza y coordina el trabajo en equipo </td>
                                          <td><input class="form-control" type="text" id="criterio7" name="criterio7"></td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>8</td>
                                          <td>Practica  las buenas relaciones entre compañeros</td>
                                          <td><input class="form-control" type="text" id="criterio8" name="criterio8"></td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>9</td>
                                          <td>Innova y tiene conciencia ecológica</td>
                                          <td><input class="form-control" type="text" id="criterio9" name="criterio9"></td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>10</td>
                                            <td>
                                                <p>Demuestra disciplina, cortesía y buen trato </p>
                                            </td>
                                            <td><input class="form-control" type="text" id="criterio10" name="criterio10"></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>Puntaje total: 
                                          <input class="form-control" type="text" id="criterio11" name="criterio11"></td>
                                          <td>&nbsp;</td>
                                        </tr>

                                    </table>

                                </div>

                                <div class="form-group col-lg-12 text-center">
                                   <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
									 <button class="btn btn-danger" onclick="window.location.href='fichaeva.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                </div>
                        </div>
                        </form></div><!--fin centro-->
      </div>
  </div>
  <!-- /.box -->

  </section>
    <!-- /.content -->
  </div>
<?php 
}else{
 require 'noacceso.php'; 
}
require 'footer.php';
 ?>
<script src="scripts/fichaeva2.js"></script>
 <?php 
}

ob_end_flush();
  ?>
