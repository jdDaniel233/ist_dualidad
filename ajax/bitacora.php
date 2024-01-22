<?php
require_once '../modelos/bitacora.php';

$conexion = new Conexion();

switch ($_GET["op"]) {
    case 'guardaryeditar':
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


function guardarDatos() {
	
   
    $id = $_POST['id'];
  

    $conexion = new Conexion();
    $resultado = $conexion->guardarBitacora($id);
echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar datos incorrectos";
   
}

/*function mostrarDatos2() {
    ob_end_clean(); // Desactivar el búfer de salida

    header('Content-Type: application/json; charset=utf-8');

    try {
        $id = $_POST['id'];
        $conexion = new Conexion();
        $respuesta = $conexion->datatablebitacora($id);
        $datos = array();

        if ($respuesta->num_rows > 0) {
            while ($fila = $respuesta->fetch_assoc()) {
                $idFila = $fila["bit_id"];
                $nombre = $fila["est_cedula"];
                $documento = $fila["cat_tipodoc"];
                $creacion = $fila["bit_fechacreacion"];

                $datos[] = array(
                    "id" => $idFila,
                    "nombre" => $nombre,
                    "documento" => $documento,
                    "creacion" => $creacion,
                );
            }
        }

        echo json_encode(array("data" => $datos), JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        echo json_encode(array('error' => $e->getMessage()));
    }
}
*/
function mostrarDatos2() {
    $id = $_POST['id'];
    $conexion = new Conexion();
        $respuesta = $conexion->datatablebitacora($id);
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$idFila = $fila["bit_id"];
                $nombre = $fila["est_nombre"];
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

function guardar() {
    $conexion = new Conexion();

    // Obtén los datos del formulario usando $_POST
    $bita_id = $_POST['bita_id'];
    $fecha = $_POST['fecha'];
    $horaIngreso = $_POST['horaIngreso'];
    $horaSalida = $_POST['horaSalida'];
    $totalHoras = $_POST['TotalHoras'];
    $actividadesRea = $_POST['actividadesRea'];
    $experiencias = $_POST['experiencias'];
    $aprendizajes = $_POST['aprendizajes'];
    $propuestas = $_POST['propuestas'];
    

    // ... (Validaciones u otras operaciones necesarias)

    // Llama a la función de guardar en tu modelo
    $resultado = $conexion->guardarBitacoraDetalle($bita_id, $fecha, $horaIngreso, $horaSalida, $totalHoras, $actividadesRea, $experiencias, $aprendizajes, $propuestas);

    // Devuelve la respuesta al cliente (éxito o fallo)
    echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar datos incorrectos";
}

function mostrarDatos() {
  
    $conexion = new Conexion();
        $respuesta = $conexion->datatablebitacoradet();
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$detb_id = $fila["detb_id"];
			$id_bit = $fila["bit_id"];
            $fecha = $fila["detb_fecha"];
			$horaIngreso = $fila["detb_horaIngreso"];
			$horaSalida = $fila["detb_horaSalida"];
			$TotalHoras = $fila["detb_TotalHoras"];
			$actividades = $fila["detb_actividadesRealizadas"];
			$experiencias = $fila["detb_experiencias"];
			$aprendizajes = $fila["detb_aprendizajes"];
			$propuestas = $fila["detb_propuestas"];
            

            $datos[] = array(
                "id" => $detb_id,
                    "id_bit" => $id_bit,
                    "fecha" => $fecha,
                    "horaIngreso" => $horaIngreso,
					"horaSalida" => $horaSalida,
                    "TotalHoras" => $TotalHoras,
                    "actividades" => $actividades,
				    "experiencias" => $experiencias,
                    "aprendizajes" => $aprendizajes,
                    "propuestas" => $propuestas,
                
                //"opcionbtn" => $opcionbtn,
            );
        }
        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}

