
<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();

if (!isset($_SESSION['usu_nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['Generación']==1) {
	// Obtén el valor de usu_id desde la sesión
    $usu_id = isset($_SESSION['usu_id']) ? $_SESSION['usu_id'] : '';
	 $usu_nombre = isset($_SESSION['usu_nombre']) ? $_SESSION['usu_nombre'] : '';
 ?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title">Bitácora</h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
		  


<div class="panel-body" id="formularioregistros">
  <form action="" name="formulario" id="formulario" method="POST">
      
  
                   
                    <!-- Asigna el valor de usu_id al campo usu_cedula -->
                    <!-- Asigna el valor de usu_id al campo usu_cedula -->
<input type="hidden" class="form-control" name="id" id="id" maxlength="20" value="<?php echo $usu_id; ?>" data-id="<?php echo $usu_id; ?>">

                 
	  
      

    
    
  		<input class="form-control" type="hidden" name="tipo" id="tipo" maxlength="20" placeholder="Número de telefono" value="BITACORA" readonly>
	

	  
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="alert alert-success" role="alert">
    Si aún no ha registrado una Bitácora, pulsar el botón "AGREGAR"
</div>
 <button class="btn btn-success" type="submit" id="btnGuardar"><i class="fa fa-plus-circle"></i>  Agregar</button>
      
    </div>
  </form>
</div>
<div style="width:900" id="listadoregistros">
  								<table id="tbllistado2"  class="table table-striped table-bordered table-condensed table-hover"> 
									<thead>
    									<th>id</th>
										<th>Nombre</th>
   										 <th>Documento</th>
    									<th>Creación</th>
										<th>Opciones</th>
										</thead>
									<tbody>
									</tbody>   
								  </table>
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
 <script src="scripts/bitacora.js"></script>
<script src="scripts/bitacora2.js"></script>

<?php 
}

ob_end_flush();
  ?>
