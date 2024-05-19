<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<?php
    include ('funciones/mihead.php');

	$error = "";
	$mensaje = "";
	$nombres = "";
	$apellidos = "";
	$email = "";
	$password = "";		

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombres = $_POST['Nombres'];
		$apellidos = $_POST['Apellidos'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$password_repeat = $_POST['Password_repeat'];
		// Validar que los passwords coincidan
		if ($password !== $password_repeat) {
			$error = "Las contraseñas no coinciden.";
		} elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/\d/', $password) || !preg_match('/[^a-zA-Z\d]/', $password) || strlen($password) < 8) {
			$error = "La contraseña debe tener al menos 8 caracteres, incluir una letra mayúscula, un número y un carácter especial.";
		} else {
			// Registrar alumno
			require_once 'funciones/conexion.php';
			require_once 'funciones/funciones.php';
			$mensaje = registrarAlumno($conexion, $nombres, $apellidos, $email, $password);
			if ($mensaje === "Registro exitoso.") {
				//header('Location: login.php');
				exit();
			} else {
				$error = $mensaje;
			}
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
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/register.svg"></div>
                <div class="col-md-5 col-xl-4 col-xxl-3 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1">Registame</span></h2>
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
						<div class="mb-3">
							<input class="form-control" type="text" id="Nombres" name="Nombres" placeholder="Nombre Completo" required="" inputmode="latin-name" value="<?php echo $nombres; ?>">
						</div>
						<div class="mb-3">
							<input class="form-control" type="text" id="Apellidos" name="Apellidos" placeholder="Apellidos Completo" required="" inputmode="latin-name" value="<?php echo $apellidos; ?>">
						</div>
						<div class="mb-3">
							<input class="shadow-sm form-control" type="email" id="Email" name="Email" placeholder="Email" required="" pattern="([a-zA-Z0-9]([^ @&amp;%$\\\/()=?¿!.,:;]?|\d?)+[a-zA-Z0-9][\.]){1,2}" inputmode="email" value="<?php echo $email; ?>">
						</div>
						<div class="mb-3">
							<input class="shadow-sm form-control" type="password" id="Password" name="Password" placeholder="Password" required="" value="<?php echo $password; ?>">
						</div>
						<div class="mb-3">
							<input class="shadow-sm form-control" type="password" id="Password_repeat" name="Password_repeat" placeholder="Repetir Password" required="">
						</div>
						<div class="mb-5">
							<button class="btn btn-primary shadow col-12" type="submit">Crear una Cuenta</button>
						</div>
					</form>
                    <p class="text-muted">Si estas registrado nosotros? <a href="login.php">Ingresa aquí&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-arrow-narrow-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l14 0"></path>
                                <path d="M15 16l4 -4"></path>
                                <path d="M15 8l4 4"></path>
                            </svg></a>&nbsp;</p>
                </div>
            </div>
        </div>
    </section>
	
    <?php
		include ('funciones/footer.php');
	?>
	
</body>

</html>