<nav class="navbar navbar-expand-md fixed-top navbar-shrink py-3 navbar-light" id="mainNav" style="background: #60cfe9;padding: 10px 0px !important;">
	<div class="container"><a class="navbar-brand d-flex align-items-center" href="index.php"><img src="assets/img/brands/TPWLogo.png" width="179" height="68"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navcol-1">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="docentes.php">Docentes</a></li>
				<li class="nav-item"><a class="nav-link" href="cursos.php">Cursos</a></li>
				<li class="nav-item"><a class="nav-link" href="contactanos.php">Contactanos</a></li>
				<li class="nav-item"><a class="nav-link" href="matriculas.php">Matricula</a></li>
				<li class="nav-item"></li>
			</ul><a class="btn btn-primary shadow" role="button" href="registrame.php">Registrate</a>
		</div>
	</div>
</nav>

<?php
	echo basename($_SERVER['PHP_SELF']); /* Returns The Current php File Name */
?>