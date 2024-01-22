<?php
require_once '../modelos/fichaeva.php';

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
			$clave = $fila["est_clave"];
			
           
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
function guardarDatos() {
	$id = $_GET['id'];
   
    $criterio1 = $_POST['criterio1'];
    $criterio2 = $_POST['criterio2'];
    $criterio3 = $_POST['criterio3'];
    $criterio4 = $_POST['criterio4'];
    $criterio5 = $_POST['criterio5'];
	$criterio6 = $_POST['criterio6'];
    $criterio7 = $_POST['criterio7'];
    $criterio8 = $_POST['criterio8'];
    $criterio9 = $_POST['criterio9'];
    $criterio10 = $_POST['criterio10'];
   

    $conexion = new Conexion();
    $resultado = $conexion->guardarEva($id,$criterio1, $criterio2, $criterio3, $criterio4, $criterio5,$criterio6, $criterio7, $criterio8, $criterio9, $criterio10);
echo $resultado ? "Datos registrados correctamente" : "No se pudo registrar datos incorrectos";
   
}

