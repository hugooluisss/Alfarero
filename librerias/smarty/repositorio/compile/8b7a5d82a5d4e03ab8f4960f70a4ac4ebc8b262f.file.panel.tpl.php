<?php /* Smarty version Smarty-3.1.11, created on 2017-11-28 19:36:20
         compiled from "templates/plantillas/modulos/secciones/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4354659515a1e07f5e7bcc2-05116276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b7a5d82a5d4e03ab8f4960f70a4ac4ebc8b262f' => 
    array (
      0 => 'templates/plantillas/modulos/secciones/panel.tpl',
      1 => 1511919379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4354659515a1e07f5e7bcc2-05116276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a1e07f5eee6f2_22328620',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1e07f5eee6f2_22328620')) {function content_5a1e07f5eee6f2_22328620($_smarty_tpl) {?><div class="row">
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
						<label for="txtCodigo" class="col-sm-2">Código HTML</label>
						<div class="col-sm-10">
							<textarea id="txtCodigo" name="txtCodigo" class="form-control" rows="10"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="selEstado" class="col-sm-2">Estado</label>
						<div class="col-sm-6">
							<select id="selEstado" name="selEstado" class="form-control">
								<option value="1">Publicado</option>
								<option value="0">No publicado</option>
							</select>
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