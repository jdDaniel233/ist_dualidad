
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
                                <h1>Rúbrica para la defensa del proyecto empresarial <?php
$id = $_GET['id'];
//$nombre = $_GET['nombre'];
//echo  $id;
?> </h1>
     </div>
<!--box-header-->
<!--centro-->

<div class="panel-body" id="formularioregistros">
  <form method="POST" id="resumen" enctype="multipart/form-data">
                                <div class="table table-bordered col-lg-12">
                                   
                                    <table class="table">
                                        <tr>
                                          <th>N°</th>
										
                                            <th>Criterio de evaluación</th>
                                            <th>Nivel de dominio/ Validación sobre 10</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        <tr>
                                          <td>1</td>
                                            <td>El proyecto empresarial presenta los resultados obtenidos en función a los objetivos planteados</td>
                                            <td><input class="form-control" type="text" id="criterio1" name="criterio1"></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                            <td>
                                                <div dir="ltr">
                                                  <div spellcheck="false">
                                                    <div tabindex="0" role="combobox" contenteditable="false" docs-unhandledkeys="ctrl+shift+z,ctrl+y,ctrl+z" id="waffle-rich-text-editor" dir="ltr" g_editable="true" aria-autocomplete="list" aria-label="B19">Demuestra excelente habilidad para expresarse con claridad, respetando las reglas ortográficas y gramaticales en el escrito; considerando además criterios fundamentados de las labores que realizó<br>
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
                                                <p>Las conclusiones y recomendaciones a las que se llegó en el proyecto son trascendentales y beneficiosas para las instituciones participantes</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="criterio3" name="criterio3"></td>
                                            <td>&nbsp;</td>
                                        </tr>

                                        <tr>
                                          <td>4</td>
                                            <td>Interpreta con precisión la evidencia y responde con claridad las preguntas</td>
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
                                                          <div tabindex="0" role="combobox" contenteditable="false" docs-unhandledkeys="ctrl+shift+z,ctrl+y,ctrl+z" id="waffle-rich-text-editor3" dir="ltr" g_editable="true" aria-autocomplete="list" aria-label="B22">Utiliza un lenguaje técnico para exponer sus ideas <br>
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
                                          <td>&nbsp;</td>
                                            <td>
                                                <p>&nbsp;</p>
                                            </td>
                                            <td>Puntaje total :
                                            <input class="form-control" type="text" id="criterio6" name="criterio6" readonly></td>
                                            <td>&nbsp;</td>
                                        </tr>

                                    </table>

                                </div>

          <div class="form-group col-lg-12 text-center">
                                   <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
									 <button class="btn btn-danger" onclick="window.location.href='rubricaproy2.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
<script src="scripts/rubricaproyecto.js"></script>
 <?php 
}

ob_end_flush();
  ?>
