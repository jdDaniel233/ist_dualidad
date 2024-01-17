<?php
ob_start();
session_start();
if (!isset($_SESSION['usu_nombre'])) {
    header("Location: login.html");
} else {
    require 'header.php';
    if ($_SESSION['Escritorio'] == 1) {
?>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Columna izquierda: Formulario de carga de archivos -->
                        <div class="box">
                            
                            <div class="panel-body	">

                                <!-- Aquí tu formulario de carga de archivos -->
                               


<style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
<?php
error_reporting(E_ALL);
require '../subirArchivos/api-google/vendor/autoload.php';

// Configurar el cliente
$client = new Google_Client();
$client->setApplicationName('List and View Google Drive Files');
$client->setScopes(Google_Service_Drive::DRIVE_READONLY); // Cambia el alcance según tus necesidades

// Obtener credenciales del archivo JSON descargado desde la consola de desarrolladores
$client->setAuthConfig('../subirArchivos/archivosdual-43733046c1f0.json');
$client->setAccessType('offline');

// Inicializar el cliente
$service = new Google_Service_Drive($client);

// Obtener lista de archivos
$optParams = array(
    'fields' => 'files(id, name, trashed)',
);
$results = $service->files->listFiles($optParams);

// Mostrar archivos en una tabla
if (count($results->getFiles()) == 0) {
    echo "No se encontraron archivos.\n";
} else {
    echo "<h2>Archivos:</h2>\n";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Ver</th></tr>";

    foreach ($results->getFiles() as $file) {
        // Verificar si el archivo está en la papelera o no existe realmente
        try {
            $fileObj = $service->files->get($file->getId());
            echo "<tr>";
            echo "<td>{$file->getName()}</td>";
            echo "<td><a href='#' onclick='openFile(\"{$file->getId()}\"); return false;'>Ver</a></td>";
            echo "</tr>";
        } catch (Google_Service_Exception $e) {
            if ($e->getCode() === 404) {
                // El archivo no existe realmente en Drive
                continue;
            }
        }
    }

    echo "</table>";
}
?>

<script>
function openFile(fileId) {
    var fileLink = "https://drive.google.com/file/d/" + fileId + "/view";
    // Abrir enlace en una ventana emergente
    window.open(fileLink, "_blank", "width=800,height=600");
}
</script>								
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
<?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
?>
    <script src="../public/js/jquery.min.js"></script>
    <script src="scripts/subidaDocs.js"></script>
<?php
}
ob_end_flush();
?>
