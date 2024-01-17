<?php 
session_start();
/*require_once "../modelos/estudiante.php";*/
require_once '../modelos/estudiante.php';
$estudiante = new Estudiante();
switch ($_GET["op"]) {
		case 'combo_carrera':
		$resultado = $estudiante->combo_carrera();
		while ($reg = $resultado->fetch_object()){
		echo '<option value="'.$reg->cat_id.'">'.$reg->cat_nombre.'</option>';
		}
		break;
		
		case 'combo_periodo':
		$resultado = $estudiante->combo_periodo();
		while ($reg = $resultado->fetch_object()){
		echo '<option value="'.$reg->cat_id.'">'.$reg->cat_nombre.'</option>';
		}
		break;
		
    case 'guardarDatos':
        guardarDatos();
        break;
		
case 'listar':
	$rspta=$estudiante->listar();
	$data=Array();
	while ($reg=$rspta->fetch_object()) {
		$data[]=array(
			"0"=>($reg->est_condicion)?'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->est_id.')"><i class="fa fa-pencil"></i></button>'.' '.'<button class="btn btn-danger btn-xs" onclick="desactivar('.$reg->est_id.')"><i class="fa fa-close"></i></button>':'<button class="btn btn-warning btn-xs" onclick="mostrar('.$reg->est_id.')"><i class="fa fa-pencil"></i></button>'.' '.'<button class="btn btn-primary btn-xs" onclick="activar('.$reg->est_id.')"><i class="fa fa-check"></i></button>',
			"1"=>$reg->est_nombre,
			"2"=>$reg->est_correoInstitucional,
			"3"=>$reg->est_celular,
			"4"=>$reg->est_direccion,
			"5"=>$reg->est_carrera,
			"6"=>$reg->est_cedula,
			"7"=>$reg->est_periodo,
			"8"=>$reg->est_login,
			"9"=>$reg->est_clave,
			"10"=>($reg->est_condicion)?'<span class="label bg-green">Activado</span>':'<span class="label bg-red">Desactivado</span>'
		);
	}

	$results=array(
             "sEcho"=>1,//info para datatables
             "iTotalRecords"=>count($data),//enviamos el total de registros al datatable
             "iTotalDisplayRecords"=>count($data),//enviamos el total de registros a visualizar
             "aaData"=>$data); 
	echo json_encode($results);
	break;
    
   
        default:
        // Opción inválida
        echo 'Opción inválida';
        break;
}

function mostrarDatos() {
    $conexion = new Conexion();
    $respuesta = $conexion->datatableClientes();
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
            $id = $fila["art_id"];
            $nombre = $fila["art_nombre"];
            $descripcion = $fila["art_descripcion"];

            // Agregamos los botones de "Editar" y "Eliminar" en la columna "Opciones"
            $opcionbtn = '<button class="btn_editar"  data_id="' . $id . '">Editar</button>' .
                        '<a href="../ajax/opciones.php?op=eliminarA" "' . $id . '">Eliminar</a>';

            $datos[] = array(
                "id" => $id,
                "nombre" => $nombre,
                "descripcion" => $descripcion,
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}

function guardarDatos() {
   
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $carrera = $_POST['carrera'];
    $periodo = $_POST['periodo'];
    $login = $_POST['login'];
    $clave = $_POST['clave'];

    $estudiante = new Estudiante();
    $resultado = $estudiante->guardarEstudiante($nombre, $correo, $telefono, $direccion, $carrera, $cedula, $periodo, $login, $clave);
echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar Login existente";
   /* if ($resultado) {
        echo "El estudiante se ha registrado exitosamente.";
    } else {
        echo "Error al registrar el estudiante.";
    }*/
}



function eliminarArtista() {
    $id = $_POST['id'];
    $conexion = new Conexion();
    $resultado = $conexion->eliminarArtista($id);
echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar Login existente";
   /* if ($resultado) {
        echo "El artista se ha eliminado exitosamente.";
    } else {
        echo "Error al eliminar el artista.";
    }*/
}


?>

