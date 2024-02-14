<?php
require_once '../modelos/aprobardoc.php';

$conexion = new Conexion();

switch ($_GET["op"]) {
    case 'mostrarDatos':
        mostrarDatos();
        break;
	 case 'mostrarDatos2':
        mostrarDatos2();
        break;
		case 'mostrarDatos3':
        mostrarDatos3();
        break;
    case 'guardarDatos':
        guardarDatos();
        break;
	case 'guardarAprobacion':
        guardarAprobacion();
        break;
		case 'eliminar':
        eliminar();
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



function mostrarDatos() {
    $conexion = new Conexion();
    $respuesta = $conexion->datatabledoc();
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$id = $fila["usu_id"];
            $cedula = $fila["est_cedula"];
            $nombre = $fila["est_nombre"];
            $datos[] = array(
                "id" => $id,
				"cedula" => $cedula,
                "nombre" => $nombre,
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}

function mostrarDatos2() {
    $id = $_GET['id'];
    $conexion = new Conexion();
    $respuesta = $conexion->datatabledoc2($id);
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$id = $fila["doce_id"];
            $url = $fila["doce_url"];
            $fecha = $fila["doce_fecha"];
			$tipo = $fila["documento"];
            

            // Agregamos los botones de "Editar" y "Eliminar" en la columna "Opciones"
          /*  $opcionbtn = '<button class="btn_editar"  data_id="' . $id . '">Editar</button>' .
                        '<a href="../ajax/opciones.php?op=eliminarA" "' . $id . '">Eliminar</a>';*/

            $datos[] = array(
                "id" => $id,
				"url" => $url,
                "fecha" => $fecha,
				"tipo" => $tipo,
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}
function mostrarDatos3() {
    $id = $_GET['id'];
    $conexion = new Conexion();
    $respuesta = $conexion->datatabledoc3($id);
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$id = $fila["doce_id"];
            $url = $fila["doce_url"];
            $fecha = $fila["doce_fecha"];
			$tipo = $fila["documento"];
			$estado = $fila["estado"];
			$observacion = $fila["doce_observacion"];
            

            // Agregamos los botones de "Editar" y "Eliminar" en la columna "Opciones"
          /*  $opcionbtn = '<button class="btn_editar"  data_id="' . $id . '">Editar</button>' .
                        '<a href="../ajax/opciones.php?op=eliminarA" "' . $id . '">Eliminar</a>';*/

            $datos[] = array(
                "id" => $id,
				"url" => $url,
                "fecha" => $fecha,
				"tipo" => $tipo,
				"estado" => $estado,
				"observacion" => $observacion,
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}
function guardarAprobacion() {
    // Asegúrate de recibir correctamente el parámetro 'idFila' desde la solicitud POST
    $idFila = isset($_POST['idFila']) ? $_POST['idFila'] : null;

    // Obtén el resto de los parámetros
    $estado = isset($_POST['estado']) ? $_POST['estado'] : null;
    $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : null;
   

    $conexion = new Conexion();
    $resultado = $conexion->guardarAprobacion($idFila,$estado, $observaciones);
echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar datos incorrectos";
   
}

function eliminar() {
    $conexion = new Conexion();

    // Obtén los datos del formulario usando $_POST
    $id_doc = $_POST['id_doc'];
    $resultado = $conexion->eliminar($id_doc);

   echo $resultado ? "Datos eliminados correctamente" : "No se puede eliminar";
}
