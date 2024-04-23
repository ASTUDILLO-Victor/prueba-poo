function enviarFormulario() {
    var formulario = document.getElementById("miFormulario");
    formulario.action = window.location.href; // Establece la acción del formulario a la URL actual
    formulario.submit(); // Envía el formulario
}

function volverARegistro() {
    window.location.href = window.location.href; // Redirige a la misma página
}