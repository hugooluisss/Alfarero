<?php
global $conf;

$conf['contenidoCarrito'] = array(
	'controlador' => 'ordenes.php',
	'vista' => 'front-end/contenidoCarrito.tpl',
	'descripcion' => 'Productos agregados al carrito',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);

$conf['cordenes'] = array(
	'controlador' => 'ordenes.php',
	'descripcion' => 'Controlador de ordenes',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);
?>