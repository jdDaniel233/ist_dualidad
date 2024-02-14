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
                    return '<button class="btn btn-info btn-md btnVisualizar" data-id="' + row.id + '">Registrar Días</button>' + '     '+
       '<button class="btn btn-danger btn-md btn-eliminar" data-id="' + row.id + '"><i class="fa fa-close"></i></button>';

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
		 //window.location.href= '../reportes/rpt_practica.php';
    });
	
		
	$('#tbllistado2').on('click', '.btn-eliminar', function () {
    //var id_reg = $(this).data('id');
		var idFila = $(this).data('id');

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
                    url: '../ajax/bitacora.php?op=eliminarenca',
                    data: {
                        idFila: idFila
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

	

});
