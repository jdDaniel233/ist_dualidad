
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
  <h1 class="box-title">PROYECTO EMPRESARIAL <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->

<div class="panel-body" id="formularioregistros">
 <form id="informe">
                                <div>
                                    <input type="hidden" class="form-control" name="cedula" id="cedula"
                                        value="<?php echo $cedula ?>" readonly>
                                </div>

                                <div>
                                    <input type="hidden" class="form-control" name="id" id="id"
                                        value="<?php echo $id ?>" readonly>
                                </div>

                                <div>
                                    <input type="hidden" class="form-control" name="idInforme" id="idInforme">
                                    
                                </div>
                                
                                <div class="form-group col-lg-6 text-center">
                                    <label for="inf_fechaInicioR">Fecha real de inicio de dualidad</label>
                                    <input type="date" class="form-control" name="inf_fechaInicioR" id="inf_fechaInicioR" required>
                                </div>

                                <div class="form-group col-lg-6 text-center">
                                <label for="inf_fechaFinR">Fecha real de fin de dualidad</label>
                                    <input type="date" class="form-control" name="inf_fechaFinR" id="inf_fechaFinR" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="inf_resumen">Resumen Ejecutivo:</label>
                                    <textarea id="inf_resumen" name="inf_resumen" class="form-control" required maxlength="100"
                                        oninput="actualizarContador('inf_resumen', 'caracteresRestantes1')"></textarea>
                                    <small id="caracteresRestantes1">100/100</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="inf_objetivo">Antecedentes:</label>
                                    <textarea id="inf_objetivo" name="inf_objetivo" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_objetivo', 'caracteresRestantes2')"></textarea>
                                    <small id="caracteresRestantes2">100/100</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="inf_propuesta">Objetivo General:</label>
                                    <textarea id="inf_propuesta" name="inf_propuesta" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_propuesta', 'caracteresRestantes3')"></textarea>
                                    <small id="caracteresRestantes3">100/100</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="inf_conclusiones">Objetivos especificos:</label>
                                    <textarea id="inf_conclusiones" name="inf_conclusiones" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_conclusiones', 'caracteresRestantes4')"></textarea>
                                    <small id="caracteresRestantes4">100/100</small>
                                </div>

                                <div class="form-group col-lg-6 col-lx-6">
                                    <label for="inf_recomendaciones">Propuesta y ejecucion:</label>
                                    <textarea id="inf_recomendaciones" name="inf_recomendaciones" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_recomendaciones', 'caracteresRestantes5')"></textarea>
                                    <small id="caracteresRestantes5">100/100</small>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="inf_referencias">Plan Economico-Financiero:</label>
                                    <textarea id="inf_referencias" name="inf_referencias" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_referencias', 'caracteresRestantes6')"></textarea>
                                    <small id="caracteresRestantes6">100/100</small>
                                </div>
	 <div class="form-group col-lg-6 ">
                                    <label for="inf_referencias">Conclusiones:</label>
                                    <textarea id="inf_referencias" name="inf_referencias" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_referencias', 'caracteresRestantes6')"></textarea>
                                    <small id="caracteresRestantes6">100/100</small>
                                </div>
	 							<div class="form-group col-lg-6 ">
                                    <label for="inf_referencias">Recomendaciones:</label>
                                    <textarea id="inf_referencias" name="inf_referencias" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_referencias', 'caracteresRestantes6')"></textarea>
                                    <small id="caracteresRestantes6">100/100</small>
                                </div>
	 							<div class="form-group col-lg-6 ">
                                    <label for="inf_referencias">Bibliografia:</label>
                                    <textarea id="inf_referencias" name="inf_referencias" class="form-control" required
                                        maxlength="100"
                                        oninput="actualizarContador('inf_referencias', 'caracteresRestantes6')"></textarea>
                                    <small id="caracteresRestantes6">100/100</small>
                                </div>
	 <div class="form-group col-lg-5 text-center ">
                                        <label for="deti_foto">Medios de verificación</label>
                                        <br>
                                        <img id="foto" name="foto" style="display: none; max-width: 100%; max-height: 200px; margin-top: 10px;" hidden>

                                        <img id="imagen-preview" src="#"

                                        style="display: none; max-width: 100%; max-height: 200px; margin-top: 10px;" >
                                        <input type="file" class="form-control" name="deti_foto" id="deti_foto"
                                            accept="image/jpeg, image/png" >
                                    </div>

                                <div class="form-group col-lg-12 text-center">
                                    <button class="btn btn-primary m-2" type="submit">
                                        <i class="fa fa-save"></i> Guardar información
                                    </button>
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
 <script src="scripts/usuario.js"></script>
 <?php 
}

ob_end_flush();
  ?>
