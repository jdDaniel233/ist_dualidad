
$(document).ready(function() {
    $('#tbllistado').DataTable({
        ajax: {
            url: "../ajax/rubricaproyecto.php?op=mostrarDatos",
            type: "POST",
            dataSrc: 'data'
        },
        columns: [
            { data: 'id', visible: false }, // Oculta la columna del ID
            { data: 'nombre' },
            { data: 'correo' },
			{ data: 'celular' },
            { data: 'direccion' },
			{ data: 'carrera' },
            { data: 'cedula' },
			{ data: 'periodo' },
            { data: 'login' },
			
            
            {
                // Agrega el botón "Visualizar" y maneja el evento de clic
                render: function(data, type, row) {
                    return '<button class="btn btn-success btn-xs btnVisualizar" data-id="' + row.id + '">Calificar Rúbrica</button>';
                }
            }
        ]
    });

    // Maneja el evento de clic en el botón "Visualizar"
    $('#tbllistado').on('click', '.btnVisualizar', function() {
        var id = $(this).data('id');
		
        window.location.href = 'rubricaproyecto.php?id=' + id;
    });
});





