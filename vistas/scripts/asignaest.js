$(document).ready(function () {
    // Obtener el valor del parámetro 'id' de la URL
    var urlParams = new URLSearchParams(window.location.search);
    var parametroUrl = urlParams.get('id');

    var tableAsignacion = $('#tbllistadop').DataTable({
        ajax: {
            url: "../ajax/planificacion.php?op=mostrarAsigandos",
            type: "POST",
            dataSrc: 'data'
        },
        columns: [
            { data: 'id', visible: false }, // Oculta la columna del ID
            { data: 'empresa' },
            { data: 'proyecto' },
            { data: 'est_id', visible: true },
            { data: 'estudiante' },
            { data: 'gestor' },
            { data: 'tutor' },
            {
                // Agrega el botón "Eliminar" y maneja el evento de clic
                render: function (data, type, row) {
                    return '<button class="btn btn-danger btn-xs btn-eliminar" data-id="' + row.id + '" data-est-id="' + row.est_id + '"><i class="fa fa-close"></i>Eliminar</button>';
                }
            }
        ]
    });

    // Agregar evento clic al botón de eliminar
    $('#tbllistadop').on('click', '.btn-eliminar', function () {
        var id = $(this).data('id');
        var est_id = $(this).data('est-id'); // Obtener el valor de est_id
        alert('Mostrar ID variable: ' + est_id);

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
                        url: '../ajax/planificacion.php?op=eliminarAsignacion',
                        data: {
                            id: id, // Aquí se debe enviar el id recuperado
							est_id: est_id
                        },
                        success: function (datos) {
                            bootbox.alert(datos, function () {
                                // Después de cerrar la mensaje de alerta, recargar la página
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
});
