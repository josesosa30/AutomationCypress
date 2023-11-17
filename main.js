$(document).ready(function() {
    // Cargar la tabla de usuarios al cargar la página
    cargarTablaUsuarios();

    // Agregar evento de clic al botón de búsqueda
    $("#searchButton").click(function() {
        var searchTerm = $("#searchInput").val();
        buscarUsuarios(searchTerm);
    });
});

function cargarTablaUsuarios() {
    // Hacer una solicitud AJAX para obtener los usuarios desde el servidor
    $.get("get_users.php", function(data) {
        // Insertar las filas de usuarios en la tabla
        $("#userTableBody").html(data);
    });
}

function buscarUsuarios(searchTerm) {
    // Hacer una solicitud AJAX para buscar usuarios por nombre
    $.get("search_users.php", { term: searchTerm }, function(data) {
        // Insertar las filas de usuarios filtrados en la tabla
        $("#userTableBody").html(data);
    });
}
