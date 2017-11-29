<?php
global $conf;

$conf['carrito'] = array(
	'controlador' => 'front-end.php',
	'vista' => 'front-end/carrito.tpl',
	'descripcion' => 'Vista del carrito',
	'js' => array('orden.class.js', 'producto.class.js'),
	'jsTemplate' => array('home.js', 'cobroTarjeta.js', 'vistaCarrito.js'),
	'capa' => LAYOUT_FRONT);
	
$conf['validarPago'] = array(
	'controlador' => 'front-end.php',
	'vista' => 'front-end/respuestaPago.tpl',
	'descripcion' => 'Respuesta del sistema de pago',
	#'js' => array('orden.class.js', 'producto.class.js'),
	'jsTemplate' => array('generarTarjetas.js'),
	'capa' => LAYOUT_FRONT);
?>