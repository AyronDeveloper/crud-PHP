<?php 
	spl_autoload_register("CargarClase");

	function CargarClase($clase){
		$ruta = "../model/";
		$extension = ".php";
		$ruta_completa = $ruta.$clase.$extension;
		include_once $ruta_completa;
	}
