<?php
global $objModulo;

switch($objModulo->getId()){
	case 'home':
		$db = TBase::conectaDB();
		$sql = "select * from categoria";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$sql = "select * from producto a where visible = 1 and idCategoria = ".$row['idCategoria'];
			$rs2 = $db->query($sql) or errorMySQL($db, $sql);
			$row['productos'] = array();
			
			while($rp = $rs2->fetch_assoc()){
				$archivos = array();
				foreach(scandir("repositorio/productos/producto".$rp['idProducto']."/") as $archivo)
					if (!in_array($archivo, array(".", "..", ".DS_Store")))
						array_push($archivos, "repositorio/productos/producto".$rp['idProducto']."/".$archivo);
						
				$rp['imagen'] = $archivos;
				
				#por cada producto se buscan sus conceptos
				$sql = "select * from concepto a where visible = 1 and idProducto = ".$rp['idProducto'];
				$rs3 = $db->query($sql) or errorMySQL($db, $sql);
				$rp['conceptos'] = array();
				
				while($rc = $rs3->fetch_assoc())
					array_push($rp['conceptos'], $rc);
				
				array_push($row['productos'], $rp);
			}
			
			array_push($datos, $row);
		}
		
		$smarty->assign("categorias", $datos);
		
		$orden = new TOrden;
		$smarty->assign("totalProductosCarrito", $orden->getTotalProductos());
	break;
}