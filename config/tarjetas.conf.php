<?php
global $conf;

$conf['tarjetas'] = array(
	'controlador' => 'tarjetas.php',
	'vista' => 'tarjetas/panel.tpl',
	'descripcion' => 'Administración de tarjetas',
	'seguridad' => true,
	'js' => array('tarjeta.class.js'),
	'jsTemplate' => array('tarjetas.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaTarjetas'] = array(
	'controlador' => 'tarjetas.php',
	'vista' => 'tarjetas/lista.tpl',
	'descripcion' => 'Lista de tarjetas',
	'seguridad' => true,
	'perfiles' => array(1),
	'capa' => LAYOUT_AJAX);
	
$conf['ctarjetas'] = array(
	'controlador' => 'tarjetas.php',
	'descripcion' => 'Controlador de tarjetas',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);
?>