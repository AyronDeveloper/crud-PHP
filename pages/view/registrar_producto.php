<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<title>Registrar Producto</title>
</head>
<body>
<?php
	//require("../model/conexion.php");
	//require("../model/marca.php");
	include"../include/cargar_clase.php";
	$marca = new Marca();
	$categoria =new Categoria();
	?>
	<div class="container">
		<header>
			<h1>Registrar Producto</h1>
			<hr/>
		</header>
		<nav>
			<a href="listar_producto.php" class="btn btn-outline-success"><i class="fas fa-book"></i>
				Regresar
			</a>
		</nav>
		<section>
			<article>
				<div class="row justify-content-center">
					<div class="col-md-4">
						<form name="frmregistro" id="frmregistro" method="post" action="../controler/grabar.php">
							<input type="hidden" name="txttipo" id="txttipo" value="r" />
							<div class="mb-3">
    							<label for="txtcodigo" class="form-label">Codigo de Producto</label>
    							<input type="text" class="form-control" name="txtcodigo" id="txtcodigo" />
  							</div>
  							<div class="mb-3">
    							<label for="txtproducto" class="form-label">Producto</label>
    							<input type="text" class="form-control" name="txtproducto" id="txtproducto" />
  							</div>
  							<div class="mb-3">
    							<label for="txtstok" class="form-label">Stok</label>
    							<input type="number" class="form-control" name="txtstok" id="txtstok" min="1" max="1000" />
  							</div>
  							<div class="mb-3">
    							<label for="txtcosto" class="form-label">Costo</label>
    							<input type="text" class="form-control" name="txtcosto" id="txtcosto" />
  							</div>
  							<div class="mb-3">
    							<label for="txtganancia" class="form-label">Ganancia</label>
    							<input type="text" class="form-control" name="txtganancia" id="txtganancia" />
  							</div>
  							<div class="mb-3">
    							<label for="cbomarca" class="form-label">Marca</label>
    							<select class="form-control" name="cbomarca" id="cbomarca">
    								<option value="">Selecione una marca</option>
    								<?php
    									foreach ($marca->ListaMarcas() as $m) {  								
    								?>
    								<option value="<?=$m->codigo_marca?>"><?=$m->marca?></option>
    								<?php
    									}
    								?>
    							</select>
  							</div>
  							<div class="mb-3">
    							<label for="cbocategoria" class="form-label">Categoria</label>
    							<select class="form-control" name="cbocategoria" id="cbocategoria">
    								<option value="">Selecione una Categoria</option>
    								<?php
    									foreach ($categoria->ListaCategoria() as $m) {  								
    								?>
    								<option value="<?=$m->codigo_categoria?>"><?=$m->categoria?></option>
    								<?php
    									}
    								?>
    							</select>
  							</div>
  							<input type="submit" class="btn btn-primary" name="btnregistrar" id="btnregistrar" value="Registrar"/>
  							<input type="reset" class="btn btn-primary" name="btnlimpiar" id="btnlimpiar" value="Limpiar"/>
   						</form>
					</div>
				</div>
			</article>
		</section>
	</div>
	
</body>
</html>