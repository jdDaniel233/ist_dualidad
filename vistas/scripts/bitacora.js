$(document).ready(function() {
    // Asigna el manejador de eventos submit al formulario con id "formulario"
    $('#formulario').submit(function(e) {
        e.preventDefault(); // Evitar que se envíe el formulario de forma predeterminada

        // Obtener los valores del formulario
        var id = $('#id').val();

        // Enviar los datos al servidor para guardar el préstamo
        $.ajax({
            type: 'POST',
            url: '../ajax/bitacora.php?op=guardarDatos',
            data: {
                id: id // Agrega el id a los datos enviados
            },
            success: function(datos) {
                bootbox.alert(datos, function() {
                    // Después de cerrar el mensaje de alerta, recargar la página
                    location.reload();
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
            }
        });
    });
});
