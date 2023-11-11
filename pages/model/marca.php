<?php
class Marca extends Conexion{

	public function ListaMarcas(){
		$arr_marcas = null;
		$cn = $this->Conectar();
		$sql="call sp_ListarMarcas()";
		$snt=$cn->prepare($sql);
		$snt->execute();
		$arr_marcas=$snt->fetchAll(PDO::FETCH_OBJ);
		$cn=null;
		return $arr_marcas;
	}
	public function BuscarMarcaPorCodigo($cod){
		$arr_marcas = null;
		$cn = $this->Conectar();
		$sql="call sp_BuscarMarcaPorCodigo(:cod)";
		$snt=$cn->prepare($sql);
		$snt->bindParam(":cod",$cod,PDO::PARAM_STR,5);
		$snt->execute();
		$nr=$snt->rowCount();
		if ($nr>0) {
			$arr_marcas["datos"][]=$snt->fetch(PDO::FETCH_OBJ);
		}else{
			$arr_marcas["datos"]["estado"]="sin datos";
		}
		$cn=null;
		echo json_encode($arr_marcas, JSON_FORCE_OBJECT);
	}
}
