/*
var tabla;

//funcion que se ejecuta al inicio
function init(){
   mostrarform(false);
   listar();
   $("#estudiante").on("submit",function(e){
   	guardaryeditar(e);
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
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}else{
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

//funcion listar estudiantes
function listar() {
            tabla = $('#tbllistado').DataTable({
                "aProcessing": true,
                "aServerSide": true,
                "ajax": {
                    url: 'ajax/estudiante.php?op=listar',
                    type: 'GET',
                    dataType: 'json',
                    error: function (e) {
                        console.log(e.responseText);
                    }
                },
                "bDestroy": true,
                "iDisplayLength": 15,
                "order": [[0, "desc"]]
            });
        }


init();*/
//////////////////////


$.post("../ajax/estudiante.php?op=combo_carrera", function(r){
	   $("#carrera").html(r);      
});

$.post("../ajax/estudiante.php?op=combo_periodo", function(r){
	   $("#periodo").html(r);      
});

$('#estudiante').submit(function(e) {
  e.preventDefault(); // Evitar que se envíe el formulario de forma predeterminada

  // Obtener los valores del formulario
  var nombre = $('#nombre').val();
  var cedula = $('#cedula').val();
  var telefono = $('#telefono').val();
  var correo = $('#correo').val();
  var direccion = $('#direccion').val();
  var carrera = $('#carrera').val();
  var periodo = $('#periodo').val();
  var login = $('#login').val();
  var clave = $('#clave').val();

  // Enviar los datos al servidor para guardar el préstamo
  $.ajax({
    type: 'POST',
    url: '../ajax/estudiante.php?op=guardarDatos',
    data: {
      nombre: nombre,
      cedula: cedula,
      telefono: telefono,
      correo: correo,
      direccion: direccion,
      carrera: carrera,
      periodo: periodo,
      login: login,
      clave: clave
    },
   success: function(datos){
     		bootbox.alert(datos);
     		mostrarform(false);
     		tabla.ajax.reload();
     	}
  });
});

//////////////////////////////////////////////////////////
