// Agregar eventos de escucha para los campos de criterio en el segundo formulario
$('#criterio1, #criterio2, #criterio3, #criterio4, #criterio5, #criterio6, #criterio7, #criterio8, #criterio9, #criterio10').on('input', function() {
    validarCriterio($(this));
});

// Función para validar los campos de criterio
function validarCriterio(campo) {
    var valor = parseFloat(campo.val());

    if (isNaN(valor) || valor < 1 || valor > 10) {
        campo.addClass('campo-invalido');
        bootbox.alert("Por favor, ingrese un valor válido entre 1 y 10.");
    } else {
        campo.removeClass('campo-invalido');
    }
}
// Modificar la función submit para validar antes de enviar en el segundo formulario
$('#resumen2').submit(function(e) {
    e.preventDefault();

    // Validar todos los campos antes de enviar
    var camposInvalidos = $('.campo-invalido');
    if (camposInvalidos.length > 0) {
        bootbox.alert("Por favor, corrija los valores en los campos antes de guardar.");
        return;
    }

    // Obtener los valores del formulario
    var id = obtenerParametroUrl('id');
    var criterio1 = parseFloat($('#criterio1').val());
    var criterio2 = parseFloat($('#criterio2').val());
    var criterio3 = parseFloat($('#criterio3').val());
    var criterio4 = parseFloat($('#criterio4').val());
    var criterio5 = parseFloat($('#criterio5').val());
    var criterio6 = parseFloat($('#criterio6').val());
    var criterio7 = parseFloat($('#criterio7').val());
    var criterio8 = parseFloat($('#criterio8').val());
    var criterio9 = parseFloat($('#criterio9').val());
    var criterio10 = parseFloat($('#criterio10').val());

    // Enviar los datos al servidor para guardar
    $.ajax({
        type: 'POST',
        url: '../ajax/fichaeva.php?op=guardarDatos&id=' + id,
        data: {
            id: id,
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
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
        }
    });
});

// Función para obtener un parámetro específico desde la URL
function obtenerParametroUrl(nombre) {
    var urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(nombre);
}
