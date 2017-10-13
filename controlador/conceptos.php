<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaConceptos':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from concepto where idProducto = ".$_POST['producto']." and visible = true";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cconceptos':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TConcepto();
				
				$obj->setId($_POST['id']);
				$obj->setPrecio($_POST['precio']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setProducto($_POST['producto']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TConcepto($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>