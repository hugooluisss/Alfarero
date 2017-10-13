<?php /* Smarty version Smarty-3.1.11, created on 2017-10-13 08:51:08
         compiled from "templates/plantillas/modulos/categorias/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156836060459d1a2ec5912f1-28350167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79797e9e286733655dafbaa48b25fcbfc94b82c4' => 
    array (
      0 => 'templates/plantillas/modulos/categorias/panel.tpl',
      1 => 1507902390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156836060459d1a2ec5912f1-28350167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d1a2ec5c11a4_98999111',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d1a2ec5c11a4_98999111')) {function content_59d1a2ec5c11a4_98999111($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Administración de categorías</h1>
	</div>
</div>

<ul id="panelTabs" class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#listas">Lista</a></li>
  <li><a data-toggle="tab" href="#add">Agregar / Modificar</a></li>
</ul>

<div class="tab-content">
	<div id="listas" class="tab-pane fade in active">
		<div id="dvLista">
			
		</div>
	</div>
	
	<div id="add" class="tab-pane fade">
		<form role="form" id="frmAdd" class="form-horizontal" onsubmit="javascript: return false;">
			<div class="box">
				<div class="box-body">
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2">Nombre</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtNombre" name="txtNombre">
						</div>
					</div>
					<div class="form-group">
						<label for="txtVista" class="col-sm-2">Vista</label>
						<div class="col-sm-10">
							<textarea id="txtVista" name="txtVista" class="form-control" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtReferencia" class="col-sm-2">Referencia</label>
						<div class="col-sm-6">
							<input class="form-control" id="txtReferencia" name="txtReferencia">
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="reset" id="btnReset" class="btn btn-default">Cancelar</button>
					<button type="submit" class="btn btn-info pull-right">Guardar</button>
					<input type="hidden" id="id"/>
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>