$(document).ready(function() {
    // Obtén el valor del campo 'id' del formulario
    var idUsuario = $("#id").data("id");
    console.log("ID de usuario:", idUsuario);

    $('#tbllistado2').DataTable({
        ajax: {
            url: "../ajax/bitacora.php?op=mostrarDatos2",
            type: "POST",
            data: { id: idUsuario },
            dataSrc: 'data'
        },
        columns: [
            { data: 'id' },
            { data: 'nombre' },
            { data: 'documento' },
            { data: 'creacion' },
            {
                // Columna personalizada para el botón "Visualizar"
                data: null,
                render: function(data, type, row) {
                    return '<button class="btn btn-info btnVisualizar" data-id="' + row.id + '">Visualizar</button>';
                }
            }
        ],
       // columnDefs: [
            // Ocultar la columna 'id' que contiene el ID de la fila
          //  { targets: [0], visible: false }
       // ]
    });

    // Agregar un evento de clic para el botón "Visualizar"
    $('#tbllistado2').on('click', '.btnVisualizar', function() {
        var idFila = $(this).data('id');
        // Abrir la ventana bitacoradet.php con el parámetro ID
       window.location.href= 'bitacoradet.php?id=' + idFila;
    });
});
