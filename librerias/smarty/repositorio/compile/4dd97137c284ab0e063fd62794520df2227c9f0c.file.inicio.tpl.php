<?php /* Smarty version Smarty-3.1.11, created on 2017-10-13 08:50:57
         compiled from "templates/plantillas/modulos/inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59689216459d30193be6cd0-03784052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dd97137c284ab0e063fd62794520df2227c9f0c' => 
    array (
      0 => 'templates/plantillas/modulos/inicio.tpl',
      1 => 1507902390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59689216459d30193be6cd0-03784052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d30193c433f5_48014581',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30193c433f5_48014581')) {function content_59d30193c433f5_48014581($_smarty_tpl) {?><div class="box">
	<div class="box-header">
		<h3>Bienvenido </h3>
	</div>
	<div class="box-body">
		<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['usuario']->getNombre();?>

	</div>
</div><?php }} ?>