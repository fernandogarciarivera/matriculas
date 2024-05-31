<?php
	header('Content-Type: text/html; charset=utf-8');
	mb_internal_encoding('UTF-8');
	ini_set("default_charset", "UTF-8");

	require_once 'conexion.php';

	// Obtener el ID del curso
	$idCurso = isset($_GET['idCurso']) ? intval($_GET['idCurso']) : 0;
	$idProfesor = isset($_GET['idProfesor']) ? intval($_GET['idProfesor']) : 0;

	// Construir la consulta SQL según el parámetro recibido
	$consulta = "SELECT CONCAT(NomProfesor, ' ', ApellidosProfesor) AS Docente, NombreCurso, Seccion, Academia, txtDia, HorIni, HorFin 
			FROM profesor_curso_horario_view 
			WHERE ($idCurso = 0 or idCurso = $idCurso) and ($idProfesor = 0 or idProfesor = $idProfesor)
			ORDER BY idCurso";
	
	$resultado = $conexion->query($consulta);

	// si hay resultados
	if ($resultado->num_rows > 0) {
		$output = '<table class="table table-bordered">
					<thead>
						<tr>
							<th>Docente</th>
							<th>Curso</th>
							<th>Academia</th>
							<th>Día</th>
							<th>Hora Inicio</th>
							<th>Hora Fin</th>
						</tr>
					</thead>
					<tbody>';
		
		// Recorrer los resultados y generar tener el output
		while ($fila = $resultado->fetch_assoc()) {
			//$fila = array_map('utf8_encode', $fila);
			$output .= '<tr>
							<td>' . htmlentities($fila['Docente']) . '</td>
							<td>' . htmlentities($fila['NombreCurso']) . '</td>
							<td>' . htmlentities($fila['Academia']) . '</td>
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
