// JavaScript Document




//Cargar Drive
$("#frmSubirDrive").on('submit', function (e) {
    e.preventDefault();
    insertDoc();
});

function insertDoc() {
    var postData = new FormData($("#frmSubirDrive")[0]);
    var doch_nombre = $("#doch_nombre").val();
    postData.append("doch_nombre", doch_nombre);
    var mensajeProgreso = bootbox.dialog({
        message: "Mensaje",
        closeButton: false,
    });


    $.ajax({
        url: "../ajax/subidaDocs.php?op=insDocH",
        data: postData,
        type: "POST",
        dataType: "json",
        enctype: 'multipart/form-data',
        contentType: false,
        processData: false,
        xhr: function () {
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", function (e) {
                if (e.lengthComputable) {
                    mensajeProgreso.find(".bootbox-body").text("Subiendo archivo...");
                }
            }, false);
            return xhr;
        },
        success: function (response) {
            mensajeProgreso.modal('hide'); // Cierra el bootbox de progreso

            if (response.estado == 'success') {
                bootbox.alert("Ok: "+response.mensaje);
                $("#frmSubirDrive").trigger("reset"); //limpiar formulario

            } else {
                bootbox.alert("Error: "+response.mensaje);
                console.log("Error: "+response.mensaje);
            }
        },
        error: function (xhr, status, error) {
            console.log("Error en la solicitud AJAX:", error);
            alert("Error en la solicitud AJAX: " + error);
        }
    });
}


//Cargar Drive
$("#frmSubirDriveDoc").on('submit', function (e) {
    e.preventDefault();
    insertDocVinculacion();
});

var formularioEnviado = false;

function insertDocVinculacion() {
    if (formularioEnviado) {
        // Si el formulario ya se ha enviado, no hagas nada
        return;
    }

    var postData = new FormData($("#frmSubirDriveDoc")[0]);
    var doch_nombre = $("#doch_nombre").val();
    postData.append("doch_nombre", doch_nombre);
    var mensajeProgreso = bootbox.dialog({
        message: "Mensaje",
        closeButton: false,
    });

    $.ajax({
        url: "../ajax/subidaDocs.php?op=insDocVinculacion",
        data: postData,
        type: "POST",
        dataType: "json",
        enctype: 'multipart/form-data',
        contentType: false,
        processData: false,
        xhr: function () {
            var xhr = new XMLHttpRequest();
            xhr.upload.addEventListener("progress", function (e) {
                if (e.lengthComputable) {
                    mensajeProgreso.find(".bootbox-body").text("Subiendo archivo...");
                }
            }, false);
            return xhr;
        },
        success: function (response) {
            mensajeProgreso.modal('hide');

            if (response.estado == 'success') {
                bootbox.alert("Ok: "+response.mensaje);
                $("#frmSubirDriveDoc").trigger("reset");
                formularioEnviado = true; // Marcar el formulario como enviado
            } else {
                bootbox.alert("Error: "+response.mensaje);
                console.log("Error: "+response.mensaje);
            }
        },
        error: function (xhr, status, error) {
            console.log("Error en la solicitud AJAX:", error);
            alert("Error en la solicitud AJAX: " + error);
        }
    });
}

$(document).ready(function() {
    // Al hacer clic en el botón "Agregar"
    $("#btnagregar").click(function() {
        // Oculta la tabla y muestra el formulario
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnregresar").show();
    });

    // Al hacer clic en el botón "Regresar"
    $("#btnregresar").click(function() {
        // Muestra la tabla y oculta el formulario
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnregresar").hide();
    });
});



$(document).ready(function() {
    // Al hacer clic en el botón "Agregar"
    $("#btnagregar").click(function() {
        // Oculta la tabla y muestra el formulario
        $("#listadoregistrosDoc").hide();
        $("#formularioregistrosDoc").show();
        $("#btnregresar").show();
    });

    // Al hacer clic en el botón "Regresar"
    $("#btnregresar").click(function() {
        // Muestra la tabla y oculta el formulario
        $("#check").show();
        $("#formularioregistrosDoc").hide();
        $("#btnregresar").hide();
    });
});

$(document).ready(function() {
    // Inicializa el DataTable
    var table = $('#check').DataTable();

    // Nombres de los documentos
    var nombresDocumentos = [
        'Matrícula - SIGA-Vinculación',
        'Copia del proyecto de prácticas de servicio comunitario',
        'Copia del plan de aprendizaje',
        'Bitácora',
        'Ficha de evaluación',
        'Certificado otorgado por la entidad beneficiaria',
        'Copia del oficio de ingreso a la entidad participante del proyecto',
        'Acto disciplinario (opcional)'
    ];

    // Agrega las filas con los botones en la columna "Acción"
    for (var i = 0; i < nombresDocumentos.length; i++) {
        var botonSubir = '<button class="btn btn-success btn-subir" data-documento="' + nombresDocumentos[i] + '"><i class="fa fa-plus-circle"></i> Subir </button>';
        table.row.add([nombresDocumentos[i], botonSubir]).draw();
    }

    // Escucha eventos de clic en los botones de subir
    $('#check tbody').on('click', '.btn-subir', function() {
		
		$('#editarModal').modal('show');
        // Recupera el nombre del botón clicado y el usuario de la sesión
        var nombreDocumento = $(this).data('documento');
        var usuarioId = usu_id;
    
        // Genera el nombre del documento con el usu_id
        var nombreFinal = nombreDocumento + "_" + usuarioId;
    
        // Llena automáticamente los inputs con la información obtenida
        $("#doch_nombre").val(nombreFinal);
        $("#usuario").val(usuarioId);
    
    });
});

$(document).ready(function() {
    // Al hacer clic en el botón "Agregar"
    $("#btnver").click(function() {
        // Oculta la tabla y muestra el formulario
        
        $("#doc").show();
        $("#check").hide();
        $("#btnver").hide();
        $("#btnregresar").show();
    });

    // Al hacer clic en el botón "Regresar"
    $("#btnregresar").click(function() {
        // Muestra la tabla y oculta el formulario
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#doc").hide();
        $("#btnver").show();
        $("#btnregresar").hide();
    });
});