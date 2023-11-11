<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script type="text/javascript" src="../../js/libreria.js"></script>

	<title>Buscar Marca</title>
</head>
<body>
	<div class="container">
		<header>
			<h1 class="text-center"><i class="fas fa-search"></i>Buscar Marca Por Codigo</h1>
			<hr/>
		</header>
		<nav>
			<a href="../../index.php" class="btn btn-outline-success">
				<i class="fa fa-book"></i> Regresar
			</a>
		</nav>
		<section>
			<article>
				<div class="row justify-content-center">
					<div class="col-md-5">
						<form name="frmbuscar" id="frmbuscar" method="post">
							<div class="mb-3">
    							<label for="txtcodigo" class="form-label">Codigo de Marca a Buscar</label>
    							<input type="text" class="form-control" name="txtcodigo" id="txtcodigo" placeholder="Codigo" maxlength="5" autofocus/>
  							</div>
  							<div class="mb-3">
    							<label for="txtmarca" class="form-label">Marca</label>
    							<input type="text" class="form-control" name="txtmarca" id="txtmarca" readonly />
  							</div>
  							<div class="mb-3">
  								<a href="buscar_marca.php"class="btn btn-outline-success"><i class="far fa-file"></i> Nueva Busqueda
  								</a>
  							</div>
   						</form>
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