 <?php 
if (strlen(session_id())<1) 
  session_start();

  ?>
 <!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PORTAFOLIO DOCENTE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
	
  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="../public/css/font-awesome.min.css">

  <link rel="stylesheet" href="../public/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../public/css/_all-skins.min.css">
  <!-- Morris chart --><!-- Daterange picker -->

<!-- DATATABLES-->
<link rel="stylesheet" href="../public/datatables/jquery.dataTables.min.css">
<link rel="stylesheet" href="../public/datatables/buttons.dataTables.min.css">
<link rel="stylesheet" href="../public/datatables/responsive.dataTables.min.css">
<link rel="stylesheet" href="../public/css/bootstrap-select.min.css">
<link rel="stylesheet" href="../public/css/daterangepicker.css">
</head>
<body class="hold-transition skin-blue sidebar-mini " >

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="escritorio.php" class="logo" >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><font size="4">=></font></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><font size="4">MENU</font></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span><font size="4" style="color:#FFF">PRACTICAS DE FORMACION DUAL</font></span>
        
      </a>
      
      <div class="navbar-custom-menu">
       
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="hidden-xs"><?php echo $_SESSION['usu_nombre']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
             
                <p>
                  IST17J
                  <small>Noviembre 2021</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
  
                </div>
                <div class="pull-right">
                  <a href="../ajax/usuario.php?op=salir" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
</header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu" data-widget="tree">

<br>
               <?php 
$_SESSION['Escritorio']==1;
if ($_SESSION['Actas']==1) {
  echo ' <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Cargar documentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
                       
                    
			 <li><a href="subidaDocs.php"><i class="fa fa-circle-o"></i> Subir documentos</a></li> 
			 <li><a href="documentosest.php"><i class="fa fa-circle-o"></i>Ver Documentos Cargados</a></li>
			
          </ul>
        </li>';
}
        ?>
               <?php 
if ($_SESSION['Activos']==1) {
  echo ' <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Opciones de Gestor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="primera.php"><i class="fa fa-circle-o"></i> Registrar docentes</a></li>
		   <li><a href="estudiante.php"><i class="fa fa-circle-o"></i> Registrar estudiantes</a></li>
		   <li><a href="aprobardoc.php"><i class="fa fa-circle-o"></i>Aprobar documentos</a></li>
		   <li><a href="docs.php"><i class="fa fa-circle-o"></i>Documentos Subidos</a></li>
		   <li><a href="categoria.php"><i class="fa fa-circle-o"></i> Catálogos</a></li>
          </ul>
        </li>';
}
        ?>
        
               <?php 
if ($_SESSION['Generación']==1) {
  echo '<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Llenar documentos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  <li><a href="historialempresa.php"><i class="fa fa-circle-o"></i> Historial de empresas</a></li>
		  
           <li><a href="bitacora.php"><i class="fa fa-circle-o"></i> Bitácoras</a></li>
		   <li><a href="informepro.php"><i class="fa fa-circle-o"></i> Proyecto Empresarial</a></li>
		   <li><a href="documentoscheck.php"><i class="fa fa-circle-o"></i> Documentos Check List </a></li>
		    
		   
		   
          </ul>
        </li>';
}
        ?>

                             <?php 
if ($_SESSION['Acceso']==1) {
  echo '  <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i> <span>Crear Matríz</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="planificacion.php"><i class="fa fa-circle-o"></i> Asignación</a></li>
			            
          </ul>
        </li>';
}
        ?>  
                                     <?php 
if ($_SESSION['Reportes']==1) {
  echo '     <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          
          </ul>
        </li>';
}
        ?>  
              
                                                <?php 
if ($_SESSION['Custodios']==1) {
  echo '<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Opciones Tutor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
		  <li><a href=""><i class="fa fa-circle-o"></i> Informe del tutor</a></li>
		   <li><a href=""><i class="fa fa-circle-o"></i> Bitácora Visita Empresas</a></li>
           <li><a href="rubricaproy2.php"><i class="fa fa-circle-o"></i> Rúbrica del Proyecto</a></li>
		   <li><a href="fichaeva.php"><i class="fa fa-circle-o"></i> Ficha de Evaluación</a></li>

          </ul>
        </li>';
}
        ?>     

        
        
      </ul>
    </section>
    <!-- /.sidebar -->
 
  </aside>