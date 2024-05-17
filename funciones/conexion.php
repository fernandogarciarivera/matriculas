<?php
	$host = 'localhost:3306';
	$usuario_db = 'matriculasusr';
	$contrasena_db = 'matriculaspsw';
	$nombre_db = 'matriculas';

	// Conexión a la base de datos
	$conexion = new mysqli($host, $usuario_db, $contrasena_db, $nombre_db);

	// Verificar la conexión
	if ($conexion->connect_error) {
		die("Error de conexión: " . $conexion->connect_error);
	}
	
	$current_page = basename($_SERVER['PHP_SELF']);
?>
