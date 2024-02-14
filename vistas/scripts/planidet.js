// JavaScript Document
$(document).ready(function () {

    var selectedIds = []; // Lista para almacenar los IDs seleccionados

    // Obtener el valor del parámetro 'id' de la URL
    var urlParams = new URLSearchParams(window.location.search);
    var parametroUrl = urlParams.get('id');

    // Manejar el evento de submit del formulario para estudiantes
    $(document).on('submit', '#estudiante', function (e) {
        e.preventDefault();

        var Gestor = $('#Gestor').val();
        var Tutor = $('#Tutor').val();
		//alert('Mostrar ID variable global: ' + parametroUrl);

        // Resto del código AJAX...
        $.ajax({
            type: 'POST',
            url: '../ajax/planificacion.php?op=guardarEstudiantes',
            data: {
                parametroUrl: parametroUrl,
                ids: selectedIds,
                Gestor: Gestor,
                Tutor: Tutor
            },
            success: function (datos) {
                bootbox.alert(datos, function () {
                    location.reload();
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
            }
        });
    });

    // Maneja el evento de clic en el checkbox "Visualizar" para estudiantes
    $('#tbllistadoe').on('click', '.chkVisualizar', function () {
        var id = $(this).data('id');

        // Agrega o elimina el ID de la lista según si está seleccionado o no
        if ($(this).prop('checked')) {
            selectedIds.push(id);
        } else {
            selectedIds = selectedIds.filter(function (selectedId) {
                return selectedId !== id;
            });
        }

        console.log('IDs seleccionados:', selectedIds);
    });
});

