<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<?php
    include ('mihead.php');
?>

<body>
    
	<!-- Modal para mostrar información del curso -->
    <div class="modal fade" id="infoCursoModal" tabindex="-1" aria-labelledby="infoCursoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoCursoModalLabel">Información del Curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="infoCursoModalBody">
                    <!-- Contenido cargado json -->
                </div>
            </div>
        </div>
    </div>
	
	<?php
		include ('header.php');
	?>
	
    <section id="docentes" class="py-5 mt-5">
        <div class="container py-4 py-xl-5">
            <div class="row mb-4">
                <div class="col-md-8 col-xl-6">
                    <h3 class="display-6 fw-bold pb-4">Nuestro equipo de&nbsp;<span class="underline">docentes</span>.</h3>
                </div>
                <div class="col-md-8 col-xl-6 pt-4">
                    <p class="text-muted">Nuestro equipo de expertos está aquí para ayudarte en cada paso del camino.</p>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-4 text-center mb-2">
			
				<?php
					require_once 'funciones/conexion.php';
					require_once 'funciones/funciones.php';
					$profesores = obtenerProfesores($conexion,0);
					mostrarProfesores($profesores,$current_page);
				?>
			
			</div>
        </div>
    </section>
    <section>
        <div class="container py-4 py-xl-5">
            <div class="row gy-4 gy-md-0">
                <div class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                    <div style="max-width: 350px;">
                        <h1 class="display-6 fw-bold mb-4">Un equipo de profesionales en una&nbsp;<span class="underline"><a class="link-dark text-black-100" href="#docentes">Plataforma</a></span>.</h1>
                        <p class="my-4">Pensando en la comodidad y facilidad de nuestros estudiantes. Con unos pocos clics, puedes explorar nuestros cursos y acceder a todo el material de estudio que necesitas.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/illustrations/javascript.svg"></div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <p class="mb-4" style="font-size: 1.6rem;">Mas&nbsp;<span class="text-primary bg-warning p-1"><strong>2400</strong></span>&nbsp;alumnos registrados.</p>
                        </div>
                    </div>
					<!-- 
                    <div class="row">
                        <div class="col">
                            <div class="card border-light border-1 d-flex justify-content-center p-4">
                                <div class="card-body">
                                    <div>
                                        <h4 class="fw-bold">Nombre Alumno</h4>
                                        <p class="text-muted">Mi Experiencia Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-light border-1 d-flex justify-content-center p-4">
                                <div class="card-body">
                                    <div>
                                        <h4 class="fw-bold">Nombre Alumno</h4>
                                        <p class="text-muted">Mi Experiencia Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-light border-1 d-flex justify-content-center p-4">
                                <div class="card-body">
                                    <div>
                                        <h4 class="fw-bold">Nombre Alumno</h4>
                                        <p class="text-muted">Mi Experiencia Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-light border-1 d-flex justify-content-center p-4">
                                <div class="card-body">
                                    <div>
                                        <h4 class="fw-bold">Nombre Alumno</h4>
                                        <p class="text-muted">Mi Experiencia Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                -->
				</div>
            </div>
        </div>
    </section>
    
    <?php
		include ('footer.php');
	?>
	
</body>

<script>
	function mostrarInfoCurso(idProfesor) {
		$.ajax({
			url: 'funciones/obtener_info_curso.php',
			method: 'GET',
			data: { idProfesor: idProfesor },
			success: function(response) {
				$('#infoCursoModalBody').html(response);
				$('#infoCursoModal').modal('show');
			},
			error: function() {
				alert('Error al obtener la información del curso.');
			}
		});
	}
</script>

</html>