<?php
global $conf;

$conf['productos'] = array(
	'controlador' => 'productos.php',
	'vista' => 'productos/panel.tpl',
	'descripcion' => 'Administración de productos',
	'seguridad' => true,
	'js' => array('producto.class.js', 'concepto.class.js'),
	'jsTemplate' => array('productos.js', 'conceptos.js'),
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
	
$conf['listaConceptos'] = array(
	'controlador' => 'conceptos.php',
	'vista' => 'productos/conceptos/lista.tpl',
	'descripcion' => 'Lista de conceptos',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cconceptos'] = array(
	'controlador' => 'conceptos.php',
	'descripcion' => 'Controlador de conceptos de los productos',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>