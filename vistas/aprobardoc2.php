
<?php
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
    header("Location: login.html");
} else {
    require 'header.php';
    if ($_SESSION['Escritorio'] == 1) {
?>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Columna izquierda: Formulario de carga de archivos -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="box-title">DOCUMENTOS DEL ESTUDIANTE <?php
$id = $_GET['id'];
//$nombre = $_GET['nombre'];
echo  $id;
?></h1>
                            </div>
                            <div class="panel-body" >

                                <!-- Aquí tu tabla de los estudiantes que han subido doc -->
                                <div style="width:900" id="listadoregistros">
  								<table id="tbllistado2"  class="table table-striped table-bordered table-condensed table-hover"> 
									<thead>
										<th>ID</th>
										<th>Url</th>
										<th>Fecha</th>
										<th>Tipo</th>
</thead>
									<tbody>
									</tbody>   
								  </table>
								</div>


								
                            </div>
	
							
	<div class="panel-body" id="formularioregistros">
  <form action="" name="aprobar" id="aprobar" method="POST">
    
<div class="form-group col-lg-6 col-md-6 col-xs-12">
  <label for="">Aprobacion:</label>
      <select class="form-control" type="text" name="estado" id="estado" maxlength="20" >
	
      </select>
  </div>
	  <div class="form-group col-lg-12 col-md-12 col-xs-12">
      <label for="">Observacion:</label>
      <input class="form-control" type="text" name="direccion" id="direccion" maxlength="20" placeholder="Motivo">
    </div>
	  <div class="form-group col-lg-6 col-md-6 col-xs-12"></div>
    <!--<div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label>Permisos</label>
      <ul id="permiso" style="list-style: none;">
        
      </ul>
    </div>-->
      
    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger" onclick="window.location.href='aprobardoc.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
    </div>
  </form>
</div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
<?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
?>
    
    <script src="scripts/aprobardoc2.js"></script>
<?php
}
ob_end_flush();
?>
