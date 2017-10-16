<?php
global $objModulo;
switch($objModulo->getId()){
	case 'cordenes':
		switch($objModulo->getAction()){
			case 'addMovimientos':
				$obj = new TOrden;
				
				foreach($_POST['datos'] as $concepto)
					$obj->addMovimiento(new TConcepto($concepto['idConcepto']), $concepto['cantidad']);
					
				$smarty->assign("json", array("band" => true, "totalProductos" => $obj->getTotalProductos()));
			break;
			case 'addMovimiento':
				$obj = new TOrden;
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setVista($_POST['vista']);
				$obj->setReferencia($_POST['referencia']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band, "totalProductos" => $obj->getTotalProductos()));
			break;
			case 'delMovimiento':
				$obj = new TCategoria($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar(), "totalProductos" => $obj->getTotalProductos()));
			break;
		}
	break;
}
?>