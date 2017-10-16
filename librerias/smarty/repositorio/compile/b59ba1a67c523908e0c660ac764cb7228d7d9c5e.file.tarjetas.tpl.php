<?php /* Smarty version Smarty-3.1.11, created on 2017-10-16 12:12:34
         compiled from "templates/plantillas/layout/tarjetas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186517482459d301893976b2-14581153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b59ba1a67c523908e0c660ac764cb7228d7d9c5e' => 
    array (
      0 => 'templates/plantillas/layout/tarjetas.tpl',
      1 => 1508172941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186517482459d301893976b2-14581153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d301894bb671_44145253',
  'variables' => 
  array (
    'PAGE' => 0,
    'totalProductosCarrito' => 0,
    'script' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d301894bb671_44145253')) {function content_59d301894bb671_44145253($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<base href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['url'];?>
index.php" target="_top">
	
		<!--Description-->
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['objModulo']["descripcion"];?>
">
	
		<!--Title-->
		<title><?php echo $_smarty_tpl->tpl_vars['PAGE']->value['objModulo']['titulo'];?>
</title>
	
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/css/bootstrap.min.css">
	    
	    <!-- Style CSS -->
	    <?php if ($_smarty_tpl->tpl_vars['PAGE']->value['debug']){?>
			<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/css/style.less"/>
		<?php }else{ ?>
			<link href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/css/style.css" rel="stylesheet" type="text/css">
		<?php }?>
		
		<!-- Style Animate CSS -->
		<link href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/css/animate.css" rel="stylesheet" type="text/css">
	
		<!-- Style CSS -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
dist/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
				<a class="navbar-brand" href="/beta">
					<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/logo.png" alt="Logo Alfarero">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="navbar-toggler-icon"></i>
				</button>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-icon" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" 	aria-haspopup="true" aria-expanded="false">
								Nuestro Trabajo
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Historia</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Acerca de Nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Involucrate</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Dona</a>
						</li>
					</ul>
					<div class="cart my-2 my-lg-0" id="btnCarrito">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i> carrito <a href="#" class="totalCarrito">(<?php echo $_smarty_tpl->tpl_vars['totalProductosCarrito']->value;?>
)</a>
					</div>
				</div>
			</nav>
			
			<div id="panelCarrito">
			</div>
		</header>
		
		<?php if ($_smarty_tpl->tpl_vars['PAGE']->value['vista']!=''){?>
			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['PAGE']->value['vista'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
		
		<!--<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/js/jquery-3.2.1.slim.min.js"></script>-->
		<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/jQuery/jQuery-2.1.4.min.js"></script>
	    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/js/popper.min.js"></script>
	    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/js/bootstrap.min.js"></script>
	    <script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/js/viewportchecker.js"></script>
	    
	    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/validate/validate.es.js"></script>
	    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/validate/validate.js"></script>
	    
	    <?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGE']->value['scriptsJS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
?>
			<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
?m=<?php echo rand();?>
"></script>
		<?php } ?>
		
	   	<script src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
plugins/less.min.js" type="text/javascript"></script>
	</body>
</html><?php }} ?>