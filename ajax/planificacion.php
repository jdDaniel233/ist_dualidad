<?php
require_once '../modelos/planificacion.php';

$conexion = new Conexion();

switch ($_GET["op"]) {
		case 'combo_carrera':
		$resultado = $conexion->combo_carrera();
		while ($reg = $resultado->fetch_object()){
		echo '<option value="'.$reg->cat_id.'">'.$reg->cat_nombre.'</option>';
		}
		break;
		
		case 'combo_periodo':
		$resultado = $conexion->combo_periodo();
		while ($reg = $resultado->fetch_object()){
		echo '<option value="'.$reg->cat_id.'">'.$reg->cat_nombre.'</option>';
		}
		break;
    case 'insertar':
        guardar();
        break;
	 case 'mostrarDatos2':
        mostrarDatos2();
        break;
		case 'mostrarDatos':
        mostrarDatos();
        break;
    case 'guardarDatos':
        guardarDatos();
        break;
		 case 'guardarEstudiantes':
        guardarEstudiantes();
        break;
		 case 'mostrarEstudinates':
        mostrarEstudinates();
        break;
		case 'mostrarAsigandos':
        mostrarAsigandos();
        break;
		case 'eliminarAsignacion':
        eliminarAsignacion();
        break;
    
    case 'combo_estado':
        $resultado = $conexion->combo_estado();
		while ($reg = $resultado->fetch_object()){
		echo '<option value="'.$reg->cat_id.'">'.$reg->cat_nombre.'</option>';
		}
        break;
        default:
        // Opción inválida
        echo 'Opción inválida';
        break;
}


function guardar() {
    $conexion = new Conexion();

    // Obtén los datos del formulario usando $_POST
    $empresa = $_POST['empresa'];
    $tutorEmpresarial = $_POST['tutorEmpresarial'];
    $encargado = $_POST['encargado'];
    $titulo = $_POST['titulo'];
    $cargo = $_POST['cargo'];
    $carrera = $_POST['carrera'];
    $periodo = $_POST['periodo'];
    $nucleo = $_POST['nucleo'];
    $proyecto = $_POST['proyecto'];
	$fechaInicio = $_POST['fechaInicio'];
    $fechafin = $_POST['fechafin'];
    $diaspro = $_POST['diaspro'];
    $horasDestinadas = $_POST['horasDestinadas'];
    $horasproyecto = $_POST['horasproyecto'];
    $totalhoras = $_POST['totalhoras'];
    $fechaEntregaDocse = $_POST['fechaEntregaDocse'];
    $fechaFinEntregaDocst = $_POST['fechaFinEntregaDocst'];
    $fechaFinEntregaDocsg = $_POST['fechaFinEntregaDocsg'];
    
    // Llama a la función de guardar en tu modelo
    $resultado = $conexion->guardarPlanificacion($empresa, $tutorEmpresarial, $encargado, $titulo, $cargo, $carrera, $periodo, $nucleo, $proyecto, $fechaInicio, $fechafin, $diaspro, $horasDestinadas, $horasproyecto, $totalhoras, $fechaEntregaDocse, $fechaFinEntregaDocst, $fechaFinEntregaDocsg);
  

    // Devuelve la respuesta al cliente (éxito o fallo)
    echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar datos incorrectos";
}

function mostrarDatos2() {
    $id = $_POST['id'];
    $conexion = new Conexion();
        $respuesta = $conexion->datatablebitacora($id);
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$idFila = $fila["bit_id"];
                $nombre = $fila["usu_nombre"];
                $documento = $fila["cat_nombre"];
                $creacion = $fila["bit_fechacreacion"];
            

            $datos[] = array(
                "id" => $idFila,
                    "nombre" => $nombre,
                    "documento" => $documento,
                    "creacion" => $creacion,
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}



function mostrarDatos() {
  
    $conexion = new Conexion();
        $respuesta = $conexion->datatableplani();
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$id = $fila["pla_id"];
			$proyecto = $fila["pla_proyecto"];
			$empresa = $fila["pla_empresa"];
            $carrera = $fila["cat_carrera"];
			$periodo = $fila["cat_periodo"];
			$fechainicio = $fila["pla_fechainicio"];
			$fechafin = $fila["pla_fechafin"];
			
            

            $datos[] = array(
                "id" => $id,
                    "proyecto" => $proyecto,
                    "empresa" => $empresa,
                    "carrera" => $carrera,
				"periodo" => $periodo,
					"fechainicio" => $fechainicio,
                    "fechafin" => $fechafin,
                    
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}

function guardarEstudiantes() {
    // Recibe los datos del AJAX
    $parametroUrl = $_POST['parametroUrl']; 
    $ids = $_POST['ids'];
    $Gestor = $_POST['Gestor'];
    $Tutor = $_POST['Tutor'];

    $conexion = new Conexion();

    // Itera sobre los IDs seleccionados y guarda cada bitácora
    foreach ($ids as $id) {
       
        $resultado = $conexion->guardarAsigacionEst($parametroUrl,$id,$Gestor,$Tutor);

    }

    // Devuelve una respuesta al cliente
    echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar datos incorrectos";
}

function mostrarEstudinates() {
    $conexion = new Conexion();
    $respuesta = $conexion->datatableEst();
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$id = $fila["est_id"];
            $nombre = $fila["est_nombre"];
			$correo = $fila["est_correoInstitucional"];
			$celular = $fila["est_celular"];
			$direccion = $fila["est_direccion"];
			$carrera = $fila["cat_carrera"];
			$cedula = $fila["est_cedula"];
			$periodo = $fila["cat_periodo"];
			$login = $fila["est_login"];
			//$clave = $fila["est_clave"];
			
           
            $datos[] = array(
                "id" => $id,
                "nombre" => $nombre,
				"correo" => $correo,
				"celular" => $celular,
				"direccion" => $direccion,
				"carrera" => $carrera,
				"cedula" => $cedula,
				"periodo" => $periodo,
				"login" => $login,
				"clave" => $clave,
				
				
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}

function mostrarAsigandos() {
  
    $conexion = new Conexion();
        $respuesta = $conexion->datatableAsignados();
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$id= $fila["detplan_id"];
			$empresa = $fila["pla_empresa"];
			$proyecto = $fila["pla_proyecto"];
			$est_id= $fila["est_id"];
            $estudiante = $fila["est_nombre"];
			$gestor = $fila["usu_gestor"];
			$tutor = $fila["usu_tutor"];
			
			
            

            $datos[] = array(
					"id" => $id,
                	"empresa" => $empresa,
                    "proyecto" => $proyecto,
				"est_id" => $est_id,
                    "estudiante" => $estudiante,
             		"gestor" => $gestor,
					"tutor" => $tutor,
                    
                    
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}

function eliminarAsignacion() {
    $conexion = new Conexion();

    // Obtén los datos del formulario usando $_POST
    $id = $_POST['id'];
	$est_id= $_POST['est_id'];
    $resultado = $conexion->eliminarAsignacion($id,$est_id);

   echo $resultado ? "Datos eliminados correctamente" : "No se puede eliminar";
}
