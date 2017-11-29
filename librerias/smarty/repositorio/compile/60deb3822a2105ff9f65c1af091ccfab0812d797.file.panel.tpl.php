<?php /* Smarty version Smarty-3.1.11, created on 2017-11-19 22:53:03
         compiled from "templates/plantillas/modulos/productos/conceptos/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147191265959e0ca8c3db6c2-58193220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60deb3822a2105ff9f65c1af091ccfab0812d797' => 
    array (
      0 => 'templates/plantillas/modulos/productos/conceptos/panel.tpl',
      1 => 1511153580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147191265959e0ca8c3db6c2-58193220',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59e0ca8c3dd3b1_98105476',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e0ca8c3dd3b1_98105476')) {function content_59e0ca8c3dd3b1_98105476($_smarty_tpl) {?><form role="form" id="frmConceptos" class="form-horizontal" onsubmit="javascript: return false;">
	<div id="winConceptos" class="modal fade" role="dialog" producto="">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Agregar/Modificar concepto</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2">Descripción</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtDescripcion" name="txtDescripcion">
						</div>
					</div>
					<div class="form-group">
						<label for="selCategoria" class="col-sm-2">Precio</label>
						<div class="col-sm-3">
							<input class="form-control text-right" id="txtPrecio" name="txtPrecio" value="0">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" id="id"/>
					<input type="hidden" id="producto"/>
					<button type="reset" id="btnResetConcepto" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
				</div>
			</div>
		</div>
	</div>
</form>


<div id="winListaConceptos" class="modal fade" role="dialog" producto="">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Lista de conceptos</h4>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" id="btnAddNewConcepto">Agregar producto</button>
			</div>
		</div>
	</div>
</div><?php }} ?>