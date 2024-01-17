
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
  <h1 class="box-title">Estudiantes <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
  <div class="box-tools pull-right">
    
  </div>
</div>
<!--box-header-->
<!--centro-->
<div style="width:900" id="listadoregistros">
  <table id="tbllistado"  class="table table-striped table-bordered table-condensed table-hover"> 
    <thead>
      <th></th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Celular</th>
      <th>Direccion</th>
      <th>Carrera</th>
      <th>Cedula</th>
      <th>Periodo</th>
		<th>Login</th>
		<th>Clave</th>
    </thead>
    <tbody>
    </tbody>   
  </table>
</div>
<div class="panel-body" id="formularioregistros">
  <form action="" name="estudiante" id="estudiante" method="POST">
    <div class="form-group col-lg-12 col-md-12 col-xs-12">
      <label for="">Nombre(*):</label>
     
      <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
    </div>
   
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Cédula(*):</label>
      <input type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula" maxlength="20">
    </div>
     <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Teléfono</label>
      <input class="form-control" type="text" name="telefono" id="telefono" maxlength="20" placeholder="Número de telefono">
    </div>
	  <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Correo</label>
      <input class="form-control" type="text" name="correo" id="correo" maxlength="20" placeholder="Número de telefono">
    </div>
	  <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Direccion</label>
      <input class="form-control" type="text" name="direccion" id="direccion" maxlength="20" placeholder="Número de telefono">
    </div>
	  <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Carrera</label>
      <select class="form-control" type="text" name="carrera" id="carrera" maxlength="20" placeholder="Número de telefono">
	
      </select>
    </div>
	  <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Periodo</label>
      <select class="form-control" type="text" name="periodo" id="periodo" maxlength="20" placeholder="Número de telefono"> </select>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Login(*):</label>
      <input class="form-control" type="text" name="login" id="login" maxlength="20" placeholder="nombre de usuario" required>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label for="">Clave(*):</label>
  
      <input class="form-control" type="password" name="clave" id="clave" maxlength="64" placeholder="Clave">
    </div>
    <!--<div class="form-group col-lg-6 col-md-6 col-xs-12">
      <label>Permisos</label>
      <ul id="permiso" style="list-style: none;">
        
      </ul>
    </div>-->
      
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
 <script src="scripts/estudiante.js"></script>



 <?php 
}

ob_end_flush();
  ?>
