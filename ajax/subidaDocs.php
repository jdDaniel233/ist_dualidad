<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
require_once "../modelos/subidaDocs.php";
$documentacion = new Documentacion();
//echo "hello desde ajax";

switch ($_GET["op"]) {
    
    case "insDoc":
        //var_dump($_POST);
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            
            //echo "hello desde insDoc\n";
            //$cursoId = 333;
            $TipoDocumento = $_POST["documento"];
            //$periodo = 3;
            //nombre archivo
            $nombreArchivo = $_FILES['archivo']['name'];
            //extension archivo
            $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
            $usuario = $_POST["usuarioid"];
            //$fechaSubida = $_POST["fecha"];
            //$estado = 2;

            
            switch($_FILES['archivo']['error']){
                case UPLOAD_ERR_OK:
                    //echo "\n Hello desde archivo correcto";                    
                    //Carga de archivo correcta
                    //Ruta del archivo
                    $rutaArchivo = $_FILES['archivo']['tmp_name'];

                    //Clave final de la URL a guardar
                   // $claveURL = "1YSC1luyUkuEOgoeOY4pbItF0HQxzNY24";
					$claveURL = "1fi9FRil60WA-wzOK6GVI40FNSeOYbUQe";

                    //Descripcion del archivo
                    $descripcion = "Archivo de disenio curricular por aprobar";

                    //envio parametros de inserccion
                            $resultado = $documentacion->insertDoc(
                            $nombreArchivo,$TipoDocumento,
                             $usuario,
                            /*Envio de parametros al metodo API*/
                            $rutaArchivo,$claveURL, $descripcion 
                        );
                        //echo "\n imprime: ".$resultado;
                        $response = array();
                        
                        //Validar respusta
                        if ($resultado > 0) {

                            $response['estado'] = 'success';
                            $response['mensaje'] = 'Exito en registro y subida de archivo';
                        } else {
                            
                            $response['estado'] = 'error';
                            $response['mensaje'] = 'Error al registrar y subir el archivo';
                        }
                        // Devolver respuesta en formato JSON
                        header('Content-Type: application/json');
                        echo json_encode($response); 
                    break;

                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    $mensaje = 'El archivo es demasiado grande';
                    break;

                case UPLOAD_ERR_PARTIAL:
                    $mensaje = 'La carga del archivo se detuvo';
                    break;
                
                case UPLOAD_ERR_NO_FILE:
                    $mensaje = 'No se seleccionó ningún archivo';
                    break;

                case UPLOAD_ERR_NO_TMP_DIR:
                case UPLOAD_ERR_CANT_WRITE:
                    $mensaje = 'Error en el servidor: no se puede escribir en el directorio temporal';
                    break;

                case UPLOAD_ERR_EXTENSION:
                    $mensaje = 'Error en la carga de archivos: extensión de archivo no permitida';
                    break;

                default:
                    $mensaje = 'Error desconocido en la carga de archivos';
                    break;
            }//termina switch file

            if (isset($mensaje)){
                echo $mensaje;
            }
        }//termina switch metodo POST


    break;  
		
	case 'combo_documento':
		$resultado = $documentacion->combo_documento();
		while ($reg = $resultado->fetch_object()){
		echo '<option value="'.$reg->cat_id.'">'.$reg->cat_nombre.'</option>';
		}
		break;
}
?>