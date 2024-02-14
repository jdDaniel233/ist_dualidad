// JavaScript Document
var tabla;
   // Función para obtener un parámetro específico desde la URL
    function obtenerParametroUrl(nombre) {
        var urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(nombre);
    }

// función que se ejecuta al inicio
function init() {
    mostrarform(false);
    listar();
    $("#bitacoraForm").on("submit", function (e) {
        guardarYEditar(e);
    })

    $("#imagenmuestra").hide();
    // mostramos los permisos
    $.post("../ajax/usuario.php?op=permisos&id=", function (r) {
        $("#permiso").html(r);
    });
}

// función limpiar
function limpiar() {
    $("#usu_nombre").val("");
    $("#usu_cedula").val("");
    $("#usu_telefono").val("");
    $("#usu_correo").val("");
    $("#usu_cargo").val("");
    $("#usu_login").val("");
    $("#usu_clave").val("");
    $("#usu_id").val("");
    $("#claveu").val("");
}

// función mostrar formulario
function mostrarform(flag) {
    limpiar();
    if (flag) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    } else {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

// cancelar form
function cancelarform() {
    limpiar();
    mostrarform(false);
}

var id_Det = obtenerParametroUrl('id');
console.log('id_Det:', id_Det);



// función listar

var id_reg;

function mostrarFormularioEdit(clickedId) {
    // Asignar el valor del id global
    id_reg = clickedId;

    // Aquí deberías agregar la lógica para mostrar la ventana modal con el formulario de edición
    console.log('Clic en Editar. ID:', id_reg);

    // Ejemplo: Mostrar la ventana modal con jQuery (asegúrate de tener jQuery incluido)
    $('#editarModal').modal('show');
}

// Agrega manejadores de eventos para los campos de hora de ingreso y salida en el modal
$("#horaIngresoModal, #horaSalidaModal").on("input", function () {
    actualizarTotalHorasModal(); // Llama a la función para actualizar las horas cuando cambian
});

// Agrega una función para actualizar las horas totales en el modal
function actualizarTotalHorasModal() {
    var horaIngreso = $('#horaIngresoModal').val();
    var horaSalida = $('#horaSalidaModal').val();

    // Verifica que ambos campos tengan valores antes de calcular las horas totales
    if (horaIngreso && horaSalida) {
        var TotalHoras = restarHoras(horaSalida, horaIngreso);
        $('#TotalHorasModal').val(TotalHoras);
    }
}

// EDITAR
// EDITAR
$(document).ready(function () {
    $('#editarForm').submit(function (e) {
        e.preventDefault();

        // Obtener los valores del formulario
        var bita_id2 = $('#bita_id2').val();
        var fecha2 = $('#fecha2').val();
        var horaIngresoModal = $('#horaIngresoModal').val();
        var horaSalidaModal = $('#horaSalidaModal').val();

        // Calcular las horas totales
        var TotalHorasModal = $('#TotalHorasModal').val();

        var actividadesRea2 = $('#actividadesRea2').val();
        var experiencias2 = $('#experiencias2').val();
        var aprendizajes2 = $('#aprendizajes2').val();
        var propuestas2 = $('#propuestas2').val();

        // Abrir una nueva ventana
        //var nuevaVentana = window.open('', '_blank');

        // Escribir el valor del id_reg en la nueva ventana
       // nuevaVentana.document.write('<h1>ID_REG: ' + id_reg + '</h1>');

        // Enviar los datos al servidor para guardar el préstamo
        $.ajax({
            type: 'POST',
            url: '../ajax/bitacora.php?op=editar',
            data: {
                bita_id2: bita_id2,
                fecha2: fecha2,
                horaIngresoModal: horaIngresoModal,
                horaSalidaModal: horaSalidaModal,
                TotalHorasModal: TotalHorasModal,
                actividadesRea2: actividadesRea2,
                experiencias2: experiencias2,
                aprendizajes2: aprendizajes2,
                propuestas2: propuestas2,
                id_reg: id_reg  // Aquí utilizamos directamente la variable global id_reg
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
});



$(document).ready(function () {
    $('#tbllistadob').DataTable({
        ajax: {
            url: "../ajax/bitacora.php?op=mostrarDatos&id=" + id_Det,
            type: "POST",
            dataSrc: 'data'
        },
        columns: [
            { data: 'id', visible: false },
            { data: 'fecha' },
            { data: 'horaIngreso' },
            { data: 'horaSalida' },
            { data: 'TotalHoras' },
            { data: 'actividades' },
            { data: 'experiencias' },
            { data: 'aprendizajes' },
            { data: 'propuestas' },
            {
                render: function (data, type, row) {
                    return '<div class="btn-group">' +
                        '<button class="btn btn-warning btn-xs" data-id="' + row.id + '" onclick="mostrarFormularioEdit(' + row.id + ')"><i class="fa fa-pencil"></i> Editar</button>' +
                        '<button class="btn btn-danger btn-xs btn-eliminar" data-id="' + row.id + '"><i class="fa fa-close"></i>Eliminar</button>' +
                        '</div>';
                }
            }
        ]
    });

    // Agrega manejadores de eventos para los campos de hora de ingreso y salida
    $("#horaIngreso, #horaSalida").on("input", function () {
        actualizarTotalHoras(); // Llama a la función para actualizar las horas cuando cambian
    });
	
	// Agregar evento clic al botón de eliminar
$('#tbllistadob').on('click', '.btn-eliminar', function () {
    var id_reg = $(this).data('id');

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
                    url: '../ajax/bitacora.php?op=eliminar',
                    data: {
                        id_reg: id_reg
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

// Agrega una función para actualizar las horas totales
function actualizarTotalHoras() {
    var horaIngreso = $('#horaIngreso').val();
    var horaSalida = $('#horaSalida').val();

    // Verifica que ambos campos tengan valores antes de calcular las horas totales
    if (horaIngreso && horaSalida) {
        var TotalHoras = restarHoras(horaSalida, horaIngreso);
        $('#TotalHoras').val(TotalHoras);
    }
}

// función para restar horas
function restarHoras(horaFin, horaIni) {
    var ini = horaIni.split(":");
    var fin = horaFin.split(":");
    var totalHoras = fin[0] - ini[0];
    var totalMinutos = fin[1] - ini[1];

    if (totalMinutos < 0) {
        totalHoras--;
        totalMinutos = 60 + totalMinutos;
    }

    totalHoras = (totalHoras < 10) ? '0' + totalHoras : totalHoras;
    totalMinutos = (totalMinutos < 10) ? '0' + totalMinutos : totalMinutos;

    return totalHoras + ':' + totalMinutos;
}

// guardar
$(document).ready(function () {
    $('#bitacora').submit(function (e) {
        e.preventDefault();

        // Obtener los valores del formulario
        var bita_id = $('#bita_id').val();
        var fecha = $('#fecha').val();
        var horaIngreso = $('#horaIngreso').val();
        var horaSalida = $('#horaSalida').val();

        // Calcular las horas totales
        var TotalHoras = restarHoras(horaSalida, horaIngreso);
        $('#TotalHoras').val(TotalHoras);

        var actividadesRea = $('#actividadesRea').val();
        var experiencias = $('#experiencias').val();
        var aprendizajes = $('#aprendizajes').val();
        var propuestas = $('#propuestas').val();

        // Enviar los datos al servidor para guardar el préstamo
        $.ajax({
            type: 'POST',
            url: '../ajax/bitacora.php?op=guardaryeditar',
            data: {
                bita_id: bita_id,
                fecha: fecha,
                horaIngreso: horaIngreso,
                horaSalida: horaSalida,
                TotalHoras: TotalHoras,
                actividadesRea: actividadesRea,
                experiencias: experiencias,
                aprendizajes: aprendizajes,
                propuestas: propuestas
            },
            success: function (datos) {
                bootbox.alert(datos, function () {
                    location.reload();
					location.reload();
                });
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
            }
        });
    });
});

init();
