<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['Actas'] == 1 || $_SESSION['Generación'] == 1) {
 ?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
                                                                <h1 class="box-title">MIS DOCUMENTOS <?php
$id = $_GET['id'];
//$nombre = $_GET['nombre'];
echo  $id;
?></h1>
                            </div>
<!--box-header-->
<!--centro-->
  <div style="width: 900" id="listadoregistros" data-usuarioid="<?php echo $_SESSION["usu_id"]; ?>">
    <input type="hidden" id="usuarioid" name="usuarioid" value="<?php echo $_SESSION["usu_id"]; ?>">
    <table id="tbllistado2" class="table table-striped table-bordered table-condensed table-hover">
									<thead>
										<th>ID</th>
										<th>URL</th>
										<th>Fecha</th>
										<th>Tipo</th>
										<th>Estado</th>
										<th>Observación</th>
										<th> </th>
									</thead>
									<tbody>
									</tbody>   
								  </table>
								</div>
<div class="panel-body" id="formularioregistros">
<button class="btn btn-danger" onclick="window.location.href='documentoscheck.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
</div>
<!--fin centro-->
		<!-- Modal para mostrar el PDF -->
<div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">Documento PDF</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenedor para incrustar el PDF -->
                <div id="pdfViewer" style="width: 100%; height: 600px;"></div>
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
      </div>
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
<script src="scripts/documentosest.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
 <?php 
}

ob_end_flush();
  ?>
