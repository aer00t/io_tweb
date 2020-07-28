<?php?>
<div class="container-fluid">
    <h2>Preguntas & Contenido</h2>
    <br>

    <div class="preguntas">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pregunta</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>¿C&uacute;al es la arquitectura de sistemas linux?</td>
                    <td>Hot Spot</td>
                    <td><button type="button" class="btn btn-info btn-sm">Ver</button></td>
                    <td><button type="button" class="btn btn-outline-danger btn-sm boton_borrar">Borrar</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="modal fade mod_confirm_del" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">¿Realmente desea borrar?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" id="borrar_alum_si" class="btn btn-danger">Si</button>
                    <button type="button" id="borrar_alum_no" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

</div>