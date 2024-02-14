
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
                                <h1 class="box-title">DOCUMENTOS DE LOS ESTUDIANTES</h1>
                            </div>
<!--box-header-->
<!--centro-->
<div style="width:900" id="listadoregistros">
  								<table id="tbllistado"  class="table table-striped table-bordered table-condensed table-hover"> 
									<thead>
    									<th>id</th>
										<th>Cédula</th>
   										 <th>Nombre</th>
    									<th>Visualizar</th>
										</thead>
									<tbody>
									</tbody>   
								  </table>
								</div>
<div class="panel-body" id="formularioregistros">
	<button class="btn btn-danger" onclick="window.location.href='../reportes/rpt_bitacora.php'" type="button"><i class="fa fa-arrow-circle-left"></i> rEPORTE</button>

</div>
<!--fin centro-->
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
    <script src="scripts/aprobardoc.js"></script>
<script src="scripts/aprobardoc2.js"></script>
 <?php 
}

ob_end_flush();
  ?>
