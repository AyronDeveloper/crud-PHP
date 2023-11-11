<?php
	include"../include/cargar_clase.php";

	$prod = new Producto();
	if (isset($_POST['valor'])) {
		$valor=$_POST["valor"];
		$prod->FitrarProducto($valor);
	}
