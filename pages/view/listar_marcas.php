<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Marcas</title>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<?php
//require("../model/conexion.php");
//require("../model/marca.php");
include("../include/cargar_clase.php");

$marca = new Marca();
?>
	<div>
	<header>
		<h1 class="text-center"><i class="fas fa-list-alt"></i>Lista de Marcas</h1>
		<hr/>
	</header>
		<nav>
			<a href="../../index.php" class="btn btn-outline-success"><i class="fas fa-book"></i>
				Regresar
			</a>
		</nav>
		<section>
			<article>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<table class="table">
							<tr class="table-success">
								<th>N°</th>
								<th>Codigo</th>
								<th>Marca</th>
							</tr>
								<?php
								$i=0;
								foreach($marca->ListaMarcas()as$m){
									$i++;
								?>
								<tr>
									<td><?=$i?></td>
									<td><?=$m->codigo_marca?></td>
									<td><?=$m->marca?></td>
								</tr>
								<?php
									}
								?>
					</table>
				</div>
			</div>
			</article>
		</section>
		<footer>
			<div class="alert alert-success text-center" role="alert">
				Elaborado por: Ayron Acuña Salinas
			</div>
		</footer>

</div>
	
</body>
</html>