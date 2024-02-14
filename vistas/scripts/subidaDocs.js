$.post("../ajax/subidaDocs.php?op=combo_documento", function (r) {
    $("#documento").html(r);
});

$("#frmSubirDrive").on('submit', function (e) {
    e.preventDefault();
    insertDoc();
});

function insertDoc() {
    var postData = new FormData($("#frmSubirDrive")[0]);
    var mensajeProgreso = bootbox.dialog({
        message: "Mensaje",
        closeButton: false,
    });

    // Verificar si el archivo es un PDF antes de hacer la solicitud AJAX
    var fileInput = document.getElementById('archivo');
    var archivo = fileInput.files[0];

    if (archivo) {
        var allowedExtensions = ['pdf'];
        var fileExtension = archivo.name.split('.').pop().toLowerCase();

        if (!allowedExtensions.includes(fileExtension)) {
            mensajeProgreso.modal('hide');
            bootbox.alert("Formato de archivo incorrecto. Solo se permiten archivos PDF.");
            return;
        }
    }

    $.ajax({
        url: "../ajax/subidaDocs.php?op=insDoc",
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
                bootbox.alert("Ok: " + response.mensaje);
                $("#frmSubirDrive").trigger("reset"); //limpiar formulario
            } else {
                bootbox.alert("Error: " + response.mensaje);
                console.log("Error: " + response.mensaje);
            }
        },
        error: function (xhr, status, error) {
            console.log("Error en la solicitud AJAX:", error);
            alert("Error en la solicitud AJAX: " + error);
        }
    });
}
