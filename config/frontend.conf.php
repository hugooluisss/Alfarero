<?php
global $conf;

$conf['carrito'] = array(
	'controlador' => 'front-end.php',
	'vista' => 'front-end/carrito.tpl',
	'descripcion' => 'Vista del carrito',
	'js' => array('orden.class.js', 'producto.class.js'),
	'jsTemplate' => array('home.js', 'cobroTarjeta.js'),
	'capa' => LAYOUT_FRONT);
?>