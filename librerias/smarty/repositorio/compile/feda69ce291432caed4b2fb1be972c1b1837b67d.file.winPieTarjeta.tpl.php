<?php /* Smarty version Smarty-3.1.11, created on 2017-11-19 22:49:34
         compiled from "templates/plantillas/modulos/productos/winPieTarjeta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13863431005a1259e7c53271-27788152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feda69ce291432caed4b2fb1be972c1b1837b67d' => 
    array (
      0 => 'templates/plantillas/modulos/productos/winPieTarjeta.tpl',
      1 => 1511153353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13863431005a1259e7c53271-27788152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a1259e7c568d0_87294118',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1259e7c568d0_87294118')) {function content_5a1259e7c568d0_87294118($_smarty_tpl) {?><div id="winPieTarjeta" class="modal fade" role="dialog" producto="">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Pie para la tarjeta de regalo</h4>
			</div>
			<div class="modal-body">
				<form id="frmTarjeta" role="form" action="?mod=cproductos&action=uploadPieTarjeta" class="form-horizontal" onsubmit="javascript: return false;" enctype="multipart/form-data">
					<input type="file" name="upl2" />
				</form>
			</div>
		</div>
	</div>
</div><?php }} ?>