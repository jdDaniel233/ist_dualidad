<?php
session_start();
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
    
    case 'eliminar':
        eliminar();
        break;
		 case 'eliminarenca':
        eliminarenca();
        break;
		case 'editar':
        editar();
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

    $resultado = $conexion->guardarBitacoraDetalle($bita_id, $fecha, $horaIngreso, $horaSalida, $totalHoras, $actividadesRea, $experiencias, $aprendizajes, $propuestas);

    // Devuelve la respuesta al cliente (éxito o fallo)
    if ($resultado === true) {
        echo  "Datos registrados correctamente";
    } elseif ($resultado === "lleno") {
        echo  "La bitácora está llena. Solo se permiten 6 registros por bitácora.";
    } else {
       // echo  "Error al registrar datos. Inténtalo nuevamente.";
		 echo  "La bitácora está llena. Solo se permiten 6 registros por bitácora.";
    }
}

function editar() {
    $conexion = new Conexion();

    // Obtén los datos del formulario usando $_POST
    $bita_id2 = $_POST['bita_id2'];
    $fecha2 = $_POST['fecha2'];
    $horaIngresoModal = $_POST['horaIngresoModal'];
    $horaSalidaModal = $_POST['horaSalidaModal'];
    $TotalHorasModal = $_POST['TotalHorasModal'];
    $actividadesRea2 = $_POST['actividadesRea2'];
    $experiencias2 = $_POST['experiencias2'];
    $aprendizajes2 = $_POST['aprendizajes2'];
    $propuestas2 = $_POST['propuestas2'];
	$id_reg = $_POST['id_reg'];

    $resultado = $conexion->EditarBitacoraDetalle($bita_id2, $fecha2, $horaIngresoModal, $horaSalidaModal, $TotalHorasModal, $actividadesRea2, $experiencias2, $aprendizajes2, $propuestas2,$id_reg);

   echo $resultado ? "Datos editados correctamente" : "No se puede editar";
}

function eliminar() {
    $conexion = new Conexion();

    // Obtén los datos del formulario usando $_POST
    $id_reg = $_POST['id_reg'];
    $resultado = $conexion->eliminar($id_reg);

   echo $resultado ? "Datos eliminados correctamente" : "No se puede eliminar";
}

function eliminarenca() {
    $conexion = new Conexion();

    // Obtén los datos del formulario usando $_POST
    $idFila = $_POST['idFila'];
    $resultado = $conexion->eliminarenca($idFila);

   echo $resultado ? "Datos eliminados correctamente" : "No se puede eliminar";
}


function mostrarDatos() {
    $id = $_GET['id'];
    $conexion = new Conexion();
    $respuesta = $conexion->datatablebitacoradet($id);

    if ($respuesta->num_rows > 0) {
        $datos = array();
        while ($fila = $respuesta->fetch_assoc()) {
            // Establecer variables de sesión
            $_SESSION['detb_id'] = $fila["detb_id"];
            $_SESSION['id_bit'] = $fila["bit_id"];
            $_SESSION['fecha'] = $fila["detb_fecha"];
            $_SESSION['horaIngreso'] = $fila["detb_horaIngreso"];
            $_SESSION['horaSalida'] = $fila["detb_horaSalida"];
            $_SESSION['TotalHoras'] = $fila["detb_TotalHoras"];
            $_SESSION['actividades'] = $fila["detb_actividadesRealizadas"];
            $_SESSION['experiencias'] = $fila["detb_experiencias"];
            $_SESSION['aprendizajes'] = $fila["detb_aprendizajes"];
            $_SESSION['propuestas'] = $fila["detb_propuestas"];

            // Construir el array de datos
            $datos[] = array(
                "id" => $_SESSION['detb_id'],
                "id_bit" => $_SESSION['id_bit'],
                "fecha" => $_SESSION['fecha'],
                "horaIngreso" => $_SESSION['horaIngreso'],
                "horaSalida" => $_SESSION['horaSalida'],
                "TotalHoras" => $_SESSION['TotalHoras'],
                "actividades" => $_SESSION['actividades'],
                "experiencias" => $_SESSION['experiencias'],
                "aprendizajes" => $_SESSION['aprendizajes'],
                "propuestas" => $_SESSION['propuestas'],
                //"opcionbtn" => $opcionbtn,
            );
        }

        echo json_encode(array("data" => $datos));
    } else {
        echo json_encode(array("data" => array())); // En caso de no haber datos, envía un arreglo vacío
    }
}


