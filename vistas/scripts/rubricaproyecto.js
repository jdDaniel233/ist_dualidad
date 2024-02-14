// Agregar eventos de escucha para los campos de criterio
$('#criterio1, #criterio2, #criterio3, #criterio4, #criterio5').on('input', function() {
    validarCriterio($(this));
});

function validarCriterio(campo) {
    var valor = parseFloat(campo.val());

    if (isNaN(valor) || valor < 1 || valor > 10) {
        campo.addClass('campo-invalido');
        bootbox.alert("Por favor, ingrese un valor válido entre 1 y 10.");
    } else {
        campo.removeClass('campo-invalido');
    }
}

// Modificar la función submit para validar antes de enviar
$('#resumen').submit(function(e) {
    e.preventDefault();

    // Validar todos los campos antes de enviar
    var camposInvalidos = $('.campo-invalido');
    if (camposInvalidos.length > 0) {
        bootbox.alert("Por favor, corrija los valores en los campos antes de guardar.");
        return;
    }

    // Resto del código de envío al servidor...
    // ...

    // Enviar los datos al servidor para guardar
    $.ajax({
        type: 'POST',
        url: '../ajax/rubricaproyecto.php?op=guardarDatos&id=' + id,
        data: {
            id: id,
            criterio1: parseFloat($('#criterio1').val()),
            criterio2: parseFloat($('#criterio2').val()),
            criterio3: parseFloat($('#criterio3').val()),
            criterio4: parseFloat($('#criterio4').val()),
            criterio5: parseFloat($('#criterio5').val())
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
