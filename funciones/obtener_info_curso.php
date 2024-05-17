<?php
	require_once 'conexion.php';

	// Obtener el ID del curso
	$idCurso = isset($_GET['idCurso']) ? intval($_GET['idCurso']) : 0;
	$idProfesor = isset($_GET['idProfesor']) ? intval($_GET['idProfesor']) : 0;

	// Construir la consulta SQL según el parámetro recibido
	if ($idCurso > 0) {
		$consulta = "SELECT CONCAT(NomProfesor, ' ', ApellidosProfesor) AS Docente, NombreCurso, Seccion, Academia, txtDia, HorIni, HorFin 
				FROM profesor_curso_horario_view 
				WHERE idCurso = $idCurso 
				ORDER BY idCurso";
	} elseif ($idProfesor > 0) {
		$consulta = "SELECT CONCAT(NomProfesor, ' ', ApellidosProfesor) AS Docente, NombreCurso, Seccion, Academia, txtDia, HorIni, HorFin 
				FROM profesor_curso_horario_view 
				WHERE idProfesor = $idProfesor 
				ORDER BY idCurso";
	} else {
		echo '<p>No se proporcionó un identificador válido.</p>';
		$conexion->close();
		exit();
	}
	$resultado = $conexion->query($consulta);

	// si hay resultados
	if ($resultado->num_rows > 0) {
		$output = '<table class="table table-bordered">
					<thead>
						<tr><th>Docente</th><th>Curso</th><th>Sección</th><th>Academia</th><th>Día</th><th>Hora Inicio</th><th>Hora Fin</th></tr>
					</thead>
					<tbody>';
		
		// Recorrer los resultados y generar tener el output
		while ($fila = $resultado->fetch_assoc()) {
			$output .= '<tr>
							<td>' . $fila['Docente'] . '</td>
							<td>' . $fila['NombreCurso'] . '</td>
							<td>' . $fila['Seccion'] . '</td>
							<td>' . $fila['Academia'] . '</td>
							<td>' . $fila['txtDia'] . '</td>
							<td>' . $fila['HorIni'] . '</td>
							<td>' . $fila['HorFin'] . '</td>
						</tr>';
		}
		
		$output .= '</tbody></table>';
	} else {
		$output = '<p>No se encontró información para este curso.</p>';
	}

	// Cerrar la conexión
	$conexion->close();

	echo $output;
?>
