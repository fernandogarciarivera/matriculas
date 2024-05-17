<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<?php
    include ('mihead.php');
	// Verificar si el usuario ha iniciado sesión
	if (!isset($_SESSION['usuario'])) {
		// Redirigir a la página de login
		header("Location: login.php");
		exit();
	}
?>

<body>
    
	<!-- Modal para mostrar información del curso -->
    <div class="modal fade" id="infoCursoModal" tabindex="-1" aria-labelledby="infoCursoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoCursoModalLabel">Información de Matricula</h5>
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
	
    <section class="py-5 mt-5">
        <div class="container py-4 py-xl-5">
		
			
   
		</div>
    </section>
    
    <?php
		include ('footer.php');
	?>
	
</body>




</html>