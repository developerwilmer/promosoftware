<?php require_once 'header.php' ?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">
            INICIAR SESION
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="label">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese correo electrónico">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="login" value="Iniciar sesión">
            </form>
            <div class="text-center">
                <!--<a class="d-block small mt-3" href="register.html">Register an Account</a>-->
                <br/>
                <a class="d-block small" href="recuperarcontrasena.php">¿Se te olvidó tu contraseña?</a>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>