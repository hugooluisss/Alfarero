<?php /* Smarty version Smarty-3.1.11, created on 2017-10-13 08:50:21
         compiled from "templates/plantillas/modulos/front-end/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32703487759d301894c5027-32353993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93447ac533b99f938dd8edea4d5ed76ef9d099d' => 
    array (
      0 => 'templates/plantillas/modulos/front-end/home.tpl',
      1 => 1507902390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32703487759d301894c5027-32353993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_59d30189511df1_18526490',
  'variables' => 
  array (
    'PAGE' => 0,
    'categorias' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30189511df1_18526490')) {function content_59d30189511df1_18526490($_smarty_tpl) {?><div id="main">
	<section class="hero-home">
		<div class="container">
			<div class="hero-home-img">
				<span><h1 class="postZoomInDown">Catálogo de Regalos</h1></span>
			</div>
		</div>
	</section>

	<section class="intro-home">
		<div class="container">
			<div class="row">
				<div class="postBounceInLeft col-md-8">
					<h1>Querida Familia de Casa del Alfarero</h1>
					<p>Cada año continuamos sirviendo en fé, realizando acciones para mostrar el amor de Dios a las comunidades más necesitadas del país, no hacemos este trabajo solos, sino con el poder de Cristo y el admirable compromiso de ustedes, nuestros aliados.</p>
					<p>Queremos compartir con ustedes el Catálogo de Regalos 2017-2018, el cual representa una oportunidad de honrar a familiares y amigos a través de bendecir a las personas en condiciones de pobreza.
					</p>
					<h2>Dar un regalo en honor a un ser querido en su cumpleaños, aniversario o cualquier ocasión especial es muy fácil:</h2>
				</div>
				<div class="col-md-4">
					<img class="postBounceInRight" src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['ruta'];?>
tarjetas/images/home/img-intro.jpg" />
				</div>
			</div>
		</div>
	</section>
</div>

<?php  $_smarty_tpl->tpl_vars["categoria"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["categoria"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["categoria"]->key => $_smarty_tpl->tpl_vars["categoria"]->value){
$_smarty_tpl->tpl_vars["categoria"]->_loop = true;
?>
	<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/front-end/categoria.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php } ?>



<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/front-end/winProducto.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>