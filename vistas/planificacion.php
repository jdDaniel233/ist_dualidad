<?php 
//activamos almacenamiento en el buffer
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
  header("Location: login.html");
}else{

require 'header.php';
if ($_SESSION['Acceso']==1) {
 ?>
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="row">
        <div class="col-md-12">
      <div class="box">
<div class="box-header with-border">
  <h1 class="box-title">Planificación 
   <!-- <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i class="fa fa-plus-circle"></i>Agregar</button>--></h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<!--<div style="width:900" id="listadoregistros">
  <table id="tbllistado"  class="table table-striped table-bordered table-condensed table-hover"> 
    <thead>
      <th></th>
      <th>Nombre</th>
      <th>Usuario</th>
      <th>Cédula</th>
      <th>Teléfono</th>
      <th>Email</th>
      <th>Cargo</th>
      <th>Estado</th>
    </thead>
    <tbody>
    </tbody>   
  </table>
</div>-->
<div class="panel-body" id="formularioregistros">
 <form action="" name="otroFormulario" id="otroFormulario" method="POST">
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Carrera(*):</label>
        <input class="form-control" type="text" name="carrera" id="carrera" maxlength="100" placeholder="Carrera" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Nombre del Estudiante(*):</label>
        <input class="form-control" type="text" name="nombreEstudiante" id="nombreEstudiante" maxlength="100" placeholder="Nombre del Estudiante" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Cedula(*):</label>
        <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula" maxlength="20" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Nivel/Semestre academico(*):</label>
        <input class="form-control" type="text" name="nivelSemestre" id="nivelSemestre" maxlength="100" placeholder="Nivel/Semestre academico" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Nombre de la Entidad(*):</label>
        <input class="form-control" type="text" name="nombreEntidad" id="nombreEntidad" maxlength="100" placeholder="Nombre de la Entidad" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Tipo de Documentación(*):</label>
        <input class="form-control" type="text" name="tipoDocumentacion" id="tipoDocumentacion" maxlength="100" placeholder="Tipo de Documentación" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Gestor local (responsable de carrera)(*):</label>
        <input class="form-control" type="text" name="gestorLocal" id="gestorLocal" maxlength="100" placeholder="Gestor local (responsable de carrera)" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Tutor academico de la Carrera(*):</label>
        <input class="form-control" type="text" name="tutorAcademico" id="tutorAcademico" maxlength="100" placeholder="Tutor academico de la Carrera" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Tutor Empresarial(*):</label>
        <input class="form-control" type="text" name="tutorEmpresarial" id="tutorEmpresarial" maxlength="100" placeholder="Tutor Empresarial" required>
    </div>

     <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Nombre de la persona a quien va dirigido el oficio(*):</label>
        <input class="form-control" type="text" name="nombreDirigido" id="nombreDirigido" maxlength="100" placeholder="Nombre de la persona a quien va dirigido el oficio" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Titulo academico(*):</label>
        <input class="form-control" type="text" name="tituloAcademico" id="tituloAcademico" maxlength="100" placeholder="Titulo academico" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Cargo(*):</label>
        <input class="form-control" type="text" name="cargo" id="cargo" maxlength="100" placeholder="Cargo" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de inicio de las actividades duales(*):</label>
        <input class="form-control" type="date" name="fechaInicioActividades" id="fechaInicioActividades" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de fin de las actividades duales(*):</label>
        <input class="form-control" type="date" name="fechaFinActividades" id="fechaFinActividades" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Núcleo estructurante(*):</label>
        <input class="form-control" type="text" name="nucleoEstructurante" id="nucleoEstructurante" maxlength="100" placeholder="Núcleo estructurante" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Días programados para la realización dual(*):</label>
        <input class="form-control" type="text" name="diasProgramados" id="diasProgramados" maxlength="100" placeholder="Días programados para la realización dual" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Horas destinadas para la dualidad(*):</label>
        <input class="form-control" type="text" name="horasDualidad" id="horasDualidad" maxlength="100" placeholder="Horas destinadas para la dualidad" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Horas destinadas para el proyecto dual(*):</label>
        <input class="form-control" type="text" name="horasProyectoDual" id="horasProyectoDual" maxlength="100" placeholder="Horas destinadas para el proyecto dual" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Total de horas a cumplir - Estudiante(*):</label>
        <input class="form-control" type="text" name="totalHorasEstudiante" id="totalHorasEstudiante" maxlength="100" placeholder="Total de horas a cumplir - Estudiante" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de entrega de documentos por parte del estudiante(*):</label>
        <input class="form-control" type="date" name="fechaEntregaEstudiante" id="fechaEntregaEstudiante" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de entrega de documentos por parte del tutor(*):</label>
        <input class="form-control" type="date" name="fechaEntregaTutor" id="fechaEntregaTutor" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Fecha de entrega de documentos por parte del gestor local(*):</label>
        <input class="form-control" type="date" name="fechaEntregaGestorLocal" id="fechaEntregaGestorLocal" required>
    </div>

    <div class="form-group col-lg-6 col-md-6 col-xs-12">
        <label for="">Proyecto(*):</label>
        <input class="form-control" type="text" name="proyecto" id="proyecto" maxlength="100" placeholder="Proyecto" required>
    </div>

    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <button class="btn btn-primary" type="submit" id="btnGuardarOtro"><i class="fa fa-save"></i> Guardar</button>
        <button class="btn btn-danger" onclick="cancelarFormulario()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
 <script src="scripts/estudiante.js"></script>


 <?php 
}

ob_end_flush();
  ?>
