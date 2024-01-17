// JavaScript Document
$.post("../ajax/aprobardoc.php?op=combo_estado", function(r){
	   $("#estado").html(r);      
});


$(document).ready(function() {
    var id = obtenerParametroUrl('id'); // Función para obtener el valor de un parámetro desde la URL

    // Verificamos si hay un id en la URL antes de hacer la solicitud AJAX
    if (id) {
        $('#tbllistado2').DataTable({
            ajax: {
                url: "../ajax/aprobardoc.php?op=mostrarDatos2&id=" + id,
                type: "POST",
                dataSrc: 'data'
            },
            columns: [
                { data: 'id' },
                { data: 'url' },
                { data: 'fecha' },
                { data: 'tipo' }
            ]
        });
    }
});

// Función para obtener un parámetro específico desde la URL
function obtenerParametroUrl(nombre) {
    var urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(nombre);
}