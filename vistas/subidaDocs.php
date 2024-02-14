<?php
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
    header("Location: login.html");
} else {
    require 'header.php';
    if ($_SESSION['Actas'] == 1) {
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
                                <h1 class="box-title">Selector de archivos</h1>
                            </div>
                            <div class="box-body">

                                <!-- Aquí tu formulario de carga de archivos -->
                                <form method="post" id="frmSubirDrive" enctype="multipart/form-data">
                                    <!-- Tu formulario aquí (nombre, usuario, fecha, etc.) -->
                                    
                                    <div class="form-group">
                                        <input type="hidden" id="usuario" name="usuario" value="<?php echo $_SESSION["usu_nombre"] ?>">
										<input type="hidden" id="usuarioid" name="usuarioid" value="<?php echo $_SESSION["usu_id"] ?>">
										<label for="">Tipo de documento:</label> 
										<select type="text" name="documento" id="documento" style="width: 200px;" maxlength="20"></select>

                                        <input type="hidden" id="fecha" name="fecha" value="<?php echo date('Y-m-d H:i:s'); ?>">
                                    </div>
		
									<div class="form-group">
                                        <input type="file" class="form-control" id="archivo" name="archivo"  required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Subir Archivo</button>
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
    <script src="../public/js/jquery.min.js"></script>
    <script src="scripts/subidaDocs.js"></script>
<?php
}
ob_end_flush();
?>
