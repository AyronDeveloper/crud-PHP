<?php
	include "../include/cargar_clase.php";

	$p=new Producto();
	if (isset($_GET["codprod"])) {
		$codprod=$_GET["codprod"];

		$p->BorrarProducto($codprod);

		header("location: ../view/listar_producto.php");
	}
