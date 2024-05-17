<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<?php
    include ('mihead.php');
?>

<body>
    
	<?php
		include ('header.php');
	?>
	
    <section class="py-4 py-md-5 my-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/register.svg"></div>
                <div class="col-md-5 col-xl-4 col-xxl-3 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1">Registame</span></h2>
                    <form method="post" data-bs-theme="light">
                        <div class="mb-3"><input class="form-control" type="text" name="nombre" placeholder="Nombre Completo" required="" inputmode="latin-name"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="apellidos" placeholder="Apellidos Completo" required="" inputmode="latin-name"></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="email" name="email" placeholder="Email" required="" pattern="([a-zA-Z0-9]([^ @&amp;%$\\\/()=?¿!.,:;]?|\d?)+[a-zA-Z0-9][\.]){1,2}" inputmode="email"></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="password" name="password" placeholder="Password" required=""></div>
                        <div class="mb-3"><input class="shadow-sm form-control" type="password" name="password_repeat" placeholder="Repetir Password" required=""></div>
                        <div class="mb-5"><button class="btn btn-primary shadow col-12" type="submit">Crear una Cuenta</button></div>
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
		include ('footer.php');
	?>
	
</body>

</html>