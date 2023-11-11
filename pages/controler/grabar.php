<?php
	include"../include/cargar_clase.php";
	$p = new Producto();
	if (isset($_POST["btnregistrar"])) {
		//print_r($_POST);
		$prod=new M_Producto();
		$prod->codigo_producto=$_POST["txtcodigo"];
		$prod->producto=$_POST["txtproducto"];
		$prod->stok_disponible=$_POST["txtstok"];
		$prod->costo=$_POST["txtcosto"];
		$prod->ganancia=$_POST["txtganancia"];
		$prod->producto_codigo_marca=$_POST["cbomarca"];
		$prod->producto_codigo_categoria=$_POST["cbocategoria"];

		$tipo=$_POST["txttipo"];
		if($tipo=="r")
			$p->RegistrarProducto($prod);
		else if ($tipo=="e") {
			$p->EditarProducto($prod);
		}
		header("location: ../view/listar_producto.php");
	}