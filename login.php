<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

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
                <div class="col-md-6 text-center"><img class="img-fluid w-100" src="assets/img/illustrations/login.svg"></div>
                <div class="col-md-5 col-xl-4 text-center text-md-start">
                    <h2 class="display-6 fw-bold mb-5"><span class="underline pb-1"><strong>Ingresar</strong></span></h2>
                    <form method="post" data-bs-theme="light">
                        <div class="mb-3"><input class="shadow form-control" type="email" name="email" placeholder="Email"></div>
                        <div class="mb-3"><input class="shadow form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="mb-5"><button class="btn btn-primary shadow" type="submit">Log in</button></div>
                    </form>
                    <p class="text-muted"><a href="olvidepassword.php">Olvidaste tu Password?</a></p>
                </div>
            </div>
        </div>
    </section>
    
    <?php
		include ('footer.php');
	?>
	
</body>

</html>