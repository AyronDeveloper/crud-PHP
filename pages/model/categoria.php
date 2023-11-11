<?php 
class Categoria extends Conexion{

	public function ListaCategoria(){
		$arr_cat = null;
		$cn = $this->Conectar();
		$sql="call sp_ListarCategoria()";
		$snt=$cn->prepare($sql);
		$snt->execute();
		$arr_cat=$snt->fetchAll(PDO::FETCH_OBJ);
		$cn=null;
		return $arr_cat;
	}
}