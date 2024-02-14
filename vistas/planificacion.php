
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
  <h1 class="box-title">Registrar Planificación
                                    <button class="btn btn-success" id="btnagregar">
                                        <i class="fa fa-plus-circle"></i> Agregar
                                    </button>
                                    <!-- Botón para regresar -->
                                    <button class="btn btn-primary" id="btnregresar" style="display: none;">
                                        <i class="fa fa-arrow-left"></i> Regresar
                                    </button>
                                </h1>
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
<div style="width:100%" id="listadoregistros">
  <table id="tbllistadop"  class="table table-striped table-bordered table-condensed table-hover"> 
    <thead>
        <th>Id</th>
                                        <th>Proyecto</th>
                                        <th>Empresa</th>
                                        <th>Carrera</th>
                                        <th>Periodo</th>
                                        <th>Fecha Inicio</th>
                                        <th>Fecha Fin</th>
                                        <th>Acción</th>

		
    </thead>
    <tbody>
    </tbody>   
  </table>
	
</div>
		  
 <!-- Formulario oculto -->
  <div id="formulario" style="display: none;">
  <form id="matriz" name="matriz">

<!-- Paso 1: Información de la Empresa -->
    <div class="col-12 form-step" data-step="1">
      <h1 style="margin-left: 10px;">Información de la Empresa</h1>
      <div class="row">
		  <div class="form-group col-lg-6 col-md-6 col-xs-12">
    <label for="empresa">Nombre de la Entidad(*):</label>
    <input type="text" id="empresa" name="empresa" class="form-control">
  </div>
  <div class="form-group col-lg-6 col-md-6 col-xs-12">
    <label for="tutorEmpresarial">Tutor Empresarial</label>
    <input type="text" id="tutorEmpresarial" name="tutorEmpresarial" class="form-control">
  </div>

  <div class="form-group col-lg-6 col-md-6 col-xs-12">
    <label for="encargado">Nombre de la persona a quién va dirigido el oficio(*):</label>
    <input type="text" id="encargado" name="encargado" class="form-control">
  </div>
  <div class="form-group col-lg-6 col-md-6 col-xs-12">
    <label for="titulo">Título Académico(*):</label>
    <input type="text" id="titulo" name="titulo" class="form-control">
  </div>

  <div class="form-group col-lg-6 col-md-6 col-xs-12">
    <label for="cargo">Cargo(*):</label>
    <input type="text" id="cargo" name="cargo" class="form-control">
  </div>
        
        <!-- Otros campos de formulario para la tercera sección -->
      </div>
      <div class="text-center mt-3">
        <button class="btn btn-primary" type="button" onclick="nextPrev(1)">Siguiente</button>
      </div>
    </div>


    <!-- Paso 2: Información de la Carrera -->
    <div class="col-12 form-step" data-step="2">
      <h1 style="margin-left: 10px;">Información de la Carrera</h1>
      
        <div class="form-group col-lg-6 col-md-6 col-xs-12">
          <label for="carrera">Carrera:</label>
          <select id="carrera" name="carrera" class="form-control">
            <option value="">Selecciona</option>
          </select>
        </div>
      
        <div class="form-group col-lg-6 col-md-6 col-xs-12">
          <label for="periodo">Periodo:</label>
          <select id="periodo" name="periodo" class="form-control">
            <option value="">Selecciona</option>
          </select>
         </div>
		
		 <div class="form-group col-lg-6 col-md-6 col-xs-12">
          <label for="cargo">Núcleo Estructurante(*):</label>
          <input type="text" id="nucleo" name="nucleo" class="form-control">
        </div>
		  <div class="form-group col-lg-6 col-md-6 col-xs-12">
          <label for="cargo">Nombre del Proyecto(*):</label>
          <input type="text" id="proyecto" name="proyecto" class="form-control">
        </div>
      <div class="text-center mt-3">
        <button class="btn btn-primary" type="button" onclick="nextPrev(-1)">Anterior</button>
        <button class="btn btn-primary" type="button" onclick="nextPrev(1)">Siguiente</button>
      </div>
    </div>

    <!-- Paso 3: Información de Fechas -->
    <div class="col-12 form-step" data-step="3">
      <h1 style="margin-left: 10px;">Información de Fechas</h1>
      <div class="row">
        <div class="form-group col-lg-6 col-md-6 col-xs-12">
          <label for="fechaInicio">Fecha de Inicio de Actividades Duales:</label>
          <input type="date" id="fechaInicio" name="fechaInicio" class="form-control">
        </div>
        <div class="form-group col-lg-6 col-md-6 col-xs-12">
          <label for="fechafin">Fecha de Fin de Actividades Duales:</label>
          <input type="date" id="fechafin" name="fechafin" class="form-control">
        </div>
		  <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Días programados para la realización dual:</label>
        <input type="number" id="diaspro" name="diaspro" class="form-control">
      </div>
      <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Horas Destinadas para Dualidad:</label>
        <input type="number" id="horasDestinadas" name="horasDestinadas" class="form-control">
      </div>
		<div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Horas Destinadas para el Proyecto Dual:</label>
        <input type="number" id="horasproyecto" name="horasproyecto" class="form-control">
      </div>
		<div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Total de Horas a Cumplir:</label>
        <input type="number" id="totalhoras" name="totalhoras" class="form-control">
      </div>
      <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de Entrega de Documentos del Estudiante:</label>
        <input type="date" id="fechaEntregaDocse" name="de_fechaEntregaDocse" class="form-control">
      </div>
      <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de Entrega de Documentos del Tutor:</label>
        <input type="date" id="fechaFinEntregaDocst" name="fechaFinEntregaDocst" class="form-control">
      </div>
		 <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de Entrega de Documentos del Gestor Local:</label>
        <input type="date" id="fechaFinEntregaDocsg" name="fechaFinEntregaDocsg" class="form-control">
      </div>
        <!-- Otros campos de formulario para la tercera sección -->
      </div>
      <div class="text-center mt-3">
        <button class="btn btn-primary" type="button" onclick="nextPrev(-1)">Anterior</button>
        <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Guardar</button>
      </div>
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
 <script src="scripts/planificacion.js"></script>
 <?php 
}

ob_end_flush();
  ?>
