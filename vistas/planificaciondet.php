
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
<div class="box-header with-border">
  <h1 class="box-title">LISTA DE ESTUDIANTES</h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div style="width:900" id="listadoregistros">
  <table id="tbllistadoe"  class="table table-striped table-bordered table-condensed table-hover"> 
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Celular</th>
      <th>Direccion</th>
      <th>Carrera</th>
      <th>Cedula</th>
      <th>Periodo</th>
	  <th>Login</th>
	  
	<th>Seleccionar</th>
    </thead>
    <tbody>
    </tbody>   
  </table>
</div>
<div class="panel-body" id="formularioregistros">
  <form action="" name="estudiante" id="estudiante" method="POST">
    <div class="form-group col-lg-12 col-md-12 col-xs-12">
      <label for="">Ingrese el gestor local(*):</label>
     
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre del gestor local" required>
    </div>
   
    <div class="form-group col-lg-12 col-md-12 col-xs-12">
      <label for="">Ingrese el tutor académico de la carrera(*):</label>
      <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Nombre del tutor Académico" maxlength="20">
    </div>

      
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="button" id="btnGuardar"><i class="fa fa-save"></i>  Nosrive</button>
      <button class="btn btn-danger" onclick="window.location.href='planificacion.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
		<button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
    </div>
  </form>
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
 <script src="scripts/hmac-sha256.js"></script>
 <script src="scripts/planificacion.js"></script>
 <?php 
}

ob_end_flush();
  ?>
