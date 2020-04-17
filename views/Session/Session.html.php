<?php
// include_once "config/env.php";
@session_start();
@session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>La Surtida</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="assets/vendor/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="assets/vendor/sweetalert/css/sweetalert2.min.css">
    <link rel="shortcut icon" href="public/img/favicon/logo.png" type="image/x-icon">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="p-5 col-lg-4 mx-md-auto">
                <div class="login-card card ">
                    <div class="card-header">
                        <div class="justify-content-center row">
                            <div class="col-6">
                                <img src="public/img/favicon/logo-ferreteria.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="frm_session" action="" method="POST" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Login" name="user" autofocus>
                                </div>
                                <div class="input-group form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" require>

                                    <button type="button" class="btn btn-outline-primary showPassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Ingresar">
                            </fieldset>
                        </form>
                        <div class="text-center">
                        <a  class="d-block small mt-3" href="views/Session/Register.html.php">Crear Usuario</a>

                        <!-- <a class="d-block small mt-3" href="register.html">Register an Account</a> -->
                        <a class="d-block small" href="views/Session/forgot-password.html.php">olvidaste la contrasena?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/sweetalert/js/sweetalert2.min.js"></script>
<script src="public/js/login.js"></script>

</html>
<script>
$(document).ready(function () {
	$(document).on("click", ".showPassword", function () {
		let inputPassword = $(this).parent().find("input");
		if ($(inputPassword).val() != "") {
			if ($(inputPassword).prop("type") == "password") {
				$(inputPassword).prop("type", "text");
				$(this).html('<i class="fas fa-eye-slash"></i>');
			}else if($(inputPassword).prop("type") == "text"){
				$(inputPassword).prop("type", "password");
				$(this).html('<i class="fas fa-eye"></i>');
			}
		}
	});
});
</script>