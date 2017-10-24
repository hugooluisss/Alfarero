<?php /* Smarty version Smarty-3.1.11, created on 2017-10-24 08:56:23
         compiled from "templates/plantillas/modulos/front-end/contenidoCarrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183270589159e4e8bc041306-39328707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f4bc2bbc9ef7a5a1cd3765197188df89d861dc' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/contenidoCarrito.tpl',
      1 => 1508853258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183270589159e4e8bc041306-39328707',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59e4e8bc070ed5_36112261',
  'variables' => 
  array (
    'conceptos' => 0,
    'total' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e4e8bc070ed5_36112261')) {function content_59e4e8bc070ed5_36112261($_smarty_tpl) {?><h6>Quiero donar:</h6>
<div class="panel">
	<table style="width: 100%;">
		<thead>
			<tr>
				<td colspan="2">Cátalogo de regalos</td>
			</tr>
			<tr>
				<td>Cant</td>
				<td>Descripción</td>
				<td>Total</td>
			</tr>
		</thead>
		<tbody>
			<?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable(0, true, 0);?>

			<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['conceptos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+($_smarty_tpl->tpl_vars['row']->value['cantidad']*$_smarty_tpl->tpl_vars['row']->value['precio']), true, 0);?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cantidad'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['descripcion'];?>
</td>
					<td class="text-right">Q.<?php echo $_smarty_tpl->tpl_vars['row']->value['precio'];?>
</td>
				</tr>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="2" class="text-right">Total</td>
				<td class="text-right">Q.<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
			</tr>
		</tfoot>
	</table>
	<br />
	<div class="text-right">
		<a href="carrito" class="btn btn-yellow btn-xs">Donar</a>
	</div>
</div><?php }} ?>