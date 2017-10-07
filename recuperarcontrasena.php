<?php require_once 'header.php' ?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">
            RECUPERAR CONTRASEÑA
        </div>
        <div class="card-body">
            <div class="text-center mt-4 mb-5">
                <h4>¿Olvidaste tu contraseña?</h4>
                <p>Ingrese su dirección de correo electrónico y le enviaremos instrucciones sobre cómo restablecer su contraseña.</p>
            </div>
            <form>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introducir la dirección de correo electrónico">
                </div>
                <input class="btn btn-primary btn-block" type="submit" name="login" value="Restablecer la contraseña">
            </form>
            <div class="text-center">
                <!--<a class="d-block small mt-3" href="register.html">Register an Account</a>-->
                <br/>
                <a class="d-block small" href="./">Página de inicio de sesión</a>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>
