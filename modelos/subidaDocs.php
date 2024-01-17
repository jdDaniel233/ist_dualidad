<?php
require "../config/Conexion.php";

include "../subirArchivos/api-google/vendor/autoload.php";

class Documentacion{
    public function __construct() {

    }

	public function combo_documento() {
    $sql = "CALL sp_cat(3)";
    return ejecutarConsultaSP($sql);
}
    //Funcion para insertar registros del documento
    public function insertDoc($nombreArchivo,/*$fechaSubida,*/ $TipoDocumento,
     $usuario,
    /*argumentos API*/ $rutaA,$clvur,$desc) {
        //metodo API
        $URLArchivo = $this->APIDrive($rutaA, $nombreArchivo, $clvur, $desc);

        if (!empty($URLArchivo)){
            //echo "URL desde adentro...: ".$URLArchivo;
            //Si la URL existe, va a insertar
           // $sql = "CALL sp_cargaDocs(1, $cursoId, $TipoDocumento, $periodo, '$nombreArchivo', '$URLArchivo', '$fechaSubida', '$usuario', $estado, '$extension');";
			
			 $sql = "CALL sp_subirDoc(1,'$nombreArchivo','$URLArchivo',$TipoDocumento,'$usuario');";

            //echo " \n SQL: \n".$sql;
            return ejecutarConsultaSP($sql);

        }else{
            return "Error al subir el archivo a Google Drive";
        }
    }

    //Funcion para la carga de archivos PDF
    public function APIDrive($rutaArchivo, $nombre, $clvURL, $descripcion) {

        putenv('GOOGLE_APPLICATION_CREDENTIALS=archivosdual-43733046c1f0.json');

        $client = new Google_client();
        $client->useApplicationDefaultCredentials();
        $client->setScopes(['https://www.googleapis.com/auth/drive.file']);

        try{

            $service = new Google_Service_Drive($client);
            $contenidoArchivo = file_get_contents($rutaArchivo);

            $file = new Google_Service_Drive_DriveFile();
            $file->setName($nombre);

            /*$file->setParents(array("1YSC1luyUkuEOgoeOY4pbItF0HQxzNY24"));//Clave final de la ruta URL */
            $file->setParents(array($clvURL));

            /*$file->setDescription("Archivo cargado desde PHP"); //descripcion */
            $file->setDescription($descripcion);

            $file->setMimeType("application/pdf"); //tipo de archivo

            $respuesta = $service->files->create(
                $file,
                array(
                    'data' => $contenidoArchivo,
                    'mimeType' => 'application/pdf', 
                    'uploadType' => 'media'
                )
            );

            return $ruta = "https://drive.google.com/open?id=".$respuesta->id;

            //$rutaURLarchivo = '<a href="'.$ruta.'" target="_blank">'.$respuesta->name.'</a>';

        } catch (Google_Service_Exception $gs) {
            $mensaje = json_decode($gs->getMessage());
            throw new Exception($mensaje->error->message);

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    
}
?>