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
	
    <section class="py-5 mt-5">
        <div class="container py-4 py-xl-5">
		
			<?php
				$idCurso = isset($_GET['idCurso']) ? intval($_GET['idCurso']) : 0;
				require_once 'funciones/conexion.php';
				require_once 'funciones/funciones.php';
				$Cursos = obtenerCursos($conexion,$idCurso);
				mostrarCursos($Cursos,$current_page);
			?>
   
		</div>
    </section>
    
    <?php
		include ('footer.php');
	?>
	
</body>

<script>
	function mostrarInfoCurso(idCurso) {
		$.ajax({
			url: 'funciones/obtener_info_curso.php',
			method: 'GET',
			data: { idCurso: idCurso },
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