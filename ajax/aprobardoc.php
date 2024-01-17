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

function mostrarDatos() {
    $conexion = new Conexion();
    $respuesta = $conexion->datatabledoc();
    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
			$id = $fila["usu_id"];
            $cedula = $fila["usu_cedula"];
            $nombre = $fila["usu_nombre"];
            

            // Agregamos los botones de "Editar" y "Eliminar" en la columna "Opciones"
          /*  $opcionbtn = '<button class="btn_editar"  data_id="' . $id . '">Editar</button>' .
                        '<a href="../ajax/opciones.php?op=eliminarA" "' . $id . '">Eliminar</a>';*/

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
			$tipo = $fila["cat_nombre"];
            

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

