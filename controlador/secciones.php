<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaSecciones':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from seccion";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'csecciones':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TSeccion();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setCodigo($_POST['codigo']);
				$obj->setEstado($_POST['estado']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TSeccion($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>