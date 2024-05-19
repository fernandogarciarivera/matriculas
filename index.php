<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<?php
    include ('funciones/mihead.php');
?>

<body>
    
	<?php
		include ('funciones/header.php');
	?>
	
    <header class="pt-5">
        <div class="container pt-4 pt-xl-5">
            <div class="row pt-5">
                <div class="col-md-8 text-center text-md-start mx-auto">
                    <div class="text-center">
                        <h1 class="display-4 fw-bold text-start mb-5">Tu éxito académico&nbsp;<span class="underline">comienza</span><span class="underline">aqui</span>.</h1>
                    </div>
                </div>
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="text-center position-relative"><img class="img-fluid" src="assets/img/illustrations/presentation-2.svg" style="width: 800px;"></div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
			
				<?php
					require_once 'funciones/conexion.php';
					require_once 'funciones/funciones.php';
					$Cursos = obtenerCursosAleatorios($conexion);
					mostrarCursos($Cursos,$current_page);
				?>
		
			</div>
        </div>
    </section>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="display-6 fw-bold pb-md-4">Nuestro equipo docente comprometido en tu&nbsp;<span class="underline">desarrollo</span></h3>
                </div>
                <div class="col-md-6 pt-4">
                    <p class="text-muted mb-4">Nuestros profesores no solo poseen un profundo conocimiento en sus áreas de expertise, sino que también están comprometidos con la excelencia académica y el desarrollo de sus estudiantes..</p>
                </div>
            </div>
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div>
                        <div id="ProfesAleatorio" class="row gy-2 row-cols-1 row-cols-sm-2">
                            
							<?php
								require_once 'funciones/conexion.php';
								require_once 'funciones/funciones.php';
								$profesores = obtenerProfesoresAleatorios($conexion);
								mostrarProfesores($profesores,$current_page);
							?>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-first order-md-last">
                    <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/illustrations/startup.svg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="bg-primary border rounded border-0 border-primary overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 d-flex flex-column justify-content-center">
                        <div class="text-white p-4 p-md-5">
                            <h2 class="fw-bold mb-3">Proceso de Matrícula.</h2>
                            <p class="mb-4">Explora nuestros cursos y elige el que mejor se adapte a tus necesidades y objetivos.</p>
                            <div class="my-3">
                                <a class="btn btn-secondary me-2 mt-2" role="button" href="matriculas.php">Iniciar Matrícula</a>
                                <a class="btn btn-light mt-2" role="button" href="cursos.php">Explorar Cursos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-first order-md-last" style="min-height: 250px;"><img class="w-100 h-100 fit-contain pt-5 pt-md-0" src="assets/img/illustrations/web-development.svg"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="text-white bg-primary border rounded border-0 border-primary d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5">
                <div class="pb-2 pb-lg-1">
                    <h2 class="fw-bold text-secondary mb-2">Necesitas un plan de Estudios?</h2>
                    <p class="mb-0" style="padding-right: 30px;">No importa en qué etapa de tu viaje educativo te encuentres, estamos aquí para brindarte el apoyo y la orientación que necesitas. <strong>¡Contáctanos hoy mismo para comenzar tu viaje hacia el éxito académico!</strong></p>
                </div>
                <div class="my-2"><a class="btn btn-light fs-5 py-2 px-4" role="button" href="contactanos.php">Contactanos</a></div>
            </div>
        </div>
    </section>
    
	<?php
		include ('funciones/footer.php');
	?>
	
</body>

</html>