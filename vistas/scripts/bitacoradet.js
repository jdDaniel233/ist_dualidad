// JavaScript Document
var tabla;

//funcion que se ejecuta al inicio
function init(){
   mostrarform(false);
   listar();
   $("#bitacoraForm").on("submit", function(e){
    guardarYEditar(e);
   })

   $("#imagenmuestra").hide();
   //mostramos los permisos
   $.post("../ajax/usuario.php?op=permisos&id=", function(r){
      $("#permiso").html(r);
   });
}

//funcion limpiar
function limpiar(){
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

//funcion mostrar formulario
function mostrarform(flag){
   limpiar();
   if(flag){
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

//cancelar form
function cancelarform(){
   limpiar();
   mostrarform(false);
}

//funcion listar
$(document).ready(function() {
    $('#tbllistadob').DataTable({
        ajax: {
            url: "../ajax/bitacora.php?op=mostrarDatos",
            type: "POST",
            dataSrc: 'data'
        },
        columns: [
			{ data: 'id', visible: false }, // Oculta la columna del ID
            { data: 'fecha' }, // Oculta la columna del ID
            { data: 'horaIngreso' },
            { data: 'horaSalida' },
			{ data: 'TotalHoras' },
			{ data: 'actividades' },
			{ data: 'experiencias' },
			{ data: 'aprendizajes' },
			{ data: 'propuestas' },
            {
                // Agrega el botón "Visualizar" y maneja el evento de clic
                render: function(data, type, row) {
                    return '<div class="btn-group">' +
         '<button class="btn btn-warning btn-xs" onclick="mostrar(' + row.id + ')"><i class="fa fa-pencil"></i> </button>'+
         '<button class="btn btn-danger btn-xs" onclick="eliminar(' + row.id + ')"><i class="fa fa-close"></i></button>'+ 
       '</div>';

                }
            }
        ]
    });

});

//guardar
$(document).ready(function() {
    // Asigna el manejador de eventos submit al formulario con id "formulario"
    $('#bitacora').submit(function(e) {
        e.preventDefault(); // Evitar que se envíe el formulario de forma predeterminada

        // Obtener los valores del formulario
        var bita_id = $('#bita_id').val();
		var fecha = $('#fecha').val();
		var horaIngreso = $('#horaIngreso').val();
		var horaSalida = $('#horaSalida').val();
		var totalHoras = $('#totalHoras').val();
		var actividadesRea = $('#actividadesRea').val();
		var experiencias = $('#experiencias').val();
		var aprendizajes = $('#aprendizajes').val();
		var propuestas = $('#propuestas').val();

        // Enviar los datos al servidor para guardar el préstamo
        $.ajax({
            type: 'POST',
            url: '../ajax/bitacora.php?op=guardaryeditar',
            data: {
                bita_id: bita_id, // Agrega el id a los datos enviados
				fecha: fecha,
				horaIngreso: horaIngreso,
				horaSalida: horaSalida,
				totalHoras: totalHoras,
				actividadesRea: actividadesRea,
				experiencias: experiencias,
				aprendizajes: aprendizajes,
				propuestas: propuestas
            },
            success: function(datos) {
                bootbox.alert(datos, function() {
                    // Después de cerrar el mensaje de alerta, recargar la página
                    location.reload();
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error en la solicitud AJAX:', textStatus, errorThrown);
            }
        });
    });
});

init();