<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<?php
    include ('funciones/mihead.php');
?>

<body>
	
	<?php
		include ('funciones/header.php');
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
		include ('funciones/footer.php');
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

        // Guardar la selección del curso en localStorage
        function guardarSeleccion(idCurso) {
            let cursosSeleccionados = JSON.parse(localStorage.getItem('cursosSeleccionados')) || [];
            if (!cursosSeleccionados.includes(idCurso)) {
                cursosSeleccionados.push(idCurso);
                localStorage.setItem('cursosSeleccionados', JSON.stringify(cursosSeleccionados));
            }
        }

        // Restaurar la selección del curso desde localStorage
        function restaurarSeleccion() {
            let cursosSeleccionados = JSON.parse(localStorage.getItem('cursosSeleccionados')) || [];
            cursosSeleccionados.forEach(idCurso => {
                let boton = document.getElementById(idCurso);
                if (boton) {
                    boton.classList.add('seleccionado');
                }
            });
        }

        // Llamar a la función para restaurar la selección cuando se carga la página
        window.onload = function() {
            restaurarSeleccion();
        };

        // Manejar el clic del botón "matricularIdCurso"
        function manejarMatriculacion(idCurso) {
            guardarSeleccion(idCurso);
            document.getElementById(idCurso).classList.add('seleccionado');
        }
    </script>


</html>