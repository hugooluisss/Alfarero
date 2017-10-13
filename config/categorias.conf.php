<?php
global $conf;

$conf['categorias'] = array(
	'controlador' => 'categorias.php',
	'vista' => 'categorias/panel.tpl',
	'descripcion' => 'Administración de categorias',
	'seguridad' => true,
	'js' => array('categoria.class.js'),
	'jsTemplate' => array('categorias.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaCategorias'] = array(
	'controlador' => 'categorias.php',
	'vista' => 'categorias/lista.tpl',
	'descripcion' => 'Lista de categorias',
	'seguridad' => true,
	'perfiles' => array(1),
	'capa' => LAYOUT_AJAX);
	
$conf['ccategorias'] = array(
	'controlador' => 'categorias.php',
	'descripcion' => 'Controlador de categorias',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>