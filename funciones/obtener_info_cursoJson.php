<?php
//header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
ini_set("default_charset", "UTF-8");

//header('Content-Type: application/json');

// Obtener el ID del curso
$idCurso = isset($_GET['idCurso']) ? intval($_GET['idCurso']) : 0;
$idProfesor = isset($_GET['idProfesor']) ? intval($_GET['idProfesor']) : 0;

require_once 'conexion.php';
require_once 'funciones.php';
$cursos = jsonCursosMAtriculas($conexion, $idCurso, $idProfesor);

$json_string = json_encode($cursos, JSON_UNESCAPED_UNICODE);
//echo '["datos":'.$json_string."]";
echo $json_string;

?>
