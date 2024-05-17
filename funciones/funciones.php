<?php

function obtenerProfesoresAleatorios($conexion) {
    $consulta = "SELECT idProfesor, CONCAT(NomProfesor, ' ', ApellidosProfesor) as Docente, miFoto, bitacora, sexo FROM profesor ORDER BY RAND() LIMIT 4";
    $resultado = $conexion->query($consulta);
    $profesores = [];
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $profesores[] = $fila;
        }
    }
    return $profesores;
}

function obtenerProfesores($conexion, $idProfesor) {
    $consulta = "SELECT idProfesor, CONCAT(NomProfesor, ' ', ApellidosProfesor) as Docente, miFoto, bitacora, sexo FROM profesor WHERE ".$idProfesor." = 0 OR idProfesor = ".$idProfesor."";
    $resultado = $conexion->query($consulta);
    $profesores = [];
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $profesores[] = $fila;
        }
    }
    return $profesores;
}

function mostrarProfesores($profesores, $current_page) {
    foreach ($profesores as $profesor) {
		$foto = $profesor['miFoto'] ? $profesor['miFoto'] : 'assets/img/docentes/docente_' . ($profesor['sexo'] == 'M' ? 'hombre' : 'mujer') . '.jpg';
		if ($current_page == 'index.php') {
			echo '<div class="col text-center text-md-start">
				<div class="d-flex justify-content-center align-items-center justify-content-md-start">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-school fs-3 text-primary bg-secondary"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path><path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path></svg>
					<h5 class="fw-bold mb-0 ms-2">' . $profesor['Docente'] . '</h5>
					<img class="float-start rounded-circle" src="' . htmlspecialchars($foto) . '" width="60" height="60">
				</div>
				<p class="text-muted my-3">' . $profesor['bitacora'] . '</p>
			</div>';
		} else if ($current_page == 'docentes.php') {
			echo '<div class="col-md-3 col-xxl-3">
				<div class="card border-light border-1 d-flex justify-content-center p-2 m-0">
					<div class="card-body">
						<div><img class="float-start rounded-circle" src="' . htmlspecialchars($foto) . '" width="60" height="60">
							<h4 class="fw-bold text-start">' . $profesor['Docente'] . '</h4>
							<p class="text-muted">' . $profesor['bitacora'] . '</p>
						</div>
						<div class="d-flex">
							<div class="bs-icon-sm bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon me-2" data-bs-toggle="tooltip" data-bss-tooltip="" aria-label="Cursos que Imparte" data-bs-original-title="Cursos que Imparte">
								<button id="' .$profesor['idProfesor']. '" name="infoIdCurso" class="btn btn-sm px-0" type="button" onclick="mostrarInfoCurso(' . $profesor['idProfesor'] . ')">
									<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-calendar-month"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M7 14h.013"></path><path d="M10.01 14h.005"></path><path d="M13.01 14h.005"></path><path d="M16.015 14h.005"></path><path d="M13.015 17h.005"></path><path d="M7.01 17h.005"></path><path d="M10.01 17h.005"></path></svg>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>';
		}
        
    }
}

function obtenerCursosAleatorios($conexion) {
    $consulta = "SELECT idCurso, NombreCurso, Seccion, NRC, miFoto, Academia, bitacora, DiasClase, HorasClase, idCicloEscolar FROM curso ORDER BY RAND() LIMIT 3";
    $resultado = $conexion->query($consulta);
    $cursos = [];
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $cursos[] = $fila;
        }
    }
    return $cursos;
}

function obtenerCursos($conexion, $idCurso) {
    $consulta = "SELECT idCurso, NombreCurso, Seccion, NRC, miFoto, Academia, bitacora, DiasClase, HorasClase, idCicloEscolar FROM curso WHERE ".$idCurso." = 0 OR idCurso = ".$idCurso." ORDER BY RAND()";
    $resultado = $conexion->query($consulta);
    $cursos = [];
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $cursos[] = $fila;
        }
    }
    return $cursos;
}

function mostrarCursos($cursos, $current_page) {
	$imagenes_demo = ["imagendemo_1.svg","imagendemo_2.svg","imagendemo_3.svg","imagendemo_4.svg","imagendemo_5.svg","imagendemo_6.svg","imagendemo_7.svg","imagendemo_8.svg","imagendemo_9.svg","imagendemo_10.svg"];
	
    foreach ($cursos as $indice => $curso) {
		if ($current_page == 'index.php') {
			echo '<div class="col-xxl-4">
				<div class="card border-light border-1 d-flex justify-content-center p-4">
					<div class="card-body">
						<div class="bs-icon-lg bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-4 bs-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-blockquote"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15h15"></path><path d="M21 19h-15"></path><path d="M15 11h6"></path><path d="M21 7h-6"></path><path d="M9 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2"></path><path d="M3 9h1a1 1 0 1 1 -1 1v-2.5a2 2 0 0 1 2 -2"></path></svg>
						</div>
						<div>
							<h4 class="fw-bold">' .$curso['NombreCurso']. '</h4>
							<p class="text-muted">' .$curso['bitacora']. '</p>
							<button id="' .$curso['idCurso']. '" name="irIdCurso" class="btn btn-sm px-0" type="button" onclick="redirigirACurso(' . $curso['idCurso'] . ')">Mas Información&nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-arrow-right"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path></svg></button>
						</div>
					</div>
				</div>
			</div>';
		} else if ($current_page == 'cursos.php') {
			$foto = 'assets/img/cursos/' . $imagenes_demo[array_rand($imagenes_demo)];
			if ($curso['miFoto']) $foto = 'assets/img/cursos/' . $elemento['miFoto'];
			
			$botonesComun = '<div class="bs-icon-sm bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon me-2" data-bs-toggle="tooltip" data-bss-tooltip="" aria-label="Docentes y Horarios" data-bs-original-title="Docentes y Horarios">
				<button id="' .$curso['idCurso']. '" name="infoIdCurso" class="btn btn-sm px-0" type="button" onclick="mostrarInfoCurso(' . $curso['idCurso'] . ')">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-calendar-month"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M7 14h.013"></path><path d="M10.01 14h.005"></path><path d="M13.01 14h.005"></path><path d="M16.015 14h.005"></path><path d="M13.015 17h.005"></path><path d="M7.01 17h.005"></path><path d="M10.01 17h.005"></path></svg>
				</button>
			</div>
			<div class="bs-icon-sm bs-icon-rounded bs-icon-secondary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon me-2" data-bs-toggle="tooltip" data-bss-tooltip="" aria-label="Agregar a Mis Cursos" data-bs-original-title="Agregar a Mis Cursos">
				<button id="' .$curso['idCurso']. '" name="matricularIdCurso" class="btn btn-sm px-0" type="button" onclick="agregarCurso(' . $curso['idCurso'] . ')">
					<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-pencil-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path><path d="M13.5 6.5l4 4"></path><path d="M16 19h6"></path><path d="M19 16v6"></path></svg>
				</button>
			</div>';
			
			if ($indice % 2 == 0) {
				echo '<div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
						<div class="col mb-5">
							<img class="rounded img-fluid" src="' . $foto . '">
						</div>
						<div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
							<div>
								<h5 class="fs-3 fw-bold mb-4">' .$curso['NombreCurso']. '</h5>
								<p class="text-muted mb-4">' .$curso['bitacora']. '</p>
								<div class="d-flex">
									'.$botonesComun.'
								</div>
							</div>
						</div>
					</div>';
			} else {
				echo '<div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
						<div class="col order-md-last mb-5">
							<img class="rounded img-fluid" src="' . $foto . '">
						</div>
						<div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
							<div class="ms-md-3">
								<h5 class="fs-3 fw-bold mb-4">' .$curso['NombreCurso']. '</h5>
								<p class="text-muted mb-4">' .$curso['bitacora']. '</p>
								<div class="d-flex">
									'.$botonesComun.'
								</div>
							</div>
						</div>
					</div>';
			}
		}
    }
}


?>

<script>
function redirigirACurso(idCurso) {
    window.location.href = 'cursos.php?idCurso=' + idCurso;
}
</script>
