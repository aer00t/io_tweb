$(document).ready(function() {
    console.log('Ready');

    $("#form_modal_alumno :input").prop("disabled", true);

    $(".boton_info_alumno").click(function() {;

        let alumno = $(this).attr('value');
        // console.log(alumno);
        let boleta = '2000101010';
        let telefono = '0155555555';
        let correo = 'nombre@correo.com';
        let calif = '9.3';

        $("#modal_alumno_nombre").val(alumno);
        $("#modal_alumno_boleta").val(boleta);
        $("#modal_alumno_telefono").val(telefono);
        $("#modal_alumno_correo").val(correo);
        $("#modal_alumno_calif").val(calif);

        // console.log(alumno, boleta, telefono, correo, calif);
    });


    $("#boton_editar_alumno").click(function() {
        $("#form_modal_alumno :input").prop("disabled", false);
    });

    $("#boton_cerrar_alumno").click(function() {
        $("#form_modal_alumno :input").prop("disabled", true);
        $("#form_modal_alumno")[0].reset();
    });



});