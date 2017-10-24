<?php
global $objModulo;
switch($objModulo->getId()){
	case 'contenidoCarrito':
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
		
		$smarty->assign("conceptos", $datos);
	break;
	case 'cordenes':
		switch($objModulo->getAction()){
			case 'addMovimientos':
				$obj = new TOrden;
				
				foreach($_POST['datos'] as $concepto)
					$obj->addMovimiento(new TConcepto($concepto['idConcepto']), $concepto['cantidad']);
					
				$smarty->assign("json", array("band" => true, "totalProductos" => $obj->getTotalProductos()));
			break;
			/*
			case 'addMovimiento':
				$obj = new TOrden;
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setVista($_POST['vista']);
				$obj->setReferencia($_POST['referencia']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band, "totalProductos" => $obj->getTotalProductos()));
			break;
			*/
			case 'delMovimiento':
				$obj = new TOrden($_POST['id']);
				#$smarty->assign("json", array("band" => $obj->eliminar(), "totalProductos" => $obj->getTotalProductos()));
			break;
			case 'setCliente':
				$obj = new TOrden;
				$obj->setCliente($_POST['nombre']);
				$obj->setTelefono($_POST['telefono']);
				$obj->setCorreo($_POST['correo']);
				
				$smarty->assign("json", array("band" => $obj->guardar()));
			break;
		}
	break;
}
?>