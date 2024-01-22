
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
  <h1 class="box-title">Bitacora <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i class="fa fa-plus-circle"></i>Agregar</button></h1><?php
$id = $_GET['id'];
//echo  $id;
?>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div style="width:900" id="listadoregistros">
  <table id="tbllistadob"  class="table table-striped table-bordered table-condensed table-hover"> 
    <thead>
        <th>ID</th>
        <th>FECHA <br>dd-mm-aaaa</th>
        <th>HORA DE INGRESO <br>HH-MM</th>
        <th>HORA DE SALIDA <br> HH-MM</th>
        <th>TOTAL <br>HORA/DÍA</th>
        <th>ACTIVIDADES REALIZADAS <br>(DETALLE LAS ACTIVIDADES)</th>
        <th>EXPERIENCIAS ADQUIRIDAS</th>
        <th>APRENDIZAJES LOGRADOS</th>
        <th>PROPUESTAS DE MEJORA</th>
		<th></th>
    </thead>
    <tbody>
    </tbody>   
  </table>
	<button class="btn btn-danger" onclick="window.location.href='bitacora.php'" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
</div>
<div class="panel-body" id="formularioregistros">
  <form method="POST" id="bitacora" enctype="multipart/form-data">

                                        <div class="text-center">
											<h1 align="center">Bitácora</h1>
                                            <h3 class="text-dark">Ingrese correctamente los datos para registrar la actividad
                                                realizada</h3>
                                        </div>
    
                                        <div>
                                             <input class="form-control" type="hidden" name="bita_id" id="bita_id" required value="<?php echo  $id; ?>">
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_fecha">Fecha: dd-mm-aaaa</label>
                                            <input type="date" class="form-control" name="fecha" id="fecha" required>
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_horaIngreso">HORA DE INGRESO: HH-MM</label>
                                            <input type="time" class="form-control" name="horaIngreso"
                                                id="horaIngreso" required>
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_horaSalida">HORA DE SALIDA: HH-MM</label>
                                            <input type="time" class="form-control" name="horaSalida" id="horaSalida"
                                                required>
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_TotalHoras">TOTAL HORAS: HORA/DÍA</label>
                                            <input type="time" class="form-control" name="TotalHoras" id="TotalHoras"
                                                required>
                                        </div>
                                        <!-- Primer campo de texto -->
                                        <div class="form-group col-lg-6 ">
                                            <label for="detb_actividadesRealizadas">Actividades Realizadas:</label>
                                            <textarea id="actividadesRea" name="actividadesRea"
                                                class="form-control" required maxlength="100"
                                                oninput="actualizarContador('detb_actividadesRealizadas', 'caracteresRestantes1')"></textarea>
                                            <small id="caracteresRestantes1">100/100</small>
                                        </div>

                                        <!-- Segundo campo de texto -->
                                        <div class="form-group  col-lg-6">
                                            <label for="detb_experiencias">Experiencias:</label>
                                            <textarea id="experiencias" name="experiencias" class="form-control"
                                                required maxlength="100"
                                                oninput="actualizarContador('detb_experiencias', 'caracteresRestantes2')"></textarea>
                                            <small id="caracteresRestantes2">100/100</small>
                                        </div>

                                        <!-- Tercer campo de texto -->
                                        <div class="form-group  col-lg-6">
                                            <label for="detb_aprendizajes">Aprendizajes:</label>
                                            <textarea id="aprendizajes" name="aprendizajes" class="form-control"
                                                required maxlength="100"
                                                oninput="actualizarContador('detb_aprendizajes', 'caracteresRestantes3')"></textarea>
                                            <small id="caracteresRestantes3">100/100</small>
                                        </div>

                                        <!-- Cuarto campo de texto -->
                                        <div class="form-group  col-lg-6">
                                            <label for="detb_propuestas">Propuestas:</label>
                                            <textarea id="propuestas" name="propuestas" class="form-control" required
                                                maxlength="100"
                                                oninput="actualizarContador('detb_propuestas', 'caracteresRestantes4')"></textarea>
                                            <small id="caracteresRestantes4">100/100</small>
                                        </div>

                                       


                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
 <script src="scripts/bitacoradet.js"></script>
 <?php 
}

ob_end_flush();
  ?>
