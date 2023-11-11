<?php
class Producto extends Conexion{

	public function ListaProducto(){
		$arr_prod = null;
		$cn = $this->Conectar();
		$sql="call sp_ListarProductos()";
		$snt=$cn->prepare($sql);
		$snt->execute();
		$arr_prod=$snt->fetchAll(PDO::FETCH_OBJ);
		$cn=null;
		return $arr_prod;
	}
	public function FitrarProducto($valor){
		$arr_prod = null;
		$cn = $this->Conectar();
		$sql="call sp_FiltrarProductos(:valor)";
		$snt=$cn->prepare($sql);
		$snt->bindParam(":valor",$valor,PDO::PARAM_STR,50);
		$snt->execute();
		$nr=$snt->rowCount();
		if ($nr>0) {
			
		$arr_prod=$snt->fetchAll(PDO::FETCH_OBJ);

				echo"<table class=\"table\">
							<tr class=\"table-success\">
								<th>N°</th>
								<th>Codigo</th>
								<th>Producto</th>
								<th>Stok</th>
								<th>Costo</th>
								<th colspan=\"2\">Acciones</th>
							</tr>";

								$i=0;
								foreach($arr_prod as$p){
									$i++;
								
								echo "<tr class=\"fila\">	
									<td>".$i."</td>
									<td class=\"codprod\">".$p->codigo_producto."</td>
									<td class=\"prod\">".$p->producto."</td>
									<td>".$p->stok_disponible."</td>
									<td>".number_format($p->costo, 2)."</td>
									<td><a href=\"#\" class=\"btneditar\"><i class=\"fas fa-edit\"></i></a></td>
									<td><a href=\"#\" class=\"btnborrar\"><i class=\"fas fa-trash-alt\"></i></a></td>
								</tr>";
									}
				echo"</table>";
					}else{
						echo"<div class='alert alert-success text-center' role='alert'> No se encontraron resultados...</div>";
					} 	
		$cn=null;
	}
	public function BuscarProductoPorCodigo($cod){
		$prod = null;
		$cn = $this->Conectar();
		$sql="call sp_BuscarProductoPorCodigo(:cod)";
		$snt=$cn->prepare($sql);
		$snt->bindParam(":cod",$cod,PDO::PARAM_STR,5);
		$snt->execute();
		$nr=$snt->rowCount();
		if ($nr>0) {
			$prod = $snt->fetch(PDO::FETCH_OBJ);
		}
		$cn = null;
		return $prod;
	}
	public function RegistrarProducto(M_Producto $prod){
		try{
			$cn = $this->Conectar();
			$sql="call sp_RegistrarProducto(:codprod, :prod, :stk, :cst, :gnc, :codmar, :codcat)";
			$snt=$cn->prepare($sql);
			$snt->bindParam(":codprod",$prod->codigo_producto);
			$snt->bindParam(":prod",$prod->producto);
			$snt->bindParam(":stk",$prod->stok_disponible);
			$snt->bindParam(":cst",$prod->costo);
			$snt->bindParam(":gnc",$prod->ganancia);
			$snt->bindParam(":codmar",$prod->producto_codigo_marca);
			$snt->bindParam(":codcat",$prod->producto_codigo_categoria);
			$snt->execute();
			$cn = null;
		}catch(PDOException $ex){
			die($ex->getMessage());
		}
	}
	public function EditarProducto(M_Producto $prod){
		try{
			$cn = $this->Conectar();
			$sql="call sp_EditarProducto(:codprod, :prod, :stk, :cst, :gnc, :codmar, :codcat)";
			$snt=$cn->prepare($sql);
			$snt->bindParam(":codprod",$prod->codigo_producto);
			$snt->bindParam(":prod",$prod->producto);
			$snt->bindParam(":stk",$prod->stok_disponible);
			$snt->bindParam(":cst",$prod->costo);
			$snt->bindParam(":gnc",$prod->ganancia);
			$snt->bindParam(":codmar",$prod->producto_codigo_marca);
			$snt->bindParam(":codcat",$prod->producto_codigo_categoria);
			$snt->execute();
			$cn = null;
		}catch(PDOException $ex){
			die($ex->getMessage());
		}
	}
	public function BorrarProducto($codprod){
		try{
			$cn = $this->Conectar();
			$sql="call sp_BorrarProducto(:codprod)";
			$snt=$cn->prepare($sql);
			$snt->bindParam(":codprod",$codprod);
			$snt->execute();
			$cn = null;
		}catch(PDOException $ex){
			die($ex->getMessage());
		}
	}
}
