<?php /* Smarty version Smarty-3.1.11, created on 2017-10-13 13:25:21
         compiled from "templates/plantillas/modulos/front-end/winProducto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167109126459d30189537867-13018175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed4b160f5da5d0c70ff95fa1c02a447ef15d9783' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/winProducto.tpl',
      1 => 1507913626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167109126459d30189537867-13018175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d30189550b30_37642067',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30189550b30_37642067')) {function content_59d30189550b30_37642067($_smarty_tpl) {?><div class="modal fade" id="winProducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" datos="">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="wrap-modal-title row">
						<div class="col-md-3"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/elements/rombo-modal-left.png"></div>
						<div class="col-md-6"><h2>Dar Este Regalo</h2></div>
						<div class="col-md-3"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/elements/rombo-modal-right.png"></div>
					</div>
					<div class="wrap-modal-description row">
						<div class="col-md-5"><img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/products/relleno-sanitario/almuerzo-nutritivo.jpg"></div>
						<div class="col-md-7">
							<h3 campo="nombre">Tutoria para Primaria</h3>
							<div campo="descripcion" class="description-product"></div>
							<div class="conceptos">
								<div class="wrap-modal-price row">
									<div class="quantity-product col-md-3">
										<input type="text" placeholder="Cantidad">
									</div>
									<div class="price-product">
										1 Niño por una Semana Q100
									</div>
								</div>
								<div class="wrap-modal-price row">
									<div class="quantity-product col-md-3">
										<input type="text" placeholder="Cantidad">
									</div>
									<div class="price-product">
										1 Niño por un Mes Q400
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
				<button type="button" class="add-to-cart">Agregar a Carrito</button>
			</div>
		</div>
	</div>
</div><?php }} ?>