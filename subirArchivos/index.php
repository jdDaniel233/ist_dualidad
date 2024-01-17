<?php
include 'api-google/vendor/autoload.php';

putenv( 'GOOGLE_APPLICATION_CREDENTIALS=archivosdual-43733046c1f0.json');

$client = new Google_Client();
$client->useApplicationDefaultCredentials();

$client->SetScopes(['https://www.googleapis.com/auth/drive.file']);

try{
$service = new Google_Service_Drive($client);
$file_path ="retroceder.png";
	$file = new Google_Service_Drive_DriveFile();
	$file->setName($file_path);
	$file->setParents(array("1fi9FRil60WA-wzOK6GVI40FNSeOYbUQe"));
	$file->setDescription("archivo desde php");
	$file-> setMimeType("image/png");
	
	$resultado = $service->files->create(
		$file,
		array(
			'data' => file_get_contents($file_path),
			'mimeType' => 'image/png',
			'uploadType' => 'media'
		)
	);
	
	echo '<a href="https://drive.google.com/open?id' . $resultado->id . '"target="_blank">'.$resultado->name.'</a>';

}catch(Google_Service_Exception $gs){
$mensaje = json_decode($gs->getMessage());
	echo $mensaje->error->mesage();
} catch(Exception $e){
echo $e->getMessage();	
}

?>