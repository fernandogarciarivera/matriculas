<?php

session_start();
// Datos de conexión a la base de datos
require_once 'conexion.php';

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['idAlumno'])) {
        $idAlumno = $_SESSION['idAlumno'];
        $selectedHorarios = $_POST['selectedHorarios'];
        require_once 'funciones.php';
        $resultado = grabarMatricula($conexion, $idAlumno, $selectedHorarios);
    } else {
        echo "ID de alumno no encontrado en la sesión.";
    }
}

?>