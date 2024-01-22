$.post("../ajax/estudiante.php?op=combo_carrera", function(r){
	   $("#carrera").html(r);      
});

$.post("../ajax/estudiante.php?op=combo_periodo", function(r){
	   $("#periodo").html(r);      
});
// Asignar a los estudiantes

//TABLA PLANI
$(document).ready(function() {
    $('#tbllistadop').DataTable({
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
                render: function(data, type, row) {
                    return '<button class="btn btn-success btn-xs btnVisualizar" data-id="' + row.id + '">Asignar estudiantes</button>';
                }
            }
        ]
    });

    // Maneja el evento de clic en el botón "Visualizar"
    $('#tbllistadop').on('click', '.btnVisualizar', function() {
        var id = $(this).data('id');
		
        window.location.href = 'planificaciondet.php?id=' + id;
    });
});

//tabla estudiantes 
$(document).ready(function() {
    var table = $('#tbllistadoe').DataTable({
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
                // Cambia el botón de "Visualizar" a un cuadro de selección
                render: function(data, type, row) {
                    return '<input type="checkbox" class="chkVisualizar" data-id="' + row.id + '">';
                }
            }
        ]
    });

    // Maneja el evento de clic en el botón "Visualizar"
    $('#tbllistado').on('click', '.chkVisualizar', function() {
        // Puedes manejar la lógica aquí cuando se selecciona/deselecciona una fila
        var id = $(this).data('id');
        if ($(this).prop('checked')) {
            // Acciones cuando se selecciona la fila
            console.log('Fila seleccionada con ID: ' + id);
        } else {
            // Acciones cuando se deselecciona la fila
            console.log('Fila deseleccionada con ID: ' + id);
        }
    });

    // Ejemplo de un botón adicional para realizar alguna acción
    $('#realizarAccion').on('click', function() {
        // Obtén las filas seleccionadas
        var filasSeleccionadas = table.rows('.selected').data();

        // Realiza la acción que desees con las filas seleccionadas
        console.log('Filas seleccionadas:', filasSeleccionadas);
    });
});


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


// registrar la la planificación
$('#matriz').submit(function(e) {
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
            titulo:titulo, 
            cargo:cargo,
            carrera:carrera,
            periodo:periodo,
            nucleo:nucleo,
            proyecto:proyecto,
            fechaInicio:fechaInicio,
            fechafin:fechafin,
			diaspro:diaspro,
			  horasDestinadas:horasDestinadas,
			  horasproyecto:horasproyecto,
			  totalhoras:totalhoras,
			  fechaEntregaDocse:fechaEntregaDocse,
			  fechaFinEntregaDocst:fechaFinEntregaDocst,
			  fechaFinEntregaDocsg:fechaFinEntregaDocsg
		  },
          success: function(response) {
            // Manejar la respuesta del servidor
            alert(response);
          }
        });  
  });


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


