<?php?>
<div class="login">
    <div class="container-fluid">
        <h2>Sistema de examen virtual</h2>
        <h3>Login</h3>
        <br>

        <form>
            <div class="form-group row text-center">
                <label for="user" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="user" placeholder="Usuario" maxlength="">
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">Contrase&ntilde;a</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="pass" placeholder="Contrase&ntilde;a">
                </div>
            </div>
            <div class="boton_login">
                <button type="button" class="btn btn-primary">Ingresar</button>
                <a class="btn btn-link" href="#" readonly class="form-control-plaintext">Olvide mi contrase&ntilde;a</a>
            </div>
            <br>
            <div class="alert alert-danger col-sm-10" role="alert">
                This is a danger alert—check it out!
            </div>
        </form>
    </div>
</div>