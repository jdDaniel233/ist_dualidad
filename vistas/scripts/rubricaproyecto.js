$('#resumen').submit(function(e) {
    e.preventDefault(); // Evitar que se envíe el formulario de forma predeterminada
    var id = obtenerParametroUrl('id');

    // Obtener los valores del formulario
    var criterio1 = $('#criterio1').val();
    var criterio2 = $('#criterio2').val();
    var criterio3 = $('#criterio3').val();
    var criterio4 = $('#criterio4').val();
    var criterio5 = $('#criterio5').val();

    // Enviar los datos al servidor para guardar el préstamo
    $.ajax({
        type: 'POST',
        url: '../ajax/rubricaproyecto.php?op=guardarDatos&id='  + id,
        data: {
            id: id, // Agrega el id a los datos enviados
            criterio1: criterio1,
            criterio2: criterio2,
            criterio3: criterio3,
            criterio4: criterio4,
            criterio5: criterio5
        },
        success: function(datos) {
            bootbox.alert(datos);
            //mostrarform(false);
            tabla.ajax.reload();
        }
    });
});

// Función para obtener un parámetro específico desde la URL
function obtenerParametroUrl(nombre) {
    var urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(nombre);
}

