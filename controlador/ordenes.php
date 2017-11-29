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
	case 'listaOrdenes':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select a.*, b.color, b.nombre as estado from orden a join estado b using(idEstado)";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
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
				$obj = new TOrden();
				$smarty->assign("json", array("band" => $obj->delMovimiento($_POST['concepto']), "totalProductos" => $obj->getTotalProductos()));
			break;
			case 'setCliente':
				$obj = new TOrden;
				$obj->setCliente($_POST['nombre']);
				$obj->setTelefono($_POST['telefono']);
				$obj->setCorreo($_POST['correo']);
				
				$smarty->assign("json", array("band" => $obj->guardar()));
			break;
			case 'imprimir':
				#se genera el documento pdf
				global $userSesion;
				require_once(getcwd()."/repositorio/pdf/orden.php");
				$orden = $_GET['id'];
				$db = TBase::conectaDB();
				
				$pdf = new ROrden();
				$pdf->generar($orden);
				
				$documento = $pdf->output();
				header('Location: '.$documento);
			break;
		}
	break;
}
?>