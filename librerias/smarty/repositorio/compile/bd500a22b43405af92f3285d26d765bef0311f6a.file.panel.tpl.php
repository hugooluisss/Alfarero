<?php /* Smarty version Smarty-3.1.11, created on 2017-11-19 22:04:13
         compiled from "templates/plantillas/modulos/tarjetas/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20871755325a12543d8fbe77-31611929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd500a22b43405af92f3285d26d765bef0311f6a' => 
    array (
      0 => 'templates/plantillas/modulos/tarjetas/panel.tpl',
      1 => 1511150598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20871755325a12543d8fbe77-31611929',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5a12543d96a454_29424350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a12543d96a454_29424350')) {function content_5a12543d96a454_29424350($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Tarjetas de regalo</h1>
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
		<form role="form" id="frmImagen" action="?mod=ctarjetas&action=add" class="form-horizontal" onsubmit="javascript: return false;" enctype="multipart/form-data">
			<div class="box">
				<div class="box-body">
					<input type="file" name="upl" />
				</div>
			</div>
		</form>
	</div>
</div><?php }} ?>