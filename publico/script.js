function filtrarProductos() {
    var input, filtro, tabla, filas, celda, texto;
    input = document.getElementById("inputBusqueda");
    filtro = input.value.toUpperCase();
    tabla = document.getElementById("tablaProductos");
    filas = tabla.getElementsByTagName("tr");

    for (var i = 0; i < filas.length; i++) {
        celda = filas[i].getElementsByTagName("td")[1]; // Se asume que el nombre del producto está en la segunda columna (índice 1)
        if (celda) {
            texto = celda.textContent || celda.innerText;
            if (texto.toUpperCase().indexOf(filtro) > -1) {
                filas[i].style.display = "";
            } else {
                filas[i].style.display = "none";
            }
        }
    }
}