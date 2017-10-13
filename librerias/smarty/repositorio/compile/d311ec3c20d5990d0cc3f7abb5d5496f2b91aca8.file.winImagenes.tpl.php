<?php /* Smarty version Smarty-3.1.11, created on 2017-10-10 19:38:11
         compiled from "templates/plantillas/modulos/productos/winImagenes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85516974659d5b660164c18-24039401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd311ec3c20d5990d0cc3f7abb5d5496f2b91aca8' => 
    array (
      0 => 'templates/plantillas/modulos/productos/winImagenes.tpl',
      1 => 1507682290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85516974659d5b660164c18-24039401',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d5b66016a7b9_91280601',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5b66016a7b9_91280601')) {function content_59d5b66016a7b9_91280601($_smarty_tpl) {?><div id="winImagenes" class="modal fade" role="dialog" producto="">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Imágenes</h4>
			</div>
			<div class="modal-body">
				<form role="form" id="frmImagen" action="?mod=cproductos&action=uploadImagen" class="form-horizontal" onsubmit="javascript: return false;" enctype="multipart/form-data">
					<input type="file" name="upl" />
				</form>
				<hr />
				<div class="row lstImagenes">
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>