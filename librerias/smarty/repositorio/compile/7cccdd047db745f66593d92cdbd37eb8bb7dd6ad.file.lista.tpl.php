<?php /* Smarty version Smarty-3.1.11, created on 2017-10-13 09:17:19
         compiled from "templates/plantillas/modulos/productos/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148065435559d4226937ec23-50060277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cccdd047db745f66593d92cdbd37eb8bb7dd6ad' => 
    array (
      0 => 'templates/plantillas/modulos/productos/lista.tpl',
      1 => 1507904237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148065435559d4226937ec23-50060277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d422693eebe0_89768688',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d422693eebe0_89768688')) {function content_59d422693eebe0_89768688($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Categoría</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['categoria'];?>
</td>
						<td style="text-align: right">
							<button type="button" class="btn btn-primary btn-xs" action="conceptos" title="Conceptos del producto" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winListaConceptos"><i class="fa fa-calculator"></i></button>
							<button type="button" class="btn btn-primary btn-xs" action="upload" title="Subir imágenes" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winImagenes"><i class="fa fa-upload"></i></button>
							<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
							<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idProducto'];?>
"><i class="fa fa-times"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>