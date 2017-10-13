<?php
global $conf;

$conf['productos'] = array(
	'controlador' => 'productos.php',
	'vista' => 'productos/panel.tpl',
	'descripcion' => 'Administración de productos',
	'seguridad' => true,
	'js' => array('producto.class.js'),
	'jsTemplate' => array('productos.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaProductos'] = array(
	'controlador' => 'productos.php',
	'vista' => 'productos/lista.tpl',
	'descripcion' => 'Lista de productos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cproductos'] = array(
	'controlador' => 'productos.php',
	'descripcion' => 'Controlador de productos',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
	
$conf['listaImagenes'] = array(
	'controlador' => 'productos.php',
	'vista' => 'productos/listaImagenes.tpl',
	'descripcion' => 'Lista de imagenes asociadas con un producto',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
?>