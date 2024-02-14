// JavaScript Document
var idFila; // Declarar idFila como variable global

$(document).ready(function() {
    // Evento change para el campo "estado"
    $('#estado').change(function() {
        var estado = $(this).val();
        var observacionesInputDiv = $('#observacionesInputDiv');

        // Verifica el valor seleccionado y muestra/oculta el campo de observaciones
        if (estado === "18") {
            observacionesInputDiv.hide();
        } else if (estado === "19") {
            observacionesInputDiv.show();
        }
    });

    // Configuración de la tabla
    var id = obtenerParametroUrl('id');
    if (id) {
        var table = $('#tbllistado2').DataTable({
            ajax: {
                url: "../ajax/aprobardoc.php?op=mostrarDatos2&id=" + id,
                type: "POST",
                dataSrc: 'data'
            },
            columns: [
                { data: 'id' },
                { data: 'url' },
                { data: 'fecha' },
                { data: 'tipo' },
                {
                    data: null,
                    render: function (data, type, row) {
                        return '<button class="btnVerPDF btn btn-info" data-id="' + row.id + '" data-url="' + row.url + '">Ver PDF</button>';
                    }
                }
            ]
        });

        // Agrega el evento click para el botón "Ver PDF"
        $('#tbllistado2 tbody').on('click', '.btnVerPDF', function () {
            var pdfURL = $(this).data('url');
            var pdfID = extractIDFromGoogleDriveURL(pdfURL);
            var rowData = table.row($(this).closest('tr')).data(); // Obtenemos los datos de la fila actual
            idFila = rowData.id; // Asignamos el valor de idFila

            // Imprime el ID en una nueva ventana
            //var nuevaVentana = window.open('', '_blank');
            //nuevaVentana.document.write('<html><head><title>ID del PDF</title></head><body><h1>ID del PDF: ' + idFila + '</h1></body></html>');

            if (pdfID) {
                var pdfViewerURL = "https://drive.google.com/file/d/" + pdfID + "/preview";
                PDFObject.embed(pdfViewerURL, "#pdfViewer");

                // Muestra el modal
                $('#pdfModal').modal('show');
            } else {
                alert("La URL proporcionada no es válida para Google Drive.");
            }
        });

        // Evento submit para el formulario de aprobación
        $(document).on('submit', '#form_docH', function(e) {
            e.preventDefault(); 

            var estado = $('#estado').val();
            var observaciones = $('#observaciones').val();

            // Realizar la solicitud AJAX para guardar la aprobación
            $.ajax({
                type: 'POST',
                url: '../ajax/aprobardoc.php?op=guardarAprobacion',
                data: {
                    estado: estado,
                    observaciones: observaciones,
                    idFila: idFila // Incluir el ID en la solicitud
                },
                success: function (datos) {
                    bootbox.alert(datos, function () {
                        // Después de cerrar el mensaje de alerta, recargar la página
                        location.reload();
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
                }
            });
        });
    }

    // Función para obtener un parámetro específico desde la URL
    function obtenerParametroUrl(nombre) {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(nombre);
    }

    // Función para extraer el ID del documento desde una URL de Google Drive
    function extractIDFromGoogleDriveURL(url) {
        var matches = url.match(/(?:drive\.google\.com\/(?:file\/d\/|open\?id=)|drive\.google\.com\/uc\?id=)([^&]+)/);
        return matches ? matches[1] : null;
    }
});
