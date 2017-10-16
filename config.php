<?php
define('SISTEMA', 'Casa del Alfareri');
define('VERSION', 'v 1.0');
define('ALIAS', '');
define('AUTOR', 'Hugo Luis Santiago Altamirano');
define('EMAIL', 'hugooluisss@gmail.com');
define('EMAILSOPORTE', 'hugooluisss@gmail.com');
define('STATUS', 'En desarrollo');

define('LAYOUT_DEFECTO', 'layout/default.tpl');
define('LAYOUT_AJAX', 'layout/update.tpl');
define('LAYOUT_JSON', 'layout/json.tpl');
define('LAYOUT_TOPNAV', 'layout/topnav.tpl');
define('LAYOUT_FRONT', 'layout/tarjetas.tpl');
define('LAYOUT_LOGIN', 'layout/login.tpl');

#Login y su controlador
$conf['home'] = array(
	'vista' => 'front-end/home.tpl',
	'controlador' => 'front-end.php',
	'descripcion' => '',
	'js' => array('orden.class.js'),
	'jsTemplate' => array('home.js'),
	'seguridad' => false,
	'descripcion' => "Casa del alfarero, página principal",
	"titulo" => "Página principal",
	'capa' => LAYOUT_FRONT);
	
$conf['administrator'] = array(
	'vista' => 'front-end/home.tpl',
	#'controlador' => 'panelPrincipal.php',
	'descripcion' => 'Inicio de sesión',
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('login.js'),
	'seguridad' => false,
	'descripcion' => "Inicio de sesión",
	"titulo" => "Inicio de sesión",
	'capa' => LAYOUT_LOGIN);

$conf['logout'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Salir del sistema',
	'seguridad' => false,
	'js' => array(),
	'capa' => LAYOUT_DEFECTO);
	
$conf['clogin'] = array(
	'controlador' => 'login.php',
	'descripcion' => 'Inicio de sesion',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);
	
$conf['bienvenida'] = array(
	'controlador' => 'usuarios.php',
	'vista' => 'usuarios/bienvenida.tpl',
	'descripcion' => 'Bienvenida al sistema',
	'seguridad' => true,
	'capa' => LAYOUT_DEFECTO);
	
$conf['cusuarios'] = array(
	'controlador' => 'usuarios.php',
	'descripcion' => 'Controlador de usuarios',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
	
	
$conf['panelPrincipal'] = array(
	'vista' => 'inicio.tpl',
	#'controlador' => 'panelPrincipal.php',
	'descripcion' => '',
	#'js' => array('socio.class.js', 'usuario.class.js'),
	#'jsTemplate' => array('sociosHome.js', 'negociosHome.js'),
	'seguridad' => false,
	'capa' => LAYOUT_DEFECTO);

includeDir("config/");
?>