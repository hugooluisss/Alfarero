<?php /* Smarty version Smarty-3.1.11, created on 2017-10-13 08:51:33
         compiled from "templates/plantillas/modulos/productos/listaImagenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189765306559dd645d48d9f0-27944909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf73a314c77338342794efa5ad6188ac12941df1' => 
    array (
      0 => 'templates/plantillas/modulos/productos/listaImagenes.tpl',
      1 => 1507902390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189765306559dd645d48d9f0-27944909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59dd645d4f60a4_45731729',
  'variables' => 
  array (
    'imagenes' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd645d4f60a4_45731729')) {function content_59dd645d4f60a4_45731729($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imagenes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
	<div class="col-xs-12 col-sm-6">
		<img src="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" ruta="<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" style="width: 100%; cursor: pointer" title="Click/Tap para eliminar"/>
	</div>
<?php }
if (!$_smarty_tpl->tpl_vars["row"]->_loop) {
?>
	<div class="col-xs-12">
		No hay imágenes asociadas al producto
	</div>
<?php } ?><?php }} ?>