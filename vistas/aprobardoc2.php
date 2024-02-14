<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['Acceso']==1) {
 ?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
                                                                <h1 class="box-title">DOCUMENTOS DEL ESTUDIANTE <?php
$id = $_GET['id'];
//$nombre = $_GET['nombre'];
echo  $id;
?></h1>
                            </div>
<!--box-header-->
<!--centro-->
  <div style="width:900" id="listadoregistros">
  								<table id="tbllistado2"  class="table table-striped table-bordered table-condensed table-hover"> 
									<thead>
										<th>ID</th>
										<th>URL</th>
										<th>Fecha</th>
										<th>Tipo</th>
										<th> </th>
									</thead>
									<tbody>
									</tbody>   
								  </table>
								</div>
<div class="panel-body" id="formularioregistros">
<button class="btn btn-danger" onclick="window.location.href='aprobardoc.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
            <form id="form_docH">
            <div class="form-group col-lg-6 col-md-6 col-xs-12">
             <label for="estado">Seleccione el estado:</label>
             <select id="estado" name="estado" class="form-control">
                <option value="">Seleccione</option>
                <option value="18">Aprobar</option>
                <option value="19">No Aprobar</option>
             </select>
             </div>
             <div class="form-group col-lg-6 col-md-6 col-xs-12">
            <div class="form-group col-lg-6 col-md-6 col-xs-12" id="observacionesInputDiv" style="display: none;">
				<label for="observaciones">Observaciones:</label>
				<input type="text" id="observaciones" name="observaciones" placeholder="Ingrese observaciones" class="form-control">
			</div>

             </div>
             <div class="form-group col-lg-6 col-md-6 col-xs-12">
              <button class="btn btn-primary" id="guardar" style="display: none;"><i class="fa fa-save"></i>Guardar</button>
             </div>
				<div class="form-group col-lg-12 text-center">
                                   <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
									
          </div>
             </form>
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
<script src="scripts/aprobardoc2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
 <?php 
}

ob_end_flush();
  ?>
