<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<title>Filtrar Producto</title>
</head>
<body>
	<div class="container">
		<header>
			<h1>Filtrar Producto</h1>
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
					<div class="col-md-4">
						<form name="frmfiltrar" id="frmfiltrar" method="post" action="../controler/grabar.php">
  							<div class="mb-3">
    							<label for="txtvalor" class="form-label">Producto</label>
    							<input type="text" class="form-control" name="txtvalor" id="txtvalor" maxlength="50" />
  							</div>
  							<button type="button" class="btn btn-outline-success" name="btnfiltrar" id="btnfiltrar"><i class="fas fa-save"></i> Filtrar</button>
  							<a href="filtrar_producto.php" class="btn btn-outline-success">Nuevo</a>
   						</form>
					</div>
				</div>
			</article>
		</section>
		<br/>
		<section>
			<article>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<div id="tabla"></div>
			</article>
		</section>	
	</div>
	
</body>
</html>