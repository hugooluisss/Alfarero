<?php
global $objModulo;
switch($objModulo->getId()){
	case 'usuarios':
		$db = TBase::conectaDB();
		$sql = "select * from tipousuario";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$datos[$row['idTipo']] = $row['nombre'];
		}
		
		$smarty->assign("tipos", $datos);
	break;
	case 'listaUsuarios':
		$db = TBase::conectaDB();
		global $sesion;
		$usuario = new TUsuario($sesion['usuario']);
		$sql = "select a.*, b.nombre as tipo from usuario a join tipousuario b using(idTipo) where a.visible = true and idTipo = 1";
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['pass'] = '';
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'cusuarios':
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TUsuario();
				
				$rs = $db->query("select idUsuario from usuario where email = '".$_POST['clave']."'");
				$obj = new TUsuario();
				
				$obj->setId($_POST['id']);
				$obj->setTipo($_POST['tipo']);
				$obj->setNombre($_POST['nombre']);
				$obj->setCorreo($_POST['correo']);
				
				if ($_POST['pass'] <> '')
					$obj->setPass($_POST['pass']);
					
				$band = $obj->guardar();
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TUsuario($_POST['usuario']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validarEmail':
				$db = TBase::conectaDB();
				if ($_POST['id'] == '')
					$rs = $db->query("select idUsuario from usuario where upper(correo) = upper('".$_POST['txtCorreo']."')");
				else
					$rs = $db->query("select idUsuario from usuario where upper(correo) = upper('".$_POST['txtCorreo']."') and not idUsuario = ".$_POST['id']);
				echo $rs->num_rows == 0?"true":"false";
			break;
			case 'recuperarPass':
				$db = TBase::conectaDB();
				global $ini;
				$sql = "select idUsuario, pass, correo from usuario where upper(correo) = upper('".$_POST['correo']."') and visible = true";
				$rs = $db->query($sql) or errorMySQL($db, $sql);
				
				if ($rs->num_rows > 0){
					$row = $rs->fetch_assoc();
					$cliente = new TUsuario($row['idUsuario']);
					
					$datos = array();
					$datos['cliente.nombre'] = $cliente->getNombre().' '.$cliente->getApp()." ".$cliente->getApm();
					$datos['cliente.pass'] = $row['pass'];
					$datos['cliente.email'] = $row['correo'];
					$datos['sitio.url'] = $ini["sistema"]["url"];
					
					$email = new TMail2();
					$email->setTema("Recuperación de contraseña");
					$email->addDestino($cliente->getCorreo(), utf8_decode($cliente->getNombre().' '.$cliente->getApp()." ".$cliente->getApm()));
					$email->setBodyHTML(utf8_decode($email->construyeMail(file_get_contents("repositorio/mail/recuperarPass.html"), $datos)));
					
					echo json_encode(array("band" => $email->send()));
				}else
					echo json_encode(array("band" => false));
			break;
		}
	break;
}
?>