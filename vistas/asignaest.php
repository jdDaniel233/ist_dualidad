<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['Activos']==1) {
 ?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title">LISTA DE ESTUDINATES REGISTRADOS A UNA PLANIFICACION
                                   
                                    <!-- Botón para regresar --> </h1>
                                <div class="box-tools pull-right">
                                </div>
	
<?php
$id = $_GET['id'];
//echo  $id;
?>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div style="width:900" id="listadoregistros">
  <table id="tbllistadop"  class="table table-striped table-bordered table-condensed table-hover"> 
    <thead>
        <th>Id</th>
                                        <th>Empresa</th>
                                        <th>Proyecto</th>
		 								<th>ID Est</th>
                                        <th>Estudinate</th>
                                        <th>Gestor</th>
                                        <th>Tutor</th>
                                        <th>Acción</th>

		
    </thead>
    <tbody>
    </tbody>   
  </table>
	
</div>
<button class="btn btn-danger" onclick="window.location.href='planificacion.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Regresar</button>
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
 <script src="scripts/asignaest.js"></script>
 <?php 
}

ob_end_flush();
  ?>
