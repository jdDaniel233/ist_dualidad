<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
    header("Location: login.html");
} else {
    require 'header.php';
    if ($_SESSION['Generación'] == 1) {
?>

        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="box-header with-border">
                    <h1 class="box-title">Subir Expediente Estudiante
                    <button class="btn btn-success" id="btnver" onclick="window.location.href='documentosest.php'">
                            <i class="fa fa-plus-circle"></i> Ver Documentos Subidos
                        </button>
                        <!-- Botón para regresar 
                        <button class="btn btn-primary" id="btnregresar" style="display: none;">
                            <i class="fa fa-arrow-left"></i> Regresar
                        </button> -->
                    </h1>
                    <div class="box-tools pull-right">
                    </div>
                </div>

                <div style="width:900" id="listadoCheck">
                <table id="check" class="table table-striped table-bordered table-condensed table-hover">
                    <thead>
                        <th>Archivo</th>
                        <th>Acción</th>
                    </thead>
                    <tbody>                        
                        <!-- Las filas de la tabla se agregarán dinámicamente con JavaScript -->
                    </tbody>
                </table>
            </div>

                <!-- Tabla -->
                <div style="width: 100%" id="listadoregistrosDoc">
                    <table id="doc" class="table table-striped table-bordered table-condensed table-hover" style="display: none; width: 85%;">
                        <thead>
                            <th>Periodo</th>
                            <th>Nombre del Archivo</th>
                            <th>Dirección</th>
                            <th>Fecha Cargada</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

                <!-- Formulario (inicialmente oculto) -->
                <div class="content-wrapper" id="formularioregistrosDoc" style="display: none;">
                    <!-- Main content -->
                    <section class="content">
                        <!-- Default box -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Columna izquierda: Formulario de carga de archivos -->
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h1 class="box-title">Información</h1>
                                    </div>
                                    <div class="box-body">

                                       

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box -->
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
			
					  <style>
  .modal-xl {
    width: 70%;
  }
</style>
						<!-- Inicio del Modal -->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cargar Documentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Contenido del formulario de edición -->
 <!-- Aquí tu formulario de carga de archivos -->
                                        <form method="post" id="frmSubirDriveDoc" enctype="multipart/form-data">
                                            <!-- Tu formulario aquí (nombre) -->

                                            <div class="form-group">
                                                <input type="hidden" id="usuario" name="usuario" value="<?php echo $_SESSION["usu_cedula"] ?>">

                                                <label for="">Nombre del Archivo:</label>
                                                <input type="text" class="form-control" id="doch_nombre" name="doch_nombre" readonly required>
                                                <label for="">Selecciona el archivo:</label>
                                                <input type="file" class="form-control" id="archivo" name="archivo" required>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Subir Archivo</button>
                                        </form>


     </div>
    </div>
  </div>
</div>

<!-- FINAL del Modal -->

        </div>

        <?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
        ?>
        <script>
    var usu_id = <?php echo json_encode($_SESSION['usu_cedula']); ?>;
</script>
        <script src="scripts/documentoscheck.js">
        </script>

<?php
}
ob_end_flush();
echo '<script>var usu_id = ' . json_encode($_SESSION['usu_cedula']) . ';</script>';
?>