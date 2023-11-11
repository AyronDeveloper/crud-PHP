<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<title>Lista de Producto</title>
</head>
<body>

<?php
include"../include/cargar_clase.php";
$producto = new Producto();
?>
	<div>
	<header>
		<h1 class="text-center"><i class="fas fa-list-alt"></i>Lista de Producto</h1>
		<hr/>
	</header>
		<nav>
			<a href="../../index.php" class="btn btn-outline-success"><i class="fas fa-book"></i>
				Regresar
			</a>
			<a href="registrar_producto.php" class="btn btn-outline-success"><i class="fas fa-book"></i>
				Registrar Producto
			</a>
			<a href="filtrar_producto.php" class="btn btn-outline-success"><i class="fas fa-filter"></i>Filtrar Producto</a>
		</nav>
		<section>
			<article>
				<div class="row justify-content-center">
					<div class="col-md-6">
						<table class="table">
							<tr class="table-success">
								<th>N°</th>
								<th>Codigo</th>
								<th>Producto</th>
								<th>Stok</th>
								<th>Costo</th>
								<th colspan="2">Acciones</th>
							</tr>
								<?php
								$i=0;
								foreach($producto->ListaProducto()as$p){
									$i++;
								?>
								<tr class="fila">
									<td><?=$i?></td>
									<td class="codprod"><?=$p->codigo_producto?></td>
									<td class="prod"><?=$p->producto?></td>
									<td><?=$p->stok_disponible?></td>
									<td><?=number_format($p->costo, 2)?></td>
									<td><a href="#" class="btneditar"><i class="fas fa-edit"></i></a></td>
									<td><a href="#" class="btnborrar"><i class="fas fa-trash-alt"></i></a></td>
								</tr>
								<?php
									}
								?>
					</table>
				</div>
			</div>
			</article>
		</section>
		<br/>
		<!-- Modal -->
			<div class="modal fade" id="aviso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title" id="staticBackdropLabel">Eliminar Producto</h5>
        					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      					</div>
      					<div class="modal-body">
        				¿Seguro de borrar el registro?<br/>
        				<span class="prod"></span>(<span class="codprod"></span>)
      					</div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
        					<a href="#" class="btn btn-primary">SI</a>
      					</div>
    				</div>
  				</div>
			</div>
		<footer>
			<div class="alert alert-success text-center" role="alert">
				Elaborado por: Ayron Acuña Salinas
			</div>
		</footer>

</div>
	
</body>
</html>