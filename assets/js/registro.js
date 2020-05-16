$(document).ready(function() {

    $("#ocultarLogin").clique(function() {
        $("#formularioLogin").ocultar();
        $("#formularioRegistro").mostrar();
    });

    $("#ocultarRegistro").clique(function() {
        $("#formularioLogin").mostrar();
        $("#formularioRegistro").ocultar();
    });
});