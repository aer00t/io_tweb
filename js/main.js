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
        let pregunta = 'Pregunta x';
        let tipoPreg = 'Drag & Drop';
        let evalPregBuena = 'x';
        let evalPregMala = 'x';

        $("#modal_alumno_nombre").val(alumno);
        $("#modal_alumno_boleta").val(boleta);
        $("#modal_alumno_telefono").val(telefono);
        $("#modal_alumno_correo").val(correo);
        $("#modal_alumno_calif").val(calif);
        $("#modal_alumno_nom_preg").val(pregunta);
        $("#modal_alumno_tipoPreg").val(tipoPreg);
        $("#modal_alumno_evalPregBuena").val(evalPregBuena);
        $("#modal_alumno_evalPregMala").val(evalPregMala);

        // console.log(alumno, boleta, telefono, correo, calif);
    });

    // Hablilitar la edicion del modal alumno

    $("#boton_editar_alumno").click(function() {
        $("#form_modal_alumno :input").prop("disabled", false);
    });

    $("#boton_cerrar_alumno").click(function() {
        $("#form_modal_alumno :input").prop("disabled", true);
        $("#form_modal_alumno")[0].reset();
    });



    // Confirmar borrado de alumno
    $(".boton_borrar").on("click", function() {
        $(".mod_confirm_del").modal('show');
    });

    $("#borrar_alum_si").on("click", function() {
        console.log('Borrado usuario');
        $(".mod_confirm_del").modal('hide');
    });

    $("#borrar_alum_no").on("click", function() {
        console.log('Cancelado borrado');
        $(".mod_confirm_del").modal('hide');
    });



});