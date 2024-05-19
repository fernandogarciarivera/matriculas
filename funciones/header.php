<?php
	echo $current_pageMenu = trim(basename($_SERVER['PHP_SELF']));
?>

	<!-- Modal para mostrar información del curso -->
    <div class="modal fade" id="infoCursoModal" tabindex="-1" aria-labelledby="infoCursoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoCursoModalLabel">Información del Curso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="infoCursoModalBody">
                    <!-- Contenido cargado json -->
                </div>
            </div>
        </div>
    </div>

<nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav" style="background: #60cfe9;padding: 10px 0px !important;">
	<div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php"><img src="assets/img/brands/TPWLogo.png" width="179" height="68"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navcol-1">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item"><a class="nav-link <?php echo ($current_pageMenu == "index.php" ? 'active' : '') ?>" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link <?php echo ($current_pageMenu == "docentes.php" ? 'active' : '') ?>" href="docentes.php">Docentes</a></li>
				<li class="nav-item"><a class="nav-link <?php echo ($current_pageMenu == "cursos.php" ? 'active' : '') ?>" href="cursos.php">Cursos</a></li>
				<li class="nav-item"><a class="nav-link <?php echo ($current_pageMenu == "contactanos.php" ? 'active' : '') ?>" href="contactanos.php">Contactanos</a></li>
				<li class="nav-item"><a class="nav-link <?php echo ($current_pageMenu == "matriculas.php" ? 'active' : '') ?>" href="matriculas.php">Matricula</a></li>
				<li class="nav-item"></li>
			</ul>
			<?php 
				if (!isset($_SESSION['usuario'])) {
					echo '<a class="btn btn-primary shadow" role="button" href="registrame.php">Registrate</a>';
				} else {
					echo '<a class="btn btn-primary shadow" role="button" href="logout.php">Logout</a>';
				}
			?>
		</div>
	</div>
</nav>

