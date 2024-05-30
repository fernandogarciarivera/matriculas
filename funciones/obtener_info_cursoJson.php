<?php
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
ini_set("default_charset", "UTF-8");

// Datos de conexión a la base de datos
require_once 'conexion.php';

header('Content-Type: application/json');

// Obtener el ID del curso
$idCurso = isset($_GET['idCurso']) ? intval($_GET['idCurso']) : 0;
$idProfesor = isset($_GET['idProfesor']) ? intval($_GET['idProfesor']) : 0;

// Construir la consulta SQL según el parámetro recibido
$consulta = "SELECT idCursoDicta, idCurso, NombreCurso, Seccion, idCicloEscolar, idProfesor, CONCAT(NomProfesor, ' ', ApellidosProfesor) AS Docente, IdHorario, txtDia, HorIni, HorFin
        FROM profesor_curso_horario_view 
        WHERE ($idCurso = 0 OR idCurso = $idCurso) AND ($idProfesor = 0 OR idProfesor = $idProfesor)
        ORDER BY idCurso, idProfesor, IdHorario";

// Inicializar estructura anidada
$cursos = [];
$resultado = $conexion->query($consulta);
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $idCursoDicta = $fila['idCurso'];
        $idCurso = $fila['idCurso'];
        $idCursoDictaReal = $fila['idCursoDicta'];
        $idProfesor = $fila['idProfesor'];

        // Asegurarse de que los datos estén en UTF-8
        $fila = array_map('utf8_encode', $fila);

        // Si el curso no existe en la estructura, agregarlo
        if (!isset($cursos[$idCursoDicta])) {
            $cursos[$idCursoDicta] = [
                'idCursoDicta' => $idCursoDicta,
                'NombreCurso' => htmlentities($fila['NombreCurso']),
                'Seccion' => $fila['Seccion'],
                'idCicloEscolar' => $fila['idCicloEscolar'],
                'Docentes' => []
            ];
        }

        // Si el docente no existe en la estructura del curso, agregarlo
        if (!isset($cursos[$idCursoDicta]['Docentes'][$idProfesor])) {
            $cursos[$idCursoDicta]['Docentes'][$idProfesor] = [
                'idProfesor' => $idProfesor,
                'Docente' => htmlentities($fila['Docente']),
                'Horarios' => []
            ];
        }

        // Agregar horario al docente
        $cursos[$idCursoDicta]['Docentes'][$idProfesor]['Horarios'][] = [
            'idCursoDicta' => $idCursoDictaReal,
            'idCurso' => $idCurso,
            'idProfesor' => $idProfesor,
            'IdHorario' => $fila['IdHorario'],
            'txtDia' => $fila['txtDia'],
            'HorIni' => $fila['HorIni'],
            'HorFin' => $fila['HorFin']
        ];
    }
}
$conexion->close();

$json_string = json_encode($cursos, JSON_UNESCAPED_UNICODE);
echo '{"datos":'.$json_string."}";

?>
