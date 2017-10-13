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
				array_push($row['productos'], $rp);
			}
			
			array_push($datos, $row);
		}
		
		$smarty->assign("categorias", $datos);
	break;
}