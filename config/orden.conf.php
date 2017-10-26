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
	
$conf['ordenes'] = array(
	'controlador' => 'ordenes.php',
	'vista' => 'ordenes/panel.tpl',
	'descripcion' => 'Administración de ordenes',
	'seguridad' => true,
	'js' => array('orden.class.js'),
	'jsTemplate' => array('ordenes.js'),
	'capa' => LAYOUT_DEFECTO);
	
$conf['listaOrdenes'] = array(
	'controlador' => 'ordenes.php',
	'vista' => 'ordenes/lista.tpl',
	'descripcion' => 'Lista de ordenes',
	'seguridad' => true,
	'perfiles' => array(1),
	'capa' => LAYOUT_AJAX);
?>