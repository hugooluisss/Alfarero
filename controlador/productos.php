<?php
global $objModulo;
switch($objModulo->getId()){
	case 'productos';
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from categoria";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			array_push($datos, $row);
		}
		
		$smarty->assign("categorias", $datos);
	break;
	case 'listaProductos':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select a.*, b.nombre as categoria from producto a join categoria b using(idCategoria) where a.visible = true";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listaImagenes':
		$carpeta = "repositorio/productos/producto".$_POST['producto']."/";
		$gestor_dir = opendir($carpeta);
		$imagenes = array();
		while (false !== ($nombre_fichero = readdir($gestor_dir))){
			if (!in_array($nombre_fichero, array(".", "..", ".DS_store")))
				array_push($imagenes, $carpeta.$nombre_fichero);
		}
		
		$smarty->assign("imagenes", $imagenes);
	break;
	case 'cproductos':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TProducto();
				
				$obj->setId($_POST['id']);
				$obj->setNombre($_POST['nombre']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->categoria->setId($_POST['categoria']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TProducto($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'uploadImagen':
				$result = false;
				
				if ($_GET['id'] <> ''){
					if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
						$carpeta = "repositorio/productos/producto".$_GET['id']."/";
						if (!file_exists($carpeta))
							mkdir($carpeta, 0755);
							
						$archivo = date("Ymd_His").rand().".".end(explode(".", $_FILES['upl']['name']));
						if(move_uploaded_file($_FILES['upl']['tmp_name'], $carpeta.$archivo)){
							chmod($carpeta.$archivo, 0775);
							$result = true;
						}
					}
				}
				
				$smarty->assign("json", array("band" => $result));
			break;
			case 'eliminarImagen':
				$smarty->assign("json", array("band" => unlink($_POST['imagen'])));
			break;
		}
	break;
}
?>