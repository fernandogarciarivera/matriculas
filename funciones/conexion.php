<?php
	$host = 'localhost:3306';
	$usuario_db = 'root';
	$contrasena_db = '';
	$nombre_db = 'matriculas';

	// Conexión a la base de datos
	$conexion = new mysqli($host, $usuario_db, $contrasena_db, $nombre_db);
	$conexion->set_charset("utf8");

	// Verificar la conexión
	if ($conexion->connect_error) {
		die("Error de conexión: " . $conexion->connect_error);
	}

	$current_page = basename($_SERVER['PHP_SELF']);
?>
