<?php
global $objModulo;
$orden = new TOrden;
$smarty->assign("totalProductosCarrito", $orden->getTotalProductos());

switch($objModulo->getId()){
	case 'home':
		$db = TBase::conectaDB();
		$sql = "select * from categoria where visible = true";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$sql = "select * from producto a where visible = true and idCategoria = ".$row['idCategoria'];
			$rs2 = $db->query($sql) or errorMySQL($db, $sql);
			$row['productos'] = array();
			
			while($rp = $rs2->fetch_assoc()){
				$archivos = array();
				foreach(scandir("repositorio/productos/producto".$rp['idProducto']."/") as $archivo)
					if (!in_array($archivo, array(".", "..", ".DS_Store")))
						array_push($archivos, "repositorio/productos/producto".$rp['idProducto']."/".$archivo);
						
				$rp['imagen'] = $archivos;
				
				#por cada producto se buscan sus conceptos
				$sql = "select * from concepto a where visible = true and idProducto = ".$rp['idProducto'];
				$rs3 = $db->query($sql) or errorMySQL($db, $sql);
				$rp['conceptos'] = array();
				
				while($rc = $rs3->fetch_assoc())
					array_push($rp['conceptos'], $rc);
				
				array_push($row['productos'], $rp);
			}
			
			array_push($datos, $row);
		}
		
		$smarty->assign("categorias", $datos);
	break;
	case 'carrito':
		$obj = new TOrden;
		
		$datos = array();
		if($obj->getId() <> ''){
			$db = TBase::conectaDB();
			$sql = "select * from movimiento a join concepto b using(idConcepto) where idOrden = ".$obj->getId();
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			
			while($row = $rs->fetch_assoc()){
				$row['json'] = json_encode($row);
				
				array_push($datos, $row);
			}
		}
		$smarty->assign("carrito", $datos);
		$smarty->assign("orden", $obj);
		
		#Los datos para generar el hash
		global $ini;
		$hora = time();
		$hash = $obj->getId()."|".$obj->getMontoTotal()."|".$hora."|".$ini['banco']['key'];
		$smarty->assign("hash", md5($hash));
		$smarty->assign("hora", $hora);
		$smarty->assign("key_id", $ini['banco']['key_id']);
	break;
}