<?php /* Smarty version Smarty-3.1.11, created on 2017-11-19 22:20:04
         compiled from "templates/plantillas/modulos/tarjetas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19103079095a125469de8b05-46139433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd582a3cbf5bceac9e1364f5940080525f99d8833' => 
    array (
      0 => 'templates/plantillas/modulos/tarjetas/lista.tpl',
      1 => 1511151528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19103079095a125469de8b05-46139433',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a12546a021354_76801809',
  'variables' => 
  array (
    'archivos' => 0,
    'directorio' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a12546a021354_76801809')) {function content_5a12546a021354_76801809($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<div class="row">
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['archivos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 text-center">
				<img src="<?php echo $_smarty_tpl->tpl_vars['directorio']->value;?>
<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="img-responsive" style="cursor: pointer" title="Click para eliminar" action="eliminar">
			</div>
		<?php } ?>
	</div>
</div><?php }} ?>