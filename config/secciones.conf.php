<?php
global $conf;

$conf['secciones'] = array(
	'controlador' => 'secciones.php',
	'vista' => 'secciones/panel.tpl',
	'descripcion' => 'Administración de secciones',
	'seguridad' => true,
	'js' => array('seccion.class.js'),
	'jsTemplate' => array('secciones.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaSecciones'] = array(
	'controlador' => 'secciones.php',
	'vista' => 'secciones/lista.tpl',
	'descripcion' => 'Lista de secciones',
	'seguridad' => true,
	'perfiles' => array(1),
	'capa' => LAYOUT_AJAX);
	
$conf['csecciones'] = array(
	'controlador' => 'secciones.php',
	'descripcion' => 'Controlador de secciones',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>