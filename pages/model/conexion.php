<?php
class Conexion{
	private $servidor="localhost";
	private $base="bd_ventas";
	private $usuario="root";
	private $clave="123456789";

	public function Conectar(){
		try {
			$cnx=new PDO("mysql:host=$this->servidor; dbname=$this->base;", $this->usuario,$this->clave);
			$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 			return $cnx;
		}catch (PDOException $ex){
			echo"Se encontro un error: ".$ex->getMessage();	
		}
	}
}