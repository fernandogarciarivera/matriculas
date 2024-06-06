<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<?php
    include ('funciones/mihead.php');
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
		include ('funciones/header.php');
	?>
	
    <section class="py-5 mt-5">
        <div class="container py-4 py-xl-5">

            <div class="container mt-2">
                <div class="container">
                    <a class="btn btn-primary shadow d-none" role="button" href="#" id="miRegistro">Registrarme en Los Cursos</a>;
                </div>
                <div id="courses-table">

                </div>
            </div>
   
		</div>
    </section>
    
    <?php
		include ('funciones/footer.php');
	?>
	
</body>

<script>
	const mostrarInfoCurso = function (idProfesor, idCurso) {
		$.ajax({
			url: 'funciones/obtener_info_cursoJson.php',
			method: 'GET',
			data: { idProfesor: idProfesor, idCurso: idCurso },
			success: function(response) {
				renderTable(JSON.parse(response));
			},
			error: function() {
				alert('Error al obtener la información del curso.');
			}
		});
	}

    const renderTable = function (data) {
        const coursesTable = document.getElementById('courses-table');
        coursesTable.innerHTML = ''; // Limpiar la tabla antes de agregar datos

        for (const courseId in data) {
            const course = data[courseId];
            const courseHtml = `
                <div class="accordion" id="course-${courseId}">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-${courseId}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-${courseId}" aria-expanded="false" aria-controls="collapse-${courseId}">
                                ${course.NombreCurso}
                            </button>
                        </h2>
                        <div id="collapse-${courseId}" class="accordion-collapse collapse" aria-labelledby="heading-${courseId}" data-bs-parent="#course-${courseId}">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Docente</th>
                                            <th>Horarios</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ${renderDocentes(course.Docentes)}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            coursesTable.insertAdjacentHTML('beforeend', courseHtml);
        }
        updateSelectedHorarios();
        restaurarSeleccion();
    }

    const renderDocentes = function (docentes) {
        let docentesHtml = '';
        for (const profesorId in docentes) {
            const profesor = docentes[profesorId];
            docentesHtml += `
                <tr>
                    <td>${profesor.Docente}</td>
                    <td>${renderHorarios(profesor.Horarios)}</td>
                </tr>
            `;
        }
        return docentesHtml;
    }

    const renderHorarios = function (horarios) {
        let horariosHtml = '';
        horarios.forEach(horario => {
            horariosHtml += `<div class="form-check">
                <input class="form-check-input" type="checkbox" name="seleccionCurso" 
                    id="horario-${horario.idCursoDicta}-${horario.idCurso}-${horario.idProfesor}-${horario.IdHorario}"
                    data-id-CursoDicta="${horario.idCursoDicta}" 
                    data-id-curso="${horario.idCurso}" 
                    data-id-profesor="${horario.idProfesor}" 
                    data-id-horario="${horario.IdHorario}">
                <label class="form-check-label" for="horario-${horario.IdHorario}">
                    Día: ${horario.txtDia}, Hora: ${horario.HorIni} - ${horario.HorFin}
                </label>
            </div>`;
        });
        return horariosHtml;
    }

    let cursosSeleccionados = {};
    let selectedHorarios = [];

    const showBtnMatricula = function() {
        const selectedHorariosTmp = JSON.parse(localStorage.getItem('selectedHorarios')) || [];
        if (selectedHorariosTmp.length === 0) {
            $('#miRegistro').addClass('d-none');
        } else if (selectedHorariosTmp.length === 1) {
            $('#miRegistro').removeClass('d-none');
            $('#miRegistro').html('Registrarme en el Curso');
        } else if (selectedHorariosTmp.length > 1) {
            $('#miRegistro').removeClass('d-none');
            $('#miRegistro').html('Registrarme en los Cursos');
        }
    }

    const updateSelectedHorarios = function () {
        $(document).ready(function() {
            $('input[name="seleccionCurso"]').on('change', function() {
                const idCursoDicta = this.getAttribute('data-id-CursoDicta');
                const idCurso = this.getAttribute('data-id-curso');
                const idProfesor = this.getAttribute('data-id-profesor');
                const idHorario = this.getAttribute('data-id-horario');    
                if (this.checked) {
                    // Verifica si ya hay un horario seleccionado para este curso
                    if (cursosSeleccionados[idCurso]) {
                        this.checked = false;
                        alert('Solo puedes seleccionar un horario por curso.');
                        return false;
                    }
                    cursosSeleccionados[idCurso] = true;
                    selectedHorarios.push({ idCursoDicta, idCurso, idProfesor, idHorario });
                } else {
                    cursosSeleccionados[idCurso] = false;
                    const index = selectedHorarios.findIndex(horario => horario.idHorario === idHorario);
                    if (index > -1) selectedHorarios.splice(index, 1);
                }
                /** guardar las variables en variable de sesion */
                localStorage.setItem('selectedHorarios', JSON.stringify(selectedHorarios));
                showBtnMatricula();
            });
        });
    }

    const restaurarSeleccion = function () {
        $(document).ready(function() {
            const selectedHorariosTmp = JSON.parse(localStorage.getItem('selectedHorarios')) || [];
            console.log(selectedHorariosTmp);
            // Cargar los horarios seleccionados desde el localStorage
            selectedHorariosTmp.forEach(horario => {
                const checkbox = $(`input[name="seleccionCurso"][data-id-cursodicta="${horario.idCursoDicta}"][data-id-curso="${horario.idCurso}"][data-id-profesor="${horario.idProfesor}"][data-id-horario="${horario.idHorario}"]`);
                if (checkbox.length) {
                    checkbox.prop('checked', true);
                    cursosSeleccionados[horario.idCurso] = true;
                    const idCursoDicta = horario.idCursoDicta;
                    const idCurso = horario.idCurso;
                    const idProfesor = horario.idProfesor;
                    const idHorario = horario.idHorario;   
                    selectedHorarios.push({ idCursoDicta, idCurso, idProfesor, idHorario });
                    // Desplegar el curso correspondiente
                    const accordionCollapse = checkbox.closest('.accordion-collapse');
                    accordionCollapse.collapse('show');
                }
            });
            showBtnMatricula();
        });
    }

    <?php 
        // Obtener el ID del curso y profesor
        $idCurso = isset($_GET['idCurso']) ? intval($_GET['idCurso']) : 0;
        $idProfesor = isset($_GET['idProfesor']) ? intval($_GET['idProfesor']) : 0;
    ?>

    mostrarInfoCurso(<?php echo $idProfesor; ?>, <?php echo $idCurso; ?>);

    $(document).ready(function() {
        // Función para enviar los datos seleccionados
        $('#miRegistro').click(function(event) {
            event.preventDefault();
            const selectedHorarios = JSON.parse(localStorage.getItem('selectedHorarios')) || [];
            $.ajax({
                url: 'funciones/miMatricula.php', // Archivo PHP que manejará la solicitud
                type: 'POST',
                data: {
                    selectedHorarios: selectedHorarios
                },
                success: function(response) {
                    alert(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error en la solicitud AJAX:', error);
                }
            });
        });
    });

</script>

</html>