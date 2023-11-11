<?php
	//require("../model/conexion.php");
	//require("../model/marca.php");
	include"../include/cargar_clase.php";

	$marca = new Marca();
	if (isset($_POST['codmar'])) {
		$codmar=$_POST["codmar"];
		$marca->BuscarMarcaPorCodigo($codmar);
	}
?>