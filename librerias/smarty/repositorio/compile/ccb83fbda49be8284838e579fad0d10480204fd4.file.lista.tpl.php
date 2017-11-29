<?php /* Smarty version Smarty-3.1.11, created on 2017-11-19 21:30:03
         compiled from "templates/plantillas/modulos/ordenes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151858062159f2244e8e7dc3-75116194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb83fbda49be8284838e579fad0d10480204fd4' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/lista.tpl',
      1 => 1510715571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151858062159f2244e8e7dc3-75116194',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59f2244e93a538_47532511',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f2244e93a538_47532511')) {function content_59f2244e93a538_47532511($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>#</th>
			<th>Fecha</th>
			<th>Estado</th>
			<th>Cliente</th>
			<th>Teléfono</th>
			<th>Correo</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr title="<?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
">
				<td style="border-left: 3px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['fecha'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['cliente'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
</td>
				<td style="text-align: right">
					<a href="?mod=cordenes&action=imprimir&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['idOrden'];?>
" target="_blank" class="btn btn-primary btn-xs" action="detalle" title="Ver detalle"><i class="fa fa-file-pdf-o"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>