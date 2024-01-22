// Asignar a los estudiantes
$(document).ready(function() {
  var idDetallePlanificacion;
  var estudiantesSeleccionados = [];

  var tabla1 = $('#tblmatriz').DataTable({
      ajax: {
          url: "../ajax/matriz.php?op=listar",
          type: "POST",
          dataSrc: 'data'
      },
      columns: [
          { data: 'dtp_id', name: 'dtp_id' },
          { data: 'proyecto' },
          { data: 'empresa' },
          { data: 'carrera' },
          { data: 'periodo' },
          { data: 'fechaI' },
          { data: 'fechaF' },
          {
              data: 'dtp_id',
              render: function(data, type, row) {
                  return '<button class="btn btn-primary btn-sm btnCambiarTabla">Ver Estudiantes</button>';
              }
          }
      ],
      select: 'single'
  });

  var tabla2 = $('#tabla2').DataTable({
      ajax: {
          url: "../ajax/matriz.php?op=listarE",
          type: "POST",
          dataSrc: 'data'
      },
      columns: [
          { data: 'cedula' },
          { data: 'estudiante' },
          { data: 'carrera' },
          {
              data: null,
              render: function(data, type, row) {
                  return '<input type="checkbox" class="chkSeleccionar" />';
              }
          }
      ]
  });

  // Manejar el clic en el botón "Ver Estudiantes"
  $('#tblmatriz tbody').on('click', '.btnCambiarTabla', function() {
      estudiantesSeleccionados = [];
      var selectedRowData = tabla1.row($(this).closest('tr')).data();
      if (selectedRowData) {
          idDetallePlanificacion = selectedRowData.dtp_id;
      }
      $('#listadoregistros').hide();
      $('#listadoregistros2').show();
  });

  // Manejar el cambio en los checkboxes de la segunda tabla
  $('#listadoregistros2').on('change', '.chkSeleccionar', function() {
      var cedula = tabla2.row($(this).closest('tr')).data().cedula;
      if (this.checked) {
          estudiantesSeleccionados.push(cedula);
      } else {
          estudiantesSeleccionados = estudiantesSeleccionados.filter(e => e !== cedula);
      }
  });

  // Manejar el clic en el botón "Guardar Estudiantes"
  $('#listadoregistros2').on('click', '.btnGuardarEstudiantes', function() {
    // Verificar que haya estudiantes seleccionados y una idDetallePlanificacion válida
    console.log("Estudiantes seleccionados:", estudiantesSeleccionados);
    console.log("idDetallePlanificacion:", idDetallePlanificacion);

    if (estudiantesSeleccionados.length > 0 && idDetallePlanificacion) {
      var itv_idTutorEmpresarial = $('#itv_idTutorEmpresarial').val();
        var usu_id = $('#usu_id').val();
        $.ajax({
            url: "../ajax/matriz.php?op=guardarEstudiantes",
            method: "POST",
            data: {
                idDetallePlanificacion: idDetallePlanificacion,
                estudiantes: estudiantesSeleccionados,
                itv_idTutorEmpresarial: itv_idTutorEmpresarial,
                usu_id: usu_id
            },
            success: function(response) {
                console.log(response);

                // Asegúrate de que la respuesta esté en formato JSON
                if (typeof response === 'string') {
                    response = JSON.parse(response);
                }

                if (response.success) {
                    alert(response.message); // Mostrar el mensaje de la respuesta JSON
                } else {
                    alert("Error al guardar estudiantes.");
                }
            },
            error: function(error) {
                console.error(error);
            }
        });
    } else {
        alert("Selecciona al menos un estudiante y asegúrate de tener una id_detallePlanificacion válida para guardar.");
    }
});

  // Manejar el clic en el botón "Volver a Proyectos"
  $('#listadoregistros2').on('click', '.btnVolver', function() {
      $('#listadoregistros').show();
      $('#listadoregistros2').hide();
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
  
      var pro_id = $('#pro_id').val();
      var de_empresa = $('#de_empresa').val();
      var cat_carrera = $('#cat_carrera').val();
      var cat_periodo = $('#cat_periodo').val();
      var de_grupo = $('#de_grupo').val();
      var de_fechaInicio = $('#de_fechaInicio').val();
      var de_fechafin = $('#de_fechafin').val();
      var de_dias = $('#de_dias').val();
      var de_horasDestinadas = $('#de_horasDestinadas').val();
      var de_fechaEntregaDocs = $('#de_fechaEntregaDocs').val();
      var de_fechaFinEntregaDocs = $('#de_fechaFinEntregaDocs').val();
  
       // Verificar si los campos están vacíos
        if (pro_id === '') {
        alert('El campo proyecto está vacío. Por favor, ingréselo.');
        return;
      }
      if (de_empresa === '') {
        alert('El campo empresa está vacío. Por favor, ingréselo.');
        return;
      }
      if (cat_carrera === '') {
        alert('El campo carrera está vacío. Por favor, ingréselo.');
        return;
      }
      if (cat_periodo === '') {
        alert('El campo periodo está vacío. Por favor, ingréselo.');
        return;
      }
      if (de_grupo === '') {
        alert('El campo grupo está vacío. Por favor, ingréselo.');
        return;
      }

  
    $.ajax({
          type: 'POST',
          url: '../ajax/registroMatriz.php?op=insertar',
          data: { pro_id: pro_id, 
            de_empresa: de_empresa, 
            cat_carrera:cat_carrera,
            cat_periodo:cat_periodo, 
            de_grupo:de_grupo,
            de_fechaInicio:de_fechaInicio,
            de_fechafin:de_fechafin,
            de_dias:de_dias,
            de_horasDestinadas:de_horasDestinadas,
            de_fechaEntregaDocs:de_fechaEntregaDocs,
            de_fechaFinEntregaDocs:de_fechaFinEntregaDocs},
          success: function(response) {
            // Manejar la respuesta del servidor
            alert(response);
          }
        });  
  });
  

  // listar la tabla de ficha
  $(document).ready(function() {
    var tabla = $('#tblficha').DataTable({
        ajax: {
            url: "../ajax/matriz.php?op=listarF",
            type: "POST",
            dataSrc: 'data'
        },
        columns: [
            { data: 'proyecto' },
            { data: 'empresa' },
            { data: 'carrera' },
            { data: 'periodo' },
            { data: 'fechaI' },
            { data: 'fechaF' },
            { data: 'tutor' }	
        ],
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



//Llenado de combos box
$(document).ready(function() {
	$.post("../ajax/matriz.php?op=comboP", function(response) {
		var data = JSON.parse(response);
		var options = '';
		for (var i = 0; i < data.length; i++) {
			options += '<option value="' + data[i].pro_id + '">' + data[i].pro_nombre + '</option>';
		}
		$('#pro_id').html(options);
		$('#pro_id').selectpicker('refresh');
	});
});

$(document).ready(function() {
	$.post("../ajax/matriz.php?op=comboC", function(response) {
		var data = JSON.parse(response);
		var options = '';
		for (var i = 0; i < data.length; i++) {
			options += '<option value="' + data[i].cat_id + '">' + data[i].cat_nombre + '</option>';
		}
		$('#cat_carrera').html(options);
		$('#cat_carrera').selectpicker('refresh');
	});
});

$(document).ready(function() {
	$.post("../ajax/matriz.php?op=comboPer", function(response) {
		var data = JSON.parse(response);
		var options = '';
		for (var i = 0; i < data.length; i++) {
			options += '<option value="' + data[i].cat_id + '">' + data[i].cat_nombre + '</option>';
		}
		$('#cat_periodo').html(options);
		$('#cat_periodo').selectpicker('refresh');
	});
});
