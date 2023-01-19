function alerta() {
    var mensaje;
    var opcion = confirm("¿Estás seguro de que quieres hacer esta reserva?");
    if (opcion == true) {
        alert("Gracias por elegirnos");
    } else {
        alert("Esperamos que vuelva");
    }
    document.getElementById("ejemplo").innerHTML = mensaje;
}