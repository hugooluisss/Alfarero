<?php /* Smarty version Smarty-3.1.11, created on 2017-10-16 08:47:23
         compiled from "templates/plantillas/modulos/front-end/categoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194605719759d30189515c75-52983943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05a51e0682231e6f607b5dca7af1af73a9417cbc' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/categoria.tpl',
      1 => 1508161372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194605719759d30189515c75-52983943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d30189533371_21948743',
  'variables' => 
  array (
    'PAGE' => 0,
    'categoria' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30189533371_21948743')) {function content_59d30189533371_21948743($_smarty_tpl) {?><section class="category-wrap">   
	<div class="category-intro postBounceInUp">
		<div class="container">
			<div class="row">
				<div class="col-md-3 d-none d-md-block d-xl-block">
					<img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/elements/rombo-category-left.png">
				</div>
				<div class="col-md-6">
					<h2><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</h2>
					<div class="category-intro-txt">
						<?php echo $_smarty_tpl->tpl_vars['categoria']->value['vista'];?>

					</div>
					<h3><?php echo $_smarty_tpl->tpl_vars['categoria']->value['referencia'];?>
</h3>
				</div>
				<div class="col-md-3 d-none d-md-block d-xl-block">
					<img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/elements/rombo-category-right.png">
				</div>
			</div>
		</div>
	</div>
	<div class="category-products">
		<div class="container">
			<div class="row">
				<?php  $_smarty_tpl->tpl_vars["producto"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["producto"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoria']->value['productos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["producto"]->key => $_smarty_tpl->tpl_vars["producto"]->value){
$_smarty_tpl->tpl_vars["producto"]->_loop = true;
?>
					<div class="wrap-product col-md-3 postBounceInUp">
						<div class="img-product">
							<?php if (count($_smarty_tpl->tpl_vars['producto']->value)==''){?>
								<img src="templates/tarjetas/images/products/relleno-sanitario/almuerzo-nutritivo.jpg" />
							<?php }else{ ?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'][0];?>
">
							<?php }?>
						</div>
						<div class="title-product">
							<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>

						</div>
						<div class="price-product"><?php if (count($_smarty_tpl->tpl_vars['producto']->value['conceptos'])){?>Q <?php echo $_smarty_tpl->tpl_vars['producto']->value['conceptos'][0]['precio'];?>
<?php }?></div>
						<div class="button-product">
							<button type="button" class="add-to-cart" data-toggle="modal" data-target="#winProducto" datos='<?php echo json_encode($_smarty_tpl->tpl_vars['producto']->value);?>
'>
								Agregar a Carrito
							</button>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section><?php }} ?>