// JavaScript Document  
var selecId; // Declarar selecId como variable global

$(document).ready(function () {
    // Llena el combo de carrera
    $.post("../ajax/estudiante.php?op=combo_carrera", function (r) {
        $("#carrera").html(r);
    });

    // Llena el combo de periodo
    $.post("../ajax/estudiante.php?op=combo_periodo", function (r) {
        $("#periodo").html(r);
    });

   // var selectedIds = []; // Lista para almacenar los IDs seleccionados

    // Configuración de la tabla DataTable para la planificación
    var tablePlanificacion = $('#tbllistadop').DataTable({
        ajax: {
            url: "../ajax/planificacion.php?op=mostrarDatos",
            type: "POST",
            dataSrc: 'data'
        },
        columns: [
            { data: 'id', visible: false }, // Oculta la columna del ID
            { data: 'proyecto' },
            { data: 'empresa' },
            { data: 'carrera' },
            { data: 'periodo' },
            { data: 'fechainicio' },
            { data: 'fechafin' },
            {
                // Agrega el botón "Visualizar" y maneja el evento de clic
                render: function (data, type, row) {
                    return '<button class="btn btn-success btn-xs btnAsignar" data-id="' + row.id + '">Asignar estudiantes</button>' + '   '+
						'<button class="btn btn-warning btn-xs btnVerAsigandos" data-id="' + row.id + '">Ver Asignados</button>';
                }
            }
        ]
    });

    // Maneja el evento de clic en el botón "Asignar estudiantes"
    $('#tbllistadop tbody').on('click', '.btnAsignar', function () {
        var rowData = tablePlanificacion.row($(this).closest('tr')).data(); // Obtenemos los datos de la fila actual
        selecId = rowData.id; // Asignamos el valor de selecId
       // alert('El ID es: ' + selecId);
        window.location.href = 'planificaciondet.php?id=' + selecId;
    });
	
	// Maneja el evento de clic en el botón "Asignar estudiantes"
    $('#tbllistadop tbody').on('click', '.btnVerAsigandos', function () {
        var rowData = tablePlanificacion.row($(this).closest('tr')).data(); // Obtenemos los datos de la fila actual
        selecId = rowData.id; // Asignamos el valor de selecId
        //alert('El ID es: ' + selecId);
        window.location.href = 'asignaest.php?id=' + selecId;
    });

    // Manejar el evento de submit del formulario para estudiantes
   /* $(document).on('submit', '#estudiante', function (e) {
        e.preventDefault();

        var Gestor = $('#Gestor').val();
        var Tutor = $('#Tutor').val();
        alert('Mostrar ID variable global: ' + selecId);

        // Resto del código AJAX...
        $.ajax({
            type: 'POST',
            url: '../ajax/planificacion.php?op=guardarEstudiantes',
            data: {
                selecId: selecId,
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
    });*/

    // Configuración de la tabla DataTable para estudiantes
    var tableEstudiantes = $('#tbllistadoe').DataTable({
        ajax: {
            url: "../ajax/planificacion.php?op=mostrarEstudinates",
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
                // Cambia el botón de "Visualizar" a un cuadro de selección
                render: function (data, type, row) {
                    return '<input type="checkbox" class="chkVisualizar" data-id="' + row.id + '">';
                }
            }
        ]
    });

    // Maneja el evento de clic en el checkbox "Visualizar" para estudiantes
   /* $('#tbllistadoe').on('click', '.chkVisualizar', function () {
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
    });*/
});

/***********************************************************************/

// Funciones para mostrar y ocultar el formulario y recargar la tabla
$(document).ready(function () {
    // Inicialmente, oculta el formulario
    $("#formulario").hide();

    // Agrega el evento click para el botón "Agregar Proyecto"
    $("#btnagregar").click(function () {
        // Oculta la tabla y muestra el formulario al hacer clic en el botón Agregar
        $("#listadoregistros").hide();
        $("#formulario").show();
        // Muestra el botón Regresar
        $("#btnregresar").show();
        // Oculta el botón Agregar
        $(this).hide();
    });

    // Agrega el evento click para el botón "Regresar"
    $("#btnregresar").click(function () {
        // Muestra la tabla y oculta el formulario al hacer clic en el botón Regresar
        $("#listadoregistros").show();
        $("#formulario").hide();
        // Muestra el botón Agregar
        $("#btnagregar").show();
        // Oculta el botón Regresar
        $(this).hide();

        // Recarga el DataTable después de regresar
        var tabla = $("#tblmatriz").DataTable();
        tabla.ajax.reload();
    });
});

// Maneja el evento submit del formulario de registro de planificación
$('#matriz').submit(function (e) {
    e.preventDefault();

    var empresa = $('#empresa').val();
    var tutorEmpresarial = $('#tutorEmpresarial').val();
    var encargado = $('#encargado').val();
    var titulo = $('#titulo').val();
    var cargo = $('#cargo').val();
    var carrera = $('#carrera').val();
    var periodo = $('#periodo').val();

    var nucleo = $('#nucleo').val();
    var proyecto = $('#proyecto').val();
    var fechaInicio = $('#fechaInicio').val();
    var fechafin = $('#fechafin').val();
    var diaspro = $('#diaspro').val();

    var horasDestinadas = $('#horasDestinadas').val();
    var horasproyecto = $('#horasproyecto').val();
    var totalhoras = $('#totalhoras').val();
    var fechaEntregaDocse = $('#fechaEntregaDocse').val();
    var fechaFinEntregaDocst = $('#fechaFinEntregaDocst').val();
    var fechaFinEntregaDocsg = $('#fechaFinEntregaDocsg').val();

    $.ajax({
        type: 'POST',
        url: '../ajax/planificacion.php?op=insertar',
        data: {
            empresa: empresa,
            tutorEmpresarial: tutorEmpresarial,
            encargado: encargado,
            titulo: titulo,
            cargo: cargo,
            carrera: carrera,
            periodo: periodo,
            nucleo: nucleo,
            proyecto: proyecto,
            fechaInicio: fechaInicio,
            fechafin: fechafin,
            diaspro: diaspro,
            horasDestinadas: horasDestinadas,
            horasproyecto: horasproyecto,
            totalhoras: totalhoras,
            fechaEntregaDocse: fechaEntregaDocse,
            fechaFinEntregaDocst: fechaFinEntregaDocst,
            fechaFinEntregaDocsg: fechaFinEntregaDocsg
        },
        success: function (response) {
            // Manejar la respuesta del servidor
            alert(response);
			location.reload();
        }
    });
});

// Funciones para la navegación entre pasos en un formulario de varios pasos
let currentStep = 1;

function showStep(step) {
    $('.form-step').hide();
    $(`.form-step[data-step="${step}"]`).show();

    // Ocultar o mostrar botones según el paso
    if (step === 1) {
        $('#prevBtn').hide();
        $('#nextBtn').show();
        $('#btnGuardar').hide();
    } else if (step === 2) {
        $('#prevBtn').show();
        $('#nextBtn').show();
        $('#btnGuardar').show();
    }
}

function nextPrev(n) {
    currentStep += n;

    // Validar si estamos en el primer o último paso
    if (currentStep < 1) {
        currentStep = 1;
    } else if (currentStep > $('.form-step').length) {
        currentStep = $('.form-step').length;
    }

    // Mostrar el paso actual
    showStep(currentStep);
}

// Mostrar el primer paso al cargar la página
showStep(currentStep);
