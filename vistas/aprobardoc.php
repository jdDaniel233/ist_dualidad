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
                                <h1 class="box-title">DOCUMENTOS DE LOS ESTUDIANTES</h1>
                            </div>
                            <div class="panel-body" >

                                <!-- Aquí tu tabla de los estudiantes que han subido doc -->
                                <div style="width:900" id="listadoregistros">
  								<table id="tbllistado"  class="table table-striped table-bordered table-condensed table-hover"> 
									<thead>
    									<th>id</th>
										<th>Cedula</th>
   										 <th>Nombre</th>
    									<th>Visualizar</th>
										</thead>
									<tbody>
									</tbody>   
								  </table>
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
    } else {
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
