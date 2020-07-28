<?php?>

<div class="container-fluid">
    <h2>Usuarios Administradores</h2>
    <div id="usuarios">

        <div class="row justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_add_usr">Agregar</button>
        </div>
        <br>

        <div class="row align-items-center">
            <div class="col-4 usr_header">Nombre</div>
            <div class="col-4 usr_header">Correo</div>
            <div class="col-2 usr_header">ID</div>
            <div class="col-2 usr_header"></div>
        </div>

        <br>

        <div class="row ">
            <?php
            for ($i = 0; $i < 10; $i++) { ?>
                <div class="col-4 campos_usr">Nombre1 nombre2 apellido1 apellido2 - <?php echo $i ?></div>
                <div class="col-4 campos_usr">correolargodealguien@dominio.com - <?php echo $i ?></div>
                <div class="col-2 campos_usr">Identificador - <?php echo $i ?></div>
                <div class="col-2 campos_usr"><button type="button" class="btn btn-warning btn-sm">Eliminar</button></div>
                <hr>
            <?php } ?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal_add_usr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <h3>Agregar administrador</h3>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form action="">
                            <div class="form-group row text-left">
                                <label for="user_mail_add" class="col-sm-3 col-form-label">Correo</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="user_mail_add" placeholder="usuario@correo.com">
                                </div>
                            </div>
                            <div class="form-group row text-left">
                                <label for="user_pass_add" class="col-sm-3 col-form-label">Contrase&ntilde;a</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" id="user_pass_add" placeholder="Contrase&ntilde;a">
                                </div>
                            </div>
                            <div class="form-group row text-left">
                                <label for="user_id_add" class="col-sm-3 col-form-label">ID</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="user_id_add" placeholder="E.j. 1234567890">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>