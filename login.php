<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<?php
    include ('funciones/mihead.php');

	include('funciones/configLogin.php');
	$login_button = '';
	
	$error = "";
	$mensaje = "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = $_POST['email'];
		$password = $_POST['password'];		
		// Registrar alumno
		require_once 'funciones/conexion.php';
		require_once 'funciones/funciones.php';
		$mensaje = loginAccesoMatricula($conexion, $email, $password);
		if ($mensaje === "Registro exitoso.") {
			header('Location: matriculas.php');
			exit();
		} else {
			$error = $mensaje;
		}
	}
	
?>

<body>
    
	<?php
		include ('funciones/header.php');
	?>
	
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/login.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Ingresar</strong></span></h2>
					<?php if ($error): ?>
						<div class="alert alert-danger">
							<?php echo $error; ?>
						</div>
					<?php endif; ?>
					<?php if ($mensaje && !$error): ?>
						<div class="alert alert-success">
							<?php echo $mensaje; ?>
						</div>
					<?php endif; ?>
                    <form method="post" data-bs-theme="light">

						<?php 
							if (!isset($_SESSION['user_name'])) {
								echo '<a class="w-100 p-0 mb-3" href="'. htmlspecialchars($authUrl) .'">
									<img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" alt="Ingresar con Google">
								</a>';
							}
						?>
						
                        <div class="mb-3"><input class="shadow form-control" type="email" id="email" name="email" placeholder="Email"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" id="password" name="password" placeholder="Password"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                    </form>
                    <p class="text-muted"><a href="olvidepassword.php">Olvidaste tu Password?</a></p>
                </div>
            </div>
        </div>
    </section>
    
    <?php
		include ('funciones/footer.php');
	?>
	
</body>

</html>

