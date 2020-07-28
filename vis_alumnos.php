<?php?>

<div class="container-fluid">
    <h2>Gesti&oacute;n de Alumnos</h2>

    <div id="alumnos">
        <br>
        <div class="row text-center justify-content-between">
            <div class="col-4 usr_header">Nombre</div>
            <div class="col-4 usr_header">Boleta</div>
            <div class="col-2 usr_header">Calificaci&oacute;n</div>
            <div class="col-2 usr_header">Información</div>
        </div>
        <hr>
        <br>
        <div class="row text-center justify-content-between">
            <?php
            for ($i = 0; $i < 10; $i++) { ?>

                <div class="col-4 text-left campos_alumno">Nombre1 nombre2 apellido1 apellido2 - <?php echo $i ?></div>
                <div class="col-4 campos_alumno">Boleta - <?php echo $i ?></div>
                <div class="col-2 campos_alumno">Calif- <?php echo $i ?></div>
                <div class="col-2 campos_alumno">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info btn-sm boton_info_alumno" data-toggle="modal" data-target="#modal_info_alumno" 
                    value="<?php echo "Alumno reg - $i" ?>">Ver</button>
                </div>

            <?php } ?>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="modal_info_alumno" tabindex="-1" role="dialog" aria-labelledby="modal_info_alumno" aria-hidden="true" 
    data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Datos del alumno</h5>
                </div>
                <div class="modal-body">

                    <form id="form_modal_alumno">
                        <div class="form-row">
                            <div class="col-7">
                                <label class="label_modal_alumno" for="modal_alumno_nombre">Nombre</label>
                                <input type="text" value="" id="modal_alumno_nombre" class="form-control is-valid">
                            </div>
                            <div class="col-5">
                                <label class="label_modal_alumno" for="modal_alumno_boleta">Boleta</label>
                                <input type="text" value="" id="modal_alumno_boleta" class="form-control is-valid">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-5">
                                <label for="modal_alumno_correo" class="label_modal_alumno">Correo</label>
                                <input type="text" value="" id="modal_alumno_correo" class="form-control is-valid">
                            </div>
                            <div class="col-4">
                                <label for="modal_alumno_telefono" class="label_modal_alumno">Tel&eacute;fono</label>
                                <input type="text" value="" id="modal_alumno_telefono" class="form-control is-valid">
                            </div>
                            <div class="col-3">
                                <label for="modal_alumno_calif" class="label_modal_alumno">Calificaci&oacute;n</label>
                                <input type="text" value="" id="modal_alumno_calif" class="form-control is-invalid">
                            </div>
                        </div>
                        <br>
                        <?php for($i=0; $i<10; $i++){?>
                            <div class="form-row">
                                <div class="col-3">
                                    <label for="modal_alumno_nom_preg" class="label_modal_alumno" >Pregunta</label>
                                    <input type="text" value="" id="modal_alumno_nom_preg" readonly class="form-control-plaintext" >
                                </div>
                                <div class="col-5">
                                    <label for="modal_alumno_nom_preg" class="label_modal_alumno" >Tipo</label>
                                    <input type="text" value="" id="modal_alumno_tipoPreg" class="form-control" >
                                </div>
                                <div class="col-2">
                                    <label for="modal_alumno_nom_preg" class="label_modal_alumno" >Buena</label>
                                    <input type="text" value="" id="modal_alumno_evalPregBuena" class="form-control" >
                                </div>
                                <div class="col-2">
                                    <label for="modal_alumno_nom_preg" class="label_modal_alumno" >Mala</label>
                                    <input type="text" value="" id="modal_alumno_evalPregMala" class="form-control" >
                                </div>
                            </div>
                            <br>
                        <?php }?>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" id="boton_editar_alumno" class="btn btn-primary">Editar</button>
                    <button type="button" id="boton_cerrar_alumno" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>