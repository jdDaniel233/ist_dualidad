$('#resumen2').submit(function(e) {
    e.preventDefault(); // Evitar que se envíe el formulario de forma predeterminada
    var id = obtenerParametroUrl('id');

    // Obtener los valores del formulario
    var criterio1 = $('#criterio1').val();
    var criterio2 = $('#criterio2').val();
    var criterio3 = $('#criterio3').val();
    var criterio4 = $('#criterio4').val();
    var criterio5 = $('#criterio5').val();
    var criterio6 = $('#criterio6').val(); // Corregido
    var criterio7 = $('#criterio7').val();
    var criterio8 = $('#criterio8').val();
    var criterio9 = $('#criterio9').val();
    var criterio10 = $('#criterio10').val();

    // Enviar los datos al servidor para guardar el préstamo
    $.ajax({
        type: 'POST',
        url: '../ajax/fichaeva.php?op=guardarDatos&id='  + id,
        data: {
            id: id, // Agrega el id a los datos enviados
            criterio1: criterio1,
            criterio2: criterio2,
            criterio3: criterio3,
            criterio4: criterio4,
            criterio5: criterio5,
            criterio6: criterio6,
            criterio7: criterio7,
            criterio8: criterio8,
            criterio9: criterio9,
            criterio10: criterio10
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
