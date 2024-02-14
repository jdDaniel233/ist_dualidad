// JavaScript Document
var idFila; // Declarar idFila como variable global

$(document).ready(function () {
    // Obtener el valor del atributo 'data-usuarioid'
    var usuarioid = $('#listadoregistros').data('usuarioid');

    var table = $('#tbllistado2').DataTable({
        ajax: {
            url: "../ajax/aprobardoc.php?op=mostrarDatos3&id=" + usuarioid,
            type: "POST",
            dataSrc: 'data'
        },
        columns: [
            { data: 'id', visible: false },
            { data: 'url', visible: false  },
            { data: 'fecha' },
            { data: 'tipo' },
			{ data: 'estado' },
			{ data: 'observacion' },
            {
                data: null,
                render: function (data, type, row) {
                    return '<button class="btnVerPDF btn btn-info" data-id="' + row.id + '" data-url="' + row.url + '">Ver PDF</button>' +'    '+
                        '<button class="btn btn-danger btn btn-eliminar" data-id="' + row.id + '"><i class="fa fa-close"></i></button>';
                }
            }
        ]
    });

    // Agrega el evento click para el botón "Ver PDF"
    $('#tbllistado2 tbody').on('click', '.btnVerPDF', function () {
        var pdfURL = $(this).data('url');
        var pdfID = extractIDFromGoogleDriveURL(pdfURL);
        var rowData = table.row($(this).closest('tr')).data();
        idFila = rowData.id;

        if (pdfID) {
            var pdfViewerURL = "https://drive.google.com/file/d/" + pdfID + "/preview";
            PDFObject.embed(pdfViewerURL, "#pdfViewer");
            $('#pdfModal').modal('show');
        } else {
            alert("La URL proporcionada no es válida para Google Drive.");
        }
    });
	
		// Agregar evento clic al botón de eliminar
$('#tbllistado2').on('click', '.btn-eliminar', function () {
    var id_doc = $(this).data('id');

    // Mostrar un cuadro de diálogo de confirmación
    bootbox.confirm({
        message: "¿Seguro que desea eliminar este registro?",
        buttons: {
            confirm: {
                label: 'Sí',
                className: 'btn-danger'
            },
            cancel: {
                label: 'Cancelar',
                className: 'btn-secondary'
            }
        },
        callback: function (result) {
            // result será true si se hace clic en 'Sí' y false en 'Cancelar'
            if (result) {
                // Aquí puedes seguir con tu lógica de AJAX para eliminar el registro
                $.ajax({
                    type: 'POST',
                    url: '../ajax/aprobardoc.php?op=eliminar',
                    data: {
                        id_doc: id_doc
                    },
                    success: function(datos) {
                        bootbox.alert(datos, function() {
                            // Después de cerrar el mensaje de alerta, recargar la página
                            location.reload();
                        });
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
                    }
                });
            }
        }
    });
});

    // Función para extraer el ID del documento desde una URL de Google Drive
    function extractIDFromGoogleDriveURL(url) {
        var matches = url.match(/(?:drive\.google\.com\/(?:file\/d\/|open\?id=)|drive\.google\.com\/uc\?id=)([^&]+)/);
        return matches ? matches[1] : null;
    }
});
