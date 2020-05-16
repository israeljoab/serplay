$(document).ready(function() {

    $("#ocultarLogin").click(function() {
        $("#formularioLogin").hide();
        $("#formularioRegistro").show();
    });

    $("#ocultarRegistro").click(function() {
        $("#formularioLogin").show();
        $("#formularioRegistro").hide();
    });
});