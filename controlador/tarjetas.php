<?php
global $objModulo;
$directorio = "repositorio/tarjetas/encabezado/";
switch($objModulo->getId()){
	case 'listaTarjetas':
		$archivos = array();
		foreach(scandir($directorio) as $archivo){
			if (!in_array($archivo, array(".", "..")))
				array_push($archivos, $archivo);
		}
		$smarty->assign("archivos", $archivos);
		$smarty->assign("directorio", $directorio);
	break;
	case 'ctarjetas':
		switch($objModulo->getAction()){
			case 'add':
				$result = false;
				
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
					$carpeta = $directorio;
					if (!file_exists($carpeta))
						mkdir($carpeta, 0755, true);
					
					$archivo = date("Ymd_His").rand().".".end(explode(".", $_FILES['upl']['name']));
					if(move_uploaded_file($_FILES['upl']['tmp_name'], $carpeta.$archivo)){
						chmod($carpeta.$archivo, 0775);
						$result = true;
					}
				}
				
				$smarty->assign("json", array("band" => $result));
			break;
			case 'del':
				$smarty->assign("json", array("band" => unlink($_POST['imagen'])));
			break;
			case 'enviarCorreo':
				$mail = new TMail();
				global $ini;
				$datos = array();
				$datos["origen.correo"] = $_POST['correoOrigen'];
				$datos["origen.nombre"] = $_POST['nombreOrigen'];
				$datos["destino.correo"] = $_POST['correoDestino'];
				$datos["destino.nombre"] = $_POST['nombreDestino'];
				$datos["sitio.url"] = $ini["sistema"]["url"];
				
				$mail->setTema("Una tarjeta de regalo en tu honor");
				$mail->addDestino($_POST['correoDestino'], utf8_decode($_POST['nombreDestino']));
				$mail->setBodyHTML(utf8_decode($mail->construyeMail(utf8_encode(file_get_contents("repositorio/mail/tarjetaRegalo.html")), $datos)));
				
				$baseimagen = imagecreatetruecolor(850, 1100);
				#$black = imagecolorallocate($baseimagen, 255, 255, 255);
				$encabezado = imagecreatefromjpeg($_POST['encabezado']);
				$rotar = imagerotate($encabezado, 180, 0);
				$pie = imagecreatefromjpeg($_POST['pie']);
				
				if ($_POST['tipo'] == 'imprimir'){
					imagecopy($baseimagen, $rotar, 0, 0, 0, 0, 850, 550);
				}else
					imagecopy($baseimagen, $encabezado, 0, 0, 0, 0, 850, 550);
					
				imagecopy($baseimagen, $pie, 0, 550, 0, 0, 850, 550);

				$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
				rename($file, $file.'.jpg');
				$file .= '.jpg';
				
				//$mail->adjuntos = array();
				//array_push($mail->adjuntos, array("nombre" => "tarjeta.jpg", "ruta" => $file));
				$mail->adjuntar($file);
				$mail->adjuntar("repositorio/tarjetas/manual.png");
				imagejpeg($baseimagen, $file);
				
				imagedestroy($encabezado);
				imagedestroy($pie);
				
				$smarty->assign("json", array("band" => $mail->send()));
			break;
		}
	break;
}
?>